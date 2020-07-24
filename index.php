<?php
//unset($_POST);
if(isset($_POST['data'])){
$test += 1;
$result =  $_POST['data'];
$result = base64_decode($result);
setcookie("liqpay_data", $result);
header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="fontawesome/all.min.css">
    <link rel="stylesheet" href="media.css">
    <title>contentPlan</title>

	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '205984567465146');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=205984567465146&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->


</head>
<body id="top-scroll">
<div class="alert">
        <div class="container">
        <i class="fas fa-exclamation-circle"></i> Олату скасовано
        </div>
        </div>
<div class="modal-wrapper">
    <div class="modal">
        <h1>
        Оплата пройшла успішно, належна інформація відправлена на почтову скриньку - <span style="color: #478C91;">bogdan.v.t@ukr.net</span>
        </h1>
        <button>
        OK</button>
    </div>
</div>
    <header>
        <div class="container">
            <nav>
                <ul>
                    
                    <li>
                        <a href="#buy">придбати</a>

                    </li>
                    <li>
                        <a href="#advantages">переваги</a>
                    </li>
                    <li>
                        <a href="#questions">питання </a>
                    </li>
                </ul>
            </nav>
            <section class="preview-content">
<h1>
    Контент-план на 12 місяців
</h1>
<h3>
    Почніть розміщувати бездоганні дописи в соціальних медіа вже за 5 хвилин.
</h3>
<h2>
    Тільки сьогодні 499 грн.
</h2>
<a href="#main-buy">
    <button>
        Купити
    </button>
</a>
            </section>
        </div>
    </header>
    <main>
        <section class="receiving">
<div class="container">
    <h1>
        що ви отримаєте?
    </h1>
    <div class="numbers">

            <div class="number-section">
<img src="images/01.png">
                <h3>
                    Розширення  аудиторії
                </h3>
            </div>
            <div class="number-section">
<img src="images/02.png">
                <h3>
                    Більше охоплення
                </h3>
            </div>


            <div class="number-section" >
            <img src="images/03.png">

    <h3>
        Частіші  реакції
    </h3>
            </div>
            <div class="number-section" >
                <img src="images/04.png">
                <h3>
                    Кращу  взаємодію
                </h3>
            </div>

    </div>
    <h2 class="section-header">
        Ваш контент на наступні 12 місяців вже готовий

    </h2>
    <section class="content-table">
<img src="images/calendar.png" alt="">
<div class="content-table-text">
    <h3>
        Все, що можна, зроблено за вас. Це таблиця з готовими ідеями для дописів, які викликають симпатію і допомагають продавати. Ви просто відкриваєте таблицю і робите допис по заготовленій темі. Або використовуєте одну із 120 готових фото.
    </h3>
    <div class="wrapper">
        <div class="circle-before" style="background-color: #68C3D3;"></div>
        <h3 >
            Ви зможете перетворити своє захоплення в роботу своєї мрії та займатися тим, що насправді хочете.
        </h3>
    </div>
    <div class="wrapper">
        <div class="circle-before" style="background-color: #478C91;"></div>
        <h3 >
            Поступово ви зможете генерувати грошовий потік та джерело доходу навколо свого особистого бренду.
        </h3>
    </div>
    <div class="wrapper">
        <div class="circle-before" style="background-color: #326366;"></div>
        <h3 >
            Ви зможете працювати де завгодно і коли завгодно.
        </h3>
    </div>
</div>
    </section>
</div>
        </section>
        <section id="advantages" class="answers">
            <h2 class="section-header" >
                Чому деякі тренери бойових мистецтв і спортсмени  досягають успіху, а інших спіткають невдачі із соціальними медіа?
            </h2>
            <div class="answers-wrapper">
                <div class="answers-block" style="background-color: #414141;">
                   <div class="wrapper">
                    <h3>
                        <span style="color: #95F8B6;">Успішний</span> блогер  знає, що...
                    </h3>
                    <p>
                        ... дописи варто публікувати щодня, аби розвиватися і залучати підписників.
                    </p>
                    <p>
                        ... необхідно розміщувати цікавий контент, що спонукає до взаємодії та реакції.
                    </p>
                    <p>
                        ... важливо мати хороший план на цілий рік, аби публікувати щодня чудовий контент.

                    </p>
                    <p>
                        ... важливо зосередитися на своїй ніші з цікавими та свіжими ідеями.
                    </p>
                   </div>
                                </div>
                                <div class="answers-block" style="background-color: #73C3C9;">
                 <div class="wrapper">
                    <h3>
                        Інші зазнають <span style="color: orange;">невдачі</span> через ...
                    </h3>
                    <p>
                        ... вони неспроможні публікувати щодня.
                    </p>
                    <p>
                        ... контент, який вони публікують,  ні про що, і нікого не хвилює, відповідно, купа часу  та енергії потрачено даремно.

                    </p>
                    <p>
                        ... вони не мають контент плану, а  день починається з пошуку теми, підбору інформації та створення контенту. І так щодня…  це виснажує.

                    </p>
                    <p>
                        ... вони не зосереджені на темі і стилістиці, відповідно, мають низьке охоплення, слабкі реакції  та відсутність монетизації.
                    </p>
                 </div>
                                </div>
            </div>
            <div class="container">
                <h1 class="section-header">
                    Ось що ви отримаєте в
            СММ-календарі  на 2020/21 рік для тренерів і спортсменів у бойових мистецтвах:
                </h1>
<section class="calendar-content-wrapper">
<div class="calendar-top-wrappper">

    <div class="calendar-content">
        <img src="images/calendar-2.png" alt="">

            </div>
            <div class="calendar-content">
        <h2>
            365 ідей публікацій  у соціальних медіа, які заплановані для вас

        </h2>
        <div class="wrapper">
            <div class="circle-before"></div>
            <h3 >
                Ідеї усіх ваших публікацій на наступні  12 місяців вже готові.
            </h3>
        </div>
        <div class="wrapper">
            <div class="circle-before"></div>
            <h3 >
                365 ідей цікавих, захоплюючих та надихаючих публікацій у соціальних мережах, що дозволить вам розвиватися і стати успішними    </h3>
        </div>
        <div class="wrapper">
            <div class="circle-before"></div>
            <h3 >
                Підбірка з 81 мотивуючої цитати    </h3>
        </div>
        <div class="wrapper">
            <div class="circle-before"></div>
            <h3 >
                63 запитання до читачів, які покращують взаємодію з підписниками
            </h3>
        </div>
        <div class="wrapper">
            <div class="circle-before"></div>
            <h3 >
                25 відповідей на типові питання, пов’язані з бойовими мистецтвами    </h3>
        </div>


            </div>
</div>
    <div class="text-below-wrappper">
        <div class="block">
            <div class="wrapper">
                <div class="circle-before"></div>
                <h3 >
                    Теми для дописів про бойові мистецтва
                </div>
            <div class="wrapper">
                <div class="circle-before"></div>
                <h3 >
                    26 святкових дат, з якими ви можете привітати своїх читачів

                </div>
        </div>
        <div class="block">
            <div class="wrapper">
                <div class="circle-before"></div>
                <h3 >
                    49 тем, за допомогою яких ви розповісте про себе, що підвищить довіру до вас
                </div>
            <div class="wrapper">
                <div class="circle-before"></div>
                <h3 >
                    Перелік 18 ресурсів і додатків, які будуть корисні для блогера.
                </div>
        </div>
    </div>
</section>
            </div>
        </section>
        <section  class="sale">
            <div class="container">
                <h1 class="section-header">
                    План вже готовий для вас: щоденні ідеї для публікацій, різні категорії контенту, дотримання порядку постів (мотивація, освіта, розваги) ... Тож ДОСИТЬ витрачати час!
                   <span>
                    ХАПАЙТЕ  угоду дня ЗАРАЗ! Це лише 1,37 грн. на день – це багато, чи мало?
                   </span>

                </h1>
                <div class="clock" id="buy">
                    <div class="clock-circle">
                    <h2 id="hours">
                        00
                    </h2>
                    <h3>
                        годин
                    </h3>
                    </div>
                    <div class="breakpoint">
                      :
                    </div>
                    <div class="clock-circle">
                        <h2 id="minutes">
                            00
                        </h2>
                        <h3>
                            хвилин
                        </h3>
                        </div>
                        <div class="breakpoint">
                            :
                        </div>
                        <div class="clock-circle">
                            <h2 id="seconds">
                               00
                            </h2>
                            <h3>
                                секунд

                            </h3>
                            </div>
                </div>
                <div class="data">
                    <h1>
                        Заповніть анкету
                    </h1>
                    <h2>
Ім'я
                    </h2>
                    <input id="name" type="text" placeholder="Іван">
                    <h2>
Телефон
                    </h2>
                    <input id="tel" type="tel" placeholder="+380">
                    <h2>
Почта
                     </h2>
                    <input id="mail" type="email" placeholder="example_user@mail.ua">
                </div>
                <form  method="POST" accept-charset="utf-8" action="https://www.liqpay.ua/api/3/checkout">
  <input type="hidden" name="data" value="eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJhbW91bnQiOiIxIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6ItCc0ZbQuSDRgtC+0LLQsNGAIiwicHVibGljX2tleSI6Imk1Nzk1MjUyMTY5MCIsImxhbmd1YWdlIjoicnUiLCJzZXJ2ZXJfdXJsIjoiaHR0cDovL21hLmtvbW9ycmEuY29tLnVhLyIsInJlc3VsdF91cmwiOiJodHRwOi8vbWEua29tb3JyYS5jb20udWEvIn0=" />
  <input type="hidden" name="signature" value="nYnL9xMFT8Yg9GCA6mW7otPHkSY=" />
  <button id='main-buy'>
    <img src="https://static.liqpay.ua/buttons/logo-small.png" name="btn_text"
      style="margin-right: 7px !important; vertical-align: middle !important;"/>
    <span style="vertical-align:middle; !important">Купить 499 грн</span>
  </button>
</form>
<div class="description">
    <h3 id="attention">*Після успішної оплати СММ календар буде відправлений на вказану вище пошту, тому уважно перегляньте правильність набраних данних</h3>
</div>
</div>
        </section>
        <section class="smm-calendar">
<div class="container">
    <h1 class="section-header" style="margin-top: 50px!important;">
        365-денний СММ-календар для майстрів бойових мистецтв
    </h1>
    <div class="smm-calendar-content">
        <img class="main-img" style="width: 50%;" src="images/calendar-3.png" alt="">
        <div class="wrappper">
            <h2>
                чудовий інструмент для:
            </h2>
            <div class="icon-block">
                <img src="images/icon-1.png" alt="">
                <h3>
                    тренерів
                </h3>
            </div>
            <div class="icon-block">
                <img src="images/icon-2.png" alt="">
                <h3>
                    адміністраторів спортивних клубів
                </h3>
            </div>
            <div class="icon-block">
                <img src="images/icon-3.png" alt="">
                <h3>
                    інструкторів
                </h3>
            </div>
            <div class="icon-block">
                <img src="images/icon-4.png" alt="">
                <h3>
                    спортсменів
                </h3>
            </div>
            <h1>
                Тим, хто любить бойові мистетва.

            </h1>
        </div>
    </div>
    <h1 class="section-header" style="max-width: 1100px;">
        Отримайте миттєвий доступ просто зараз. Сьогодні лише за 499 гривень (зазвичай 2999 гривень).

    </h1>
 <a href="#main-buy">
    <button >
        отримати доступ
    </button>
 </a>
</div>
        </section>
        <section class="for-free">
<div class="container">
    <h1 class="section-header" style="margin-bottom: 0;">
        ЯКЩО ВИ КУПУЄТЕ СЬОГОДНІ, ЦЕ ВИ ОТРИМУЄТЕ  БЕЗКОШТОВНО:
    </h1>
    <div class="wrapper" style="margin-top: 0;">
        <div class="img-wrapper" style="position: relative;display: block;">
            <img src="images/collage-1.png"  alt="" >

        </div>
        <div class="text-content after-line">
            <h2>
                50 постів-запитань, щоб покращити взаємодію з підписниками, вже готових до публікації
    (раніше – 1000 грн. з календарем безкоштовно)

            </h2>
            <div class="circle-wrapper">
                <div class="circle-before" style="background-color: #323C4C;"></div>
                <h3 >
                    49 тем, за допомогою яких ви розповісте про себе, що підвищить довіру до вас
                </div>
                <div class="circle-wrapper">
                    <div class="circle-before"  style="background-color: #323C4C;"></div>
                    <h3 >
                        Не витрачайте цінний час на тестування та здогадки. Ми вже дослідили понад 10 000+ питань! Ось переможці                </div>

            </div>
        </div>
        <div class="wrapper">
            <div class="after-line img-wrapper" style="position: relative;display: block ;">
                <img src="images/collage-2.png" style="margin-bottom:70px;"  alt="" >

            </div>
            <div class="text-content">
                <h2>
                    20 кумедних повідомлень для соціальних медіа в категорії  "Чому надаєш перевагу..?" для активізації відгуків підписників та поширень  (раніше – 400 грн., з календарем безкоштовно)

                </h2>
                <div class="circle-wrapper">
                    <div class="circle-before"  style="background-color: #A0C5E0;"></div>
                    <h3 >
                        Люди краще реагують і взаємодіють з публікаціями, які вважають веселими                </div>
                    <div class="circle-wrapper">
                        <div class="circle-before"  style="background-color: #A0C5E0;"></div>
                        <h3 >
                            Наша,  ретельно підібрана, категорія публікацій "Чому надаєш перевагу..?" заохочує підписників коментувати та ділитися дописом                    </div>

                </div>
            </div>
            <div class="wrapper margin" style="margin-top: 150px;">
                <img src="images/collage-3.png" alt="">
                <div class="text-content">
                    <h2>
                        50 красивих і мотивуючих цитат для збільшення охоплення та взаємодії з підписниками (раніше 1000 грн., з календарем безкоштовно)
                    </h2>
                    <div class="circle-wrapper">
                        <div class="circle-before"  style="background-color: #97998D;"></div>
    <h3>
        Надихайте, мотивуйте та заохочуйте своїх підписників цими красиво оформленими цитатами!
        </h3>
                    </div>
                            <div class="circle-wrapper">
                            <div class="circle-before"  style="background-color: #97998D;"></div>
                            <h3 >
                                Люди відстежуватимуть ваші дописи, прислухатимуться і поважатимуть вас, якщо ви є тим, хто щодня мотивує їх!
                    </div>
                </div>
    </div>
</div>
        </section>
        <h1 class="section-header">
            Ви хочете це все (контент вартістю 5399 грн.) зараз всього за 499 гривень?
        </h1>
        <section class="full-pack">
<div class="text-content">
    <div class="container">
        <h2 style="font-weight: 600;">
            У вас є лише два варіанти:

        </h2>
        <h2>
            Ви продовжуєте робити <span style="color: #CD5C5C;">те, що робите зараз</span>, і продовжуєте отримувати результати, <span style="color: #CD5C5C;">які зараз маєте</span>
        </h2>
        <h1>
            або
        </h1>
        <h2>
            Візьміть <span style="color: #DAA520;">під контроль</span> свою кар’єру в галузі бойових мистецтв просто зараз.

        </h2>
      <a href="#main-buy">
        <button>
            отримати усе
за 499грн. <br>сьогодні
        </button>
      </a>
    </div>
</div>
        </section>
        <h1 class="section-header">
            ПИТАННЯ І ВІДПОВІДІ
        </h1>
        <section id="questions" class="questions">
<div class="slider">
    <div class="slide" style="background-image: url(images/slide-1.png);">
        <div class="wrapper">
            <div class="container">
                <h1>
                    Для кого цей календар?
                </h1>
                <h2>
                    Для тих, хто займається бойовими мистецтвами та спортивними одноборствами. Нашими клієнтами є, в основному, тренери, адміністратори спортивних клубів, інструктори і спортсмени. Це ідеально підходить для вас, якщо ви любите бойові мистецтва.

                </h2>
               <a href="#main-buy">
                <button>
                    Придбати лише за<br> 499грн.
                </button>
               </a>
            </div>
        </div>
    </div>
    <div class="slide" style="background-image: url(images/slide-2.png);">
        <div class="wrapper">
        <div class="container">
            <h1>
                Скільки часу потрібно?
            </h1>
            <h2>
                Наші клієнти планують всі повідомлення протягом вихідних. Замість планування, ви можете потратити 5 хвилин в день, щоб зробити повідомлення. За дуже короткий час ви зможете створювати пости, які забезпечать вам РЕАЛЬНО високий рівень охоплення дописів, залучення потенційних клієнтів та продажі.

            </h2>
           <a href="#main-buy">
            <button>
                Придбати лише за<br> 499грн.
            </button>
           </a>
        </div>
        </div>
    </div>
    <div class="slide" style="background-image: url(images/slide-3.png);">
        <div class="wrapper">
        <div class="container">
            <h1>
                Як швидко я можу очікувати результатів для свого бізнесу?
            </h1>
            <h2>
                Якщо ви СЬОГОДНІ почнете щоденно розміщувати публікації, ви можете очікувати більшого охоплення, реакції і активності через 3-4 тижні. Чудовою частиною цього є те, що результати в соціальних мережах ростуть в геометричній прогресії.


            </h2>
            <a href="#main-buy">
                <button>
                    Придбати лише за<br> 499грн.
                </button>
            </a>
        </div>
        </div>
    </div>
    <div class="slide" style="background-image: url(images/slide-4.png);">
        <div class="wrapper">
        <div class="container">
            <h1>
                Як швидко я отримаю доступ до календаря?

            </h1>
            <h2>
                Ви отримаєте миттєвий доступ після купівлі. Після оформлення замовлення, ви отримаєте посилання на матеріали на свою електронну пошту. Зверніть увагу, що електронна скринька має бути робочою.

            </h2>
           <a href="#main-buy">
            <button>
                Придбати лише за<br> 499грн.
            </button>
           </a>
        </div>
        </div>
    </div>
    <div class="slide" style="background-image: url(images/slide-5.png);">
        <div class="wrapper">
        <div class="container">

            <h1>
                Що я отримаю, коли придбаю СММ календар для майстрів бойових мистецтв?
            </h1>
            <h2>
                Ви отримаєте файл Google Sheets з 365 ідеями для постів на наступні 12 місяців і 120 готових постів для соціальних мереж (фотографії). Всі пости розділені на категорії (рекламні, питання, цитати, особисті теми, відповіді на типові питання тощо).

            </h2>
           <a href="#main-buy">
            <button>
                Придбати лише за<br> 499грн.

            </button>
           </a>
        </div>
        </div>
    </div>
</div>
        </section>
    </main>
    <footer>
        <div class="container">
            <h1>
                designed by <span>hof</span><span  style="color: #A0C5E0;">tech</span>
            </h1>
                <img src="https://picua.org/images/2018/11/11/61921fd3b6ccd7d3fb4d67918133d44a.png" alt="PayServices" >

            <div class="info">
                <h3>
                    контакти
                </h3>
                <ul>
                    <li>
                        ФОП Пражмовський Віктор Анатолійович
                    </li>
                    <li>
                        іпн 2794021672
                    </li>
                    <li>
                        м.Рівне, вул. Дубенська, в/ч А-1971
                    </li>
                    <li>
                       <a href="info@komorra.com.ua">
                        info@komorra.com.ua
                       </a>
                    </li>
                </ul>
                <h3>
                    <a target="blank" href="confidentiality.html">
                        політика конфіденційності
                    </a>
                </h3>
                <h3 style="margin-top: 0px;">
                    <a target="blank" href="offer.html">
                        Умови надання послуг
                    </a>
                </h3>
            </div>
        </div>
       <a href="#top-scroll" class="top">
        <div  class="scroll-top">
            <i class="fas fa-angle-up"></i>
        </div></a>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="slick/slick.js"></script>
    <script src="main.js"></script>
</body>
</html>