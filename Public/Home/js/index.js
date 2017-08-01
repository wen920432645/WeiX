$(function(){
	
//	选项卡切换
	$(".main .tab li").click(function(){
		var index = $(this).index();
		$(".main .tab li").removeClass("active");
		$(".main .content").removeClass("active");
		$(this).addClass("active");
		$(".main .content:eq("+index+")").addClass("active");
	});
	
	
	
//	轮播图
	$(".banner .slide li").click(function(){
		var i = $(this).index();
		$(".banner .slide li").removeClass("active");
		$(this).addClass("active");
		$(".banner .play li").removeClass("active");
		$(".banner .play li:eq("+i+")").addClass("active");
	});
	
	var i =0;
	setInterval(function(){
		
		if(i>=3){
			i=0
		}
		$(".banner .slide li").removeClass("active");
		$(".banner .slide li:eq("+i+")").addClass("active");
		$(".banner .play li").removeClass("active");
		$(".banner .play li:eq("+i+")").addClass("active");
		i++;
	},2000);
	
});

