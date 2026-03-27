<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Опитування</title>
</head>
<body>

<h2>Твої звички</h2>

<form action="result.php" method="post">

    <p>1. Який твій улюблений час доби?</p>
    <select name="time">
        <option value="morning">Ранок</option>
        <option value="day">День</option>
        <option value="night">Ніч</option>
    </select>

    <p>2. Як часто ти займаєшся спортом?</p>
    <input type="radio" name="sport" value="no"> Не займаюсь<br>
    <input type="radio" name="sport" value="sometimes"> Іноді<br>
    <input type="radio" name="sport" value="often"> Часто<br>

    <p>3. Чи любиш подорожувати?</p>
    <input type="checkbox" name="travel" value="yes"> Так<br>

    <br>
    <input type="submit" value="Відправити">

</form>

</body>
</html>
