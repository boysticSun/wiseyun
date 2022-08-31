@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Supply
          <a class="btn btn-success float-xs-right" href="{{ route('supplies.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($supplies->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Title</th> <th>Body</th> <th>User_id</th> <th>Type_id</th> <th>Reply_count</th> <th>View_count</th> <th>Last_reply_user_id</th> <th>Order</th> <th>Excerpt</th> <th>Slug</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($supplies as $supply)
              <tr>
                <td class="text-xs-center"><strong>{{$supply->id}}</strong></td>

                <td>{{$supply->title}}</td> <td>{{$supply->body}}</td> <td>{{$supply->user_id}}</td> <td>{{$supply->type_id}}</td> <td>{{$supply->reply_count}}</td> <td>{{$supply->view_count}}</td> <td>{{$supply->last_reply_user_id}}</td> <td>{{$supply->order}}</td> <td>{{$supply->excerpt}}</td> <td>{{$supply->slug}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('supplies.show', $supply->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('supplies.edit', $supply->id) }}">
                    E
                  </a>

                  <form action="{{ route('supplies.destroy', $supply->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $supplies->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
