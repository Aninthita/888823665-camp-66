<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color:rgb(236, 215, 201);">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="text-center">
            <form method="GET">
                <label for="number">Enter a number:</label>
                <input type="number" id="number" name="number" class="form-control mb-3" required>
                <button type="submit" class="btn btn-primary">Generate Table</button>
            </form>
            <?php
            if (isset($_GET['number']) && is_numeric($_GET['number'])) {
                $number = intval($_GET['number']);
                echo "<h1 class='mb-4'><b>ตารางสูตรคูณแม่ $number</b></h1>";
                echo "<table class='table table-bordered table-striped text-center'>";
                echo "<thead class='table-primary'><tr><th><b>สูตรคูณ</b></th><th><b>ผลลัพธ์</b></th></tr></thead><tbody>";
                for ($i = 1; $i <= 12; $i++) {
                    $result = $number * $i;
                    echo "<tr><td>$number x $i</td><td>$result</td></tr>";
                }
                echo "</tbody></table>";
            }
            ?>
        </div>
    </div>
</body>
</html>
