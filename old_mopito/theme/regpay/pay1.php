<!DOCTYPE HTML>

<html>

<head>

  <meta charset="utf-8">
  <title>Выставить счет</title>
  <script src="jquery.min.js"></script>
  <script src="script.js"></script>
  <script src="jquery.maskedinput.js"></script>
  <script type="text/javascript">jQuery(function($) {$('#phone').mask('+9(999)999-99-99');});</script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
	<style>
    #form{ width:100%;}
    #form form{ margin:auto; display:block; }
    #form legend, #form input, #form textarea, #form b, #dsl, #dsl1, #dsl2, #dsl3, #dsl4, #month, #priorities{ display:block; width:280px; padding:10px; margin:3px auto;}
    #error{ display:block; width:310px; margin:auto;}
    #error div{ background: red; color: #fff; font-size: 20px; text-align: center; padding: 10px;}
    #form legend, #form b{ text-align:center;}
    #form legend{ background:#39F; color:#000; font-size: 20px;}
    #form input[type="text"], #form input[type="email"], #form input[type="tel"]{ border-radius:30px; border:#000 solid 1px;} 
    #form textarea{ border-radius:10px; height:100px;}
    #form b{ border-radius:30px; background:#39F; border:#00C solid 1px; padding:5px 10px; cursor:pointer;}
    #dsl, #dsl1, #dsl2, #dsl3, #dsl4{ padding:0; width: 300px;}
    #dsl label, #dsl1 label, #dsl2 label, #dsl3 label, #dsl4 label{ display: inline-block; padding: 9px 10px; border: solid #000 1px; width: 120px; border-radius: 30px 0 0 30px;}
    #form select{width: 150px; float: right; padding: 10px; border-radius: 0 30px 30px 0;}
    #dsl5{ text-align: center;}
    #dsl5 b{ cursor:no-drop; background:#999;}
		#recaptcha{ width: 300px; margin:auto;}
  </style>
</head>

<body>

<div id="form">
  <form id="form1">
    <div id="dsl">
      <legend>Выставление счета</legend>
      <input type="text" id="id" name="id" placeholder="Вставьте ID" onBlur="inpId(Pattern(true, this, /^ID[0-9]{1,9}-[A-Za-zА-Яа-яЁё]{1,9}\s[0-9]{2}.[0-9]{2}.[0-9]{4}\sP-[A-Za-zА-Яа-яЁё0-9]{1,9}$/), this, 'dsl1')" onMouseOut="inpId(Pattern(true, this, /^ID[0-9]{1,9}-[A-Za-zА-Яа-яЁё]{1,9}\s[0-9]{2}.[0-9]{2}.[0-9]{4}\sP-[A-Za-zА-Яа-яЁё0-9]{1,9}$/), this, 'dsl1')" value="ID1001-msk 25.06.2019 P-01">
    	<input type="email" id="email" name="email" placeholder="email">
    	<input type="tel" id="phone" name="phone" placeholder="phone">
    </div>
    <script>document.getElementById('id').focus()</script>
    <div id="error" style="display:none;"></div>
    <div id="dsl1" style="display:none;">
    	<label>Выбор услуги: </label>
      <select id="sl1" onChange="sel(this)">
      	<option>Выбрать</option>
      	<option>Аренда</option>
      	<option>Приоритеты</option>
      </select>
    </div>
		<div id="dsl2" style="display:none;">
    	<label>Кол-во мес: </label>
      <select data-price="2000" id="sl2" onChange="sel2(this, 'dsl4'); calc(false);">
      	<option>Выбрать</option>
      	<option>1</option>
      	<option>2</option>
      	<option>3</option>
      	<option>4</option>
      	<option>5</option>
      	<option>6</option>
      	<option>12</option>
      	<option>24</option>
      </select>
    </div>
		<div id="dsl3" style="display:none;">
    	<label>Кол-во пр: </label>
      <select data-price="35" id="sl3" onChange="sel2(this, 'dsl4'); calc(false);">
      	<option>Выбрать</option>
      	<option>1</option>
      	<option>2</option>
      	<option>3</option>
      	<option>4</option>
      	<option>5</option>
      	<option>6</option>
      	<option>7</option>
      	<option>8</option>
      	<option>9</option>
      	<option>10</option>
      	<option>20</option>
      	<option>30</option>
      	<option>50</option>
      </select>
    </div>
		<div id="dsl4" style="display:none;">
    	<label>Способ оплаты: </label>
      <select id="sl4" onChange="calc(true); regulations2(this);">
      	<option>Выбрать</option>
      	<option data-bankAccount="XXXXXXXXXXXXXXX">Яндекс</option>
      	<option data-bankAccount="+XXXXXXXXXXX">Киви</option>
      	<option data-bankAccount="ХХХ-ХХХ-ХХХХХ-ХХХ">Сбер</option>
      </select>
    </div>
    <div id="month" style="display:none;">
    	<span id="delMessage">
        <span>Сумма к оплате в размере <big></big> рублей сроком на <big></big> мес.</span>
        <span>до <big></big></span><br>
        <span>на <big></big></span>
      </span>
    </div>
    <div id="priorities" style="display:none;">
    	<span id="delMessage">
        <span>Сумма к оплате в размере <big></big> рублей в количестве <big></big> приоритетов.</span>
        <span>до <big></big></span><br>
        <span>на <big></big></span>
      </span>
    </div>
    <div id="recaptcha" style="display:none;">
        <div class="g-recaptcha" data-sitekey="6Lc8yCgUAAAAADPYnEeqQd65crK6KU8A4XpkxRYX"></div>
    </div>
    <div id="dsl5">
      <b id="Click">Выставить счет</b>
    </div>
  </form>
</div>

</body>

</html>