<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon"
          type="image/png"
          href="images/favicon_io/android-chrome-192x192.png">
    <title>The Dream</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>

<h1>WELCOME TO TONGA</h1>

<p>The currency is: PT - Tongan paʻanga</p>
<ul>Current exchange rates:
    <li>1 PT = 0,37 EUR</li>
    <li>1 PT = 0,44 USD</li>
    <li>1 PT = 0,32 GBP</li>
</ul>
<form action="index.php" method="get">
    <label for="value">Enter value in PT</label></br>
    <input type="text" id="value" name="value"></br>
    <label for="fx">Select currency</label></br>
    <select name="fx" id="fx">
        <option value="eur" class="currencies" id="eur">EUR</option>
        <option value="usd" class="currencies" id="usd">USD</option>
        <option value="gbp" class="currencies" id="GBP">GBP</option>
    </select></br>
    <input type="submit" name="submit" id="submit">
</form>
<p id="eurAmount">Amount in EUR is</p>

<p id="result"
<?php
if (isset($_GET['submit'])) {
    $value = $_GET['value'];
    $eurValue = $value / 2.67;
    echo "<p>" . number_format($eurValue,2) . "</p>";
}
?>
</p>


<footer>
<p class="footer">Photo by <a href="https://unsplash.com/@russmail?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Vince Russell</a> on <a href="https://unsplash.com/s/photos/tonga?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
</p>
</footer>

</body>
</html>



