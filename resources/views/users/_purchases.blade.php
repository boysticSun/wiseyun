@if (count($purchases))

  <ul class="list-group mt-4 border-0">
    @foreach ($purchases as $list)
      <li class="list-group-item pl-2 pr-2 border-start-0 border-end-0 @if($loop->first) border-top-0 @endif">
        <a class="text-decoration-none text-dark" href="{{ route('purchases.show', $list->id) }}">
          {{ $list->title }}
        </a>
        <span class="meta float-right text-secondary">
          {{-- {{ $list->reply_count }} 回复
          <span> ⋅ </span> --}}
          {{ $list->created_at->diffForHumans() }}
        </span>
      </li>
    @endforeach
  </ul>

@else
  <div class="empty-block mt-4">暂无数据 ~_~ </div>
@endif

{{-- 分页 --}}
<div class="mt-4 pt-1">
  {!! $purchases->render() !!}
</div>
