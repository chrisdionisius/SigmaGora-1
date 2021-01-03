<hr>
<p>Diposting {{$thread-> elapsed}} hari yang lalu</p>
<h3>{{$thread->title}}</h3>
<h4>{{$users->find($thread->user_id)->name}}</h4>
<p>Category : {{$categories->find($thread->category_id)->category_name}}</p>
<p>{{substr($thread-> content,0,300) }} </p>
@if(!auth()->user()->hasLiked($thread))
    <form action="/like" method="post">
        @csrf
        <input type="hidden" name="likeable" value="{{ get_class($thread) }}">
        <input type="hidden" name="id" value="{{ $thread->id }}">
        <button type="submit" class="btn btn-primary">
            Like
        </button>
    </form>
@else
    <form action="/like" method="post">
        @method('DELETE')
        @csrf
        <input type="hidden" name="likeable" value="{{ get_class($thread) }}">
        <input type="hidden" name="id" value="{{ $thread->id }}">
        <button type="submit" class="btn btn-primary">
            Dislike
        </button>
    </form>
    <!-- <button class="btn btn-secondary" disabled>
        {{ $thread->likes()->count() }} likes
    </button> -->
@endif
<img src="{{$thread->media}}" alt="{{$thread->title}}">