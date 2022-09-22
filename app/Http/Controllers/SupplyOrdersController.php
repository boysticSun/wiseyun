<?php

namespace App\Http\Controllers;

use App\Models\SupplyOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyOrderRequest;
use App\Models\Supply;
use Illuminate\Support\Facades\Auth;

class SupplyOrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		$supply_orders = SupplyOrder::paginate();
		return view('supply_orders.index', compact('supply_orders'));
	}

    public function show(SupplyOrder $supply_order)
    {
        $order_status = [
            0   =>  '已下单，待确认',
            1   =>  '已确认，待支付',
            2   =>  '已支付，待交付',
            3   =>  '已交付，已结单'
        ];
        $pay_status = [
            0   =>  '未支付',
            1   =>  '已支付'
        ];
        return view('supply_orders.show', compact('supply_order', 'order_status', 'pay_status'));
    }

	public function create(SupplyOrder $supply_order, Supply $supply)
	{
		return view('supply_orders.create_and_edit', compact('supply_order', 'supply'));
	}

	public function store(SupplyOrderRequest $request, SupplyOrder $supply_order)
	{
        $data = $request->all();
        $supply_order->fill($data);
        $supply_order->user_id = Auth::id();
        $supply_order->order_sn = create_order_sn();
		$supply_order->save();
		return redirect()->route('supply_orders.show', $supply_order->id)->with('message', '提交成功！');
	}

	public function edit(SupplyOrder $supply_order)
	{
        $this->authorize('update', $supply_order);
        $supply = $supply_order->supply;

		return view('supply_orders.create_and_edit', compact('supply_order', 'supply'));
	}

	public function update(SupplyOrderRequest $request, SupplyOrder $supply_order)
	{
		$this->authorize('update', $supply_order);
		$supply_order->update($request->all());

		return redirect()->back()->with('message', '修改成功！');
	}

	public function destroy(SupplyOrder $supply_order)
	{
		$this->authorize('destroy', $supply_order);
		$supply_order->delete();

		return redirect()->route('supply_orders.index')->with('message', '删除成功！');
	}

    public function pay(SupplyOrder $supply_order)
    {
        $this->authorize('update', $supply_order);

        return view('supply_orders.pay', compact('supply_order'));
    }
}
