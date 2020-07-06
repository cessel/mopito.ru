<!DOCTYPE HTML>

<html>
<head>
  <meta charset="utf-8">
  <title>Регистрация объявлений</title>
  <link rel="stylesheet" href="/theme/css/styles.css">
  <script src="jquery.min.js"></script>
  <script src="script.js"></script>
  <script src="jquery.maskedinput.js"></script>
  <script type="text/javascript">jQuery(function($) {$('#phone').mask('+9(999)999-99-99');});</script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <link rel="stylesheet" href="/theme/css/styles.css">  
  <link rel="stylesheet" href="/theme/css/styles-drop-kat.css">

	<style>
    #form form{ margin:auto; display:block; }
    #form legend, #form input, #form textarea, #form b, #dsl1, #dsl2, #dsl3{ display:block; padding:10px; margin:3px auto;}
    #form legend, #form b{ text-align:center;}
    #form legend{    border-radius: 30px; background:#39F; color:#000; }
    #form input[type="text"], #form input[type="tel"], #form input[type="email"]{ border-radius:30px; border:#000 solid 1px;} 
    #form textarea{ border-radius:10px; height:100px;}
    #form b{ border-radius:30px; background:#39F; border:#00C solid 1px; padding:5px 10px; cursor:pointer;}
    #dsl1, #dsl2, #dsl3{ padding:0; width: 300px;}
    #dsl1 label, #dsl2 label, #dsl3 label{ display: inline-block; padding: 9px 10px; border: solid #000 1px; width: 120px; border-radius: 30px 0 0 30px;}
    #form select{width: 150px; float: right; padding: 10px; border-radius: 0 30px 30px 0;}
    #dsl4{ max-width: 560px; margin: auto;}
    #dsl4 fieldset{ border: none; padding: 5px 0; display: block; margin: auto;text-align: center;}
    #dsl4 fieldset big { font-size: 16px;}
    #dsl4 fieldset big span{ margin-left: 5px; display: inline-block; }
    #dsl4 fieldset big div{ margin-left: 12px; display: inline-block; }
    #form input[type="checkbox"] { display:inline-block; width: auto; margin: 0 3px;}
    #dsl5{ text-align: center;}
    #dsl5 b{ cursor:no-drop; background:#999;}
		#recaptcha{ width: 300px; margin:auto;}
  </style>
</head>
<body>
			<div class="container">
				<div class="cont-box">
					<div class="regp-md-3 regp-sm-3 stick_height_js">

<div id="form">
	<form id="form1"><legend>Шаг 1: Укажите профиль компании</legend>
    <input type="text" id="" name="company" placeholder="Наименование компании" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9 ]{3,20}$/)">
    <input type="text" id="" name="city" placeholder="Из какого города" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9 ]{3,30}$/)">
    <input type="text" id="" name="adress" placeholder="...и адрес (при желании)" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9 ]{3,50}$/)">
    <input type="text" id="" name="name" placeholder="Ваше имя" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9 ]{3,50}$/)">
    <input type="tel" id="phone" name="phone" placeholder="Моб.">
    <input type="email" id="" name="email" placeholder="Email">
    <textarea name="message" placeholder="Напишите комментарии. Если у Вас уже есть профиль, то укажите только ваш логин (он же емаил)" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9 ]{3,150}$/)"></textarea>
    <b onClick="further()">Далее</b>
  </form>
  <form id="form2" style="display:none;"><legend>Шаг 2: Разместите объявление</legend>
    <input type="text" id="" name="showCity" placeholder="Город показа" onFocus="Focus('dsl1', 'sl1')" onBlur="Blur('dsl1', 'sl1', this)">
    <input type="text" id="" name="shouAdres" placeholder=".. и адрес показа (для точки продаж)" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9 ]{3,50}$/)">
      <div id="dsl1" style="display:none;"><label>Тип поставщика: </label><select id="sl1" onChange="selectl1('dsl2', 'sl2', this); this.getElementsByTagName('option')[0].innerHTML = '';" onClick="delOption(this)"></select>
	  </div>
	  <div id="dsl2" style="display:none;"><label>Категория: </label><select id="sl2" onChange="selectl2('dsl3', 'sl3', this); this.getElementsByTagName('option')[0].innerHTML = '';" onClick="delOption(this)"></select>
	  </div>
	  <div id="dsl3" style="display:none;"><label>Подкатегория: </label><select id="sl3" onChange="selectl3('dsl4', this); this.getElementsByTagName('option')[0].innerHTML = '';" onClick="delOption(this)"></select>
	  </div>
	  <div id="dsl4" style="display:none;">
	  </div>
	  <div id="dsl5" style="display:none;"> 
		  <div id="recaptcha" /*style="display:none;"*/>
	  </div>
	  <div class="g-recaptcha" data-sitekey="6Lc8yCgUAAAAADPYnEeqQd65crK6KU8A4XpkxRYX"></div>
      <input type="checkbox" onChange="regulations(this)"><label>С правилами ознакомился и согласен</label>
      <b id="Click">Отправить на модерацию</b>

  </form>
</div>
</div>
</div>
</div>
</body>
</html>