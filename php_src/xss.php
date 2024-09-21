<!DOCTYPE html>
<html>
<head>
    <title>CTF XSS Challenge</title>
</head>
<body>
    <h1>Search</h1>
    <form method="GET">
        <input type="text" name="query" placeholder="Type something..."> 
        <!-- <script>alert(1)</script> -->
        <button type="submit">Search</button>
    </form>

    <p>Results: <?php echo $_GET['query']; ?></p>
</body>
</html>
