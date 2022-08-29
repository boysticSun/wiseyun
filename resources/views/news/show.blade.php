@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>News / Show #{{ $news->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('news.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('news.edit', $news->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Title</label>
<p>
	{{ $news->title }}
</p> <label>Body</label>
<p>
	{{ $news->body }}
</p> <label>User_id</label>
<p>
	{{ $news->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $news->category_id }}
</p> <label>Reply_count</label>
<p>
	{{ $news->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $news->view_count }}
</p> <label>Last_reply_user_id</label>
<p>
	{{ $news->last_reply_user_id }}
</p> <label>Order</label>
<p>
	{{ $news->order }}
</p> <label>Excerpt</label>
<p>
	{{ $news->excerpt }}
</p> <label>Slug</label>
<p>
	{{ $news->slug }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
