<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>sklep nieALLEGRO</title>
</head>
<body>
    <header class="flex-container topnav">
        <img src="img/logo.webp" alt="tak" id="logo">
        <form action="search.php" method="get">
            <input type="text" name="search" id="search" placeholder="wyszukaj produkt">
            <input type="submit" value="szukaj">
        </form>
        <a href="cart.php"  id="cart">koszyk</a>
    </header>
    <mein class="flex-container-wrap">
        <div class="card text-center">
            <h3>nazwa oferty</h3>
            <p>cena: 99.99zł</p>
        </div>
    </mein>
</body>
</html>