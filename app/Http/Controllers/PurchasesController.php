<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PurchaseRequest;
use App\Models\GoodsType;
use Illuminate\Support\Facades\Auth;
use App\Handlers\ImageUploadHandler;

class PurchasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$topgoodstypes = GoodsType::orderBy('purchase_count','desc')->limit(4)->get();
        foreach($topgoodstypes as $key=>$value)
        {
            $topgoodstypes[$key]->purchases = GoodsType::find($value->id)->purchases()->limit(10)->get();
            $topgoodstypes[$key]->isnewlist = GoodsType::find($value->id)->purchases()->orderBy('created_at', 'desc')->limit(10)->get();
        }
		return view('purchases.index', compact('topgoodstypes'));
	}

    public function show(Purchase $purchase)
    {
        $purchase->increment('view_count', 1);

        $purchase->user->user_authentication->legal_representative = substr_replace($purchase->user->user_authentication->legal_representative, '*', 3, 3);
        $purchase->user->mobile = substr_replace($purchase->user->mobile, '****', 3, 4);

        return view('purchases.show', compact('purchase'));
    }

	public function create(Purchase $purchase)
	{
        $types = GoodsType::all();
		return view('purchases.create_and_edit', compact('purchase', 'types'));
	}

	public function store(PurchaseRequest $request, ImageUploadHandler $uploader, Purchase $purchase)
	{
		$data = $request->all();
        $purchase->fill($data);
        $purchase->user_id = Auth::id();

        if(isset($purchase->is_indefinitely) && $purchase->is_indefinitely == 'on')
        {
            $purchase->is_indefinitely = 1;
        }
        else
        {
            $purchase->is_indefinitely = 0;
        }

        if ($request->thumb) {
            $result = $uploader->save($request->thumb, 'thumbs', $purchase->user_id);
            if ($result) {
                $purchase->thumb = $result['path'];
            }
        }

		$purchase->save();
        if(isset($data['typeids']))
        {
            $purchase->goods_types()->sync($data['typeids']);
        }

		return redirect()->route('purchases.show', $purchase->id)->with('success', '????????????');
	}

	public function edit(Purchase $purchase)
	{
        $this->authorize('update', $purchase);
        $typeids = [];
        foreach($purchase->goods_types as $val)
        {
            $typeids[] = $val->id;
        }
        $purchase->typeids = $typeids;

        $types = GoodsType::all();

        foreach($types as $key => $item)
        {
            $types[$key]->checked = '';
            if(in_array($item->id, $typeids))
            {
                $types[$key]->checked = ' checked';
            }
        }
		return view('purchases.create_and_edit', compact('purchase', 'types'));
	}

	public function update(PurchaseRequest $request, ImageUploadHandler $uploader, Purchase $purchase)
	{
		$this->authorize('update', $purchase);
		$data = $request->all();
        $purchase->fill($data);

        if(isset($purchase->is_indefinitely) && $purchase->is_indefinitely == 'on')
        {
            $purchase->is_indefinitely = 1;
        }
        else
        {
            $purchase->is_indefinitely = 0;
        }

        if ($request->thumb) {
            $result = $uploader->save($request->thumb, 'thumbs', $purchase->user_id);
            if ($result) {
                $purchase->thumb = $result['path'];
            }
        }
		$purchase->update();
        $purchase->goods_types()->sync($data['typeids']);

		return redirect()->route('purchases.show', $purchase->id)->with('message', '???????????????');
	}

	public function destroy(Purchase $purchase)
	{
		$this->authorize('destroy', $purchase);
		$purchase->delete();
        $purchase->goods_types()->detach();

		return redirect()->back()->with('success', '???????????????');
	}

    // ????????????
    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        // ??????????????????????????????????????????
        $data = [
            'success'   => false,
            'msg'       => '???????????????',
            'file_path' => ''
        ];
        // ?????????????????????????????????????????? $file
        if ($file = $request->upload_file) {
            // ?????????????????????
            $result = $uploader->save($file, 'purchases', Auth::id(), 1024);
            // ????????????????????????
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg']       = "???????????????";
                $data['success']   = true;
            }
        }
        return $data;
    }
}
