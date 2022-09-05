@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Purchase / Show #{{ $purchase->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('purchases.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('purchases.edit', $purchase->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Title</label>
<p>
	{{ $purchase->title }}
</p> <label>Body</label>
<p>
	{{ $purchase->body }}
</p> <label>User_id</label>
<p>
	{{ $purchase->user_id }}
</p> <label>Goods_type_id</label>
<p>
	{{ $purchase->goods_type_id }}
</p> <label>Reply_count</label>
<p>
	{{ $purchase->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $purchase->view_count }}
</p> <label>Last_reply_user_id</label>
<p>
	{{ $purchase->last_reply_user_id }}
</p> <label>Order</label>
<p>
	{{ $purchase->order }}
</p> <label>Thumb</label>
<p>
	{{ $purchase->thumb }}
</p> <label>Validity</label>
<p>
	{{ $purchase->validity }}
</p> <label>Is_indefinitely</label>
<p>
	{{ $purchase->is_indefinitely }}
</p> <label>Excerpt</label>
<p>
	{{ $purchase->excerpt }}
</p> <label>Slug</label>
<p>
	{{ $purchase->slug }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
