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
</head>
<body>
<center>
    <h1><p>laravel - Admin</p></h1>
    <a href="{{url('/adduser')}}">添加人员</a>
    <table>
        @foreach($users as $val)
            <tr>
                <th><h3>用户名:</h3></th>
                <td><h3>{{$val->name}}</h3></td>
                <th><h3>密 码:</h3></th>
                <td><h3>{{$val->password}}</h3></td>
                <th>操作:</th>
                <td><a href="/deleteuser/{{$val->id}}">删除</a></td>
                <td><a href="/updateuser/{{$val->id}}">修改</a></td>
            </tr>
        @endforeach
    </table>
    {{--<h2>{{ $content }}}</h2>--}}
</center>
</body>
</html>