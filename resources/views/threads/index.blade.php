@extends('layouts.master')
@section('judul','Index')
@section('content')
<main id="tt-pageContent" class="tt-offset-small">
    <div class="container">
        <div class="tt-topic-list">
            <div class="tt-list-header">
                <div class="tt-col-topic">Topik</div>
                <div class="tt-col-category">kategori</div>
                <div class="tt-col-value hide-mobile">Like</div>
                <div class="tt-col-value hide-mobile">Balasan</div>
                <div class="tt-col-value hide-mobile">Pengunjung</div>
                <div class="tt-col-value">Diposting</div>
            </div>
            <!-- <div class="tt-topic-alert tt-alert-default" role="alert">
                <a href="#" target="_blank">4 new posts</a> are added recently, click here to load them.
            </div> -->
            @forelse($threads as $thread)
            <div class="tt-item">
                <div class="tt-col-avatar">
                    <svg class="tt-icon">
                        <use xlink:href="#icon-ava-{{strtolower(substr($thread->title,0,1))}}"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title">
                        <a href="/threads/{{$thread-> id}}">
                            <h3>{{$thread->title}}</h3>
                        </a>
                    </h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-11">
                            <ul class="tt-list-badge">
                                <li class="show-mobile">
                                    <a href="/threads/category/{{$thread->category->id}}">
                                        <span class="tt-color05 tt-badge">{{$thread->category->category_name}}</span>
                                    </a>
                                </li>
                                @foreach($thread->tags as $tag)
                                <li><a href="/threads/tag/{{$tag->id}}"><span class="tt-badge">{{$tag->name}}</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-1 ml-auto show-mobile">
                            <div class="tt-value">{{$thread-> elapsed}}</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category">
                    <a href="/threads/category/{{$thread->category->id}}">
                        <span class="tt-color05 tt-badge">{{$thread->category->category_name}}</span>
                    </a>
                </div>
                <div class="tt-col-value hide-mobile">{{$thread->likes->count()}}</div>
                <div class="tt-col-value tt-color-select hide-mobile">{{$thread->comments->count()}}</div>
                <div class="tt-col-value hide-mobile">{{views($thread)->count()}}</div>
                <div class="tt-col-value hide-mobile">{{$thread-> elapsed}} <br>{{$thread->user->name}}</div>
            </div>
            @empty
            <div class="tt-list-header">
                            <div class="tt-col-topic-center"></div>
                        </div>
            @endforelse
            <div class="tt-row-btn">
                <ul class="pagination justify-content-center mb-4">
                    {{$threads->links()}}
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection