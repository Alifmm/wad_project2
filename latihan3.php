<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>LATIHAN3</title>
</head>
<body>
    <div class="container mt-5">
        <h1>LATIHAN</h1>

        <?php
        if (isset($_GET['calculate'])) {
            $a1 = $_GET['a1'];
            $a2 = $_GET['a2'];

            $res = $a1 + $a2;
            echo "<p class='mt-3'>Hasil: " . $res . "</p>";
        } 
        ?>
        <a button href="latihan2.php" class="btn btn-primary mt-3">RETURN</button> </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
