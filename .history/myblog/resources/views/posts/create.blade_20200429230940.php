@extends('layouts.default')

@section('title', 'New Post')

@section('content')
<h1>
  <a href="{{ url('/') }}" class="header-menu">Back</a>
  New Post
</h1>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <div id="form">
  <input type="text">


  
</div>
<input type="button" value="+" id="addForm">


    <!-- <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}"> -->
    <input type="text" class="add pluralBtn"name="title" placeholder="enter title">
    @if ($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
    <textarea name="body" placeholder="enter body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
    <input type="button" value="＋" class="add pluralBtn">
    <input type="button" value="x" class="del pluralBtn">
  </p>
  <p>
        
    <input type="submit" value="Add">
  </p>
</form>
@endsection

<style type="text/css">


#input_plural input.pluralBtn {
    color: : black;
    width: 30px;
    height: 30px;
    border: 1px solid #ccc;
    background: #fff;
    border-radius: 50%;
    padding: 0;
    margin: 0;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(function(){
  $('#addForm').click(function(){
    $('#form').append('<input type="text">');
  });
});


$(document).on("click", ".add", function() {
    $(this).parent().clone(true).insertAfter($(this).parent());
});
$(document).on("click", ".del", function() {
    var target = $(this).parent();
    if (target.parent().children().length > 1) {
        target.remove();
    }
});
$('#list').addInputArea();

</script>