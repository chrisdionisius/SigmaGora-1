<hr>
<p>Diposting {{$thread-> elapsed}} hari yang lalu</p>
<h3>{{$thread->title}}</h3>
<h4>{{$users->find($thread->user_id)->name}}</h4>
<p>Category : {{$categories->find($thread->category_id)->category_name}}</p>
<p>{{substr($thread-> content,0,300) }} </p>
<img src="{{$thread->media}}" alt="{{$thread->title}}">