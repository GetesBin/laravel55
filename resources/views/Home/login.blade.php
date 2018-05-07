@extends("Home.index")
  @section("Home.login")
  <div style="float: left;margin-left: 45%;margin-top: 5%;">
  <form action="/Home/login-add" method="post" style="color:white;">
    {{csrf_field()}}
    <div class="form-group">
      <label for="exampleInputEmail1">邮箱/Email</label>
      <input type="email" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted" ><span style="color:#808080;">我们永远不会和别人分享你的邮件。</span></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">密码/Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1" >记住我</label>
    </div>
    <button type="submit" class="btn btn-primary">登录</button>
  </form>
  </div>

  @endsection
