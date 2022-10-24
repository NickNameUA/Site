<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Styles\Pages\AdmissionToSchool.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <title>Вступ до 1 класу</title>
  <?php
  include "Details\Prototype\Links.php";
  include "Details\Prototype\NavBar.php";
  ?>
  <script src="Src\NavBar.js"></script>
  <script src="Src\Scroll.js"></script>
  <script src="Src\Theame.js"></script>
</head>
<body onload="check()">
  <div id="pagebody">
    <div id="mainAlternative">
      <div class="contain">
        <h2>Про зарахування до 1-го класу</h2>
        <p>
        Чернівецький ліцей №21 повідомляє, що  прийом заяв та документів про зарахування дітей до 1-х класів закладу освіти Чернівецької міської територіальної громади на 2023/2024 навчальний рік розпочнеться 01 березня 2023 року і триватиме до 31 травня 2023 року включно. </br>
        Відповідно до наказу управління освіти від 31.01.2021 року № 26 « Про зарахування  дітей до 1-х класів закладів загальної середньої освіти Чернівецької міської територіальної громади на 2023/2024 навчальний рік» прийом заяв батьків та документів про зарахування дітей до 1-го класу буде здійснюватися  через  портал «Електронна реєстрація в заклади загальної середньої освіти» (<a href="https://school.isuo.org/">https://school.isuo.org/</a>)  
        </p>
        <p>
        Портал «Електронна реєстрація в заклади загальної середньої освіти» розроблений для виконання ЗЗСО (закладам загальної середньої освіти) та ОУО (органам управління освітою) наказу Міністерства освіти та науки України № 367 від 16.04.2018 року «Про затвердження Порядку зарахування, відрахування та переведення учнів до державних та комунальних закладів освіти для здобуття повної загальної середньої освіти».
        </p>
        <p>
        <span>Портал дозволяє батькам:</span></br>
        – Переглянути інформацію по ЗЗСО.</br>
        – Подати заяву на реєстрацію в один чи декілька ЗЗСО.</br>
        – Отримувати інформацію електронною поштою щодо подальших дій після подання.</br>
        – Отримати результати зарахування.</br>
        <span>Портал дозволяє ЗЗСО:</span></br>
        – Отримувати та обробляти заяви батьків он-лайн режимі (роздруковувати готові форми заяв, згоди на обробку персональних даних, тощо).</br>
        – Автоматизувати розподіл заяв на першочергові та другочергові.</br>
        – Отримати журнал заяв як електронний архів, імпортувати дані в Excel.</br>
        – Надавати попередню інформацію про заклад (гуртки, секції, особливості навчання, профілі, мови навчання тощо).</br>
        <span>Портал дозволяє ОУО:</span></br>
        – Збирати статистику по кількості заяв до першого класу в розрізі шкіл.</br>
        – Переглядати наповнюваність закладів загальної середньої освіти.</br>
        – Отримувати інформацію по кількості вільних місць в закладах.</br>
        – Аналізувати статистику заяв та наповнюваність закладів для їх подальшого розвитку та модернізації.</br>
        </p>
        <p>
        Сайт  <a href="https://school.isuo.org/">https://school.isuo.org/</a> «Електронна реєстрація в заклади загальної середньої освіти»   надає  можливість  подати  заяву  про зарахування  дитини до 1-го класу школи. Для цього необхідно зареєструватись на сайті, обрати заклад загальної середньої освіти,  створити заявку та підтвердити її документами у закладі, дотримуючись інструкцій <a href="https://school.isuo.org/contact">https://school.isuo.org/contact</a>.
        </p>
        <p>
        Заклад освіти  має доступ до перегляду та обробки заяв. </br>
        Звертаємо увагу, що залишається чинним Порядок зарахування, відрахування та переведення учнів до державних та комунальних закладів освіти для здобуття повної загальної середньої освіти (далі – Порядок), затверджений наказом Міністерства освіти і науки України від 16 квітня 2018 року № 367.
        </p>
        <p>
        Зарахування до закладу освіти здійснюється відповідно до наказу його керівника, що видається на підставі заяви про зарахування до закладу освіти (далі – заява про зарахування) одного з батьків, поданої особисто (з пред’явленням документа, що посвідчує особу заявника) за зразком згідно з додатком 1 до цього Порядку, до якої додаються:</br>
        1) копія свідоцтва про народження дитини або документа, що посвідчує особу здобувача освіти (під час подання копії пред’являється оригінал відповідного документа);</br>
        2) оригінал або копія медичної довідки за формою первинної облікової документації № 086-1/0 «Довідка учня загальноосвітнього навчального закладу про результати обов’язкового медичного профілактичного огляду», затвердженою наказом Міністерства охорони здоров’я України від 16 серпня 2010 року № 682, зареєстрованим в Міністерстві юстиції України 10 вересня 2010 року за №794/18089;</br>
        3)  документи, що підтверджують фактичне місце проживання дитини чи одного з батьків на території обслуговування закладу освіти, реквізити якого зазначаються в заяві про зарахування.</br>
        </p>
        <p>
        У разі наявності та за бажанням одного з батьків дитини до заяви про зарахування може додаватися оригінал або копія висновку інклюзивно-ресурсного центру про комплексну (чи повторну) психолого-педагогічну оцінку розвитку дитини чи витягу з протоколу засідання психолого-медико-педагогічної консультації.</br>
        Згідно з підпунктом 1 пункту 3 глави 1 розділу ІІ Порядку до 01 червня включно зараховуються усі діти, місце проживання яких на території обслуговування закладу освіти підтверджене, а також діти, які є рідними (усиновленими) братами та/або сестрами дітей, які здобувають освіту у цьому закладі, чи дітьми працівників цього закладу освіти.</br>
        </p>
        <p>
        Для  підтвердження  інформації про місце проживання дитини, з метою першочерговості зарахування дітей, батькам необхідно до 31.05.2022 року надати в заклад  один із перелічених документів:</br>
        1). паспорт громадянина України (тимчасове посвідчення громадянина України, посвідка на постійне проживання, посвідка на тимчасове проживання, посвідчення біженця, посвідчення особи, яка потребує додаткового захисту, посвідчення особи, якій надано тимчасовий захист, довідка про звернення за захистом в Україні) одного з батьків дитини чи законних представників;</br>
        2). довідка про реєстрацію місця проживання особи (дитини або одного з її батьків чи законних представників) за формою згідно з додатком 13 до Правил реєстрації місця проживання, затверджених постановою Кабінету Міністрів України від 2 березня 2016 р.     № 207;
        3). довідка про взяття на облік внутрішньо переміщеної особи за формою згідно з додатком до Порядку оформлення і видачі довідки про взяття на облік внутрішньо переміщеної особи, затвердженого постановою Кабінету Міністрів України від 1 жовтня 2014 р. № 509 «Про облік внутрішньо переміщених осіб»;</br>
        4). документ, що засвідчує право власності на відповідне житло (свідоцтво про право власності, витяг з Державного реєстру речових прав на нерухоме майно, договір купівлі-продажу житла тощо);</br>
        5). рішення суду, яке набрало законної сили, про надання особі права на вселення до житлового приміщення, визнання за особою права користування житловим приміщенням або права власності на нього, права на реєстрацію місця проживання;</br>
        6). документ, що засвідчує право користування житлом (договір найму/піднайму/оренди тощо), укладений між фізичними особами (що для цілей цього Порядку підтверджує місце проживання за умови його реєстрації відповідно до статті 158 Житлового кодексу Української РСР або нотаріального посвідчення відповідно до законодавства) чи між юридичною і фізичною особами, зокрема щодо користування кімнатою в гуртожитку;</br>
        7). довідка про проходження служби у військовій частині (за формою згідно з додатком 10 до Правил реєстрації місця проживання, затверджених постановою Кабінету Міністрів України від 2 березня 2016 р. № 207);</br>
        8). акт обстеження умов проживання (за формою згідно з додатком 9 до Порядку провадження органами опіки та піклування діяльності, пов’язаної із захистом прав дитини, затвердженого постановою Кабінету Міністрів України від 24 вересня 2008 р. № 866 «Питання діяльності органів опіки та піклування, пов’язаної із захистом прав дитини»;</br>
        9). інший офіційний документ, що містить інформацію про місце проживання дитини та/або одного з її батьків чи законних представників.</br>
        </p>
        <p>Для підтвердження електронної заяви  та  зарахування дитини до 1-го класу одному з батьків  потрібно обов’язково до 31 травня 2022 року звернутися до закладу освіти особисто (з пред’явленням документа, що посвідчує особу заявника) та подати всі необхідні документи  (оригінали та копії).</br>
        Контакти відповідальних осіб щодо надання консультацій та роз’яснень стосовно зарахування дітей до 1-х класів ліцею №21</p>
        <p>Ломака М.Д.- вчитель початкових класів; - 560-468</p>
        <p>Супрович Д.С.- заступник директора з НВР - 560-468</p>
      </div>
    </div>
  </div>
</body>
<?php include "Details\Prototype\Footer.php";?>
</html>