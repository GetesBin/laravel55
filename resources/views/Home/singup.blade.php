@extends("Home.index")
	@section("Home.singUp")
	<style>
		.mask{
			 top: 0px; filter: alpha(opacity=60); background-color: #777;z-index: 1002; left: 0px;height:100%;width:100%;opacity:0.5; -moz-opacity:0.5;
		}
	</style>
	<div id="mask" class="">
	  <div style="float: left;margin-left: 45%;margin-top: 5%;">
	  <form action="/Home/addSingUp" method="post" style="color:white;">
	    {{csrf_field()}}
	    <div class="form-group" style="width: 300px;">
	      <label for="exampleInputEmail1">邮箱/Email</label>
	      <input type="email" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	      <small id="emailHelp" class="form-text text-muted" ><span style="color:#808080;">
	      	<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>我们永远不会和别人分享你的邮箱。</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			</span></small>
	    </div>
	    <div class="form-group">
	      <label for="exampleInputPassword1">密码/Password</label>
	      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	    </div>
	    <!-- <div class="form-check">
	      <input type="checkbox" class="form-check-input" id="exampleCheck1">
	      <label class="form-check-label" for="exampleCheck1" >记住我</label>
	    </div> -->
	    <button type="submit" onclick="start()" id="submit-zc" class="btn btn-primary" style="width: 300px;">注册</button>
	  </form>
	  </div>
	<div id="ajaxloader3" style="width: 100px;height:100%;margin:0 auto;padding-top: 20%;display:none;opacity:1;">
	    <div class="outer"></div>
	    <div class="inner" style="margin-top: 10px;"></div>
	</div>
	</div>

	<script type="text/javascript">
		function start(){
			$("#ajaxloader3").show();
			$("#mask").attr("class","mask");
			showMask();

		};
		//兼容火狐、IE8   
	    //显示遮罩层    
	    function showMask(){     
	        $("#mask").css("height",$(document).height());     
	        $("#mask").css("width",$(document).width());     
	        $("#mask").show();     
	    }  
	    //隐藏遮罩层  
	    function hideMask(){     
	          
	        $("#mask").hide();     
	    }  
	</script>
	@endsection
