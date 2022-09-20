@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          SupplyOrderAction
          <a class="btn btn-success float-xs-right" href="{{ route('supply_order_actions.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($supply_order_actions->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Supply_order_id</th> <th>Order_sn</th> <th>User_id</th> <th>Type</th> <th>Body</th> <th>Order_status</th> <th>Pay_status</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($supply_order_actions as $supply_order_action)
              <tr>
                <td class="text-xs-center"><strong>{{$supply_order_action->id}}</strong></td>

                <td>{{$supply_order_action->supply_order_id}}</td> <td>{{$supply_order_action->order_sn}}</td> <td>{{$supply_order_action->user_id}}</td> <td>{{$supply_order_action->type}}</td> <td>{{$supply_order_action->body}}</td> <td>{{$supply_order_action->order_status}}</td> <td>{{$supply_order_action->pay_status}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('supply_order_actions.show', $supply_order_action->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('supply_order_actions.edit', $supply_order_action->id) }}">
                    E
                  </a>

                  <form action="{{ route('supply_order_actions.destroy', $supply_order_action->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $supply_order_actions->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
