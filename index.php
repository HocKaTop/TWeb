<!DOCTYPE html>
<html>

<head>
    <script src="script_index.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
    <title> Lab1</title>
    <meta charset="UTF-8">
</head>

<body>
    <header class="custom-font">
        <div class="figure">
            <ul>
                <li> <a href="history.php">История</a></li>
                <li> <a href="culture.php">Культура</a></li>
                <li> <a href="architecture.php">Архитектура</a></li>
                <li> <a href="sport.php">Спорт</a></li>
            </ul>
    </header>
    </div>

    <div class="text">
        <h1 class="custom-font-italic">Париж</h1>
        <p> Пари́ж (фр. Paris) — столица и крупнейший город Франции. Находится на севере государства, в центральной
            части Парижского бассейна, на реке Сена. </p>
        <p> Население — 2 102 650 человек (2023)</p>
    </div>

    <div class="figure">
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/La_Tour_Eiffel_vue_de_la_Tour_Saint-Jacques%2C_Paris_ao%C3%BBt_2014_%282%29.jpg"
            width="300" height="300">
    </div>

    <div class="text">
        <p> Относится к глобальным городам и мировым финансовым центрам. Здесь располагаются штаб-квартиры ЮНЕСКО и ряда
            других международных организаций.</p>
        <p>Исторический центр, образованный островом Сите и обоими берегами Сены, складывался на протяжении веков. Во
            второй половине XIX века претерпел коренную реконструкцию. В пригороде расположен дворцово-парковый ансамбль
            Версаль. </p>
        <p> Основан в III веке до н. э. кельтским племенем паризиев. С III—IV веков известен как галло-римский город
            Паризии. С конца X века с перерывами является столицей Франции.</p>
    </div>
    <div class="text">
        <div class="quiz-box">
    <div class="quiz" >
        <h2>Проверьте свои знания о Париже</h2>
        <p>Как называется река, на которой расположен Париж?</p>
        <input type="radio" name="q1" value="Сена"> Сена<br>
        <input type="radio" name="q1" value="Темза"> Темза<br>
        <input type="radio" name="q1" value="Рейн"> Рейн<br>

        <p>Какой исторический ансамбль находится в пригороде Парижа?</p>
        <input type="radio" name="q2" value="Лувр"> Лувр<br>
        <input type="radio" name="q2" value="Версаль"> Версаль<br>
        <input type="radio" name="q2" value="Нотр-Дам"> Нотр-Дам<br>

        <button onclick="checkQuiz()">Проверить</button>
        <p id="result"></p>
    </div>
    </div>
    </div>
    <form action="save.php" method="post">
        <label for="username">Введите имя:</label>
	<input type="text" id="username" name="username">
	<label for="email">Введите почту:</label>
	<input type="text" id="email" name="email">
        <input type="submit" value="Отправить">
    </form>
    

</body>

</html>