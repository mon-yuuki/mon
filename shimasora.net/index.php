<?php


$url_miyako = 'https://miyaconcier.com';
$action_url = 'confirm.php';

$line_url = 'https://lin.ee/BOseZlV';


$kousiki_lineURL = 'http://nav.cx/cLEulHf';
$kousiki_lineID = '@00000';


session_start();

$name='';
if(isset($_SESSION['contact_sima']['name'])){
  $name = $_SESSION['contact_sima']['name'];
}
$count='';
if(isset($_SESSION['contact_sima']['count'])){
  $count = $_SESSION['contact_sima']['count'];
}
$tel='';
if(isset($_SESSION['contact_sima']['tel'])){
  $tel = $_SESSION['contact_sima']['tel'];
}
$address='';
if(isset($_SESSION['contact_sima']['address'])){
  $address = $_SESSION['contact_sima']['address'];
}
$email='';
if(isset($_SESSION['contact_sima']['email'])){
  $email = $_SESSION['contact_sima']['email'];
}
$lineid='';
if(isset($_SESSION['contact_sima']['lineid'])){
  $lineid = $_SESSION['contact_sima']['lineid'];
}
$option_cnt='';
if(isset($_SESSION['contact_sima']['option_cnt'])){
  $option_cnt = $_SESSION['contact_sima']['option_cnt'];
}
$option_add='';
if(isset($_SESSION['contact_sima']['option_add'])){
  $option_add = $_SESSION['contact_sima']['option_add'];
}
$cal='';
if(isset($_SESSION['contact_sima']['cal'])){
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

<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho&amp;subset=japanese" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link href="./css/datepicker.css" rel="stylesheet" type="text/css">
<script src="./js/datepicker.min.js"></script>
<!-- Include jp language -->
<script src="./js/i18n/datepicker.jp.js"></script>

<link href="./css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
<script src="./js/jquery.validationEngine.js"></script>
<script src="./js/jquery.validationEngine-ja.js"></script>

<script>
// バリデーション調整
$(document).ready(function(){
  $("#form").validationEngine('attach', {
    promptPosition:"bottomLeft",
    promptPosition:"inline"
  });
});

// チェックボックス、セレクトボックス戻り値
$(function() {
  $(window).on('load', function(){
    var op1 = '<?= $option_cnt;?>';
    if(op1==''){
      $('#option_cnt').val("0");
    }else{
      $('#option_cnt').val("<?= $option_cnt;?>");
      box_checked();
    }
  });

  $('#option_cnt').change(function() {
    box_checked();
  });
  $('#option_add').change(function() {
    if($('#option_add').prop('checked', false)){
      $('#option_cnt').val("0");
    }
  });

  function box_checked(){
    if($('#option_cnt').val() > 0){
      $('#option_add').prop('checked', true);
    }else{
      $('#option_add').prop('checked', false);
    }
  }
});


// グローバルナビ
$(function() {
  $('.toggle').click(function() {
    $(this).toggleClass("active");
    if($(this).hasClass('active')) {
      $('.global_nav').addClass('active');
    } else {
      $('.global_nav').removeClass('active');
    }
  });
  $('.global_nav a').click(function() {
    $('.toggle').toggleClass("active");
    if($('.toggle').hasClass('active')) {
      $('.global_nav').addClass('active');
    } else {
      $('.global_nav').removeClass('active');
    }
  });


  $(window).on('load resize scroll', function(){
    var nav_check = $('#nav_check').offset().top;
    var w = $(window).scrollTop();

    var apply = $('#apply').offset().top;
    var apply_end = $('#apply_end').offset().top;
    <?php /*
    console.log('w: '+w);
    console.log('apply: '+apply);
    console.log('apply_end: '+apply_end);
    */ ?>

    if(nav_check <= w){
      if(apply <= w && apply_end > w){
        $('#nav_line').removeClass('active');
      }
      else{
        $('#nav_line').addClass('active');
      }
    }
    else{
      $('#nav_line').removeClass('active');
    }
  });
});
</script>


<link href="./css/slick-theme.css" rel="stylesheet" type="text/css">
<link href="./css/slick.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./js/slick.min.js"></script>

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
<body class="font_sawarabi back_black white home">


<header>
  <div class="top_logo pointer_evNone">
    <p class="logoimg"><img class="w100" src="./img/sh_h01.png" alt=""></p>
  </div>
  <div id="nav" class="">
    <div class="toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="global_nav">
      <ul>
        <li><a href="#merit">Merit</a></li>
        <li><a href="#moving">Moving experience</a></li>
        <li><a href="#tour">Tour fare</a></li>
        <li><a href="#apply">Apply</a></li>
      </ul>
    </nav>
  </div>
</header>
<div id="nav_line">
  <a class="hidden900" href="#official_line"><img src="./img/rent_si05.png"></a>
  <a class="visible900" href="#official_line"><img src="./img/rent_si05sp.png"></a>
</div>

<main id="wrapper">

  <article id="top">
    <section class="sima01 contentsfull">
      <picture>
        <source media="(min-width: 902px)" srcset="./img/sh_t03.png">
        <img src="./img/sh_t03_sp.png">
      </picture>
    </section>
  </article>


  <article>
    <section class="sima02 contentsfull relative">
      <div>
        <picture>
          <source media="(min-width: 902px)" srcset="./img/sh_t02.png">
          <img src="./img/sh_t02_sp.png">
        </picture>
      </div>
      <p class="absolute sima02_1 w100"><img class="cm" src="./img/sh_t01.png" alt=""></p>
    </section>
  </article>

  <article class="back_black relative z2">
    <section class="sima03 contentsfull relative">
      <div>
        <picture>
          <source media="(min-width: 902px)" srcset="./img/sh_t04.png">
          <img src="./img/sh_t04_sp.png">
        </picture>
      </div>

    </section>

    <section class="sima04 contentsfull relative z2">
      <div class="hidden900">
        <video class="block" id="video" poster="" class="mov" width="100%" webkit-playsinline playsinline loop muted="" autoplay>
          <source src="./mp4/sh_movie.mp4"  type="video/mp4">
          <source src="./img/sh_movie.png">
        </video>
      </div>
      <div class="visible900">
        <video class="block" id="video" poster="" class="mov" width="100%" webkit-playsinline playsinline loop muted="" autoplay>
          <source src="./mp4/sh_movie_sp.mp4"  type="video/mp4">
          <source src="./img/sh_movie_sp.png">
        </video>
      </div>

    </section>

    <section class="sima05 contentsfull relative">
      <p id="nav_check"></p>
      <p id="merit"></p>
      <div>
        <picture>
          <source media="(min-width: 902px)" srcset="./img/sh_m01.png">
          <img src="./img/sh_m01_sp.png">
        </picture>
      </div>
    </section>

    <section class="sima06 contentsfull relative">
      <p id="moving"></p>
      <div>
        <picture>
          <source media="(min-width: 902px)" srcset="./img/sh_e01.png">
          <img src="./img/sh_e01_sp.png">
        </picture>
      </div>


      <!-- スライダー 切り替え -->
      <div class="back_white_op50 btm_abs w100">
        <div class="sima07_lists clearfix cm relative">
          <div>
            <picture>
              <source media="(min-width: 902px)" srcset="./img/sh_e02.png">
              <img src="./img/sh_e02_sp.png">
            </picture>
          </div>
          <div class="sima07_lists_sub clearfix">
            <div class="pointer">
              <button id="sw1">
                <picture>
                  <source media="(min-width: 902px)" srcset="./img/sh_e03a.png">
                  <img src="./img/sh_e03a_sp.png">
                </picture>
              </button>
            </div>
            <div class="pointer">
              <button id="sw2">
                <picture>
                  <source media="(min-width: 902px)" srcset="./img/sh_e04a.png">
                  <img src="./img/sh_e04a_sp.png">
                </picture>
              </button>
            </div>
            <div class="pointer">
              <button id="sw3">
                <picture>
                  <source media="(min-width: 902px)" srcset="./img/sh_e05a.png">
                  <img src="./img/sh_e05a_sp.png">
                </picture>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sima08 contentsfull relative">
      <ul class="slider">
        <li>
          <div>
            <picture>
              <source media="(min-width: 902px)" srcset="./img/sh_e03b.png">
              <img src="./img/sh_e03b_sp.png">
            </picture>
          </div>
        </li>
        <li>
          <div>
            <picture>
              <source media="(min-width: 902px)" srcset="./img/sh_e04b.png">
              <img src="./img/sh_e04b_sp.png">
            </picture>
          </div>
        </li>
        <li>
          <div>
            <picture>
              <source media="(min-width: 902px)" srcset="./img/sh_e05b.png">
              <img src="./img/sh_e05b_sp.png">
            </picture>
          </div>
        </li>
      </ul>
    </section>

  </article>


  <article class="back_bg relative z2">
    <section class="sima09 contentsfull relative">
      <p id="tour"></p>
      <div class="sima09_1"><img class="cm" src="./img/sh_f01.png"></div>
    </section>

    <section class="sima09a contents relative">
      <p class="padding3"></p>

      <div class="sima09a_1 cm w90 font20 relative">
        <div>
          <div class="sima09a_1in absolute">
            <div>
              <div><img src="./img/sh_f03.png"></div>
              <div><a class="white" href="tel:05037096279">050-3709-6279</a></div>
            </div>
            <div>
              <div><img src="./img/sh_f05.png"></div>
              <div><a class="white" href="<?= $line_url;?>" target= "_blank">LINE公式ID：@271nexvc</a></div>
            </div>
          </div>
        </div>
        <div><div><img src="./img/sh_f06.png"></div></div>
      </div>

      <p class="padding6"></p>
      <p class="sima09a_2 font16 w90 c cm span"><span>※スマートフォンの方は</span><span>LINE IDを</span><span>タップすると</span><span>すぐ友だち追加が出来ます。</span></p>
      <p class="padding8"></p>

    </section>




    <section class="sima10 back_white_op50 contentsfull relative">
      <div class="contents font25">
        <p class="padding3"></p>
        <p class="sima10_1 w90 cm">シマソラにお申込み・ご参加のお客様は、<br>宮古島ツアーMiyaconcierの料金を1,000円オフにてご案内致します。</p>
        <p class="padding3"></p>
      </div>

      <div class="loopimg">
        <div><div class="loop loop_ani"></div></div>
      </div>

      <div class="contents r font25">
        <p class="padding2"></p>
        <p class="w90 cm"><a class="white h_line" href="<?= $url_miyako;?>" target="_blank">宮古島ツアーMiyaconcierをcheck!</a></p>
        <p class="padding2"></p>
      </div>
    </section>



    <section class="sima10a contents relative">
      <p id="official_line"></p>
      <div class="img_center">
        <picture>
          <source media="(min-width: 902px)" srcset="./img/rent_si01.png">
          <img src="./img/rent_si01sp.png">
        </picture>
      </div>

      <div class="sima10a_1 cm">
        <div class="box1 font22">
          <div class="box1a">
            <div><img src="./img/rent_si02.png"></div>
            <div class="clipboard" data-clipboard-target="#copy"><p>ID：<span id="copy"><?= $kousiki_lineID; ?></span></p></div>
          </div>
          <div class="box1b">
            <a href="<?= $kousiki_lineURL;?>" target="_blank"><img src="./img/rent_si03.png"></a>
          </div>
        </div>

        <div class="box2">
          <p class="font18">▼ LINE追加</p>
          <p><img src="./img/rent_si04.png"></p>
        </div>
      </div>
    </section>



    <section class="sima11 contentsfull relative">
      <p id="apply"></p>
      <div>
        <p class="sima11_1"><img class="cm" src="./img/sh_a01.png"></p>
      </div>
    </section>










    <section class="sima12 relative z2">
      <div class="relative">
        <div class="mw1200 cm w85">

          <form id="form" action="<?= $action_url;?>" method="post" accept-charset="utf-8">

           <table class="form_tx_base w100"><tbody><tr>
              <td>
                <div class="form_tx font22 lh1_2 essential">
                  <div>
                    <p>お客様名</p>
                    <input type="text" name="name" id="name" class="validate[required] text-input" value="<?= $name;?>">
                  </div>

                  <div>
                    <p>参加人数</p>
                    <input type="text" name="count" id="count" class="validate[required] text-input" value="<?= $count;?>">
                  </div>

                  <div>
                    <p>お電話番号</p>
                    <input type="text" name="tel" id="tel" class="validate[required] text-input" value="<?= $tel;?>">
                  </div>

                  <div>
                    <p>ご住所</p>
                    <input type="text" name="address" id="address" class="validate[required] text-input" value="<?= $address;?>">
                  </div>

                  <div>
                    <p>メールアドレス</p>
                    <input type="text" name="email" id="email" class="validate[required,custom[email]] text-input" value="<?= $email;?>">
                  </div>

                  <div>
                    <p>LINE ID<span class="fontS">(任意)</span></p>
                    <input type="text" name="lineid" id="lineid" class="" value="<?= $lineid;?>">
                  </div>

                  <div class="span">
                    <p><span>追加プラン</span> <span class="fontSS2 lt_004">※ライトセーバーを使用しての撮影をご希望の方</span></p>


                    <table class="form_tx_oplists w100"><tbody><tr>
                      <td>
                        <div class="check_box clearfix">
                          <div>
                            <input type="checkbox" name="option_add" id="option_add" value="あり">
                            <label for="option_add">
                              <div><span class="fontS">追加希望数</span></div>
                            </label>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="wrap">
                          <select name="option_cnt" id="option_cnt">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                          </select>
                        </div>
                      </td>
                    </tr></tbody></table>

                  </div>

                </div>
              </td>
              <td class="relative">
                <div class="form_tx font22 lh1_2 essential">
                  <div>
                    <p>ご参加希望日 <i id="cal_reset" class="fas fa-trash-alt fontS pointer"></i></p>
                    <input type="text" name="cal" class="validate[required] text-input" readonly="" id="cal" class="datepicker-here" data-multiple-dates="3" data-multiple-dates-separator=", " data-position='top left' value="<?= $cal;?>">
                  </div>

                  <p class="padding10"></p>
                  <p id="apply_end"></p>
                  <div class="submit_btnbase btm_abs w100">
                    <button type="submit" id="submit" class="submit_btn font_sawarabi relative black back_white c font28 w100">
                      <p>申し込む</p>
                    </button>
                  </div>
                </div>
              </td>
            </tr></tbody></table>

            <div class=" clearfix">


            </div>



          </form>
          <div class="visible900"><p class="padding10"></p></div>
          <p class="padding30"></p>
        </div>
      </div>

    </section>



    <section class="sima13 contentsfull relative">
      <div>
        <ul id="ft_slide">
          <li>
            <div>
              <picture>
                <source media="(min-width: 902px)" srcset="./img/sh_a03a.png">
                <img src="./img/sh_a03a_sp.png">
              </picture>
            </div>
          </li>
          <li>
            <div>
              <picture>
                <source media="(min-width: 902px)" srcset="./img/sh_a03b.png">
                <img src="./img/sh_a03b_sp.png">
              </picture>
            </div>
          </li>
          <li>
            <div>
              <picture>
                <source media="(min-width: 902px)" srcset="./img/sh_a03c.png">
                <img src="./img/sh_a03c_sp.png">
              </picture>
            </div>
          </li>
        </ul>
      </div>

      <p class="absolute sima13_1 w100"><img class="cm" src="./img/sh_a02.png"></p>
    </section>

  </article>
</main>




<footer>
  <div class="copyright">
    <p>Copyright&copy; 2019 shimasora × Miyaconcier <span class="hidden600">|</span><br class="visible600"> <a href="terms.php">ご利用規約</a></p>
  </div>
</footer>
<script src="js/css3-animate-it.js"></script>


<script>
  $('.slider').slick({
    autoplay:false,
    autoplaySpeed:5000,
    pauseOnFocus:false,
    pauseOnHover:false
  });
  $('#sw1').on('click',function(){
    $('.slider').slick('slickGoTo',0);
  });
  $('#sw2').on('click',function(){
    $('.slider').slick('slickGoTo',1);
  });
  $('#sw3').on('click',function(){
    $('.slider').slick('slickGoTo',2);
  });

  $('#ft_slide').slick({
    autoplay:true,
    autoplaySpeed:1000,
    speed: 5000,
    fade: true,
    prevArrow: '',
    nextArrow: '',
    pauseOnFocus:false,
    pauseOnHover:false
  });
</script>

<script>
  $('#cal').datepicker({
    language: 'jp',
    inline: true,
    minDate: new Date(),
  })

  $(function () {
    $("#cal_reset").on("click", function () {
      var myDatepicker = $('#cal').datepicker().data('datepicker');
      myDatepicker.clear();
    });
  });

</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
<script>
  var clipboard = new ClipboardJS('.clipboard');
  clipboard.on('success', function(e) {
    alert("LINEIDをコピーしました\n"+e.text);
  });
</script>


</body>
</html>
