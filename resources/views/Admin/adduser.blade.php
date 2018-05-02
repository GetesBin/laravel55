<html>
    <head>
        <title>laravel</title>
        </head>
    <!-- <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css"> --><!--无效-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <body>
        <H1>{{ isset($info[0]->name) ? '修改' : '添加' }}人员</H1>
        <form action="/submit/{{ isset($info[0]->name) ? 'saveUpdateuser' : 'adduser' }}" method="post">
            {{csrf_field()}}
            姓名：<input type="text" name="name" value="{{isset($info[0]->name) ? $info[0]->name : ''}}">
            密码：<input type="text" name="password" value="{{isset($info[0]->name) ? $info[0]->password : ''}}">
            <input type="hidden" name="id" value="{{isset($info[0]->name) ? $info[0]->name : ''}}">
            <input type="submit">
        </form>


<!--     <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        下拉按钮
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div> -->
    <!-- script src="/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/bootstrap/assets/js/vendor/jquery-slim.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/bootstrap/assets/js/vendor/popper.min.js" type="text/javascript" charset="utf-8"></script> --><!--无效-->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
