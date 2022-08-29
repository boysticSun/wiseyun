@if (count($news))
  <ul class="list-unstyled">
    @foreach ($news as $list)
      <li class="d-flex">
        <div class="">
          <a href="{{ route('users.show', [$list->user_id]) }}">
            <img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;" src="{{ $list->user->avatar }}" title="{{ $list->user->name }}">
          </a>
        </div>

        <div class="flex-grow-1 ms-2">

          <div class="mt-0 mb-1">
            <a href="{{ route('news.show', [$list->id]) }}" title="{{ $list->title }}">
              {{ $list->title }}
            </a>
            <a class="float-end" href="{{ route('news.show', [$list->id]) }}">
              <span class="badge bg-secondary rounded-pill"> {{ $list->reply_count }} </span>
            </a>
          </div>

          <small class="media-body meta text-secondary">

            <a class="text-secondary" href="#" title="{{ $list->category->name }}">
              <i class="far fa-folder"></i>
              {{ $list->category->name }}
            </a>

            {{-- <span> • </span>
            <a class="text-secondary" href="{{ route('users.show', [$list->user_id]) }}" title="{{ $list->user->name }}">
              <i class="far fa-user"></i>
              {{ $list->user->name }}
            </a> --}}
            <span> • </span>
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
