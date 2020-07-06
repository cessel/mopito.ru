<!DOCTYPE html>

<html lang="ru"><head>

   <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
   <meta name="robots" content="noindex">
   <title>Импорт данных в базу из таблицы excel</title>

   <meta name="description" content="">	

   <link rel="stylesheet" href="//yastatic.net/bootstrap/3.3.6/css/bootstrap.min.css">

   <script src='https://www.google.com/recaptcha/api.js'></script>



</head>

<body>


<div class='container'>



<h1>Импорт данных в базу</h1>

<h2>Для импорта данных выберите файл и нажмите кнопку "Импортировать"</h2>

<form method="post" action="/import/import.php" enctype="multipart/form-data">

<input type="file" id="inputfile" name="inputfile"><br>

<div id="import_data" class="g-recaptcha" data-sitekey="6LfRXmIUAAAAAE4SadTJbauKdCyHvDvq8H4SaAbb"></div>

<input type="submit" value="Импортировать">



</form>



<h2>Для импорта СТАТИСТИКИ выберите файл и нажмите кнопку "Импортировать"</h2>

<form method="post" action="/import/import_counters.php" enctype="multipart/form-data">

<input type="file" id="inputfile" name="inputfile"><br>

<div id="import_stat" class="g-recaptcha" data-sitekey="6LfRXmIUAAAAAE4SadTJbauKdCyHvDvq8H4SaAbb"></div>

<input type="submit" value="Импортировать">

</form>



<h2>Для ЭКСПОРТА СТАТИСТИКИ нажмите кнопку "Экспортировать"</h2>

<form method="post" action="/import/export_counters.php">

<div id="export_stat" class="g-recaptcha" data-sitekey="6LfRXmIUAAAAAE4SadTJbauKdCyHvDvq8H4SaAbb"></div>

<input type="submit" value="Экспортировать">

</form>



</div>


</body>

</html>

</html>