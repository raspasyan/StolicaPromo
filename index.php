<?php
  header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
  header('Pragma: no-cache'); // HTTP 1.0.
  header('Expires: 0'); // Proxies.
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no" />

    <link rel="manifest" href="manifest.json" />

    <link rel="icon" type="image/png" sizes="192x192"
      href="/src/android-icon-192x192.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="180x180"
      href="/src/apple-icon-180x180.png" />

    <title>Столица: Промо</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="src/styles/normalize.css" />
    <link rel="stylesheet" href="src/styles/style.css" />
  </head>
  <body>
    <div id="adult">
      <H3>18+</H3>
      <div>Сайт содержит информацию для лиц совершеннолетнего возраста. Сведения, размещённые на сайте, не являются рекламой, носят исключительно информационный характер, и предназначены только для личного пользования.</div>      
      <button id="adultConfirm">Мне исполнилось 18 лет</button>
    </div>
    <div id="gallery"></div>
    <script type="text/javascript" src="src/js/script_081221.js" defer></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
      try {
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(69662479, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        }); 
      } catch (error) {
        // 
      }
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/69662479" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
  </body>
</html>
