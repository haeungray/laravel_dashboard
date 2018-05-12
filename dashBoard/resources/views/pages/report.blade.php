@extends('welcome')
@section('title', ' | 리포트')
@section("stylesheets")
<!-- 여기에 스타일 시트를 추가하시면 됩니다. -->
@endsection

@section("content")
<!-- 여기에 페이지 내용을 추가하시면 됩니다. -->
<div class="col-md-18 col-md-offset-2">
<input type="checkbox" id="credit" value="credit" >
<table id="users-table">
<thead>
<tr>
 <td>Details</td>
 <td>Date</td>
 <td>Description</td>
</tr>
</thead>
</table>
</div>
@endsection

@section("script")
<!-- 여기에 자바스크립트를 추가하시면 됩니다. -->
@endsection
