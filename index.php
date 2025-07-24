<html>

<head>
<title>Подготовка к экзамену</title>
<link rel="stylesheet" href="style.css">

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#e718b9">
</head>

<body>
	<header>
		<h1 align="center">Здравствуйте, это моя первая страница.</h1><br>
		<h2 align="center">Здесь вы можете подготовится к экзамену.</h2><br>
	</header>
	<div class="main">
		<div class="left">
			<ul>
			<li><a href="index.html">Главная</a></li>
			<li><a href="formule.html">Формулы</a></li>
			<li><a href="teoria.html">Теория</a></li>
			<li><a href="zadania.html">Задания (Приложение)</a></li>
			<p align="center">Ваши пожелания или замечания! :)</p>
			<form align="center" name="forma" method="post" action="test.php"> 
			<p> Имя: <input type="text" name="name"></p> 
			<p> Ваш Email: <input  type="text" name="email"></p>
			<p> Сообщение: <textarea name="message"></textarea></p><p1>
			<input type="submit" name="send" value="Отправить"></p1></form> 
		</div>
		<div class="content">
			<h1 align="center">Контактная информация</h2>
				<footer>
				</footer>
			<h1 align="left">Номер телефона:</h1>
			<h1 align="center">+7 (985) 293-41-28</h2>
			<h1 align="left">Почта:</h2>
			<h1 align="center">kharisov.danil@gmail.com</h2>
			<h1 align="left">Телеграм:</h2>
			<h1 align="center">@lordsl1m</h2>
		</div>
	</div>
	<h1 align="left">Отзывы</h2>
	<?
	/* Подключаемся к базе данных */
	$link = mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "forma");

	/* Выбираем данные */
	$sql="SELECT name, email, msg FROM feedback ORDER BY id DESC";
	$result=mysqli_query($link, $sql);
	while ($line=mysqli_fetch_row($result)) {
	echo "<b>Имя:</b>".$line[0]."<br>";
	echo "<b>Email:</b>".$line[1]."<br>";
	echo "<b>Сообщение:</b>".$line[2]."<br><br>";
	}
?>
	<script>
	  if ('serviceWorker' in navigator) {
		window.addEventListener('load', () => {
		  navigator.serviceWorker.register('/service-worker.js')
			.then(registration => {
			  console.log('ServiceWorker registration successful');
			})
			.catch(err => {
			  console.log('ServiceWorker registration failed: ', err);
			});
		});
	  }
	</script>


</body>

</html> 