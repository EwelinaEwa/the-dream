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
</head>
<body>

<h1>Welcom to Tonga</h1>

<p>Current exchange rate is:</p>
<p>1 PT (Tongan paʻanga) = 0,37 EUR (Euro)</p>
<form action="index.php" method="get">
    <label for="value">Enter value in PT</label>
    <input type="text" id="value" name="value">
    <input type="submit" name="submit">
</form>
<p>Amount in EUR is</p>

<?php
if (isset($_GET['submit'])) {
    $value = $_GET['value'];
    $eurValue = $value * 2.67;
    echo "<p>" . number_format($eurValue,2) . "</p>";
}
?>


</body>
</html>



