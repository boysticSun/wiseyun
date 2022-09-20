<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PurchaseOrderRequest;

class PurchaseOrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$purchase_orders = PurchaseOrder::paginate();
		return view('purchase_orders.index', compact('purchase_orders'));
	}

    public function show(PurchaseOrder $purchase_order)
    {
        return view('purchase_orders.show', compact('purchase_order'));
    }

	public function create(PurchaseOrder $purchase_order)
	{
		return view('purchase_orders.create_and_edit', compact('purchase_order'));
	}

	public function store(PurchaseOrderRequest $request)
	{
		$purchase_order = PurchaseOrder::create($request->all());
		return redirect()->route('purchase_orders.show', $purchase_order->id)->with('message', 'Created successfully.');
	}

	public function edit(PurchaseOrder $purchase_order)
	{
        $this->authorize('update', $purchase_order);
		return view('purchase_orders.create_and_edit', compact('purchase_order'));
	}

	public function update(PurchaseOrderRequest $request, PurchaseOrder $purchase_order)
	{
		$this->authorize('update', $purchase_order);
		$purchase_order->update($request->all());

		return redirect()->route('purchase_orders.show', $purchase_order->id)->with('message', 'Updated successfully.');
	}

	public function destroy(PurchaseOrder $purchase_order)
	{
		$this->authorize('destroy', $purchase_order);
		$purchase_order->delete();

		return redirect()->route('purchase_orders.index')->with('message', 'Deleted successfully.');
	}
}