<html>
    <head>
        <title>laravel</title>
    </head>
    <body>
        <H1>{{ isset($info[0]->name) ? '修改' : '添加' }}人员</H1>
        <form action="/submit/{{ isset($info[0]->name) ? 'saveUpdateuser' : 'adduser' }}" method="post">
            {{csrf_field()}}
            姓名：<input type="text" name="name" value="{{$info[0]->name}}">
            密码：<input type="text" name="password" value="{{$info[0]->name}}">
            <input type="hidden" name="id" value="{{$info[0]->id}}">
            <input type="submit">
        </form>
    </body>
</html>