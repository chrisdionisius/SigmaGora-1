@extends('layouts.master')
@section('judul','Show')
@section('content')

<main id="tt-pageContent">
    <div class="container">
        <div class="tt-single-topic-list">
            <div class="tt-item">
                <div class="tt-single-topic">
                    <div class="tt-item-header">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-ava-d"></use>
                                    </svg></i>
                            </div>
                            <div class="tt-avatar-title">
                                <a href="#">{{$thread->user->name}}</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-time"></use>
                                    </svg></i>{{$thread-> elapsed}}
                            </a>
                        </div>
                        <h3 class="tt-item-title">
                            <a href="#">{{$thread->title}}</a>
                        </h3>
                        <div class="tt-item-tag">
                            <ul class="tt-list-badge">
                                <li><a href="/threads/category/{{$thread->category->id}}"><span
                                            class="tt-color03 tt-badge">{{$thread->category->category_name}}</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tt-item-description">
                        <p>
                            @if($thread->media)
                            <img src="{{$thread->media}}" alt="{{$thread->title}}">
                            @endif
                        </p>
                        <p>
                            {!! $thread->content !!}
                        </p>
                    </div>
                    <div class="tt-item-info info-bottom">
                        @guest
                        <a href="/login">
                            <button href="/login" class="btn btn-primary">
                                <a href="/login" class="tt-icon-btn">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-like"></use>
                                        </svg>
                                    </i>
                                    <span class="tt-text">{{$thread->likes->count()}} </span>
                                </a>
                            </button>
                        </a>
                        @else
                        @if(!auth()->user()->hasLiked($thread))
                        <form action="/like" method="post">
                            @csrf
                            <input type="hidden" name="likeable" value="{{ get_class($thread) }}">
                            <input type="hidden" name="id" value="{{ $thread->id }}">
                            <button type="submit" class="btn btn-primary">
                                <a href="#" class="tt-icon-btn">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-like"></use>
                                        </svg>
                                    </i>
                                    <span class="tt-text">{{$thread->likes->count()}} </span>
                                </a>
                            </button>
                        </form>
                        @else
                        <form action="/like" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="likeable" value="{{ get_class($thread) }}">
                            <input type="hidden" name="id" value="{{ $thread->id }}">
                            <button type="submit" class="btn btn-primary biru">
                                <a class="biru">
                                    <i class="tt-icon biru">
                                        <svg>
                                            <use xlink:href="#icon-like"></use>
                                        </svg>
                                    </i>
                                    <span class="tt-text biru">{{$thread->likes->count()}}</span>
                                </a>
                            </button>
                        </form>
                        @endif

                        @endguest

                        <!-- <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-dislike"></use>
                                    </svg></i>
                                <span class="tt-text">39</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-favorite"></use>
                                    </svg></i>
                                <span class="tt-text">12</span>
                            </a> -->
                        <div class="col-separator"></div>
                        <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                            <i class="tt-icon"><svg>
                                    <use xlink:href="#icon-share"></use>
                                </svg></i>
                        </a>
                        <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                            <i class="tt-icon"><svg>
                                    <use xlink:href="#icon-flag"></use>
                                </svg></i>
                        </a>
                        <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                            <i class="tt-icon"><svg>
                                    <use xlink:href="#icon-reply"></use>
                                </svg></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tt-item">
                <div class="tt-info-box">
                    <h6 class="tt-title">Status Utas</h6>
                    <div class="tt-row-icon">
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-reply"></use>
                                    </svg></i>
                                <span class="tt-text">{{$thread->comments->count()}}</span>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-view"></use>
                                    </svg></i>
                                <span class="tt-text">{{views($thread)->count()}}</span>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-like"></use>
                                    </svg></i>
                                <span class="tt-text">{{$thread->likes->count()}}</span>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-user"></use>
                                    </svg></i>
                                <span class="tt-text">168</span>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-favorite"></use>
                                    </svg></i>
                                <span class="tt-text">951</span>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-share"></use>
                                    </svg></i>
                                <span class="tt-text">32</span>
                            </a>
                        </div>
                    </div>
                    <!-- <hr>
                    <h6 class="tt-title">Frequent Posters</h6>
                    <div class="tt-row-icon">
                        <div class="tt-item">
                            <a href="#" class=" tt-icon-avatar">
                                <svg>
                                    <use xlink:href="#icon-ava-d"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class=" tt-icon-avatar">
                                <svg>
                                    <use xlink:href="#icon-ava-t"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class=" tt-icon-avatar">
                                <svg>
                                    <use xlink:href="#icon-ava-k"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class=" tt-icon-avatar">
                                <svg>
                                    <use xlink:href="#icon-ava-n"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class=" tt-icon-avatar">
                                <svg>
                                    <use xlink:href="#icon-ava-a"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class=" tt-icon-avatar">
                                <svg>
                                    <use xlink:href="#icon-ava-c"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class=" tt-icon-avatar">
                                <svg>
                                    <use xlink:href="#icon-ava-h"></use>
                                </svg>
                            </a>
                        </div>
                    </div> -->
                    <hr>
                    <div class="row-object-inline form-default">
                        <h6 class="tt-title">Sort replies by:</h6>
                        <ul class="tt-list-badge tt-size-lg">
                            <li><a href="#"><span class="tt-badge">Recent</span></a></li>
                            <li><a href="#"><span class="tt-color02 tt-badge">Most Liked</span></a></li>
                            <li><a href="#"><span class="tt-badge">Longest</span></a></li>
                            <li><a href="#"><span class="tt-badge">Shortest</span></a></li>
                            <li><a href="#"><span class="tt-badge">Accepted Answers</span></a></li>
                        </ul>
                        <select class="tt-select form-control">
                            <option value="Recent">Recent</option>
                            <option value="Most Liked">Most Liked</option>
                            <option value="Longest">Longest</option>
                            <option value="Shortest">Shortest</option>
                            <option value="Accepted Answer">Accepted Answer</option>
                        </select>
                    </div>
                </div>
            </div>
            @foreach($thread->comments as $comment)
            <div class="tt-item">
                <div class="tt-single-topic">
                    <div class="tt-item-header pt-noborder">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-ava-t"></use>
                                    </svg></i>
                            </div>
                            <div class="tt-avatar-title">
                                <a href="#">{{$comment->user->name}} </a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-time"></use>
                                    </svg></i>{{$comment->elapsed}}
                            </a>
                        </div>
                    </div>
                    <div class="tt-item-description">
                        {!! $comment->content !!}
                    </div>
                    <div class="tt-item-info info-bottom">
                        <div class="tt-item-info info-bottom">
                            @guest
                            <a href="/login">
                                <button class="btn btn-primary">
                                    <a href="login" class="tt-icon-btn">
                                        <i class="tt-icon">
                                            <svg>
                                                <use xlink:href="#icon-like"></use>
                                            </svg>
                                        </i>
                                        <span class="tt-text">{{$comment->likes->count()}}</span>
                                    </a>
                                </button>
                            </a>
                            @else
                            @if(!auth()->user()->hasLiked($comment))
                            <form action="/like" method="post">
                                @csrf
                                <input type="hidden" name="likeable" value="{{ get_class($comment) }}">
                                <input type="hidden" name="id" value="{{ $comment->id }}">
                                <button type="submit" class="btn btn-primary">
                                    <a href="#" class="tt-icon-btn">
                                        <i class="tt-icon">
                                            <svg>
                                                <use xlink:href="#icon-like"></use>
                                            </svg>
                                        </i>
                                        <span class="tt-text">{{$comment->likes->count()}}</span>
                                    </a>
                                </button>
                            </form>
                            @else
                            <form action="/like" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="likeable" value="{{ get_class($comment) }}">
                                <input type="hidden" name="id" value="{{ $comment->id }}">
                                <button type="submit" class="btn btn-primary biru">
                                    <a href="#" class="biru">
                                        <i class="tt-icon biru">
                                            <svg>
                                                <use xlink:href="#icon-like"></use>
                                            </svg>
                                        </i>
                                        <span class="tt-text biru">{{$comment->likes->count()}}</span>
                                    </a>
                                </button>
                            </form>
                            @endif
                            @endguest
                            <!-- <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-dislike"></use>
                                    </svg></i>
                                <span class="tt-text">39</span>
                            </a>
                            <a href="#" class="tt-icon-btn">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-favorite"></use>
                                    </svg></i>
                                <span class="tt-text">12</span>
                            </a>
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-share"></use>
                                    </svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-flag"></use>
                                    </svg></i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon"><svg>
                                        <use xlink:href="#icon-reply"></use>
                                    </svg></i>
                            </a> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tt-wrapper-inner">
                <h4 class="tt-title-separator"><span>You’ve reached the end of replies</span></h4>
            </div>
            <div class="tt-wrapper-inner">
                <div class="pt-editor form-default">
                    <h6 class="pt-title">Post Your Reply</h6>
                    <form action="{{route('addComment',$thread->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea name="content" class="form-control ckeditor" rows="5"
                                placeholder="Lets get started"></textarea>
                        </div>
                        <div class="pt-row">
                            <div class="col-auto">
                                <!-- <div class="checkbox-group">
                                    <input type="checkbox" id="checkBox21" name="checkbox" checked="">
                                    <label for="checkBox21">
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        <span class="tt-text">Subscribe to this topic.</span>
                                    </label>
                                </div> -->
                            </div>

                            <div class="col-auto">
                                @guest
                                <a href="/login">
                                <button class="btn btn-secondary btn-width-lg">Reply</button>
                                </a>
                                @else
                                <button type="submit" class="btn btn-secondary btn-width-lg">Reply</button>
                                @endguest
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
</main>
@endsection
@section('js')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
</script>
@endsection