@extends('layouts.master')
@section('judul','Create')
@section('content') 
    <main id="tt-pageContent">
        <div class="container">
            <div class="tt-wrapper-inner">
                <h1 class="tt-title-border">
                    Create New Thread
                </h1>
                <form name="FrmInput" class="form-default form-create-topic" action="/threads" method="post"
                    enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    <div class="form-group">
                        <label for="inputTopicTitle">Thread Title</label>
                        <div class="tt-value-wrapper">
                            <input type="text" name="title" class="form-control" id="inputTopicTitle"
                                placeholder="Subject of your topic">
                            <span class="tt-value-input">99</span>
                        </div>
                        <div class="tt-note">Describe your Thread well, while keeping the subject as short as possible.
                        </div>
                    </div>
                    <!-- <div class="form-group">
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
                    </div> -->
                    <div class="pt-editor">
                        <h6 class="pt-title">Thread Body</h6>
                        <!-- <div class="pt-row">
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
                        </div> -->
                        <div class="form-group">
                            <textarea name="content" class="form-control ckeditor" rows="5"
                                placeholder="Lets get started"></textarea>
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
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="inputTopicTags">Tags</label>
                                    <select name="tags[]" multiple="multiple" class="form-control tags" >
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
$(".tags").select2({
    placeholder: "Select Tags",
    maximumSelectionLength: 2,
    allowClear: true
});
</script>
<script>
function validateForm() {
  var tittle = document.forms["FrmInput"]["title"].value;
  var content = document.forms["FrmInput"]["content"].value;
  var category = document.forms["FrmInput"]["category_id"].value;
  var tags = document.forms["FrmInput"]["tags[]"].value;
  if (tittle == "" || tittle == null || content == "" || content == null || 
        category == "" || category == null || tags == "" || tags == null) {
    alert("Please Fill All Required Field");
    return false;
  }
}
</script>
@endsection