<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>在招聘职位</title>
		<link rel="stylesheet" type="text/css" href="./Public/home/css/company/stylecompany.css"/>
		<link rel="stylesheet" type="text/css" href="./Public/home/css/company/editcompany.css"/>
		<link rel="stylesheet" type="text/css" href="./Public/home/css/company/editcompany2.0.css"/>
		<link rel="stylesheet" type="text/css" href="./Public/home/css/lgstyle.css"/>
		
		<!--插件-->
		<link rel="stylesheet" type="text/css" href="./Public/home/css/company/verify.css"/>
		<link rel="stylesheet" type="text/css" href="./Public/uploadify/uploadify.css"/>
		<script src="./Public/home/js/jquery1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="./Public/home/js/jquery.easing.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="./Public/home/js/company/index.js" type="text/javascript" charset="utf-8"></script>
		<script src="./Public/home/js/company/editcompany.js" type="text/javascript" charset="utf-8"></script>
		
		<!--插件-->
		<script src="./Public/home/js/company/editcompany.js" type="text/javascript" charset="utf-8"></script>
		<script src="./Public/uploadify/jquery.uploadify.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="./Public/home/ueditor1_4_3/ueditor.config.js" type="text/javascript" charset="utf-8"></script>
		<script src="./Public/home/ueditor1_4_3/ueditor.all.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="./Public/home/ueditor1_4_3/lang/zh-cn/zh-cn.js" type="text/javascript" charset="utf-8"></script>
		
		<!--百度地图-->
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=B1LsYCHodF9iPnqThStn4H7HjZTlQs9v"></script>

	</head>
	<body>
	<!--顶端头部黑条-->
<header>
	<!--个人信息-->
	<div class="lg_tbar">
		<div class="inner">
			<!--左侧企业版-->
			<div class="lg_tbar_l">
				<ul>
					<li>
						<a href="SurprisePeas" style="border-left: none;padding-left: 0;">
							拉钩O(∩_∩)O
						</a>
					</li>
					<li>
						<a href="SurprisePeas">
							拉勾网首页
						</a>
					</li>
				</ul>

			</div>
			<!--左侧企业版-->

			<!--右侧个人信息-->
			<div class="lg_tbar_r">
				<ul>

					<!--判断有session的时候显示内容-->
					                
					<!--判断是否是求职者-->
					
					<li class="showUser">
						<!--页面显示用户名,账号-->
						<!--<span class="unick"> qiye00001 </span>-->
						<span class="unick"> 膏膏膏 </span>
						<i></i>
						<!--隐藏的个人信息-->
						<ul class="user_dpdown">
							<li>
								<a href="http://c69_guoqing.houdunphp.com/new_lg/index.php?m=Home&c=Persona&a=index">
									账号设置
								</a>
							</li>
							<li>
								<a href="http://c69_guoqing.houdunphp.com/new_lg/index.php?m=Home&c=Company&a=index" target="_blank">
									去企业版
								</a>
							</li>
							<li>
								<a href="http://c69_guoqing.houdunphp.com/new_lg/index.php?m=Home&c=Login&a=out">
									退出
								</a>
							</li>
						</ul>
					</li>
					
					<!--                
					<li class="showUser">
						<span class="unick" style="border: 0;margin-right: -15px;"> qiye00001 </span>
					</li>
					<li>
						<a href="http://c69_guoqing.houdunphp.com/new_lg/index.php?m=Home&c=Login&a=out">
							退出登录
						</a>
					</li>
					
               -->
					
					
					<!--没有session的时候显示登录注册按钮-->
					
					<!--/#判断有session的时候显示内容-->
					
				</ul>
			</div>
			<!--右侧个人信息-->
		</div>
	</div>
	<!--个人信息-->

	<!--导航栏-->
	<div class="lg_tnav">
		<div class="inner">
			<!--logo-->
			<div class="lg_tnav_l">
				<h1 class="logoclass">
				<a href="http://c69_guoqing.houdunphp.com/new_lg/index.php?m=Home&c=Company&a=index">
					<img src="./Public/home/imgs/logo_d0915a9.png" draggable="false"/>
					<span class="qiyeClass">企业版</span>
					<style type="text/css">
						span.qiyeClass{    
							font-weight: 400;
						    font-size: 24px;
						    line-height: 31px;
						    color: #00b38a;
						    position: relative;
						    top: 0;
						    left: 3px;
						    padding: 0 12px;
						    border-left: 1px solid #e1e1e1;
						}
					</style>
				</a>
				</h1>
			</div>
	
			<ul class="lg_tnav_wrap">
				<li>
					<a href="<?php echo U('Company/index')?>" class="current">
						公司
					</a>
				</li>
				<li>
					<a href="<?php echo U('CompanyResume/index')?>">
						简历管理
					</a>
				</li>
				<li>
					<a href="<?php echo U('Job/index')?>">
						职位管理
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--导航栏-->
</header>		
<!--/#企业头部-->

<form action="" method="post">
	<div class="top_info">
		<!--展示模式-->
		<div class="top_info_wrap" style="display: block;">
			<img src="<?php echo $oldData['cplogo'] ? $oldData['cplogo'] : './Public/home/imgs/moren/minion.png' ?>" draggable="false" class="mr_headimg" alt="<?php echo $oldData['cpshortName']?>">
			<div class="company_info">
				<div class="company_main">
					<a href="javascript:void(0);" class="edit">
						<i></i>编辑
					</a>
					<a class="identification">
						<i></i>
						<span>企业认证</span>
					</a>
					<a href="<?php echo U('Company/index',array('cpid'=>$oldData['cpid']))?>" target="_blank" title=""><h1><?php echo $oldData['cpshortName']?$oldData['cpshortName']:$oldData['cpname']?></h1></a>
					
					<div class="company_word">
						<!--公司简介-->
						<?php echo $oldData['cpintro']?$oldData['cpintro']:'还没有填写公司简介...'?>
						<!--/#公司简介-->
					</div>
				</div>
				<div class="company_data">
					<ul>
						<li>
							<!--公司职位发布数量-->
							<strong><?php echo $num?> 个</strong>
							<!--/#公司职位发布数量-->
							<br />
							<span title="该公司的在招职位数量">
								<span>招聘职位</span>
								<span class="tip"></span>
							</span>
							
						</li>
						<li>
							<!--登录时间-->
							<strong><?php echo date('Y-m-d',$userData['lastLoginTime'])?></strong>
							<!--/#登录时间-->
							
							<br />
							<span title="该公司职位管理者最近一次登录时间">
								<span>企业最近登录</span>
								<span class="tip"></span>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<!--编辑模式-->
		<div class="top_info_edit" style="display: none;">
				<div class="company_logo_edit">
					<!--企业logo图标头像-->
					<img src="<?php echo $oldData['cplogo'] ? $oldData['cplogo'] : './Public/home/imgs/company/Cgo8PFW3hEiAMZMYAAD1_Ihf0Z4947.jpg' ?>" class="mr_headimg" alt="<?php echo $oldData['cpshortName']?>">
					<div class="upload_shadow"></div>
					<div class="upload_text">
						<i></i>
						<span>上传LOGO请小于10M<br />尺寸：170px*170px</span>
					</div>
					<!--上传logo标志图片  插件 uploadify-->
					<div lab="uploadFile" class="mr_headfile" id="up_tx">
						<!-- file表单 -->
					    <input id="f" type="file" multiple="true" name="headPic" id="up_tx" class="mr_headfile">
					    <script type="text/javascript">
					        $(function() {
					            $('#f').uploadify({
					                'formData'     : {//POST数据
					                    '<?php echo session_name();?>' : '<?php echo session_id();?>',
					                },
					                'fileTypeExts' : '*.jpg;*.png',
					                'swf'      : '<?php echo __PUBLIC__?>/uploadify/uploadify.swf',
					                'uploader' : '<?php echo U('ajaxF')?>',//指定服务器上传的方法
					                'fileSizeLimit' : '2000KB',
					                'uploadLimit' : 0,//上传文件数
					                'width':170,
					                'height':170,
					                'successTimeout':10,//等待服务器响应时间
					                'removeTimeout' : 0.2,//成功显示时间
					                'onUploadSuccess' : function(file, data, response) {
					                    //把php返回的数据转为json
					                    data=$.parseJSON(data);
					                    //获得图片地址
					                    var imageUrl = data.url;
					                    $(".mr_headimg").attr('src',imageUrl);
					                }
					            });
					        });
					    </script>
					</div>
					<!--/#上传logo插件标志图片-->
				</div>
				<div class="company_info_edit">
					<a href="javascript:void(0);" class="cancel_edit">
						<i></i>取消编辑
					</a>
					<label>
						<span class="redstar">*</span>
						<input type="hidden" name="cpname" value="<?php echo $oldData['cpname']?>" />
						<input type="hidden" name="cpaddress" value="<?php echo $oldData['cpaddress']?>" />
						<input type="hidden" name="license" value="<?php echo $oldData['license']?>" />
						<input type="hidden" name="cpid" value="<?php echo $oldData['cpid']?>" />
						<input type="text" name="cpshortName" id="" value="<?php echo $oldData['cpshortName']?>" placeholder="请输入公司简称，如：拉勾" />
						<span class="red">（公司简称仅能修改1次）</span>
					</label>
					<!--公司名称-->
					<div class="logoname"><?php echo $oldData['cpname']?></div>
					<!--/#公司名称-->
					<label>
						<span class="redstar">*</span>
						<input type="text" name="cpintro" id="" value="<?php echo $oldData['cpintro']?>" placeholder="一句话概括公司亮点，如：公司愿景、领导团队等" class="long"/>
					</label>
					<input type="submit" value="保存" class="save"/>
					<a href="javascript:void(0);" class="cancel">取消</a>
				</div>
				<!--/#头部编辑-->
				
		</div>
	</div>
	<!--/#企业头部结束-->
	
	<!--公司主页导航条-->
	<div class="company_navs">
		<div class="company_navs_wrap">
			<ul>
				<li><a href="<?php echo U('Company/index')?>">公司主页</a></li>
				<!--发布职位统计-->
				<li class="current"><a href="<?php echo U('Company/jobs')?>">招聘职位 (<?php echo $num?>)</a></li>
				<!--/#发布职位统计-->
			</ul>
		</div>
	</div>
	<!--/#公司主页导航条结束-->
	
	<!--主体部分-->
	<div class="main_container">
		<!--左边部分-->
		<div class="container_left">
			<!-----------------------------------------在招聘职位-------------------------------------------------------->
			<div class="item_container" id="company_intro">
				<div class="item_title">共有 <?php echo $num?> 在招聘职位</div>
				<ul id="onlineJob">
					<?php foreach ($jobData as $v){?>
					<li>
						<p class="item_title_data">
							<a href="<?php echo U('Job/content',array('jid'=>$v['jid']))?>" target="_blank"><?php echo $v['jname']?> [<?php echo $v['city_name']['district_name']?>]</a>
							<span><?php echo date('Y-m-d H:i',$v['pubdate'])?> 发布</span>
						</p>
						<p class="item_detail">
							<span class="item_salary"><?php echo $v['money']?>k</span>
							<span class="item_desc">经验<?php echo $v['experience']?> / <?php echo $v['education']?> / <?php echo $v['nature']?></span>
						</p>
						<i></i>
					</li>
					<?php }?>
					
				</ul>
				
			</div>
			<!-----------------------------------------在招聘职位-------------------------------------------------------->
		</div>
		<!--右边部分-->
		<div class="container_right">
			<div class="item_container">
				<div class="item_ltitle">公司基本信息</div>
				<span class="item_ropera2">
					<em></em>
					<span class="item_ropetext">编辑</span>
					
				</span>
				<!--展示模式-->
				<div class="item_content">
					<ul>
						<li>
							<i class="type"></i>
							<!--公司行业领域-->
							<span><?php echo $oldData['industry']?></span>
						</li>
						<li>
							<i class="process"></i>
							<!--公司融资阶段-->
							<span><?php echo $oldData['financing']?></span>
						</li>
						<li>
							<i class="number"></i>
							<!--公司规模-->
							<span><?php echo $oldData['cpscale']?></span>
						</li>
						<li>
							<i class="address"></i>
							<!--公司地址-->
							<span><?php echo $oldData['cpaddress']?></span>
						</li>
						<!--百度地图-->
						<li style="width: 225px;height: 225px;">
					 		<div id="allmap" style="width: 100%;height: 100%;"></div>
							 <!-- 百度地图 -->
							<script type="text/javascript">
								// 百度地图API功能
								var map = new BMap.Map("allmap");
								var point = new BMap.Point(116.331398,39.897445);
								map.centerAndZoom(point,12);
								
								// 创建地址解析器实例
								var myGeo = new BMap.Geocoder();
								// 将地址解析结果显示在地图上,并调整地图视野
								myGeo.getPoint("<?php echo $oldData['cpaddress']?>", function(point){
									if (point) {
										map.centerAndZoom(point, 16);
										var marker = new BMap.Marker(point);  // 创建标注
										map.addOverlay(marker);
										marker.setAnimation(BMAP_ANIMATION_BOUNCE);
									}else{
										alert("您选择地址没有解析到结果!");
									}
								}, "北京市");
								map.enableScrollWheelZoom(true); 
							</script>
						</li>	
					</ul>
				</div>
				<!--编辑模式-->
				<div class="item_content_edit_wrap" style="display: none;">
					<div class="item_content_edit">
							<label>
								<select name="industry">
									<option value="<?php echo $oldData['industry']?>" selected="selected"><?php echo $oldData['industry']?></option>
									<option value="不限">不限</option>
									<option value="移动互联网">移动互联网</option>
									<option value="电子商务">电子商务</option>
									<option value="金融">金融</option>
									<option value="企业服务">企业服务</option>
									<option value="教育">教育</option>
									<option value="文化娱乐">文化娱乐</option>
									<option value="游戏">游戏</option>
									<option value="O2O">O2O</option>
									<option value="硬件">硬件</option>
									<option value="医疗健康">医疗健康</option>
									<option value="生活服务">生活服务</option>
									<option value="广告营销">广告营销</option>
									<option value="旅游">旅游</option>
									<option value="数据服务">数据服务</option>
									<option value="社交网络">社交网络</option>
									<option value="分类信息">分类信息</option>
									<option value="信息安全">信息安全</option>
									<option value="招聘">招聘</option>
									<option value="其他">其他</option>
								</select>
							</label>
							<label>
								<select name="financing">
									<option value="<?php echo $oldData['financing']?>" selected="selected"><?php echo $oldData['financing']?></option>
									<option value="不限">不限</option>
									<option value="未融资">未融资</option>
									<option value="天使轮">天使轮</option>
									<option value="A轮">A轮</option>
									<option value="B轮">B轮</option>
									<option value="C轮">C轮</option>
									<option value="D轮及以上">D轮及以上</option>
									<option value="上市公司">上市公司</option>
									<option value="不需要融资">不需要融资</option>
								</select>
							</label>
							<label>
								<select name="cpscale">
									<option value="<?php echo $oldData['cpscale']?>" selected="selected"><?php echo $oldData['cpscale']?></option>
									<option value="少于15人">少于15人</option>
									<option value="15-50人">15-50人</option>
									<option value="50-150人">50-150人</option>
									<option value="150-500人">150-500人</option>
									<option value="500-2000人">500-2000人</option>
									<option value="2000人以上">2000人以上</option>
								</select>
							</label>
							<label>
								地址：<br />
								<input type="text" placeholder="填写企业详细地址" value="<?php echo $oldData['cpaddress']?>" name="cpaddress" />
							</label>
							<input type="hidden" name="uid" id="uid" value="<?php echo $oldData['uid']?>" />
							<input type="submit" value="保存" class="save" style="margin-left: 20px;"/>
							<a href="javascript:void(0);" class="cancel2">取消</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--主体部分结束-->

	
</form>
	<!--底部备案信息-->
	<!--回到顶部-->
<a href="javascript:void(0);" id="back"></a>
<!--回到顶部结束-->
<!--底部备案信息-->
<footer>
	<div class="wrapper">
		<i></i>
		<div class="copyright">
			<span>唯一可以抱怨的,只是不够努力的自己</span>
			<br />
			<br />
			<span>少一点抱怨,多一点努力!</span>
		</div>
	</div>
</footer>
	
	</body>
</html>