<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>LATIHAN 2</title>
</head>
<body>
    <div class="container mt-5">
        <h1>LATIHAN</h1>

        <form action="latihan3.php" method="get" class="mt-4">
            <div class="form-group">
                <label for="angka1">Angka 1:</label>
                <input type="number" class="form-control" name="a1" id="a1" required>
            </div>

            <div class="form-group">
                <label for="angka2">Angka 2:</label>
                <select class="form-control" name="a2" id="a2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="calculate">CALCULATE</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
