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
                <div class="tt-topic-alert tt-alert-default" role="alert">
                    <a href="#" target="_blank">4 new posts</a> are added recently, click here to load them.
                </div>
                @foreach($threads as $thread)
                <div class="tt-item"> 
                    <div class="tt-col-avatar">
                        <svg class="tt-icon">
                            <use xlink:href="#icon-ava-n"></use>
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
                                    <li class="show-mobile"><a href="#"><span class="tt-color05 tt-badge">{{$categories->find($thread->category_id)->category_name}}</span></a></li>
                                    <li><a href="#"><span class="tt-badge">videohive</span></a></li>
                                </ul>
                            </div>
                            <div class="col-1 ml-auto show-mobile">
                                <div class="tt-value">{{$thread-> elapsed}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-col-category"><span class="tt-color05 tt-badge">{{$categories->find($thread->category_id)->category_name}}</span></div>
                    <div class="tt-col-value hide-mobile">{{$like->where('likeable_id',$thread->id)->count()}}</div>
                    <div class="tt-col-value tt-color-select hide-mobile">68</div>
                    <div class="tt-col-value hide-mobile">8.3k</div>
                    <div class="tt-col-value hide-mobile">{{$thread-> elapsed}}</div>
                </div>
                @endforeach
                <ul class="pagination justify-content-center mb-4">
                        {{$threads->links()}}
                </ul>
                <div class="tt-row-btn">
                    <button type="button" class="btn-icon js-topiclist-showmore">
                        <svg class="tt-icon">
                            <use xlink:href="#icon-load_lore_icon"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection

