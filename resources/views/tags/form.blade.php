@extends('layouts.master')
@section('judul','Create Tags')
@section('content') 
    <main id="tt-pageContent">
        <div class="container">
            <div class="tt-wrapper-inner">
                <h1 class="tt-title-border">
                    Create New Tag
                </h1>
                <form name="FrmCreate_Tags" class="form-default form-create-topic" action="/tags" method="post"
                onsubmit="return validateForm()">
                    @csrf
                    <div class="form-group">
                        <label for="inputTopicTitle">New Tag</label>
                        <div class="tt-value-wrapper">
                            <input type="text" name="name" class="form-control" id="inputTopicTitle" placeholder="Tag name">
                            <span class="tt-value-input">99</span>
                        </div>
                        <div class="tt-note">Describe the tag well.
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
  var tags = document.forms["FrmCreate_Tags"]["name"].value;
  if (tags == "" || tags == null) {
    alert("Please Fill tag Name");
    return false;
  }
}
</script>
@endsection