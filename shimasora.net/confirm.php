<?php


$back_url = "./";
$action_url = 'mail.php';


session_start();
error_reporting(0);


$name='';
if(isset($_POST['name'])){
  $_SESSION['contact_sima']['name'] = $_POST['name'];
  $name = $_SESSION['contact_sima']['name'];
}
$count='';
if(isset($_POST['count'])){
  $_SESSION['contact_sima']['count'] = $_POST['count'];
  $count = $_SESSION['contact_sima']['count'];
}
$tel='';
if(isset($_POST['tel'])){
  $_SESSION['contact_sima']['tel'] = $_POST['tel'];
  $tel = $_SESSION['contact_sima']['tel'];
}
$address='';
if(isset($_POST['address'])){
  $_SESSION['contact_sima']['address'] = $_POST['address'];
  $address = $_SESSION['contact_sima']['address'];
}
$email='';
if(isset($_POST['email'])){
  $_SESSION['contact_sima']['email'] = $_POST['email'];
  $email = $_SESSION['contact_sima']['email'];
}
$lineid='';
if(isset($_POST['lineid'])){
  $_SESSION['contact_sima']['lineid'] = $_POST['lineid'];
  $lineid = $_SESSION['contact_sima']['lineid'];
}
$option_cnt='';
if(isset($_POST['option_cnt'])){
  $_SESSION['contact_sima']['option_cnt'] = $_POST['option_cnt'];
  $option_cnt = $_SESSION['contact_sima']['option_cnt'];
}
$option_add='';
if(isset($_POST['option_add'])){
  $_SESSION['contact_sima']['option_add'] = $_POST['option_add'];
  $option_add = $_SESSION['contact_sima']['option_add'];
}
$cal='';
if(isset($_POST['cal'])){
  $_SESSION['contact_sima']['cal'] = $_POST['cal'];
  $cal = $_SESSION['contact_sima']['cal'];
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css; charset=utf-8" />
<meta http-equiv="content-language" content="ja">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=0.5,user-scalable=yes,initial-scale=1.0">
<title>感動を超えた感動の空へ | shimasora</title>
<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
<link rel="apple-touch-icon" href="" />
<meta name="description" content="" />
<meta name="Keywords" content="" />
<link href="css/style.css?<?= date('YmdHi');?>" rel="stylesheet" media="all">
<link href="css/style_sp.css?<?= date('YmdHi');?>" rel="stylesheet" media="all">
<link href="css/style_an.css?<?= date('YmdHi');?>" rel="stylesheet" media="all">
<!-- [if lt IE 9]>
<script src="./js/html5shiv-printshiv.min.js"></script>
<![end if]-->
<script src="js/picturefill.min.js" async></script>


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js" type="text/javascript"></script>


<script type="text/javascript" src='js/main.js?<?= date('YmdHi');?>'></script>
<link href="css/animations.css" rel="stylesheet" media="all">

<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<script>


// シンプルバージョン

$(function(){
  $('#submit_conf').click(function(){
    return check1('#email');
  });

  function check1(emailID){
    var email = true;

    if( $(emailID).length ){
      var element = $(emailID);
      element.val(element.val().replace(/\s+/g, ""));
      if( element.val() == '' ){
        email = false;
      }else{
        if( !(element.val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@[\w\.-]+\.\w{2,}$/)) ){
          email = false;
        }else{
          email = true;
        }
      }
    }
    if( email==true){
      $('#err_msg').html('');
      return true;
    }else{
      $('#err_msg').html('※入力画面へお戻りください※');
      window.alert('お申込みに必要な情報が不足しております。\n入力画面に戻り必要情報をご入力ください。');
      return false;
    }
  }
});
</script>

<?php //moon 20191021  ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144555558-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144555558-11');
</script>

</head>
<body class="font_sawarabi conf white back_black">


<main id="wrapper">


  <article  class="back_bg2 contents1800">
    <section class="contents relative">
      <p><img src="./img/sh_th1.png"></p>


      <div class="mw500 w85 cm">
        <p class="padding1"></p>
        <p class="font28 c b">入力内容をご確認ください。</p>
        <p class="padding20"></p>

        <div class="view font22">
          <div class="clearfix">
            <div>お客様名</div>
            <div><?= $name;?></div>
          </div>

          <div class="clearfix">
            <div>参加人数</div>
            <div><?= $count;?></div>
          </div>

          <div class="clearfix">
            <div>お電話番号</div>
            <div><?= $tel;?></div>
          </div>

          <div class="clearfix">
            <div>ご住所</div>
            <div><?= $address;?></div>
          </div>

          <div class="clearfix">
            <div>メールアドレス</div>
            <div><?= $email;?></div>
          </div>

          <div class="clearfix">
            <div>LINE ID</div>
            <div><?= $lineid;?></div>
          </div>

          <div class="clearfix">
            <div>追加プラン</div>
            <div><?= $option_add;?></div>
          </div>

          <div class="clearfix">
            <div>追加希望数</div>
            <div><?= $option_cnt;?></div>
          </div>

          <div class="clearfix">
            <div>ご参加希望日</div>
            <div><?= $cal;?></div>
          </div>

        </div>
      </div>

      <p class="padding10"></p>
      <p id="err_msg" class="font22 orange c b"></p>
      <p class="padding10"></p>
      <form id="form_conf" action="<?= $action_url;?>" method="post" accept-charset="utf-8">
        <input type="hidden" name="name" value="<?= $name;?>">
        <input type="hidden" name="count" value="<?= $count;?>">
        <input type="hidden" name="tel" value="<?= $tel;?>">
        <input type="hidden" name="address" value="<?= $address;?>">
        <input type="hidden" name="email" value="<?= $email;?>" id="email">
        <input type="hidden" name="lineid" value="<?= $lineid;?>">
        <input type="hidden" name="option_add" value="<?= $option_add;?>">
        <input type="hidden" name="option_cnt" value="<?= $option_cnt;?>">
        <input type="hidden" name="cal" value="<?= $cal;?>">

        <div class="mw500 w85 cm font38">
          <button type="submit" id="submit_conf" class="submit_btn font_sawarabi relative black back_white c w100">
            <p>申し込む</p>
          </button>
        </div>

      </form>


      <p class="padding15"></p>
      <form id="form_conf" action="<?= $back_url;?>" method="post" accept-charset="utf-8">
        <input type="hidden" name="name" value="<?= $name;?>">
        <input type="hidden" name="count" value="<?= $count;?>">
        <input type="hidden" name="tel" value="<?= $tel;?>">
        <input type="hidden" name="address" value="<?= $address;?>">
        <input type="hidden" name="email" value="<?= $email;?>" id="email">
        <input type="hidden" name="lineid" value="<?= $lineid;?>">
        <input type="hidden" name="option_add" value="<?= $option_add;?>">
        <input type="hidden" name="option_cnt" value="<?= $option_cnt;?>">
        <input type="hidden" name="cal" value="<?= $cal;?>">

        <button type="submit" class="relative z2 mw500 cm w85 c">
          <p class="back_btn inline_B relative font_sawarabi b c white font22">入力画面に戻る</p>
        </button>
      </form>




      <p class="padding30"></p>
    </section>


  </article>
</main>




<footer>
  <div class="copyright">
    <p>Copyright&copy; 2019 shimasora × Miyaconcier <span class="hidden600">|</span><br class="visible600"> <a href="terms.php">ご利用規約</a></p>
  </div>
</footer>
<script src="js/css3-animate-it.js"></script>

</body>
</html>