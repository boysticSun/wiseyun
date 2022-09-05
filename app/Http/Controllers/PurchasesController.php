<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PurchaseRequest;

class PurchasesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$purchases = Purchase::paginate();
		return view('purchases.index', compact('purchases'));
	}

    public function show(Purchase $purchase)
    {
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