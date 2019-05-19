@extends('layouts.default')
@section('title','Login')
 @include('layouts.nav')
 @section('content')
 <div class="container">
 	<div class="center-block" style="max-width: 620px">
 	<form method="POST" action="{{ route('login') }}">
 		<div class="form-group">
 			<label for="email">邮箱:</label>
 			 <input type="text" name="email" class="form-control" value="{{ old('email') }}">
 		</div>
 		  <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>
           {{ csrf_field() }}

<button type="submit" class="btn btn-primary">登录</button>
 	</form>
 	<hr />
<p>当您的服务过期且长时间不续费时，我们可能会<font class="text-danger">删除您的账号</font>,这一般不会通知您，当然因为限制了有效的客户量，我们一般不会这么做。</p>
 </div>
 </div>
 @stop