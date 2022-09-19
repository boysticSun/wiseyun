<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyRequest;
use App\Models\GoodsType;
use Illuminate\Support\Facades\Auth;
use App\Handlers\ImageUploadHandler;

class SuppliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
        $topgoodstypes = GoodsType::orderBy('supply_count','desc')->limit(4)->get();
        foreach($topgoodstypes as $key=>$value)
        {
            $topgoodstypes[$key]->supplies = GoodsType::find($value->id)->supplies()->limit(10)->get();
        }
		return view('supplies.index', compact('topgoodstypes'));
	}

    public function show(Supply $supply)
    {
        $supply->increment('view_count', 1);

        $supply->user->user_authentication->legal_representative = substr_replace($supply->user->user_authentication->legal_representative, '*', 3, 3);
        $supply->user->mobile = substr_replace($supply->user->mobile, '****', 3, 4);

        return view('supplies.show', compact('supply'));
    }

	public function create(Supply $supply)
	{
        $types = GoodsType::all();

		return view('supplies.create_and_edit', compact('supply', 'types'));
	}

	public function store(SupplyRequest $request, ImageUploadHandler $uploader, Supply $supply)
	{
        $data = $request->all();
        $supply->fill($data);
        $supply->user_id = Auth::id();

        if(isset($supply->is_negotiable) && $supply->is_negotiable == 'on')
        {
            $supply->is_negotiable = 1;
        }
        else
        {
            $supply->is_negotiable = 0;
        }

        if(isset($supply->is_indefinitely) && $supply->is_indefinitely == 'on')
        {
            $supply->is_indefinitely = 1;
        }
        else
        {
            $supply->is_indefinitely = 0;
        }

        if ($request->thumb) {
            $result = $uploader->save($request->thumb, 'thumbs', $supply->user_id);
            if ($result) {
                $supply->thumb = $result['path'];
            }
        }

		$supply->save();
        $supply->goods_types()->sync($data['typeids']);
		return redirect()->route('supplies.show', $supply->id)->with('message', '添加成功！');
	}

	public function edit(Supply $supply)
	{
        $this->authorize('update', $supply);

        $typeids = [];
        foreach($supply->goods_types as $val)
        {
            $typeids[] = $val->id;
        }
        $supply->typeids = $typeids;

        $types = GoodsType::all();

        foreach($types as $key => $item)
        {
            $types[$key]->checked = '';
            if(in_array($item->id, $typeids))
            {
                $types[$key]->checked = ' checked';
            }
        }

		return view('supplies.create_and_edit', compact('supply', 'types'));
	}

	public function update(SupplyRequest $request, ImageUploadHandler $uploader, Supply $supply)
	{
		$this->authorize('update', $supply);
        $data = $request->all();
        $supply->fill($data);
        if(isset($supply->is_negotiable) && $supply->is_negotiable == 'on')
        {
            $supply->is_negotiable = 1;
        }
        else
        {
            $supply->is_negotiable = 0;
        }

        if(isset($supply->is_indefinitely) && $supply->is_indefinitely == 'on')
        {
            $supply->is_indefinitely = 1;
        }
        else
        {
            $supply->is_indefinitely = 0;
        }

        if ($request->thumb) {
            $result = $uploader->save($request->thumb, 'thumbs', $supply->user_id);
            if ($result) {
                $supply->thumb = $result['path'];
            }
        }
		$supply->update();
        $supply->goods_types()->sync($data['typeids']);
		return redirect()->route('supplies.show', $supply->id)->with('message', '修改成功！');
	}

	public function destroy(Supply $supply)
	{
		$this->authorize('destroy', $supply);
		$supply->delete();
        $supply->goods_types()->detach();

		return redirect()->back()->with('message', '删除成功！');
	}

    // 上传图片
    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        // 初始化返回数据，默认是失败的
        $data = [
            'success'   => false,
            'msg'       => '上传失败！',
            'file_path' => ''
        ];
        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->upload_file) {
            // 保存图片到本地
            $result = $uploader->save($file, 'supplies', Auth::id(), 1024);
            // 图片保存成功的话
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg']       = "上传成功！";
                $data['success']   = true;
            }
        }
        return $data;
    }
}
