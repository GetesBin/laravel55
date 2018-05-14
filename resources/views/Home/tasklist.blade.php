@extends("Home.index")
@section("Home.tasklist")
    <table style="color:white;" class="table table-hover">
        <thead>
        <tr>
            <th scope="col">编号</th>
            <th scope="col">任务名字</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        @foreach ($data as $k=>$v)
        <tbody>
            <tr>
            <th scope="row">{{$k+1}}</th>
            <td>{{$v->Name}}</td>
            <td><span style="color:white;" class="addstak" onclick="addstak({{$k+1}})">接受任务</span></td>
        </tr>
        </tbody>
        @endforeach
    </table>
    <script type="text/javascript">
        function addstak(id){
            $.ajax({
                data:{'id':id},
                url:"/Home/addstak",
                headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                type: 'GET',
                dataType: 'text',
                success:function(data){
                    alert(data)
                }
            })

        }
    </script>
@endsection