<?php

namespace App\Http\Controllers;

use App\Models\SupplyOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyOrderRequest;

class SupplyOrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$supply_orders = SupplyOrder::paginate();
		return view('supply_orders.index', compact('supply_orders'));
	}

    public function show(SupplyOrder $supply_order)
    {
        return view('supply_orders.show', compact('supply_order'));
    }

	public function create(SupplyOrder $supply_order)
	{
		return view('supply_orders.create_and_edit', compact('supply_order'));
	}

	public function store(SupplyOrderRequest $request)
	{
		$supply_order = SupplyOrder::create($request->all());
		return redirect()->route('supply_orders.show', $supply_order->id)->with('message', 'Created successfully.');
	}

	public function edit(SupplyOrder $supply_order)
	{
        $this->authorize('update', $supply_order);
		return view('supply_orders.create_and_edit', compact('supply_order'));
	}

	public function update(SupplyOrderRequest $request, SupplyOrder $supply_order)
	{
		$this->authorize('update', $supply_order);
		$supply_order->update($request->all());

		return redirect()->route('supply_orders.show', $supply_order->id)->with('message', 'Updated successfully.');
	}

	public function destroy(SupplyOrder $supply_order)
	{
		$this->authorize('destroy', $supply_order);
		$supply_order->delete();

		return redirect()->route('supply_orders.index')->with('message', 'Deleted successfully.');
	}
}