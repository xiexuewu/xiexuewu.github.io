<?php require_once str_replace("\\", "/", dirname(__FILE__)) . '/../common.php'; ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="<?= WEB_CHARSET ?>">
	<link href="<?= RES_DIR . "/css/style.css?v=" . WEB_VERSION ?>" rel="stylesheet">
	<title>C语言辅导班/C语言培训班，QQ在线一对一辅导！</title>
</head>
<body>
<?php require_once WEB_ROOT . RES_DIR . '/template/header.php'; ?>
<div id="main">
	<img height="100" src="<?= RES_DIR . "/images/header_c_common.png" ?>" alt="C语言辅导班，帮助有志青年">
	<p id="info" class="col-green">一对一辅导 + 一对一答疑 + 布置作业 + 项目实践 + 永久学习</p>
	<div class="section">
		<img height="66" src="<?= RES_DIR . "/images/teacher.png" ?>" alt="辅导老师">
		<div class="desc">
			<p><span class="col-red">解学武</span>，<a class="col-link" href="https://xiexuewu.github.io/" target="_blank">站长本人</a>，从事编程教育近 8 年，帮助上千名小伙伴快速入门 C 语言和数据结构，最大的成就是原创了一整套数据结构和算法教程，帮助初学者提升编程功底。</p>
		</div>
	</div>

	<div class="section">
		<img height="66" src="<?= RES_DIR . "/images/introduction.png" ?>" alt="辅导说明">
		<div class="desc">
			<p>这是针对初学者的C语言辅导班，适合想提高编程技能、想学习软件开发的有志青年。</p>
			<table class="list-table">
				<tr class="odd">
					<td width="70">辅导模式</td>
					<td>使用QQ在线辅导！一对一辅导 + 一对一答疑 + 布置作业 + 项目实践 + 永久学习。整个辅导过程都是一对一，学习更有针对性。</td>
				</tr>
				<tr>
					<td>流程说明</td>
					<td style="line-height: 1.6em;">1) 学员报名后，根据学员实际情况规划学习路线，制定学习内容。<br />
						2) 老师按章节发放学习资料（主要是文字），督促学员学习。<br />
						3) 每一章节，老师都会<span class="col-red">针对所学内容提问问题或者布置本章习题</span>，并现场答疑解惑，强化所学知识。<br />
						4) <span class="col-red">当确保学员已经彻底学会本章知识后</span>，继续发放下一章节。若学员有疏漏的地方，老师会加以纠正，细心指导，直到保证学会为止。<br />
						5) 整个学习过程中，学员遇到问题可随时咨询老师，老师会进行<span class="col-red">一对一答疑</span>。<br />
						6) 学员学完所有课程后，能够独立完成<span class="col-red">学生信息管理系统</span>、<span class="col-red">推箱子游戏</span>和<span class="col-red">扫雷游戏</span>（共计1000多行代码），视为学会C语言。<br /><br />

						<span class="col-green">说明：在整个学习过程中，老师会不断询问学员的学习情况，给出有针对性的建议，提出不同的问题，因材施教，弥补薄弱环节，强化重点知识，让学员少走弯路。</span>
						<br />
					</td>
				</tr>
				
				<tr class="odd">
					<td>辅导特色</td>
					<td>全程一对一辅导，随时回复学员提出的问题（及时答疑）。</td>
				</tr>
				<tr>
					<td>教材特色</td>
					<td>教材主要是文字（PDF文档），需要的话可以找老师推荐一套视频教程。文字教程用来深入学习，视频教程用来观看演示；文字教程更容易查阅，视频教程更加直观。</td>
				</tr>
				<tr class="odd">
					<td>辅导时间</td>
					<td>老师一对一辅导时间为上午9点到晚上10点，没有特殊情况，一般都可以辅导。</td>
				</tr>
				<tr>
					<td>学习时间</td>
					<td>我们不规定具体的学习时间，学员根据自己的时间来安排，有时间就可以学习；当然，老师也会督促学员，给予学习的动力和压力。</td>
				</tr>
				<tr class="odd">
					<td>辅导工具</td>
					<td>全程使用QQ在线辅导，截图、语音、远程操作、传送文件都非常方便。</td>
				</tr>
				<tr>
					<td>学习费用</td>
					<td><b class="col-orange">600</b> 元永久学习，直到学会！
					</td>
				</tr>
				<tr class="odd">
					<td>报名/咨询</td>
					<td class="col-red"><b>加QQ：834937624（验证信息：辅导班报名）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电话：15297649174</b>
					</td>
				</tr>
				<tr>
					<td>付款方式</td>
					<td>学员可以通过支付宝、微信付款，请<a class="col-link" href="./../payaccount/" target="_blank">猛击这里</a>查看付款账号。</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="section">
		<img height="66" src="<?= RES_DIR . "/images/course.png" ?>" alt="课程安排">
		<div class="desc">
			<p>
				我们的课程是综合了市面上大量的C语言教程后推出的，去糟取精，通俗易懂，时长适中，从入门到高级，让你轻轻松松学习C语言。
			</p>
			<table id="list-course" class="list-table">
				<tr class="odd"><th class="caption" colspan="2">C语言基础课程</th></tr>
				<tr class="odd"><th width="160">章节/课时</th><th>主讲内容</th></tr>
				<tr><td>01) 编程基础</td><td>阐述编程语言的概念，学习进制转换以及程序的基本运行原理，让大家先有一个整体上的认识。</td></tr>
				<tr class="odd"><td>02) C语言初探</td><td>完成编程环境的搭建并编写第一个C语言程序，认识编程语言的基本要素。</td></tr>
				<tr><td>03) 变量和数据类型</td><td>变量是用来保存数据的，例如整数、小数、字符串等，学习数据的处理是编程的第一步。</td></tr>
				<tr class="odd"><td>04) 分支结构和循环结构</td><td>分支结构和循环结构用来控制程序的执行流程，它使得程序更加智能，可以胜任各种复杂的逻辑处理，响应各种操作。</td></tr>
				<tr><td>05) 数组（Array）</td><td>数组是一系列连续的、拥有相同类型的数据的集合，借助它能够更加有条不紊地组织多个数据。</td></tr>
				<tr class="odd"><td>06) 函数（Function）</td><td>函数是一段可以重复使用的代码，C语言程序的执行从某种意义上来说就是函数之间的相互调用。</td></tr>
				<tr><td>07) 预处理命令</td><td>编译器在编译之前需要对源代码进行预先处理，主要包括宏替换、文件引入、条件编译等。</td></tr>
				<tr class="odd"><td>08) 指针</td><td>指针用来保存一份数据的起始地址，它是C语言的精华，不了解指针就没有学会C语言。</td></tr>
				<tr><td>09) 结构体和共用体</td><td>和数组不同，结构体和共用体可以用来存储一组具有不同类型的数据。</td></tr>
				<tr class="odd"><td>10) 文件处理</td><td>什么是文本文件？什么是二进制文件？如何使用C语言来读写文件中的数据？这就是本章要讲解的重点。</td></tr>
				<tr><td>11) C语言调试</td><td>调试用来发现程序的逻辑错误；断点、单步调试、变量跟踪、即时窗口、修改内存等都是调试中常用的技巧。</td></tr>
				<tr class="odd"><td>12) 多文件编程</td><td>一个大中型程序往往包含多个源文件和头文件，本章讲解如何将它们组织在一起，完成编译和链接工作。</td></tr>
				<tr class="odd"><th class="caption" colspan="2">C语言项目实践</th></tr>
				<tr class="odd"><th width="160">项目名称</th><th>主要功能</th></tr>
				<tr><td>01) 扫雷游戏</td><td>该扫雷游戏游戏不依赖TC环境，不依赖任何第三方库，可以在VC 6.0、VS、C-Free等常见IDE中编译通过。扫雷游戏并不涉及复杂的指针知识，难点是设计思路、雷区的随机生成、非雷区的判定以及游戏界面的输出显示等，我们都巧妙地解决了。</td></tr>
				<tr class="odd"><td>02) 推箱子游戏</td><td>该推箱子游戏不依赖TC环境，不依赖任何第三方库，可以在VC 6.0、VS、C-Free等常见IDE中编译通过。推箱子游戏并不涉及复杂的指针知识，难点是设计思路、人物的移动、箱子的移动以及游戏界面的输出显示等，我们都巧妙地解决了。</td></tr>
				<tr><td>03) 学生信息管理系统</td><td>该软件可以用来管理班级学生，能够对学生信息进行增加、删除、更改、查询等操作。该软件将学生信息直接保存在文件中，难点主要是对文件内容的增删改查、文件内部指针的移动、对学生信息的校验等。</td></tr>
			</table>
		</div>
	</div>

	<?php require_once WEB_ROOT . RES_DIR . '/template/q2a.php'; ?>
</div>
<?php require_once WEB_ROOT . RES_DIR . '/template/footer.php'; ?>
</body>
</html>