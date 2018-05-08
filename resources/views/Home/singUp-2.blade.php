@extends("Home.index")
	@section("Home.singUp")
	  <div style="float: left;margin-left: 45%;margin-top: 5%;">
	  	<form action="/Home/addSingUp_2" method="post" style="color:white;">
		    {{csrf_field()}}
		    <div class="form-group" style="width: 300px;">
		      <label for="exampleInputEmail1">邮箱/Email</label>
		      <input type="email" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$mail}}">
		      <small id="emailHelp" class="form-text text-muted" ><span style="color:#808080;">
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>请登录您的邮箱<a href="">查看</a></strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
		      </span></small>
		    </div>
		    <div class="form-group">
		      <label for="exampleInputPassword1">注册码/Registration code</label>
		      <input type="text" name="registrationcode" class="form-control" id="exampleInputPassword1" placeholder="Registration Code">
		    </div>
		    <input type="hidden" name="password" value="{{$password}}">
		    <input type="hidden" name="code" value="{{$code}}">
		    <!-- <div class="form-group">
		      <label for="exampleInputPassword1">密码/Password</label>
		      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$password}}">
		    </div> -->

		    <!-- <div class="form-check">
		      <input type="checkbox" class="form-check-input" id="exampleCheck1">
		      <label class="form-check-label" for="exampleCheck1" >记住我</label>
		    </div> -->
		    <div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>未收到邮件?请查看垃圾邮箱!!!</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		    <button type="submit" class="btn btn-primary" style="width: 300px;">注册</button>
	  	</form>
	  </div>
	@endsection
