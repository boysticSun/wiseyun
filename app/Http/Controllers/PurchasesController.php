<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PurchaseRequest;
use App\Models\GoodsType;

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
            $topgoodstypes[$key]->purchases = Purchase::where('goods_type_id', $value->id)->limit(10)->get();
            $topgoodstypes[$key]->isnewlist = Purchase::where('goods_type_id', $value->id)->orderBy('created_at', 'desc')->limit(10)->get();
        }
		return view('purchases.index', compact('topgoodstypes'));
	}

    public function show(Purchase $purchase)
    {
        $purchase->increment('view_count', 1);
        return view('purchases.show', compact('purchase'));
    }

	public function create(Purchase $purchase)
	{
		return view('purchases.create_and_edit', compact('purchase'));
	}

	public function store(PurchaseRequest $request)
	{
		$purchase = Purchase::create($request->all());
		return redirect()->route('purchases.show', $purchase->id)->with('message', 'Created successfully.');
	}

	public function edit(Purchase $purchase)
	{
        $this->authorize('update', $purchase);
		return view('purchases.create_and_edit', compact('purchase'));
	}

	public function update(PurchaseRequest $request, Purchase $purchase)
	{
		$this->authorize('update', $purchase);
		$purchase->update($request->all());

		return redirect()->route('purchases.show', $purchase->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Purchase $purchase)
	{
		$this->authorize('destroy', $purchase);
		$purchase->delete();

		return redirect()->route('purchases.index')->with('message', 'Deleted successfully.');
	}
}
