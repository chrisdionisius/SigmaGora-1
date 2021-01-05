@extends('layouts.master')
@section('judul','Tags')
@section('content')
<main id="tt-pageContent">
    <div class="tt-custom-mobile-indent container">
        <div class="tt-categories-title">
            <div class="tt-title">Tags</div>
            <div>
                <a href="/tags/create" class="btn btn-secondary btn-width-lg">+Add New Tag</a>
            </div>
            <div class="tt-search">
                <form class="search-wrapper" action="/tags/search" method="get">
                    <div class="search-form">
                        <input type="text" class="tt-search__input" placeholder="Search Tags" name="search">
                        <button class="tt-search__btn" type="submit">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                        </button>
                        <button class="tt-search__close">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-cancel"></use>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="tt-categories-list">
            <div class="row">

                @foreach($tags as $tag)
                <div class="col-md-6 col-lg-4">
                    <div class="tt-item">
                        <div class="tt-item-header">
                            <ul class="tt-list-badge">
                                <li><a href="/threads/tag/{{$tag->id}}"><span class="tt-color01 tt-badge">{{$tag->name}}</span></a></li>
                            </ul>
                            <h6 class="tt-title"><a href="/threads/tag/{{$tag->id}}">Threads : {{$tag->threads()->count()}}</a></h6>
                        </div>
                        <div class="tt-item-layout">
                            <div class="innerwrapper">
                                Lets discuss about whats happening around the world {{$tag->name}}.
                            </div>
                            <!-- <div class="innerwrapper">
                                <h6 class="tt-title">Similar TAGS</h6>
                                <ul class="tt-list-badge">
                                    <li><a href="#"><span class="tt-badge">world politics</span></a></li>
                                    <li><a href="#"><span class="tt-badge">human rights</span></a></li>
                                    <li><a href="#"><span class="tt-badge">trump</span></a></li>
                                    <li><a href="#"><span class="tt-badge">climate change</span></a></li>
                                    <li><a href="#"><span class="tt-badge">foreign policy</span></a></li>
                                </ul>
                            </div> -->
                            <a href="#" class="tt-btn-icon">
                                <i class="tt-icon">
                                    <svg>
                                        <use xlink:href="#icon-favorite"></use>
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection