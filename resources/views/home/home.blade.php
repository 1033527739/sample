 <!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Christian Cheng" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>MyStudy</title>
  <script type="text/javascript"  src="__JS__/jquery-3.2.1.min.js" ></script>
  <script type="text/javascript"  src="__JS__/jquery-ui.js" ></script>
  <script type="text/javascript"  src="__JS__/jquery.ajax.js" ></script>
  <script type="text/javascript"  src="__JS__/jquery.cookie.js" ></script>
  <script type="text/javascript"  src="__JS__/home.js?{$time|date="H:i:s,###"}" ></script>
  <link rel="stylesheet" href="css/home.css?{$time|date="H:i:s,###"}" />
 </head>
 <body>
 <!--头部 -->
<div  id=top >
	<div id=logo><a href="{:U('Home/Index/Index')}"><div id=logo_font>MyStudy</div></a></div>
		<div id=first_nav>
			<ul>
				<li class=nav id=homepage><a href="{:U('Home/Index/Index')}">首页</a></li>
				<li class=nav id=recruit><a href="{:U('Home/Recruit/Index')}">被试招募</a></li>
				<li class=nav id=mystudy><a href="{:U('Home/User/Index')}?id=1">我的研究</a></li>
			</ul>
		  </div>
		<div id=search>
			<input id=input type=text   placeholder="  实验/研究者" />
			<input id=search_btn  type=button />
		</div>
</div>
<!--头部结束 -->
<!--主体 -->
<div id=main>
		<!--左侧 -->
		<div id=left>
		<!--热门 -->
			<div id=hot>
				<div id=hot_top>
					<span id=study_span>
						<span id=year 	      class=today_date>2017</span>
						<span id=month_day 	  class=today_date>July 21st</span>
						<span id=study_label  class=today_date>热门研究</span>
					</span>
					<img  class=study_img src='__UPLOADS__/test/1.jpg'/>
					<img  class=study_img src='__UPLOADS__/test/2.jpg'/>
					<img  class=study_img src='__UPLOADS__/test/3.jpg'/>
					<img  class=study_img src='__UPLOADS__/test/4.jpg'/>
					<img  class=study_img src='__UPLOADS__/test/5.jpg'/>

				</div>
				<div id=hot_mid></div>
				<div id=hot_foot>
				<span id=studier_span>
						<span class=studier_star>向下箭头</span>
						<span class=studier_star>研究达人</span>
					</span>

					<img  class=studier_img src='__UPLOADS__/test/4.jpg'/>
					<img  class=studier_img src='__UPLOADS__/test/3.jpg'/>
					<img  class=studier_img src='__UPLOADS__/test/5.jpg'/>
					<img  class=studier_img src='__UPLOADS__/test/2.jpg'/>
					<img  class=studier_img src='__UPLOADS__/test/3.jpg'/>

				</div>
			</div>
		<!--热门 结束-->

		<!--动态-->
			<!--第一动态-->
			<div class=news1>
			      	<div class=news1_img>
			      		<img  class=news1_studier src='__UPLOADS__/test/3.jpg'/>
			      	</div>

			      	<div class=news1_content>
			      		<div class=news1_pic>
			      			<img class=news1_poster   src='__UPLOADS__/test/5.jpg' />
			      		</div>
			      		<div class=news1_intro>
			      		    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp机关枪的殖民历史,巧取豪夺的高利贷者，重农抑商，太可怕了。
			      		    自古商业不被重视，王熙凤。来自人性深处的需求，一朵一朵的奇葩。犹太人太厉害了，主要靠经商和做高利贷
			      		  过活。犹太人也信基督教。周围各种埃及人，巴比伦人，太醉了。打鼹鼠游戏，这个真的太醉了……知觉认为我们不
			      		  应该加利息挣钱了。
			      		</div>
			      		<div class=news1_operate>
			      		  	<span class=news1_kind>心 理</span>
			      		  	<span class=news1_label>行为实验</span>
			      		  	<span class=news1_label>执行功能</span>
			      		  	<span class=news1_prevalence>评论(123)</span>
			      		  	<span class=news1_prevalence>热度(100)</span>



			      		</div>
			      	</div>
			      	<span class=news1_span>
			      		<span class=news1_date>2017</span>
			      		<span class=news1_date>July</span>
			      		<span class=news1_date>23rd</span>
			      		<span class=news1_city>北京</span>
			      	</span>
			</div>
			<!--第一动态结束-->
			<!--第二动态-->
			<div class=news2>
			      	<div class=news2_img>
			      		<img  class=news2_studier src='__UPLOADS__/test/2.jpg'/>
			      	</div>

			      	<div class=news2_content>

			      	</div>
			      	<span class=news2_span>
			      		<span class=news2_date>2017</span>
			      		<span class=news2_date>July</span>
			      		<span class=news2_date>23rd</span>
			      	</span>
			</div>
			<!--第二动态结束-->

		</div>
		<!--动态结束-->
		<!--左侧结束-->

		<!--右侧-->
		<div id=right>
			<div  id=user>
				<div id=login_reg>
					<input id=login type=button value='登  录' />
					<input id=reg   type=button value='注  册' />
				</div>
				<div id=user_info></div>
				<div id=message>
					<ul>
						<li><span class=message></span><span class=message_list>我 的 消 息</span></li>
						<li><span class=message></span><span class=message_list>邀 请 好 友</span></li>
						<li><span class=message></span><span class=message_list>联 系 我 们</span></li>
					</ul>
				</div>
			</div>
		</div>
		<!--右侧结束-->
</div>
<!--主体结束 -->
<!--底部 -->
<div id=foot></div>


 </body>
</html>
