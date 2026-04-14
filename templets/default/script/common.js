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
	/*(function(){
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
	})();*/
	//微信按钮关闭
	(function(){
		$("#close-addweixin-widget").click(function(){
			$("#addweixin-widget").hide();
		});
	})();
	
	/*回到顶部功能*/
	(function(){
		var $backToTop = $("#back-to-top");
		if(!$backToTop.length) return;

		// 监听滚动事件，控制按钮显示/隐藏
		$(window).scroll(function(){
			if($(window).scrollTop() > 200){
				$backToTop.addClass("show");
			}else{
				$backToTop.removeClass("show");
			}
		});

		// 点击回到顶部
		$backToTop.click(function(){
			$("html, body").animate({
				scrollTop: 0
			}, 500);
			return false;
		});
	})();
	
	/*开通VIP内容*/
	(function () {
    /* ===== 配置 ===== */
    const courseMap = { 20: 20, 5: 5 };   // 栏目ID → 课程ID
    const tipDiv    = document.getElementById('buy-course-tip');
    if (!tipDiv) return;

    const topid    = parseInt(tipDiv.getAttribute('topid'), 10);
    const courseId = courseMap[topid];
    if (!courseId) return;               // 不是付费栏目

    /* ===== 工具 ===== */
    const http = (url, data) =>
        fetch(url, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams(data)
        }).then(r => r.json());

    /* ===== 渲染付费墙 ===== */
	async function showPaywall() {
	    const { authorized } = await http('/user/check_access.php', { course_id: courseId });
	    if (!authorized) {
	        return;
	    }

	    /*已购买 → 获取并插入正文 */
	    try {
	        tipDiv.innerHTML = `<p>正在加载文章内容...</p>`;
	        // ① 调你自己的接口，返回正文 HTML
	        const res = await fetch('/user/get_article_body.php', {
	            method: 'POST',
	            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
	            body: new URLSearchParams({
	                aid: tipDiv.getAttribute('aid'),
	                course_id: courseId
	            })
	        });

	        if (!res.ok) throw new Error('网络异常');
	        const data = await res.json();
	        if (!data.success) throw new Error(data.msg || '加载失败');

	        // ② 把正文替换到占位元素
	        tipDiv.parentNode.innerHTML = decodeURIComponent(data.body);
	        codeHighlight();
	    } catch (e) {
	        tipDiv.innerHTML = `<p>加载文章内容失败，请刷新重试或联系站长！</p>`;
	    }
	}

    /* ===== 启动 ===== */
    showPaywall();
	})();
});