@extends('layouts.default')
@section('title', '注册')
 @include('layouts.nav')
@section('content')
<style type="text/css">
	.form-control{
		width: 67%;
	}
</style>
<div class="container">
	<div class="page-header">
  <h1>Register</h1>
</div>
@if (count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<form method="POST" action="{{ route('users.store') }}" style="max-width: 540px;">
	{{ csrf_field() }}
	<div class="form-group">
		<label>名称</label>
		<input type="text" name="name" class="form-control">
	</div>
		<div class="form-group has-success">
		<label class="control-label">电子邮箱(请如实填写)</label>
		<input type="email" name="email" class="form-control">
	</div>
	 <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" >
          </div>
 <div class="form-group">
            <label for="password_confirmation">确认密码：</label>
            <input type="password" name="password_confirmation" class="form-control">
          </div>
<div class="form-group">
		<label>客户邀请代码</label>
		<input type="text" name="invitecode" class="form-control">
	</div>
           <button type="submit" class="btn btn-primary">注册</button>
</form>
<p>邮箱地址必须填写，此地址是我站验证您是我们客户的唯一手段，如果您没有如实填写，我们可能不会为您提供后续服务.<br/><font class="text-danger">本站启用邀请注册，您必须联系我站已有用户注册。每月最多注册5人</font></p>
</div>
@stop
