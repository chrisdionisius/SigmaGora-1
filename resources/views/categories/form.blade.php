@extends('layouts.master')
@section('judul','Create')
@section('content') 
    <main id="tt-pageContent">
        <div class="container">
            <div class="tt-wrapper-inner">
                <h1 class="tt-title-border">
                    Create New Category
                </h1>
                <form name="FrmCreate_Category" class="form-default form-create-topic" action="/categories" method="post"
                onsubmit="return validateForm()" >
                    @csrf
                    <div class="form-group">
                        <label for="inputTopicTitle">New Category</label>
                        <div class="tt-value-wrapper">
                            <input type="text" name="category_name" class="form-control" id="inputTopicTitle" placeholder="Category name">
                            <span class="tt-value-input">99</span>
                        </div>
                        <div class="tt-note">Describe the category well.
                        </div>
                    </div>
                    <div class="pt-editor">
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
  var category = document.forms["FrmCreate_Category"]["category_name"].value;
  if (category == "" || category == null) {
    alert("Please Fill Category Name");
    return false;
  }
}
</script>
@endsection