@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Supply / Show #{{ $supply->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('supplies.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('supplies.edit', $supply->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Title</label>
<p>
	{{ $supply->title }}
</p> <label>Body</label>
<p>
	{{ $supply->body }}
</p> <label>User_id</label>
<p>
	{{ $supply->user_id }}
</p> <label>Type_id</label>
<p>
	{{ $supply->type_id }}
</p> <label>Reply_count</label>
<p>
	{{ $supply->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $supply->view_count }}
</p> <label>Last_reply_user_id</label>
<p>
	{{ $supply->last_reply_user_id }}
</p> <label>Order</label>
<p>
	{{ $supply->order }}
</p> <label>Excerpt</label>
<p>
	{{ $supply->excerpt }}
</p> <label>Slug</label>
<p>
	{{ $supply->slug }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
