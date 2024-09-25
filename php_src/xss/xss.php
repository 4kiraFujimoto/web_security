<!-- <!DOCTYPE html> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CTF XSS Challenge</title>
</head>
<body>
    <h1>Search</h1>
    <form method="GET">
        <input type=text name=query value=<?php echo $_GET['query']; ?>>  <!--属性値のxss -->
        <button type=submit>Search</button>
    </form>

    <p>Results: <?php echo $_GET['query']; ?></p> <!--要素のxss -->
</body>
</html>





