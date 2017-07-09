<?php 
  include('data.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title></title>
  <link rel="stylesheet" type="text/css" href="application.css" media="all" />
  <link rel="stylesheet/less" type="text/css" href="application.less">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/application.js"></script>
  <script src="less.js" type="text/javascript"></script>
</head>
<body>
  <div class="l">
    <div class="l">
      <div class="wrap">
        <div class="header">
          <div class="logo">
            <a href="http://www.jazztour.ru/"><img src="i/logo.png" alt="" /></a>
          </div>
          <div class="site"><a href="http://www.jazz.travel">www.jazz.travel</a></div>
          <div class="addr"><span class="city">Санкт-Петербург</span><span class="phone"><span>(812) </span>336-94-11</span></div>
          <div class="addr"><span class="city">Москва</span><span class="phone"><span>(495) </span>775-76-76</span></div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="promo">
          <h1><span>Путешествие в Черногорию</span></h1>
        </div>
        <div class="clear"></div>
      </div>
      <div class="tours">
        <?php foreach ($data as $key => $v): ?>
          <div class="line <?php if ($key % 2 == 1) { echo 'b1'; } ?>">
            <div class="w">
              <div class="head">
                <div class="title"><?php echo $v['name'] ?></div>
                <div class="str">
                  <?php if (count($v['hotels']) > 3): ?>
                    <a class="l" href="#"><img src="i/larr.png" alt="" /></a>
                    <a class="r" href="#"><img src="i/rarr.png" alt="" /></a>
                  <?php endif ?>
                </div>
                <div class="link">
                  <a href="<?php echo $v['all_link'] ?>"><?php echo $v['all_text'] ?></a>
                </div>
              </div>
              <div pos="0" class="wrapper">
                <?php foreach ($v['hotels'] as $key => $v): ?>
                  <div class="hotel">
                    <a href="<?php echo $v['link'] ?>" class="main"></a>
                    <div class="name"><span><?php echo $v['name'] ?></span></div>
                    <div class="photo">
                      <img src="i/<?php echo $v['photo'] ?>" alt="" />
                      <div class="hover">
                        <div class="p">
                          <strong>В стоимость входит:</strong> <br />
                          Проживание в выбранном отеле,  Питание по программе , Чартерный авиаперелет Москва-Тиват-Москва, Трансфер групповой (аэропорт - отель - аэропорт), Мед. страховка, Услуги гида-переводчика. <br />
                          <strong><i>Дополнительно оплачивается аэропортовый сбор!</i></strong>
                        </div>
                      </div>
                    </div>
                    <div class="prices">
                      <span class="c"><?php echo $v['price1'] ?></span>
                      <span class="n">/ 7 дней</span>
                      <span class="c"><?php echo $v['price2'] ?></span>
                      <span class="n">/ 14 дней</span>
                    </div>
                    <div class="comment"><?php echo $v['text'] ?></div>
                  </div>
                <?php endforeach ?>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <div class="clear"></div>
      <div class="wrap">
        <div class="promo">
          <div class="big-images">
            <div class="points">
              <a href="#" class="active"></a>
              <a href="#"></a>
              <a href="#"></a>
              <a href="#"></a>
              <a href="#"></a>
              <a href="#"></a>
            </div>
            <div class="wrap">
              <div class="point">
                <a href="http://www.jazztour.ru/montenegro/budva/" class="main"></a>
                <img src="i/bphoto.png" alt="" class="bg" />
                <div class="line">Черногория - курорт Будва</div>
              </div>
              <div class="point">
               <a href="http://www.jazztour.ru/montenegro/kotor/"> <img src="i/p1.jpg" alt="" class="bg" /></a>
                <div class="line">Черногория. Бока Которская Бухта</div>
              </div>
              <div class="point">
                <a href="http://www.jazztour.ru/montenegro/perast/"><img src="i/p2.jpg" alt="" class="bg" /></a>
                <div class="line">г. Пераст. Черногория</div>
              </div>
              <div class="point">
                <a href="http://www.jazztour.ru/montenegro/budva/"><img src="i/p3.jpg" alt="" class="bg" /></a>
                <div class="line">Балерина. Будва</div>
              </div>
              <div class="point">
                <a href="http://www.jazztour.ru/montenegro/saint_stefan/"><img src="i/p4.jpg" alt="" class="bg" /></a>
                <div class="line">Черногория - курорт Св.Стефан</div>
              </div>
              <div class="point">
                <a href="http://www.jazztour.ru/montenegro/saint_stefan/"><img src="i/p5.jpg" alt="" class="bg" /></a>
                <div class="line">Черногория - курорт Св.Стефан</div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="text">
            <p>Черногорию вполне заслуженно называют «Балканской жемчужиной», потому как отдых в этой стране удовлетворит даже самых требовательных туристов, привыкших получать от путешествия 101% удовольствия. Мягкий климат, приветливые черногорцы, великолепные пляжи Ульциньской Ривьеры, целебные пески Адриатического побережья, невообразимое разнообразие ландшафтов, таинственные древности, игрушечно-открыточные города, самые большие в Европе птичьи базары на Скадарском озере – все это солнечная Черногория выложит вам на блюдечке неописуемо красивой природы, благодаря которой страна получила прозвище европейского «девственного леса».</p>
            <p>Монтенегро приготовила для вас массу откровений, из которых вы сможете узнать, почему Владимир Высоцкий сожалел о том, что «…Черногория не стала второю родиной моей».</p>
          </div>
        </div>
        <div class="footer">
          <div class="logo">
            <a href="#"><img src="i/flogo.png" alt="" /></a>
          </div>
          <div class="site">
            <a href="#">www.jazztour.ru</a>
          </div>
          <div class="sp"><img src="i/sp.png" alt="" /></div>
          <div class="counter">
            <script type="text/javascript">
              document.write('<img src="http://luxup.ru/tr/4227/&r='+escape(document.referrer)+'&t='+(new Date()).getTime()+'" width="1" height="1"/>');
            </script>
            <script type="text/javascript"><!--
              document.write("<a href='http://www.liveinternet.ru/click' "+
              "target=_blank><img src='http://counter.yadro.ru/hit?t24.1;r"+
              escape(document.referrer)+((typeof(screen)=="undefined")?"":
              ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
              screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
              ";"+Math.random()+
              "' alt='' title='LiveInternet: показано число посетителей за"+
              " сегодня' "+
              "border='0' width='88' height='15' ><\/a>")
            //--></script>
            <!-- Yandex.Metrika counter --><div style="display:none;"><script type="text/javascript">(function(w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter11393131 = new Ya.Metrika({id:11393131, enableAll: true, webvisor:true}); } catch(e) { } }); })(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/11393131" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
          </div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</body>
</html>