<html>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <title>Laravel</title>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<center>
    <h1><p>laravel - Admin</p></h1>
    <a href="{{url('/')}}">首 页</a><span color="black"> | </span>
    <a href="{{url('/adduser')}}">添加人员</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">用户名:</th>
      <th scope="col">密  码:</th>
      <th scope="col">操  作:</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $key=>$val)
    <tr>
      <th scope="row">{{$key +1}}</th>
      <td>{{$val->name}}</td>
      <td>{{$val->password}}</td>
      <td>
        <a class="btn btn-outline-danger" href="/deleteuser/{{$val->id}}">删除</a>
        <a class="btn btn-outline-info" href="/updateuser/{{$val->id}}">修改</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

    {{--<h2>{{ $content }}}</h2>--}}
</center>
</body>
</html>