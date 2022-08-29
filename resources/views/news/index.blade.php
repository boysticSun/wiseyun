@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          News
          <a class="btn btn-success float-xs-right" href="{{ route('news.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($news->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Title</th> <th>Body</th> <th>User_id</th> <th>Category_id</th> <th>Reply_count</th> <th>View_count</th> <th>Last_reply_user_id</th> <th>Order</th> <th>Excerpt</th> <th>Slug</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($news as $news)
              <tr>
                <td class="text-xs-center"><strong>{{$news->id}}</strong></td>

                <td>{{$news->title}}</td> <td>{{$news->body}}</td> <td>{{$news->user_id}}</td> <td>{{$news->category_id}}</td> <td>{{$news->reply_count}}</td> <td>{{$news->view_count}}</td> <td>{{$news->last_reply_user_id}}</td> <td>{{$news->order}}</td> <td>{{$news->excerpt}}</td> <td>{{$news->slug}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('news.show', $news->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('news.edit', $news->id) }}">
                    E
                  </a>

                  <form action="{{ route('news.destroy', $news->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $news->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
