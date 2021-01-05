@extends('layouts.master')
@section('judul','Categories')
@section('content')
<main id="tt-pageContent">
    <div class="tt-custom-mobile-indent container">
        <div class="tt-categories-title">
            <div class="tt-title">Categories</div>
            <div>
                <a href="/categories/create" class="btn btn-secondary btn-width-lg">+Add New Categories</a>
            </div>
            <div class="tt-search">
                <form class="search-wrapper" action="/categories/search" method="get">
                    <div class="search-form">
                        <input type="text" class="tt-search__input" placeholder="Search Categories" name="search">
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
                @foreach($categories as $category)
                <div class="col-md-6 col-lg-4">
                    <div class="tt-item">
                        <div class="tt-item-header">
                            <ul class="tt-list-badge">
                                <li><a href="/threads/category/{{$category->id}}"><span
                                            class="tt-color01 tt-badge">{{$category->category_name}}</span></a></li>
                            </ul>
                            <h6 class="tt-title"><a href="/threads/category/{{$category->id}}">Threads :
                                    {{$category->threads()->count()}}</a></h6>
                        </div>
                        <div class="tt-item-layout">
                            <div class="innerwrapper">
                                Lets discuss about whats happening around the world {{$category->category_name}}.
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