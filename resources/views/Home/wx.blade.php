@extends("Home.index")
    @section("Home.wx")
    <style>
        .left{
            width:28%;height: 88%;float:left;border:0px solid red;background-color: #2E3238;
        }
        .right{
            width:72%;height: 88%;float:right;border-left:1px solid black;background-color: #EEEEEE;
        }
        .ico{
            width:30px;height:30px;
        }
        .left-1{
            width:100%;height:80px;
        }
        .left-3{
            width:100%;height:4%;margin-top:10px;
        }
        .left-4{
            width:100%;height:10%;margin-top:10px;border: 1px solid #24272C;background-color: #2E3641;
        }
        .left3-ico{
            width:30px;height:30px;float:left;margin-left:35%;
        }
        .left3-ico-div{
           width:33%;float:left;
        }
        .left-4-1{
            width:25%;height:100%;border: 0px solid red;float: left;
        }
        .left-4-2{
            width:55%;height:100%;border: 0px solid blue;float: left;
        }
        .left-4-3{
            width:20%;height:100%;border: 0px solid purple;float: right;
        }
        .left-4-1-4{
            width:100%;height:150%;border-top: 1px solid #24272C;border-bottom: 1px solid #24272C;float: right;background-color: #292D32;margin-bottom: 8px;
        }
    </style>
    <div style="width: 58%;height: 90%;border:solid 0px black;margin-left:auto;margin-right:auto;margin-top:3%;">
        <div class="left">
            <div class="left-1">
                <div style="padding: 18px;width:100%;">
                    <img style="width:40px;height:40px;border-radius:3px;" src="/public/images/img.jpg" alt="">
                    <span style="color:white;font-size:17px;">GatesBin</span>
                    <div class="btn-group">
                        <button type="button" style="left: 90%;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div style="height:10px;"></div>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><img class="ico" src="/public/images/45-微信-消息.png" alt="">发起聊天</button>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" type="button"><img class="ico" src="/public/images/3.1铃铛.png" alt="">关闭桌面通知</button>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" type="button"><img class="ico" src="/public/images/喇叭.png" alt="">关闭声音</button>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" type="button"><img class="ico" src="/public/images/信箱.png" alt="">意见反馈</button>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" type="button"><img class="ico" src="/public/images/关机.png" alt="">退出</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="left-2">
                <form class="form-inline my-2 my-lg-0">
                    <input style="width:90%;height: 31px;background-color: #26292E;border:1px solid #26292E;margin-left:15px;" class="form-control mr-sm-2" type="search" placeholder="搜索" aria-label="Search">
                    <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
                </form>
            </div>
            <div class="left-3">
                <div id="information" onclick="types(1)" class="left3-ico-div" style="border-right: 1px solid #24272C;"><img id="information-img" class="left3-ico" src="/public/images/微信图标-07.png" alt=""></div>
                <div id="read" onclick="types(2)" class="left3-ico-div" style="border-right: 1px solid #24272C;"><img id="read-img" class="left3-ico" src="阅读.png" alt=""></div>
                <div id="contactlist" onclick="types(3)" class="left3-ico-div"><img id="contactlist-img" class="left3-ico" src="/public/images/通讯录.png" alt=""></div>
            </div>
            <div class="left-4">
                <div id="status1" onclick="status1()">
                    <div class="left-4-1">
                        <img style="width:40px;height:40px;border-radius:3px;margin: 14px;" src="/public/images/img.jpg" alt="">
                    </div>
                    <div class="left-4-2">
                        <div style="border: 0px solid white;width:100%;height:50%;float:left;"><span style="color:white;font-size:14px;line-height: 38px;">GatesBin</span></div>
                        <div style="border: 0px solid red;width:100%;height:50%;float:left;"><span style="color:#939393;font-size:13px;">哦哦</span></div>
                    </div>
                    <div class="left-4-3">
                        <span style="color:#939393;font-size:13px;line-height: 44px;">11:11</span><p></p>
                    </div>
                </div>
                <div id="status2">
                    <div class="left-4-1-4">
                        <div class="left-4-1-4-top" style="width:100%;height:35%;border: 0px solid red;background-color: #2F3239;">
                            <img src="/public/images/img.jpg" alt="" style="border-radius:60px;width:20px;height:20px;margin-left: 15px;margin-top: 8px;">
                            <span style="font-size: 9px;color:#888888;margin-left: 10px;">码农翻身</span>
                            <span style="font-size: 9px;color:#888888;float: right;">11:11</span>
                        </div>
                        <div class="left-4-1-4-bottom" style="width:100%;height:65%;border: 0px solid blue;background-color: #2F3239;">
                            <div style="width:75%;height:100%;border: 0px solid black;float:left;"><p style="color:white;margin-left: 15px;font-size: 12px;">大数据AI浪潮来袭，我们要不要学，适不适合学？</p></div>
                            <div style="width:25%;height: 100%;border: 0px solid red;float:right;">
                                <img style="width:92%;height: 84%;margin:3px;" src="/public/images/img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="status3">
                    <div class="left-4-1-5-left" style="width:25%;height:100%;float: left;">
                        <img style="float: left;margin: 14px;border-radius:2px;" src="/public/images/img.jpg" alt="">
                    </div>
                    <div id="linkman" style="width:75%;height:100%;float: left" class="left-4-1-5-right">
                        <p style="color:white;margin-top: 8%;">GatesBin</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="weixuanze">
                <!-- <p style="margin-left: 46%;margin-top: 3%;">GatesBin</p> -->
                <hr width="94%" style="margin-top: 7%;">
                <div>
                    <img style="width:100px;height:85px;margin-top: 16%;margin-left: 45%;" src="/public/images/微信 (1).png" alt="">
                    <p style="color:#CCCCCC;font-size:13px;margin-left: 47%;">未选择聊天</p>
                </div>
            </div>
            <div class="content" style="display: none;">
                <p style="margin-left: 46%;margin-top: 3%;">GatesBin</p>
                <div>
                <!-- <span style="font-family:'Microsoft YaHei';"><div style="background:url('气泡right.jpg') no-repeat;width:150px;height:31px;float: right;"><span style="font-size:15px;margin: 8%;">添加文字...</span></div></span></div>
                <span style="font-family:'Microsoft YaHei';"><div style="background:url('气泡left.jpg') no-repeat;width:150px;height:31px;float: left;"><span style="font-size:15px;margin: 8%;">添加文字...</span></div></span> -->
                <hr width="94%" style="padding-top: 7%;">
                <div style="padding-left: 45%;"><span style="font-size: 13px;color: #9B9B9B;">暂时没有新消息</span></div>
                <hr style="margin-top: 45%;">
                <div >
                    <div><img style="width:25px;height:25px;margin-left: 3%;margin-top: -1%;float: left;" src="/public/images/表情.png" alt=""></div>
                    <div><img style="width:25px;height:25px;margin-left: 2%;margin-top: -1%;float: left;" src="/public/images/截屏.png" alt=""></div>
                    <div><img style="width:25px;height:25px;margin-left: 2%;margin-top: -1%;float: left;" src="/public/images/文件.png" alt=""></div>
                </div>
                <div>
                    <textarea name="news" style="outline:none;width: 78%;height:90px;resize:none;margin: 20px;background-color: #EEEEEE;border: 0px solid;" id="news"></textarea>
                    <button style="float: right;width: 100px;height: 30px;font-size: 13px;margin-top:-20px;margin-right: 25px;" type="button" class="btn btn-light">发送</button><p style="color: #9B9B9B;font-size: 13px;float: right;margin-right: 20px;margin-top:-14px;">按下Ctrl+Enter换行</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        (function ($) {
            $("#information-img").attr("src","/public/images/微信图标-07-green.png");
            $("#read-img").attr("src","/public/images/阅读.png");
            $("#contactlist-img").attr("src","/public/images/通讯录.png");
            $("#status1").css('display','block');
            $("#status2").css('display','none');
            $("#status3").css('display','none');
        })(jQuery);
        
        function types(type){
            if(type == 1){
                $("#information-img").attr("src","/public/images/微信图标-07-green.png");//
                $("#read-img").attr("src","/public/images/阅读.png");
                $("#contactlist-img").attr("src","/public/images/通讯录.png");
                // $("#status").show();
                $("#status1").css('display','block');
                $("#status2").css('display','none');
                $("#status3").css('display','none');
                // var str = '';
                // str = "<div class='left-4-1'><img style='width:40px;height:40px;border-radius:3px;margin: 13px;' src='img.jpg' alt='></div><div class='left-4-2'><div style='border: 0px solid white;width:100%;height:50%;float:left;'><span style='color:white;font-size:14px;line-height: 44px;'>GatesBin</span></div><div style='border: 0px solid red;width:100%;height:50%;float:left;'><span style='color:#939393;font-size:13px;'>哦哦</span></div></div><div class='left-4-3'><span style='color:#939393;font-size:13px;line-height: 44px;'>11:11</span><p></p></div>";
                // str += "<div class=\"left-4-1\">"
                // str +=     "<img style=\"width:40px;height:40px;border-radius:3px;margin: 13px;\" src=\"img.jpg\">"
                // str += "</div>"
                // str += "<div class=\"left-4-2\">"
                // str +=     "<div style=\"border: 0px solid white;width:100%;height:50%;float:left;\"><span style=\"color:white;font-size:14px;line-height: 44px;\">GatesBin</span></div>"
                // str +=     "<div style=\"border: 0px solid red;width:100%;height:50%;float:left;\"><span style=\"color:#939393;font-size:13px;\">哦哦</span></div>"
                // str += "</div>"
                // str += "<div class=\"left-4-3\">"
                // str +=     "<span style=\"color:#939393;font-size:13px;line-height: 44px;\">11:11</span><p></p>"
                // str += "</div>"
                // $(".left-4").html(str);
            }else if(type == 2){
                $("#information-img").attr("src","/public/images/微信图标-07.png");
                $("#read-img").attr("src","/public/images/阅读-green.png");//
                $("#contactlist-img").attr("src","/public/images/通讯录.png");

                $("#status1").css('display','none');
                $("#status2").css('display','block');
                $("#status3").css('display','none');
            }else if(type == 3){
                $("#information-img").attr("src","/public/images/微信图标-07.png");
                $("#read-img").attr("src","/public/images/阅读.png");
                $("#contactlist-img").attr("src","/public/images/通讯录-green.png");//

                $("#status1").css('display','none');
                $("#status2").css('display','none');
                $("#status3").css('display','block');
            }
        }
        function status1(){
            $(".content").css("display",'block');
            $(".weixuanze").css("display",'none');
        }
    </script>
    @endsection