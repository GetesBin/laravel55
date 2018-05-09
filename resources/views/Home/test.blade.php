<html>
    <body>
        <select id="select1">
        <option value="" selected>请选择</option>
        <option value="1">吉林</option>
        <option value="2">辽宁</option>
        </select>
        <span></span>
        <script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
        <script  src="/public/js/jquery.min.js"></script>
        <script>
        //$(function(){
        //alert("11");
        //})
        $("#select1").change(function(){
            var id=$("#select1").val();
            if(id==1){
                $("span").empty();
                    $("span").append("<select><option>长春</option><option>松原</option></select>");
            }else{
                $("span").empty();
                    $("span").append("<select><option>大连</option><option>旅顺</option></select>");
            }
            if(id==""){
                $("span").empty();
                    $("span").append("<select><option>请选择</option></select>");
            }
        })
        </script>
    </body>
</html>