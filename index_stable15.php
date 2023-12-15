<?php
  require_once "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Eko menegment</title>
    <meta property="og:title" content="Eko menegment" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      hr {
    border: none; /* Убираем границу */
    background-color: red; /* Цвет линии */
    color: red; /* Цвет линии для IE6-7 */
    height: 2px; /* Толщина линии */
   }
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <style data-section-id="dropdown">
      [data-thq="thq-dropdown"]:hover > [data-thq="thq-dropdown-list"] {
          display: flex;
        }

        [data-thq="thq-dropdown"]:hover > div [data-thq="thq-dropdown-arrow"] {
          transform: rotate(90deg);
        }
    </style>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./main.css" rel="stylesheet" />

      <div class="main-container">
        <header data-role="Header" class="main-header">
          <img
            alt="logo"
            src="https://es-media-prod.s3.amazonaws.com/media/supplier/logo/source/Eco_Management_Systems_Logo-02.16.2021.png"
            class="main-image"
          />
          <div data-role="BurgerMenu" class="main-burger-menu">
            <svg viewBox="0 0 1024 1024" class="main-icon">
              <path
                d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
              ></path>
            </svg>
          </div>
          <div data-role="MobileMenu" class="main-mobile-menu">
            <div class="main-nav">
              <div class="main-container0001">
                <img
                  alt="image"
                  src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                  class="main-image1"
                />
                <div data-role="CloseMobileMenu" class="main-menu-close">
                  <svg viewBox="0 0 1024 1024" class="main-icon02">
                    <path
                      d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                    ></path>
                  </svg>
                </div>
              </div>
            </div>
            <div>
              <svg viewBox="0 0 950.8571428571428 1024" class="main-icon04">
                <path
                  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                ></path></svg><svg viewBox="0 0 877.7142857142857 1024" class="main-icon06">
                <path
                  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                ></path></svg><svg viewBox="0 0 602.2582857142856 1024" class="main-icon08">
                <path
                  d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                ></path>
              </svg>
            </div>
          </div>
        </header>
        <span class="main-text">Заміна:</span>
        <form method="post">
        <div class="main-container002">
          <select id="type" name="type" class="main-select">
          <option value='all' selected>--Елемент--</option>
          <?php
              $temp = 4;
              $sql0 = "SELECT elementname FROM global where id > 3";
              $result = mysqli_query($con, $sql0) or die (mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {
                echo "<option value='$temp'>$row[0]</option>";
                $temp++;
              }
          ?>
          </select>
          <select id="year" name="year" class="main-select">
          <option value='all' selected>--Рік--</option>
          <?php
              for ($i = 2013; $i<2023; $i++)
              {
                echo "<option value='$i'>$i</option>";
              }
          ?>
          </select>

          <select id="month" name="month" class="main-select">
          <option value='all' selected>--Місяць--</option>
          <?php
              for ($i = 1; $i<13; $i++)
              {
                echo "<option value='$i'>$i</option>";
              }
          ?>
          </select>

          <select id="index" name="index" class="main-select">
          <option value='all' selected>--Показник--</option>
          <?php
              $sql01 = "SELECT * FROM resources";
              $result = mysqli_query($con, $sql01) or die (mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {
                echo "<option value='$row[0]'>$row[1] $row[4]</option>";
                $temp++;
              }
          ?>
          </select>
          <input
            type="text" id="new" name="new"
            placeholder="Нове значення"
            class="main-textinput2 input"
          />
          <button id="select" name="select" class="button">Замінити</button>
        </div>

        <span class="main-text">Видалення:</span>
        <div class="main-container002">
          <select id="type-del" name="type-del" class="main-select">
          <option value='all' selected>--Елемент--</option>
          <?php
              $temp = 4;
              $sql0 = "SELECT elementname FROM global where id > 3";
              $result = mysqli_query($con, $sql0) or die (mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {
                echo "<option value='$temp'>$row[0]</option>";
                $temp++;
              }
          ?>
          </select>
          <select id="year-del" name="year-del" class="main-select">
          <option value='all' selected>--Рік--</option>
          <?php
              for ($i = 2013; $i<2023; $i++)
              {
                echo "<option value='$i'>$i</option>";
              }
          ?>
          </select>

          <select id="month-del" name="month-del" class="main-select">
          <option value='all' selected>--Місяць--</option>
          <?php
              for ($i = 1; $i<13; $i++)
              {
                echo "<option value='$i'>$i</option>";
              }
          ?>
          </select>

          <select id="index-del" name="index-del" class="main-select">
          <option value='all' selected>--Показник--</option>
          <?php
              $sql01 = "SELECT * FROM resources";
              $result = mysqli_query($con, $sql01) or die (mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {
                echo "<option value='$row[0]'>$row[1] $row[4]</option>";
                $temp++;
              }
          ?>
          </select>
          <button id="delete" name="delete" class="button">Видалити</button>
        </div>

        <span class="main-text" style="text-align: center;">Вивести показник:</span>
        <div class="main-container004">
        <select id="type1" name="type1" class="main-select">
          <option value='all' selected>--Елемент--</option>
          <?php
              $temp = 4;
              $sql01 = "SELECT elementname FROM global where id > 3";
              $result = mysqli_query($con, $sql01) or die (mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {
                echo "<option value='$temp'>$row[0]</option>";
                $temp++;
              }
          ?>
          </select>
          <select id="year1" name="year1" class="main-select">
          <option value='all' selected>--Рік--</option>
          <?php
              for ($i = 2013; $i<2023; $i++)
              {
                echo "<option value='$i'>$i</option>";
              }
          ?>
          </select>

          <select id="pokaznik" name="pokaznik" class="main-select">
          <option value='all' selected>--Показник--</option>
          <?php
              $sql01 = "SELECT * FROM resources";
              $result = mysqli_query($con, $sql01) or die (mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {
                echo "<option value='$row[0]'>$row[1] $row[4]</option>";
              }
          ?>
          </select>
          <button id="select2" name="select2" type="submit" class="main-button2 button">Вибрати</button>
          <button id="select3" name="select3" onclick="drawGraph2()" type="submit" class="main-button2 button">Середнє значення</button>
          <button id="select4" name="select4" onclick="drawPie()" class="main-button2 button">Енерго баланс</button>
          <button id="select8" name="select8" class="button">Коментарі</button>
        </div>
        
        </form>

      <div class="main-text" style="text-align: center;">Робота з заходами:</div>
      <form method="post">
        <div class="main-container253">
          <input type="text" id="act_name" name="act_name" placeholder="Назва" class="main-input input" />
          <select id="act_el" name="act_el" class="main-select">
          <option value='all' selected>--Вибрати--</option>
          <?php
              $temp = 4;
              $sql0 = "SELECT elementname FROM global where id > 3";
              $result = mysqli_query($con, $sql0) or die (mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {
                echo "<option value='$temp'>$row[0]</option>";
                $temp++;
              }
          ?>
          </select>
          <!-- <input type="text" id="act_res" name="act_res" placeholder="Ресурс" class="main-input2 input" /> -->
          <select id="act_res" name="act_res" class="main-select">
          <option value='all' selected>--Показник--</option>
          <?php
              $sql01 = "SELECT * FROM resources";
              $result = mysqli_query($con, $sql01) or die (mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {
                echo "<option value='$row[0]'>$row[1] $row[4]</option>";
              }
          ?>
          </select>
          <!-- <input type="text" id="act_year" name="act_year" placeholder="Рік" class="main-input3 input" /> -->
          <select id="act_year" name="act_year" class="main-select">
          <option value='all' selected>--Рік--</option>
          <?php
              for ($i = 2013; $i<2023; $i++)
              {
                echo "<option value='$i'>$i</option>";
              }
          ?>
          </select>
          <input type="text" id="act_term" name="act_term" placeholder="Термін впровадження" class="main-input4 input" />
          <input type="text" id="act_rez" name="act_rez" placeholder="Очікуваний результат" class="main-input5 input" />
          <input type="text" id="act_money" name="act_money" placeholder="Кошти" class="main-input6 input" />
          <input type="text" id="act_source" name="act_source" placeholder="Джерело коштів" class="main-input7 input" />
          <button id="select9" name="select9" class="main-button5 button">Записати</button>
        </div>
        <div class="main-container254">
          <button id="select10" name="select10" class="main-button6 button">Вивести заходи</button>
          <div class="vl"></div>
          <input
            type="Елемент" id="act_num" name="act_num"
            placeholder="Номер заходу"
            class="main-textinput8 input"
          />
          
          <button id="select11" name="select11" class="main-button7 button">Вивести по заходу</button>
          <div class="vl"></div>
          <input
            type="Елемент" id="act_all_year" name="act_all_year"
            placeholder="Роки"
            class="main-textinput8 input"
          />
        
          <select id="act_all_el" name="act_all_el" class="main-select">
          <option value='all' selected>--Елемент--</option>
          <?php
              $temp = 4;
              $sql0 = "SELECT elementname FROM global where id > 3";
              $result = mysqli_query($con, $sql0) or die (mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {
                echo "<option value='$temp'>$row[0]</option>";
                $temp++;
              }
          ?>
          </select>
          <button id="select12" name="select12" class="main-button7 button">Вивести оцінку</button>
        </div>

        <hr align="center" style="margin-bottom: 45px;  background-color: black;" width="100%" size="1" />


        <div align="center" id="forcomm" class="main-container004" style="display:none;">
        <span class="main-text">Коментар по ресурсам:</span>
        <input
            type="text" id="elem" name="elem"
            placeholder="Елемент"
            class="main-textinput0 input"
          />
        <input
            type="text" id="pokaz" name="pokaz"
            placeholder="Показник"
            class="main-textinput0 input"
          />
          <input
            type="text" id="year2" name="year2"
            placeholder="Рік"
            class="main-textinput0 input"
          />
        <input
            type="text" id="comment" name="comment"
            placeholder="Коментар"
            class="main-textinput6 input"
          />
           <button id="select5" name="select5" class="button">Записати</button></div>
        <div align="center" id="forcomm2" class="main-container004" style="display:none;">
        <span class="main-text">Коментар по рокам:</span>
        <input
            type="text" id="elem2" name="elem2"
            placeholder="Елемент"
            class="main-textinput0 input"
          />
        <input
            type="text" id="pokaz2" name="pokaz2"
            placeholder="Показник"
            class="main-textinput0 input"
          />
          <input
            type="text" id="year3" name="year3"
            placeholder="Рік"
            class="main-textinput0 input"
          />
        <input
            type="text" id="comment2" name="comment2"
            placeholder="Коментар"
            class="main-textinput6 input"
          />
           <button id="select6" name="select6" class="button">Записати</button></div>
        <div align="center" id="forcomm3" class="main-container004" style="display:none;">
        <span class="main-text">Коментар по енергобалансу:</span>
        <input
            type="text" id="elem3" name="elem3"
            placeholder="Елемент"
            class="main-textinput0 input"
          />
        <input
            type="text" id="pokaz3" name="pokaz3"
            placeholder="Показник:"
            class="main-textinput0 input"
          />
          <input
            type="text" id="year4" name="year4"
            placeholder="Рік"
            class="main-textinput0 input"
          />
        <input
            type="text" id="comment3" name="comment3"
            placeholder="Коментар"
            class="main-textinput6 input"
          />
           <button id="select7" name="select7" class="button">Записати</button></div>
    </form>

    
        <?php
        if (isset($_REQUEST["select"])) {
          $type = $_REQUEST["type"];
          $year = $_REQUEST["year"];
          $month = $_REQUEST["month"];
          $index = $_REQUEST["index"];
          $new = $_REQUEST["new"];
          $sql = "UPDATE res_amount SET amount = $new WHERE str_el = $type AND year = $year AND month = $month AND resource = $index";
          mysqli_query($con, $sql);
        }

        if (isset($_REQUEST["delete"])) {
          $type = $_REQUEST["type-del"];
          $year = $_REQUEST["year-del"];
          $month = $_REQUEST["month-del"];
          $index = $_REQUEST["index-del"];
          $sql = "UPDATE res_amount SET amount = 0 WHERE str_el = $type AND year = $year AND month = $month AND resource = $index";
          mysqli_query($con, $sql);
        }

        if (isset($_REQUEST["select2"])) {
          $pokaznik = $_REQUEST["pokaznik"];
          $type1 = $_REQUEST["type1"];
          $year1 = $_REQUEST["year1"];
          $this1 = 1;
          if ($type1 == "all" AND $year1 == "all") {
            $sql = "SELECT * FROM res_amount where str_el > 3 and str_el < 14 and resource = $pokaznik order by year, month, str_el;";
            $this1 = 10;
          }
          elseif ($type1 == "all") {
            $sql = "SELECT * FROM res_amount where str_el > 3 and str_el < 14 and resource = $pokaznik AND year = $year1 order by month, str_el;";
            $this1 = 10;
          }
          elseif ($year1 == "all") {
            $sql = "SELECT * FROM res_amount WHERE str_el = $type1 AND resource = $pokaznik";
          }
          else {
            $sql = "SELECT * FROM res_amount WHERE str_el = $type1 AND year = $year1 AND resource = $pokaznik";
          }
          $result = mysqli_query($con, $sql) or die (mysqli_error($con));
          echo '<div class="main-container036">
              <span class="main-text034">
                Показник '.$pokaznik.' в року '.$year1.' в структурі '.$type1.'
              </span>
              <div class="main-container037">
                <div class="main-container038">
                  <span class="main-text035">
                    <span>&nbsp;</span>
                    <br />
                  </span>
                </div>
                <div class="main-container039">
                  <span class="main-text038">Січень</span>
                </div>
                <div class="main-container040">
                  <span class="main-text039">Лютий</span>
                </div>
                <div class="main-container041">
                  <span class="main-text040">Березень</span>
                </div>
                <div class="main-container042">
                  <span class="main-text041">Квітень</span>
                </div>
                <div class="main-container043">
                  <span class="main-text042">Травень</span>
                </div>
                <div class="main-container044">
                  <span class="main-text043">Червень</span>
                </div>
                <div class="main-container045">
                  <span class="main-text044">Липень</span>
                </div>
                <div class="main-container046">
                  <span class="main-text045">Серпень</span>
                </div>
                <div class="main-container047">
                  <span class="main-text046">Вересень</span>
                </div>
                <div class="main-container048">
                  <span class="main-text047">Жовтень</span>
                </div>
                <div class="main-container049">
                  <span class="main-text048">Листопад</span>
                </div>
                <div class="main-container050">
                  <span class="main-text049">Грудень</span>
                </div>
              </div>';
              
          while($row = mysqli_fetch_array($result)) {
              echo '<div class="main-container051">
                <div class="main-container052">
                  <span class="main-text050">
                    <span>'.$row[1].'</span>
                    <br />
                  </span>
                </div><div class="main-container053">';
                  $temp1 = $row[4];
                    if ($this1 == 10) {
                      for ($j = 1; $j < 10; $j++) {
                        $row = mysqli_fetch_array($result);
                        $temp1 += $row[4];
                      }
                    }
                  echo "<div class='main-container054'><span class='main-text053'>".$temp1."</span></div>";
                  for ($i = 1; $i < 12; $i++) {
                    $temp1 = 0;
                    for ($j = 0; $j < $this1; $j++) {
                      $row = mysqli_fetch_array($result);
                      $temp1 += $row[4];
                    }
                    echo "<div class='main-container054'><span class='main-text053'>".$temp1."</span></div>";
                  }
                echo "</div>";
            echo "</div>";
            }
            echo "</div>";
        //}
      }
      
     
        if (isset($_REQUEST["select3"])) {
        
          $pokaznik = $_REQUEST["pokaznik"];
          $type1 = $_REQUEST["type1"];
          $year1 = $_REQUEST["year1"];
          $graph = 0;
          echo '<span>Графік витрат по ресурсам:</span>
        <div id="graph1" style="width: 800px; height: 600px;" ></div>';
          if ($year1 == "all") {
            echo '<span>Графік грошових витрат по рокам:</span>
            <div id="graph2" style="width: 800px; height: 600px;"></div>';
            $sql = "SELECT * FROM res_amount WHERE str_el = $type1 AND resource = $pokaznik";
          }
          else {
            $graph = 1;
            $sql = "SELECT * FROM res_amount WHERE str_el = $type1 AND year = $year1 AND resource = $pokaznik";
          }
          $result = mysqli_query($con, $sql) or die (mysqli_error($con));
          $text = array('<div class="main-container143">
          <span class="main-text223">', ' ПІВРІЧЧЯ</span>
          <div class="main-container144">
            <div class="main-container145">
              <span class="main-text224">
                <span>&nbsp;</span>
                <br />
              </span>
            </div><div class="main-container146">
            <span class="main-text227">', '</span>
          </div>
          <div class="main-container147">
            <span class="main-text228">Робочі дні</span>
          </div>
          <div class="main-container148">
            <span class="main-text229">
              <span>Середньо</span>
              <br />
              <span>добове</span>
              <br />
            </span>
          </div>
          <div class="main-container149">
            <span class="main-text234">', '</span>
          </div>
          <div class="main-container150">
            <span class="main-text235">Робочі дні</span>
          </div>
          <div class="main-container151">
            <span class="main-text236">
              <span>Середньо</span>
              <br />
              <span>добове</span>
              <br />
            </span>
          </div>
          <div class="main-container152">
            <span class="main-text241">', '</span>
          </div>
          <div class="main-container153">
            <span class="main-text242">Робочі дні</span>
          </div>
          <div class="main-container154">
            <span class="main-text243">
              <span>Середньо</span>
              <br />
              <span>добове</span>
            </span>
          </div>
          <div class="main-container155">
            <span class="main-text247">', '</span>
          </div>
          <div class="main-container156">
            <span class="main-text248">Робочі дні</span>
          </div>
          <div class="main-container157">
            <span class="main-text249">
              <span>Середньо</span>
              <br />
              <span>добове</span>
            </span>
          </div>
          <div class="main-container158">
            <span class="main-text253">', '</span>
          </div>
          <div class="main-container159">
            <span class="main-text254">Робочі дні</span>
          </div>
          <div class="main-container160">
            <span class="main-text255">
              <span>Середньо</span>
              <br />
              <span>добове</span>
            </span>
          </div>
          <div class="main-container161">
            <span class="main-text259">', '</span>
          </div>
          <div class="main-container162">
            <span class="main-text260">Робочі дні</span>
          </div>
          <div class="main-container163">
            <span class="main-text261">
              <span>Середньо</span>
              <br />
              <span>добове</span>
            </span>
          </div>
        </div>');
        $graph2 = array();
        $graph1 = array();
        $x = 0;
        while ($row = mysqli_fetch_array($result)) {
          $temp = array('1', 'Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень');
          for ($j = 0; $j < 7; $j++) {
            echo $text[$j];
            echo $temp[$j];
          }
          echo $text[7];
          echo '<div class="main-container164">
          <div class="main-container165">
            <span class="main-text265">
              <span>'.$row[1].'</span>
              <br />
            </span>
          </div>';
          $averyear = 0;
          $count = 0;
          if ($row[4] == 0) {
            $days = 0;
            $aver = 0;
            $min = 100000;
          }
          else {
            $sql1 = "SELECT days FROM days_in_month WHERE month = $row[2] and year = $row[1]";
            $result1 = mysqli_query($con, $sql1) or die (mysqli_error($con));
            $row1 = mysqli_fetch_array($result1);
            $aver = (round($row[4]/$row1[0], 2));
            $days = $row1[0];
            $min = $aver;
            $count++;
            $averyear += $aver;
          }
          $summ2 = $row[4];
          array_push($graph1, [$x, $aver]);
          
          $minmonth = $row[2];
          $max = $aver;
          $maxmonth = $row[2];
          echo '<div class="main-container166">
          <div class="main-container167">
            <span class="main-text268">'.$row[4].'</span>
          </div>
          <div class="main-container168">
                <span class="main-text269">'.$days.'</span>
              </div>
          <div class="main-container169">
                <span class="main-text270">'.$aver.'</span>
              </div>';
              for ($i = 1; $i < 6; $i++) {
                $row = mysqli_fetch_array($result);
                if ($row[4] == 0) {
                  $days = 0;
                  $aver = 0;
                }
                else {
                  $sql1 = "SELECT days FROM days_in_month WHERE month = $row[2] and year = $row[1]";
                  $result1 = mysqli_query($con, $sql1) or die (mysqli_error($con));
                  $row1 = mysqli_fetch_array($result1);
                  $aver = (round($row[4]/$row1[0], 2));
                  $days = $row1[0];
                  $count++;
                  $averyear += $aver;
                }
                if (($aver < $min) and $aver != 0) {
                  $min = $aver;
                  $minmonth = $row[2];
                }
                if ($aver > $max) {
                  $max = $aver;
                  $maxmonth = $row[2];
                }
                $summ2 += $row[4];
                array_push($graph1, [$x, $aver]);
                echo '
          <div class="main-container167">
            <span class="main-text268">'.$row[4].'</span>
          </div>
          <div class="main-container168">
                <span class="main-text269">'.$days.'</span>
              </div>
          <div class="main-container169">
                <span class="main-text270">'.$aver.'</span>
              </div>';
              }
              echo "</div></div></div>";
            $temp = array('2', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень');
            for ($i = 0; $i < 7; $i++) {
              echo $text[$i];
              echo $temp[$i];
            }
            echo $text[7];
            $summ2 += $row[4];
            array_push($graph1, [$x, $aver]);
            $row = mysqli_fetch_array($result);
            if ($row[4] == 0) {
              $days = 0;
              $aver = 0;
            }
            else {
              $sql1 = "SELECT days FROM days_in_month WHERE month = $row[2] and year = $row[1]";
              $result1 = mysqli_query($con, $sql1) or die (mysqli_error($con));
              $row1 = mysqli_fetch_array($result1);
              $aver = (round($row[4]/$row1[0], 2));
              $days = $row1[0];
              $count++;
              $averyear += $aver;
            }
          echo '<div class="main-container164">
          <div class="main-container165">
            <span class="main-text265">
              <span>'.$row[1].'</span>
              <br />
            </span>
          </div>';
          if ($row[4] == 0) {
            $days = 0;
            $aver = 0;
          }
          else {
            $aver = (round($row[4]/$row1[0], 2));
            $days = $row1[0];
            $count++;
            $averyear += $aver;
          }
                if  (($aver < $min) and $aver != 0) {
                  $min = $aver;
                  $minmonth = $row[2];
                }
                if ($aver > $max) {
                  $max = $aver;
                  $maxmonth = $row[2];
                }
          echo '<div class="main-container166">
          <div class="main-container167">
            <span class="main-text268">'.$row[4].'</span>
          </div>
          <div class="main-container168">
                <span class="main-text269">'.$days.'</span>
              </div>
          <div class="main-container169">
                <span class="main-text270">'.$aver.'</span>
              </div>';
              for ($i = 1; $i < 6; $i++) {
                $row = mysqli_fetch_array($result);
                if ($row[4] == 0) {
                  $days = 0;
                  $aver = 0;
                }
                else {
                  $sql1 = "SELECT days FROM days_in_month WHERE month = $row[2] and year = $row[1]";
                  $result1 = mysqli_query($con, $sql1) or die (mysqli_error($con));
                  $row1 = mysqli_fetch_array($result1);
                  $aver = (round($row[4]/$row1[0], 2));
                  $days = $row1[0];
                  $count++;
                  $averyear += $aver;
                }
                if  (($aver < $min) and $aver != 0) {
                  $min = $aver;
                  $minmonth = $row[2];
                }
                if ($aver > $max) {
                  $max = $aver;
                  $maxmonth = $row[2];
                }
                $summ2 += $row[4];
                array_push($graph1, [$x, $aver]);
                echo '<div class="main-container167">
            <span class="main-text268">'.$row[4].'</span>
          </div>
          <div class="main-container168">
                <span class="main-text269">'.$days.'</span>
              </div>
          <div class="main-container169">
                <span class="main-text270">'.$aver.'</span>
              </div>';
              }
              echo "</div>";
            echo "</div></div>";
            echo '<div class="main-container227">
            <span class="main-text349">Середнє за рік</span>
            <div class="main-container228">
              <div class="main-container229">
                <span class="main-text350">
                  <span>Середнє</span>
                  <br />
                  <span>за рік</span>
                  <br />
                </span>
              </div>
              <div class="main-container230">
                <span class="main-text355">Min</span>
              </div>
              <div class="main-container231">
                <span class="main-text356">Місяць</span>
              </div>
              <div class="main-container232">
                <span class="main-text357">
                  <span>Max</span>
                  <br />
                </span>
              </div>
              <div class="main-container233">
                <span class="main-text360">Місяць</span>
              </div>
              <div class="main-container234">
                <span class="main-text361">Коефіцієнт нерівності</span>
              </div>
            </div>
            <div class="main-container235">
              <div class="main-container236">
                <span class="main-text362">
                  <span>'.(round($averyear / $count, 3)).'</span>
                  <br />
                </span>
              </div>
              <div class="main-container237">
                <div class="main-container238">
                  <span class="main-text365">'.$min.'</span>
                </div>
                <div class="main-container239">
                  <span class="main-text366">'.$minmonth.'</span>
                </div>
                <div class="main-container240">
                  <span class="main-text367">'.$max.'</span>
                </div>
                <div class="main-container241">
                  <span class="main-text368">'.$maxmonth.'</span>
                </div>
                <div class="main-container242">
                  <span class="main-text369">'.(round(($min/$max), 3)).'</span>
                </div>
              </div>
            </div>
          </div>';
          $sql2 = "SELECT cost_of_one FROM resources WHERE id = $row[3]";
          $result2 = mysqli_query($con, $sql2) or die (mysqli_error($con));
          $row2 = mysqli_fetch_array($result2);
          array_push($graph2, $summ2 * $row2[0]);
          $x++;
        }
        }

        if (isset($_REQUEST["select4"])) {
          $pie = 0;
          $type1 = $_REQUEST["type1"];
          $year1 = $_REQUEST["year1"];
          if ($year1 == "all") {
            $pie = 1;
            $sql = "SELECT * FROM res_amount WHERE str_el = $type1 ORDER BY year, resource, month";
            for ($i = 1; $i < 11; $i++) {
               echo '<span>Енергоресурс '.($i+2012).':</span>
        <div id="pie'.$i.'" style="width: 800px; height: 600px;" ></div>';
            }
          }
          else {
            $sql = "SELECT * FROM res_amount WHERE str_el = $type1 AND year = $year1";
            echo '<span>Енергоресурс '.$year1.':</span>
        <div id="graph2" style="width: 800px; height: 600px;" ></div>';
          }
          $result = mysqli_query($con, $sql) or die (mysqli_error($con));
          $summs = array();
          $s = 0;
          while ($row = mysqli_fetch_array($result)) {
            $s = $row[4];
            // echo "Початок:".$s." ";
            for ($i = 0; $i <11; $i++) {
              $row = mysqli_fetch_array($result);
              $s += $row[4];
              // echo $s." ";
            }
            $sql1 = "SELECT * FROM resources WHERE id = $row[3]";
            $result1 = mysqli_query($con, $sql1) or die (mysqli_error($con));
            $row1 = mysqli_fetch_array($result1);
            array_push($summs, [$row[1], ($s * $row[3])]);
          }
          //echo var_export($summs);
        }

        if (isset($_REQUEST["select5"])) {
          $elem = $_REQUEST["elem"];
          $comment = $_REQUEST["comment"];
          $pokaz = $_REQUEST["pokaz"];
          $year2 = $_REQUEST["year2"];
          if ($year2 != 0 and $year2 != NULL) {
            $temp = $year2;
          }
          else {
            $temp = "all";
          }
          $sql0 = "INSERT comments(str_el, type, resource, year, comment) VALUES ('$elem', 'Res. amount', $pokaz, '$temp', '$comment');";
          mysqli_query($con, $sql0);
          echo '<span class="main-text">Записано. Можете повернутися назад до діаграм.</span>';
        }

        if (isset($_REQUEST["select6"])) {
          $elem = $_REQUEST["elem2"];
          $comment = $_REQUEST["comment2"];
          $pokaz = $_REQUEST["pokaz2"];
          $year3 = $_REQUEST["year3"];
          if ($year3 != 0 and $year3 != NULL) {
            $temp = $year3;
          }
          else {
            $temp = "all";
          }
          $sql0 = "INSERT comments(str_el, type, resource, year, comment) VALUES ('$elem', 'Money amount', $pokaz, '$temp', '$comment');";
          mysqli_query($con, $sql0);
          echo '<span class="main-text">Записано. Можете повернутися назад до діаграм.</span>';
        }

        if (isset($_REQUEST["select7"])) {
          $elem = $_REQUEST["elem3"];
          $comment = $_REQUEST["comment3"];
          $pokaz = $_REQUEST["pokaz3"];
          $year4 = $_REQUEST["year4"];
          if ($year4 != 0 and $year4 != NULL) {
            $temp = $year4;
          }
          else {
            $temp = "all";
          }
          $sql0 = "INSERT comments(str_el, type, resource, year, comment) VALUES ('$elem', 'Energy balance', $pokaz, '$temp', '$comment');";
          mysqli_query($con, $sql0);
          echo '<span class="main-text">Записано. Можете повернутися назад до діаграм.</span>';
        }

        if (isset($_REQUEST["select8"])) {
          echo '<div class="main-container245">
          <div class="main-container246">
            <div class="main-container247"><span>ID</span></div>
            <div class="main-container248"><span>Елемент</span></div>
            <div class="main-container249"><span>Тип</span></div>
            <div class="main-container250"><span>Ресурс</span></div>
            <div class="main-container251"><span>Рік</span></div>
            <div class="main-container252"><span>Комментар</span></div>
          </div>
        ';
          $sql = "SELECT * from comments;";
          $result = mysqli_query($con, $sql) or die (mysqli_error($con));
          while ($row = mysqli_fetch_array($result)) {

            echo '<div class="main-container246">
            <div class="main-container247"><span>'.$row[0].'</span></div>
            <div class="main-container248"><span>'.$row[1].'</span></div>
            <div class="main-container249"><span>'.$row[2].'</span></div>
            <div class="main-container250"><span>'.$row[3].'</span></div>
            <div class="main-container251"><span>'.$row[4].'</span></div>
            <div class="main-container252"><span>'.$row[5].'</span></div>
          </div>
        ';
          }
          echo '</div>';
        }

        if (isset($_REQUEST["select9"])) {
          $act_name = $_REQUEST["act_name"];
          $act_el = $_REQUEST["act_el"];
          $act_res = $_REQUEST["act_res"];
          $act_year = $_REQUEST["act_year"];
          $act_term = $_REQUEST["act_term"];
          $act_rez = $_REQUEST["act_rez"];
          $act_money = $_REQUEST["act_money"];
          $act_source = $_REQUEST["act_source"];
          $sql0 = "INSERT activities(name, st_el, resource, year_of_start, years_for_realizing, expected_effect, finance, finance_source) 
          VALUES ('$act_name', $act_el, $act_res, $act_year, $act_term, '$act_rez', $act_money, '$act_source');";
          mysqli_query($con, $sql0);
          echo '<span class="main-text">Записано.</span>';
        }

        if (isset($_REQUEST["select10"])) {
          echo '<div class="main-container255">
          <div class="main-container256">
            <div class="main-container257"><span>№</span></div>
            <div class="main-container258"><span>Назва</span></div>
            <div class="main-container259"><span>Ресурс</span></div>
            <div class="main-container260"><span>Елемент</span></div>
            <div class="main-container261"><span>Очікуваний ефект</span></div>
            <div class="main-container262"><span>Кошти</span></div>
            <div class="main-container263"><span>Джерело коштів</span></div>
          </div>';
          $sql = "SELECT * from activities";
          $result = mysqli_query($con, $sql);
          while($row = mysqli_fetch_array($result))
              {
                $sql3 = "SELECT elementname from global where id = $row[2]";
                $result3 = mysqli_query($con, $sql3);
                $row3 = mysqli_fetch_array($result3);
                $sql1 = "SELECT name from resources where id = $row[3]";
                $result1 = mysqli_query($con, $sql1);
                $row1 = mysqli_fetch_array($result1);
                echo '<div class="main-container264">
                  <div class="main-container265"><span>'.$row[0].'</span></div>
                  <div class="main-container266"><span>'.$row[1].'</span></div>
                  <div class="main-container267"><span>'.$row[0].'</span></div>
                  <div class="main-container268"><span>'.$row[0].'</span></div>
                  <div class="main-container269"><span>'.$row[6].'</span></div>
                  <div class="main-container270"><span>'.$row[7].'</span></div>
                  <div class="main-container271"><span>'.$row[8].'</span></div>
                </div>';
              }
              echo '</div>';
        }

        if (isset($_REQUEST["select11"])) {
          echo '<div class="main-container272">
          <div class="main-container273">
          <div class="main-container274"><span>Елемент</span></div>
          <div class="main-container275"><span>Заощаджений ресурс</span></div>
          <div class="main-container276">
            <div class="main-container277">
              <span class="main-text395">Існуюча ситуація</span>
              <div class="main-container278">
                <span class="main-text396">Кіл</span>
                <span>грн</span>
              </div>
            </div>
          </div>
          <div class="main-container279">
            <div class="main-container280">
              <span class="main-text398">Після реалізації</span>
              <div class="main-container281">
                <span class="main-text399">Кіл</span>
                <span>грн</span>
              </div>
            </div>
          </div>
          <div class="main-container282">
            <div class="main-container283">
              <span class="main-text401">Економія</span>
              <div class="main-container284">
                <span class="main-text402">Кіл</span>
                <span>грн</span>
              </div>
            </div>
          </div>
        </div>';
        $act_num = $_REQUEST["act_num"];
        $sql = "SELECT * from activities where id = $act_num";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        $sql1 = "SELECT * FROM res_amount WHERE str_el = $row[2] AND resource = $row[3]";
        $result1 = mysqli_query($con, $sql1);
        $years1 = array();
        for ($i = 0; $i < 10; $i++) {
          $count = 0;
          $temp = 0;
          for ($j = 0; $j < 12; $j++) {
            $row1 = mysqli_fetch_array($result1);
            if ($row1[4] != 0) {
              $temp += $row1[4];
              $count++;
            }
          }
          array_push($years1, ($temp / $count));
        }
        $before = 0;
        for ($i = 0; $i < ($row[4] - 2013); $i++){
          $before += $years1[$i];
        }
        $before /= ($row[4] - 2013);
        $after = 0;
        if ($row[4] + $row[5] > 2022) {
          $row[5] = 2022 - $row[4];
        }
        for ($i = 0; $i < $row[5]; $i++){
          $after += $years1[$i + ($row[4] - 2013)];
        }
        $after /= $row[5];
        $sql2 = "SELECT * from resources where id = $row[3]";
        $result2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_array($result2);
        $sql3 = "SELECT elementname from global where id = $row[2]";
        $result3 = mysqli_query($con, $sql3);
        $row3 = mysqli_fetch_array($result3);
        echo '<div class="main-container285">
        <div class="main-container286"><span>'.($row[0]).'</span></div>
        <div class="main-container287"><span>'.($row[1]).'</span></div>
        <div class="main-container288"><span>'.round($before,2).'</span></div>
        <div class="main-container289"><span>'.round($before * $row2[3], 2).'</span></div>
        <div class="main-container290"><span>'.round($after, 2).'</span></div>
        <div class="main-container291"><span>'.round($after * $row2[3], 2).'</span></div>
        <div class="main-container292"><span>'.round($before - ($after - $row[7])/$row[5], 2	).'</span></div>
        <div class="main-container293"><span>'.round($row2[3] * ($before - ($after - $row[7])/$row[5]), 2).'</span></div>
      </div>
      </div>';
        }


      if (isset($_REQUEST["select12"])) {
        $act_all_el = $_REQUEST["act_all_el"];
        $act_all_year = $_REQUEST["act_all_year"];
        if ($act_all_el == "all" AND $act_all_year == NULL) {
          echo "Введіть кількість років та відділ або кількість років!";
          return ;
        }
        elseif ($act_all_el == "all") {
          $sql1 = "SELECT * FROM res_amount where str_el > 3 and str_el < 14 order by resource, str_el, year, month;";
          $this1 = 10;
        }
        elseif ($act_all_year != NULL) {
          $sql1 = "SELECT * FROM res_amount WHERE str_el = $act_all_el";
          $this1 = 1;
        }
        else {
          echo "Введіть кількість років та відділ або кількість років!";
          return ;
        }
        echo '<div class="main-container272">
          <div class="main-container273">
          <div class="main-container274"><span>Елемент</span></div>
          <div class="main-container275"><span>Заощаджений ресурс</span></div>
          <div class="main-container276">
            <div class="main-container277">
              <span class="main-text395">Існуюча ситуація</span>
              <div class="main-container278">
                <span class="main-text396">Кіл</span>
                <span>грн</span>
              </div>
            </div>
          </div>
          <div class="main-container279">
            <div class="main-container280">
              <span class="main-text398">Після реалізації</span>
              <div class="main-container281">
                <span class="main-text399">Кіл</span>
                <span>грн</span>
              </div>
            </div>
          </div>
          <div class="main-container282">
            <div class="main-container283">
              <span class="main-text401">Економія</span>
              <div class="main-container284">
                <span class="main-text402">Кіл</span>
                <span>грн</span>
              </div>
            </div>
          </div>
        </div>';
        $result1 = mysqli_query($con, $sql1);
        $years1 = array();
        for ($i = 0; $i < 70; $i++) {
          $count = 0;
          $temp = 0;
          for ($j = 0; $j < 12 * $this1; $j++) {
            $row1 = mysqli_fetch_array($result1);
            if ($row1[4] != 0) {
              $temp += $row1[4];
              $count++;
            }
          }
          array_push($years1, ($temp / $count));
        }
        if ($this1 == 1) {
          $sql3 = "SELECT elementname from global where id = $act_all_el";
          $result3 = mysqli_query($con, $sql3);
          $row3 = mysqli_fetch_array($result3);
          $this2 = $row3[0];
        }
        else {
          $this2 = "all";
        }
        
        $x = 0;
        $forres = array(1,2,3,4,5,6,7);
        $ekonom = 0;
        for ($j = 0; $j < 7; $j++) {
          $y = $x / 10;
          $sql2 = "SELECT * from resources where id = $forres[$y]";
          $result2 = mysqli_query($con, $sql2); 
          $row2 = mysqli_fetch_array($result2);
          
          $before = 0;
          for ($i = $x; $i < ($x + 10 - $act_all_year); $i++){
            $before += $years1[$i];
          }
          $before /= (10 - $act_all_year);
          $after = 0;
          for ($i = ($x + 10 - $act_all_year); $i < ($x + 10); $i++){
            $after += $years1[$i];
          }
          $after /= $act_all_year;
          echo '<div class="main-container285">
            <div class="main-container286"><span>'.($this2).'</span></div>
            <div class="main-container287"><span>'.$row2[1].'</span></div>
            <div class="main-container288"><span>'.round($before,2).'</span></div>
            <div class="main-container289"><span>'.round($before * $row2[3], 2).'</span></div>
            <div class="main-container290"><span>'.round($after, 2).'</span></div>
            <div class="main-container291"><span>'.round($after * $row2[3], 2).'</span></div>
            <div class="main-container292"><span>'.round($before - ($after / $act_all_year), 2).'</span></div>
            <div class="main-container293"><span>'.round(($before - ($after/ $act_all_year)) * $row2[3], 2).'</span></div>
          </div>';
          $ekonom += (($before - ($after/ $act_all_year)) * $row2[3]);
          $x += 10;          
        }
        echo '<div class="main-container285">
            <br>
            <div class="main-container286"><span>Загалом</span></div>
            <div class="main-container287"><span>'.round($ekonom,2).'</span></div>
          </div></div>';
        }


        ?>
        </div>
  <script>

</script>
      <script type="text/javascript">
      // google.charts.load('current', {'packages':['corechart']}); 
      google.charts.load('current', {
        'packages':['corechart'],
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawPie);

      function drawPie() {
        forcomm3.style.display = "block";
        var is = <?php echo $pie ?>;
        if (is == 1) {
          <?php
          if ($pie == 1) {
            echo "var options = {
            };
            ";
            for ($j = 1; $j <11; $j++) {
            echo "var data".$j." = google.visualization.arrayToDataTable([
            ['resource', 'number'],";
              for ($i = 0; $i <7; $i++) {  
                  echo "['".$summs[($i + ($j-1)*7)][0]."', ".$summs[($i + ($j-1)*7)][1]."],";  
                 }
            echo "]);
        var chart".$j." = new google.visualization.PieChart(document.getElementById('pie".$j."'));
        chart".$j.".draw(data".$j.", options);
            "; 
          }
          }
          else {

          }
          ?>
        }
        else {
          var data = google.visualization.arrayToDataTable([
          ['resource', 'number'],
          <?php  
            for ($i = 0; $i <7; $i++) {  
                echo "['".$summs[$i][0]."', ".$summs[$i][1]."],";  
               }  
          ?>
          ]);
        var options = {
        };
			var chart = new google.visualization.PieChart(document.getElementById("graph2"));
			chart.draw(data, options);
        }
      
      }
    </script>

<script type="text/javascript">
  google.charts.load('current', {
        'packages':['corechart'],
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawGraph2);

      function drawGraph2() {
        // select5.style.display = "block";
        // comment.style.display = "block";
        forcomm.style.display = "block";
        var data1 = new google.visualization.DataTable();
        data1.addColumn('number', 'month');
        <?php
        if ($graph == true) {
          echo "data1.addColumn('number', 'year'); ";
        }
        else {
          echo 'forcomm2.style.display = "block";';
          for ($i = 2013; $i <2023; $i++) {
            echo "data1.addColumn('number', '".$i."'); ";
          }
        }
        ?>
        data1.addRows([
          <?php
          $temp = 0;
            for ($i = 0; $i <12; $i++) {
              echo "[".($i + 1);
              if ($graph == true) {
                if ($graph1[($i)][1] == 0) {
                  echo ", null";
                }
                else {

                  echo ", ".$graph1[($i)][1];
                }
              }
              else {
                for ($j = 0; $j <10; $j++) {
                  if ($graph1[($j * 12 + $i)][1] == 0) {
                    echo ", null";
                  }
                  else {
  
                    echo ", ".$graph1[($j * 12 + $i)][1];
                  }
                  }
              }
              echo "], ";
          }
            ?>
        ]);
        var options1 = {
			    interpolateNulls: false,
        };
      var chart1 = new google.visualization.LineChart(document.getElementById("graph1"));
			chart1.draw(data1, options1);
      var is = <?php echo $graph ?>;
      if (is == 0) {
        var data = google.visualization.arrayToDataTable([
             ['month', 'amount'],
            <?php
            if ($graph == true) {
              echo "['2013',1],";
            }
            else {
              for ($i = 0; $i <10; $i++) {
                echo "['".($i+ 2013)."',".($graph2[$i])."],";
              }
            }
            ?>],
			);
			var options = {
        };
			var chart = new google.visualization.LineChart(document.getElementById("graph2"));
			chart.draw(data, options);
      }
      }  
      </script>

      
          
      </div>
    </div>
    <script
      data-section-id="header"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </body>
</html>