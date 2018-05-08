/****************************************************************
 *																*		
 * 						      代码库							*
 *                        www.dmaku.com							*
 *       		  努力创建完善、持续更新插件以及模板			*
 * 																*
****************************************************************/
(function($){
  $('.trigger').click(function(){
    $('#ajaxloader1, .outer, .inner, .barlittle, .pointcircle, .bar, #loadpulse div, #shadowloader span, .loadingtext span').toggleClass('stop');
  });
})(jQuery);