<?php /* Smarty version 3.1.27, created on 2016-05-29 04:17:13
         compiled from "E:\wapm56\apache24\htdocs\zyb10\kh_ganrui\vip\templates\tjgl_date_tiaojian.html" */ ?>
<?php
/*%%SmartyHeaderCode:4628574a6d49c6f983_20251620%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c61e48d3a4b9cefc5f30e4d7d6256f1d42f9ece' => 
    array (
      0 => 'E:\\wapm56\\apache24\\htdocs\\zyb10\\kh_ganrui\\vip\\templates\\tjgl_date_tiaojian.html',
      1 => 1464495429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4628574a6d49c6f983_20251620',
  'variables' => 
  array (
    'pz' => 0,
    'qj' => 0,
    'sptime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_574a6d4ad81083_21494128',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574a6d4ad81083_21494128')) {
function content_574a6d4ad81083_21494128 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4628574a6d49c6f983_20251620';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乐天游乐场售票系统-票种-报表查询条件设定（后台专用）</title>
<link rel="stylesheet" type="text/css" href="./templates/css/demo.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="../JS/jquery-1.11.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/lib/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/lib/jquery.form.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/jquery.validate.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../jquery-validation-1.9.0/lib/jquery.metadata.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">


function check_date(s){
	var a = /^(\d{4})-(\d{2})-(\d{2})$/
	if (!a.test(s)) { 
	alert("日期格式不正确!") 
	return false 
	}else{
	return true 
	} 
}

function IsDate(mystring) {  
      var   reg   =   /^(\d{4})-(\d{2})-(\d{2})$/;  
      var   str   =   mystring;  
      var   arr   =   reg.exec(str);  
      if   (str=="")   return   true;  
      if   (!reg.test(str)&&RegExp.$2<=12&&RegExp.$3<=31){  
        alert("请保证输入的日期格式为yyyy-mm-dd或正确的日期格式!");  
        return   false;  
        } else {
        return   true;  
        }
    }   	
	
	
//function create_code(){
//  document.getElementById('code').src = 'yanzhengma.php?n='+Math.random()*10000;
//}

$(document).ready(function(){
  $(".box_more :checkbox").click(function(){
    if ($(this).is(':checked')) {
      $('.form_part_3').slideDown();
      $('.change_text').text("收起");
    }else{
      $('.form_part_3').slideUp();
      $('.change_text').text("填写更多资料");
    }
    
  });
});

$(function(){
    <!--双击移动-->
    $("#left_1").dblclick(function(){
      $("option:selected",this).appendTo("#right_1");    //移动所有被选中的option，追加到另一个select中
    });
    $("#right_1").dblclick(function(){
      $("option:selected",this).appendTo("#left_1");
    });
    
    $("#toRight_1").click(function(){
      $("#left_1 option:selected").appendTo("#right_1");
    });
    $("#toLeft_1").click(function(){
      $("#right_1 option:selected").appendTo("#left_1");
    });
    
    $("#left_2").dblclick(function(){
        $("option:selected",this).appendTo("#right_2");    //移动所有被选中的option，追加到另一个select中
      });
      $("#right_2").dblclick(function(){
        $("option:selected",this).appendTo("#left_2");
      });
      
      $("#toRight_2").click(function(){
        $("#left_2 option:selected").appendTo("#right_2");
      });
      $("#toLeft_2").click(function(){
        $("#right_2 option:selected").appendTo("#left_2");
      });
      
  });

$(function(){

  $("#form_regist").validate({


    onsubmit:true,
    // 是否在提交时验证,默认:true
    //onfocusout:false,
    // 是否在获取焦点时验证,默认:true
    onkeyup :true,
    // 是否在敲击键盘时验证,默认:true
    onclick:false,
    // 是否在鼠标点击时验证（一般验证checkbox,radiobox）
    focusCleanup:true,
    // 当未通过验证的元素获得焦点时,并移除错误提示
    focusInvalid: true,
    //是否把焦点聚焦在最后一个动作或者最近的一次出错上 
    submitHandler:
    //通过验证后运行的函数,里面要加上表单提交的函数,否则表单不会提交 
    $(".selector").validate({
      submitHandler:function(form) {
      alert("验证通过");
      //$(form).ajaxSubmit();
      form.submit();
         }
    }),
      // yanzhengma: {
      //   function(){
      //     doyzm()
      //   },
      // },
    rules: {
      txtrq_1: {minlength:10,maxlength:10},
      //可以不填，最小长度为10，最大长度为10。
      txtrq_2: {minlength:10,maxlength:10},
      //可以不填，最小长度为10，最大长度为10。

      txtzs_1: {number: true,min:1,max:150000},
      //可以不填，必须为数字。
      txtzs_2: {number: true,min:1,max:150000},
      //可以不填，必须为数字。
      txtysje_1: {number: true,min:1,max:150000},
      //可以不填，必须为数字。
      txtysje_2: {number: true,min:1,max:150000},
      //可以不填，必须为数字。
      txtssje_1: {number: true,min:1,max:150000},
      //可以不填，必须为数字。
      txtssje_2: {number: true,min:1,max:150000},
      //可以不填，必须为数字。
      txtzl_1: {number: true,min:0,max:150000},
      //可以不填，必须为数字。
      txtzl_2: {number: true,min:0,max:150000},
      //可以不填，必须为数字。
      
      txtcheckpassword: {required:true,minlength:6,maxlength:16,equalTo:'#yd631_pws1'},
      //必填项，长度为6至16个字符，两次密码输入必须相同，有问题将“保存用户注册信息”按钮失效。
      yd631_age: {number: true,min:10,max:150},
      //要求为正整数且位于10和150之间，有问题将“保存用户注册信息”按钮失效。
      yd631_call: {number: true},
      //要求为正整数，有问题将“保存用户注册信息”按钮失效。

      txtemail: {required:true,email:true},
      //必填项，输入格式为邮箱格式，有问题将“保存用户注册信息”按钮失效。
      txtecheckmail: {required:true,email:true,equalTo:'#yd631_email1'},
      //必填项输入格式为邮箱格式，两次邮箱输入必须相同，有问题将“保存用户注册信息”按钮失效。
    },
    //下面为提示信息
    messages: {
	txtrq_1: {minlength: "最短长度（10） 。",maxlength: "最大长度（10）。"},
	txtrq_2: {minlength: "最短长度（10） 。",maxlength: "最大长度（10）。"},

	txtzs_1: {number: "必须为数字!",min:"最小为1",max:"最大为150000"},
	txtzs_2: {number: "必须为数字!",min:"最小为1",max:"最大为150000"},

	txtysje_1: {number: "必须为数字!",min:"最小为1",max:"最大为150000"},
	txtysje_2: {number: "必须为数字!",min:"最小为1",max:"最大为150000"},
	
	txtssje_1: {number: "必须为数字!",min:"最小为1",max:"最大为150000"},
	txtssje_2: {number: "必须为数字!",min:"最小为1",max:"最大为150000"},

	txtzl_1: {number: "必须为数字!",min:"最小为0",max:"最大为150000"},
	txtzl_2: {number: "必须为数字!",min:"最小为0",max:"最大为150000"},
	
    txtloginname: {required: "用户名不能为空!",minlength: "用户名长度至少是 2 。",maxlength: "用户名超过允许的最大长度（8）。"},
    txtPassword: {required: "密码不能为空!",minlength: "密码长度至少是6位!",maxlength: "密码长度最长是16位!"},
    txtcheckpassword: {required: "重复密码不能为空!",minlength: "重复密码长度至少是6位!", maxlength: "重复密码长度最长是16位!",equalTo:"两次输入的密码不相同!"},
    yd631_age: {number: "年龄应该为数字!",min:"年龄最小有误（10岁）!",max:"年龄最大有误（最大150岁）!"},
    yd631_call: {number: "电话号码应该为数字!"},
    txtemail: {required: "email地址不能为空!",email: "请输入正确格式的email!"},},
    errorElement:'span',
    errorPlacement: function(error, element) {
    element.parent().find('.in_info').html(error);                    
      },
    
  });


});



//用户名称验证
 function doAjax() {
  //alert('action=check&username='+escape($('#yd631_name').val()));
 $.ajax({
    url: "member57.php",     //提交的动态页面地址
    data: 'action=check&username='+ $('#yd631_name').val() ,   //提交过去的参数
    type:'post',   //上面的参数会以POST形式提交给后台
    dataType:"html",   //返回纯文本HTML信息
    beforeSend: function(XMLHttpRequest){
//----------------------------------------------------



      //通过表单验证插件实施验证。
      //ShowLoading('验证中');
      //alert('验证中');



//-------------------------------------------------
    },
    success: function(data){
      if ('0'==data) {/*没有被注册*/
        $("#loginname_sign").html("<span style='color:green;line-height:30px;'>恭喜您，用户名可以使用</span>");
      }else if ('1'==data) {/*已经被注册*/
        $("#loginname_sign").html("<span style='color:red;line-height:30px;'>用户名已被注册</span>");
      }else {/*条件不对*/
        $("#saveregid").attr("disabled", true);
        $("#loginname_sign").html(data);
      }
    },
    complete: function(XMLHttpRequest, textStatus){
      //HideLoading();
    },
  });

    }

//验证码验证
 function doyzm() {
  //alert('action=check&username='+escape($('#yd631_name').val()));
 $.ajax({
    url: "yzm.php",     //提交的动态页面地址
    data: 'action=check&yzm='+ $('#yanzhengma').val() ,   //提交过去的参数
    type:'post',   //上面的参数会以POST形式提交给后台
    dataType:"html",   //返回纯文本HTML信息
    beforeSend: function(XMLHttpRequest){

    },
    success: function(data){
      if ('0'==data) {/*没有被注册*/
        $("#yzm").html("<span style='color:green;line-height:30px;'>验证码正确</span>");
      }else if ('1'==data) {/*已经被注册*/
        $("#yzm").html("<span style='color:red;line-height:30px;'>验证码错误</span>");
      }else {/*条件不对*/
        $("#saveregid").attr("disabled", true);
        $("#yzm").html(data);
      }
    },
    complete: function(XMLHttpRequest, textStatus){
      //HideLoading();
    },
  });

    }


<?php echo '</script'; ?>
>
</head>

<body>

<form class="cmxform" id="form_regist" method="post" action="index.php?action=tjgl_date_tj">
<table width="100%">
	<tr align="center" >
		<td align="center"> <strong>乐天游乐场售票系统-票种-报表统计条件设定   （后台）</strong>||<a href="index.php?action=tjgl"> 返   回   </a></td>
	</tr>
</table>
  <table width="100%" height="1000"  border="0" cellpadding="0" cellspacing="1" bgcolor="#000000">
	<tr bgcolor="#CCCCCC">
 	   <td width="85%" align="right">票种 in（在）</td>
    	<td align="left">
 	  		<select class="in" id="left_1" style="width:80px;height:130px" multiple>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pz']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
					<option value='<?php echo $_smarty_tpl->tpl_vars['pz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['pz'];?>
'><?php echo $_smarty_tpl->tpl_vars['pz']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
				<?php endfor; endif; ?>
			</select><span span class="in_info" style="line-height:30px;">提示:1.可通过双击选择 2.按住ctrl可多选</span>
		</td>
		<td  align="left">
			<input class="in" type="button" id="toRight_1"  value=">|" style="width:50px;height:20px" />
		</td>
		<td  align="left">
			<input class="in" type="button" id="toLeft_1"  value="|<" style="width:50px;height:20px" />
		</td>
		<td align="left">
			<select class="in" id="right_1" name="everwhere_1[]" style="width:80px;height:130px" multiple></select><span span class="in_info" style="line-height:30px;">提示:1.可通过双击选择 2.按住ctrl可多选</span>
    	</td>
    </tr>
    
	<tr bgcolor="#CCCCCC">
		<td width="15%" align="right">期间 in（在）</td>
    	<td align="left">
			<select class="in" id="left_2" style="width:80px;height:130px" multiple>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['qj']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
					<option value='<?php echo $_smarty_tpl->tpl_vars['qj']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['qj'];?>
'><?php echo $_smarty_tpl->tpl_vars['qj']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
				<?php endfor; endif; ?>
			</select><span span class="in_info" style="line-height:30px;">提示:1.可通过双击选择 2.按住ctrl可多选</span>
		</td>
		<td align="left">
			<input class="in" type="button" id="toRight_2"  value=">|" style="width:50px;height:20px" />
		</td>
		<td align="left">
			<input class="in" type="button" id="toLeft_2"  value="|<" style="width:50px;height:20px" />
		</td>
		<td align="left">
			<select class="in" id="right_2" name="everwhere_2[]" style="width:80px;height:130px" multiple></select><span span class="in_info" style="line-height:30px;">提示:1.可通过双击选择 2.按住ctrl可多选</span>
	   	</td>
    </tr>
    
<tr bgcolor="#CCCCCC">       
	<td width="85%" align="right">售票日期 》= </td>
	<td width="85%" align="left"><input class="in" name="txtrq_1" type="text" id="txtrq_1" value = <?php echo $_smarty_tpl->tpl_vars['sptime']->value;?>
 onchange=" javascript:check_date(this.value);" ><span id="loginname_sign" class="in_info">请输入正确的日期格式YYYY-MM-DD。如2016-04-22</span></td>
	<td  align="left"></td>
	<td  align="left"></td>
	<td align="left"></td>
</tr>
<tr bgcolor="#CCCCCC">       
	<td width="15%" align="right">售票日期 《= </td>
	<td width="85%" align="left"><input class="in" name="txtrq_2" type="text" id="txtrq_2" value = <?php echo $_smarty_tpl->tpl_vars['sptime']->value;?>
 onchange=" javascript:check_date(this.value);"  /><span id="loginname_sign" class="in_info">请输入正确的日期格式YYYY-MM-DD。如2016-04-22</span></td>
	<td  align="left"></td>
	<td  align="left"></td>
	<td align="left"></td>
</tr>
 
<tr align="center" bgcolor="#CCCCCC">
	<td colspan="2"><li>
    <input type="submit" name="submit" id = "tijiao" value="  确      认   " ></li><span class="in_info">注：如果什么都不输入则查全部，特此说明！</span></td>　
	<td  align="left"></td>
	<td align="left"></td>
	<td align="left"></td>
</tr>
</table>

<table width="100%">
	<tr align="center" >
		<td align="center"> <strong>乐天游乐场售票系统-报表统计条件设定   （后台）</strong>||<a href="index.php?action=hygl"> 返   回   </a></td>
	</tr>
</table>
</form>
</body>
</html><?php }
}
?>