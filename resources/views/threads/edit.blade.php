@extends('layouts.master')
@section('judul','Edit')
@section('content')
<main id="tt-pageContent">
    <div class="container">
        <div class="tt-wrapper-inner">
            <h1 class="tt-title-border">
                Create New Topic
            </h1>
            <form class="form-default form-create-topic" action="/threads/{{$thread->id}}" method="post"
                enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="inputTopicTitle">Topic Title</label>
                    <div class="tt-value-wrapper">
                        <input type="text" name="title" class="form-control" id="inputTopicTitle"
                            placeholder="{{$thread->title}}" value="{{$thread->title}}">
                        <span class="tt-value-input">99</span>
                    </div>
                    <div class="tt-note">Describe your topic well, while keeping the subject as short as possible.
                    </div>
                </div>
                <div class="form-group">
                    <label>Topic Type</label>
                    <div class="tt-js-active-btn tt-wrapper-btnicon">
                        <div class="row tt-w410-col-02">
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="#" class="tt-button-icon">
                                    <span class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-discussion"></use>
                                        </svg>
                                    </span>
                                    <span class="tt-text">Discussion</span>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="#" class="tt-button-icon">
                                    <span class="tt-icon">
                                        <svg>
                                            <use xlink:href="#Question"></use>
                                        </svg>
                                    </span>
                                    <span class="tt-text">Question</span>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="#" class="tt-button-icon">
                                    <span class="tt-icon">
                                        <svg>
                                            <use xlink:href="#Poll"></use>
                                        </svg>
                                    </span>
                                    <span class="tt-text">Poll</span>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="#" class="tt-button-icon">
                                    <span class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-gallery"></use>
                                        </svg>
                                    </span>
                                    <span class="tt-text">Gallery</span>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="#" class="tt-button-icon">
                                    <span class="tt-icon">
                                        <svg>
                                            <use xlink:href="#Video"></use>
                                        </svg>
                                    </span>
                                    <span class="tt-text">Video</span>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <a href="#" class="tt-button-icon">
                                    <span class="tt-icon">
                                        <svg>
                                            <use xlink:href="#Others"></use>
                                        </svg>
                                    </span>
                                    <span class="tt-text">Other</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-editor">
                    <h6 class="pt-title">Topic Body</h6>
                    <div class="pt-row">
                        <div class="col-left">
                            <ul class="pt-edit-btn">
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-quote"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-bold"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-italic"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-share_topic"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-blockquote"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-performatted"></use>
                                        </svg>
                                    </button></li>
                                <li class="hr"></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-upload_files">
                                            </use>

                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-bullet_list"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-heading"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-horizontal_line"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-emoticon"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-settings"></use>
                                        </svg>
                                    </button></li>
                                <li><button type="button" class="btn-icon">
                                        <svg class="tt-icon">
                                            <use xlink:href="#icon-color_picker"></use>
                                        </svg>
                                    </button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control ckeditor" rows="5"
                            placeholder="{{$thread->content}}">{{$thread->content}}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputTopicTitle">Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="Select">Select</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{ $thread->category_id == $category->id ? 'selected' : ''}}>
                                        {{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="inputTopicTags">Tags</label>
                                <select name="tags[]" multiple="multiple" class="form-control tags">
                                    @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto ml-md-auto">
                            <input type="submit" class="btn btn-secondary btn-width-lg">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tt-topic-list tt-offset-top-30">
            <div class="tt-list-search">
                <div class="tt-title">Suggested Topics</div>
                <!-- tt-search -->
                <div class="tt-search">
                    <form class="search-wrapper">
                        <div class="search-form">
                            <input type="text" class="tt-search__input" placeholder="Search for topics">
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
                <!-- /tt-search -->
            </div>
            <div class="tt-list-header tt-border-bottom">
                <div class="tt-col-topic">Topic</div>
                <div class="tt-col-category">Category</div>
                <div class="tt-col-value hide-mobile">Likes</div>
                <div class="tt-col-value hide-mobile">Replies</div>
                <div class="tt-col-value hide-mobile">Views</div>
                <div class="tt-col-value">Activity</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                    <svg class="tt-icon">
                        <use xlink:href="#icon-ava-n"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                            Does Envato act against the authors of Envato markets?
                        </a></h6>
                    <div class="row align-items-center no-gutters hide-desktope">
                        <div class="col-auto">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color05 tt-badge">music</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                            <div class="tt-value">1d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color05 tt-badge">music</span></div>
                <div class="tt-col-value hide-mobile">358</div>
                <div class="tt-col-value tt-color-select hide-mobile">68</div>
                <div class="tt-col-value hide-mobile">8.3k</div>
                <div class="tt-col-value hide-mobile">1d</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                    <svg class="tt-icon">
                        <use xlink:href="#icon-ava-h"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-locked"></use>
                            </svg>
                            We Want to Hear From You! What Would You Like?
                        </a></h6>
                    <div class="row align-items-center no-gutters hide-desktope">
                        <div class="col-auto">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color06 tt-badge">movies</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                            <div class="tt-value">2d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color06 tt-badge">movies</span></div>
                <div class="tt-col-value hide-mobile">674</div>
                <div class="tt-col-value tt-color-select  hide-mobile">29</div>
                <div class="tt-col-value hide-mobile">1.3k</div>
                <div class="tt-col-value hide-mobile">2d</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                    <svg class="tt-icon">
                        <use xlink:href="#icon-ava-j"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                            Seeking partner backend developer
                        </a></h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-auto">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span
                                            class="tt-color03 tt-badge">exchange</span></a></li>
                                <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                <li><a href="#"><span class="tt-badge">elements</span></a></li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                            <div class="tt-value">2d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color13 tt-badge">movies</span></div>
                <div class="tt-col-value hide-mobile">278</div>
                <div class="tt-col-value tt-color-select  hide-mobile">27</div>
                <div class="tt-col-value hide-mobile">1.4k</div>
                <div class="tt-col-value hide-mobile">2d</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                    <svg class="tt-icon">
                        <use xlink:href="#icon-ava-t"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                            Cannot customize my intro
                        </a></h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-auto">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color07 tt-badge">video
                                            games</span></a></li>
                                <li><a href="#"><span class="tt-badge">videohive</span></a></li>
                                <li><a href="#"><span class="tt-badge">photodune</span></a></li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                            <div class="tt-value">2d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color07 tt-badge">video games</span></div>
                <div class="tt-col-value hide-mobile">364</div>
                <div class="tt-col-value tt-color-select  hide-mobile">36</div>
                <div class="tt-col-value  hide-mobile">982</div>
                <div class="tt-col-value hide-mobile">2d</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                    <svg class="tt-icon">
                        <use xlink:href="#icon-ava-k"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-verified"></use>
                            </svg>
                            Microsoft Word and Power Point
                        </a></h6>
                    <div class="row align-items-center no-gutters hide-desktope">
                        <div class="col-auto">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color08 tt-badge">youtube</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                            <div class="tt-value">3d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color08 tt-badge">youtube</span></div>
                <div class="tt-col-value  hide-mobile">698</div>
                <div class="tt-col-value tt-color-select  hide-mobile">78</div>
                <div class="tt-col-value  hide-mobile">2.1k</div>
                <div class="tt-col-value hide-mobile">3d</div>
            </div>
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

@section('js')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">
$(".tags").select2().val({!! json_encode($thread->tags()->allRelatedIds() ) !!}).trigger('change');
</script>
@endsection