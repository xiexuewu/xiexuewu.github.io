$(document).ready(function(){
	// 加载代码高亮插件
	function codeHighlight(){
		var pres = document.getElementsByTagName("pre");
		if(!pres || !pres.length) return;

		$(pres).each(function(){
			var thisClass = $(this).attr("class");

		thisClass && !/info-box/.test(thisClass) && $(this).snippet(thisClass,{
				style:"bright"
			});
		});

    }
    codeHighlight();

	// 在目录中找到当前文章
	(function(){
		var url = document.location.pathname;
		var contents = $("#contents");
		var as = contents.length ? contents.find('a') : null;

		as && as.each(function(index, domEle){
			var thisURL = $(domEle).attr('href');
			if(thisURL === url){
				$(this).parent().addClass('active');
				return false;
			}
		});
	})();

	//手机版--导航切换按钮
	(function(){
		var toggleBtns = $(".toggle-btn");
		var toggleTargets = $(".toggle-target");

		toggleBtns.click(function(){
			var thisEle = $(this);
			var thisEleSon = thisEle.children(".glyphicon");
			if(thisEleSon.length){
				thisEleSon.first().toggleClass("glyphicon-menu-up");
			}
			if(!thisEle.hasClass("toggle-btn-active")){
				toggleBtns.removeClass("toggle-btn-active");
				toggleTargets.removeClass("toggle-target-active");
			}

			thisEle.toggleClass("toggle-btn-active");
			$(thisEle.attr("toggle-target")).toggleClass("toggle-target-active");
		});
	})();

	//手机版--获取上一页下一页的链接
	(function(){
		var preNextBrief = $(".pre-next-brief");
		if(preNextBrief.length){
			preNextBrief.find(".pre a").attr("href", window.prePageURL);
			preNextBrief.find(".next a").attr("href", window.nextPageURL);
		}
	})();

	//更新文章点击次数
	(function(){
		$.ajax({
			method: 'get',
			url: "http://sso.biancheng.net/api/click.php",
			dataType: 'jsonp',
			data: {"siteid": window.siteId, "arcid": window.arcId, "v": window.cmsTempletsVer},
			timeout: 10000,
			success: function(data){
				if(data.success){
					$(".click").text(data.msg);
				}else{
					$(".click").text(0);
				}
			},
			error: function(jqXHR, textStatus, errorThrown){
				$(".click").text(0);
			}
		});
	})();
});