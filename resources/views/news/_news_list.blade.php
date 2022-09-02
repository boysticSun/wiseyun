@if (count($news))
  <ul class="list-unstyled">
    @foreach ($news as $list)
      <li class="d-flex">
        <div class="">
          <a href="{{ route('news.show', [$list->id]) }}">
            <img class="media-object img-thumbnail mr-3" style="width: 200px; height: 135px;" src="@if($list->thumb){{ $list->thumb }}@else /images/news-demo.jpg @endif" title="{{ $list->title }}">
          </a>
        </div>

        <div class="flex-grow-1 ms-3">

          <div class="mt-0 mb-1 news-title-box">
            <a class="news-title" href="{{ route('news.show', [$list->id]) }}" title="{{ $list->title }}">
              {{ $list->title }}
            </a>
            {{-- <a class="float-end reply-count" href="{{ route('news.show', [$list->id]) }}">
              <span class="badge bg-secondary rounded-pill"> {{ $list->reply_count }} </span>
            </a> --}}
          </div>

          <div class="news-excerpt">
            {{ $list->excerpt }}
          </div>

          <small class="media-body meta text-secondary">

            <a class="text-secondary new-category" href="@if (empty($list->news_category->pid)) {{ route('news.index', $list->news_category_id) }} @else {{ route('categories.show', $list->news_category_id) }} @endif" title="{{ $list->news_category->name }}">
              <i class="far fa-folder"></i>
              {{ $list->news_category->name }}
            </a>

            {{-- <span> • </span>
            <a class="text-secondary" href="{{ route('users.show', [$list->user_id]) }}" title="{{ $list->user->name }}">
              <i class="far fa-user"></i>
              {{ $list->user->name }}
            </a> --}}
            <span>&nbsp; • &nbsp;</span>
            <i class="far fa-clock"></i>
            <span class="timeago" title="最后活跃于：{{ $list->updated_at }}">{{ $list->updated_at->diffForHumans() }}</span>
          </small>

        </div>
      </li>

      @if ( ! $loop->last)
        <hr>
      @endif

    @endforeach
  </ul>

@else
  <div class="empty-block">暂无数据 ~_~ </div>
@endif
