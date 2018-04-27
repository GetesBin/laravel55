<html>
    <head>
        <title>laravel</title>
    </head>
    <body>
        <H1>添加人员</H1>
        <form action="/submit/adduser" method="post">
            {{csrf_field()}}
            姓名：<input type="text" name="name">
            年龄：<input type="text" name="age">
            <input type="submit">
        </form>
    </body>
</html>