<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;
use App\Models\SupplyOrder;
use App\Models\PurchaseOrder;
use App\Models\Purchase;
use App\Models\Supply;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, ImageUploadHandler $uploader, User $user)
    {
        $this->authorize('update', $user);
        $data = $request->all();

        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id,416);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }

    public function supplies(User $user)
    {
        $this->authorize('list', $user);
        return view('users.supplies', compact('user'));
    }

    public function purchases(User $user)
    {
        $this->authorize('list', $user);
        return view('users.purchases', compact('user'));
    }

    public function supplyorders(User $user)
    {
        $this->authorize('list', $user);

        $supply = Supply::where('user_id', $user->id)->pluck('id');
        $orders = SupplyOrder::whereIn('supply_id', $supply)->paginate();

        return view('users.supplyorders', compact('user', 'orders'));
    }

    public function purchaseorders(User $user)
    {
        $this->authorize('list', $user);

        $purchase = Purchase::where('user_id', $user->id)->pluck('id');
        $orders = PurchaseOrder::whereIn('purchase_id', $purchase)->paginate();

        return view('users.purchaseorders', compact('user', 'orders'));
    }

    public function orders(User $user)
    {
        $this->authorize('list', $user);

        $purchase_orders = PurchaseOrder::with('purchase')->where('user_id', $user->id)->paginate();
        $supply_orders = SupplyOrder::with('supply')->where('user_id', $user->id)->paginate();

        return view('users.orders', compact('user', 'purchase_orders', 'supply_orders'));
    }
}
