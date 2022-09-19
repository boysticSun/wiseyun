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
        @if (Auth::user()->id == $user->id)
        <div class="float-end">
          <a href="{{ route('purchases.edit', $list->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
            <i class="far fa-edit"></i> 编辑
          </a>
          <form action="{{ route('purchases.destroy', $list->id) }}" method="post"
            style="display: inline-block;"
            onsubmit="return confirm('您确定要删除吗？');">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-outline-secondary btn-sm">
              <i class="far fa-trash-alt"></i> 删除
            </button>
          </form>
        </div>
        @endif
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
