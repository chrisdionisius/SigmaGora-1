@foreach($threads as $thread)
<hr>
<p>Diposting {{$thread-> elapsed}} hari yang lalu</p>
<a href="/threads/{{$thread-> id}}"><h3>{{$thread->title}}</h3></a>
<h4>{{$users->find($thread->user_id)->name}}</h4>
<p>Category : {{$categories->find($thread->category_id)->category_name}}</p>
<p>{{$thread-> content }} </p>
<p>{{$thread->id}}</p>
{{$like->where('likeable_id',$thread->id)->count()}}
<img src="{{$thread->media}}" alt="{{$thread->title}}">
@endforeach
<ul class="pagination justify-content-center mb-4">
    {{$threads->links()}}
</ul>