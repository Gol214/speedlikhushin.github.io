   <div class="container"> 
        <div class="main-content"> 
			<a href="new 1.html" class="widget"> 
                <h2>ГЛАВНАЯ</h2> 
            </a> 
            <a href="act.html" class="widget"> 
                <h2>Акутальные предложения</h2> 
            </a> 
            <a href="feedback.html" class="widget"> 
                <h2>Обратная связь</h2> 
            </a> 
            <a href="cont.html" class="widget"> 
                <h2>Контакты</h2> 
            </a> 
            <a href="input.html" class="widget"> 
                <h2>Войти</h2> 
            </a> 
		
        </div> 
<body>

<main>
<h2><i>ОБРАТНАЯ СВЯЗЬ:</i></h2>
<form name="form1" method="post" action="test.php"><p> 
Имя: <input type="text" name="sirname"></p><p> 
Ваш Email: <input  type="text" name="email"></p>
<p> Сообщение 
<textarea name="message"></textarea> (поле сообщения) </p>
<p><input type="submit" name="send" value="Отправить"></p>
</form>

<?php
/* Подключаемся к базе данных */
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "praktika");

/* Выбираем данные */
$sql="SELECT name, email, message FROM baa";
$result=mysqli_query($link, $sql);

while ($line=mysqli_fetch_row($result)) {
echo "<b>Имя:</b>".$line[0]."<br>";
echo "<b>Email:</b>".$line[1]."<br>";
echo "<b>Сообщение:</b>".$line[2]."<br><br>";
}
?>

</main>

<footer>
</footer>
</body>
</html> 