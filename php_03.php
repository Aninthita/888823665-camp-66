<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: rgb(236, 215, 201);
            color: rgb(33, 33, 33);
        }

        h1 {
            color: rgb(255, 255, 255);
            font-weight: 700;
            text-align: center;
            margin-top: 20px;
        }

        .table {
            background-color: rgba(189, 169, 169, 0.5);
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
            
        }

        .table th, .table td {
            text-align: center;
        }

        .btn-primary {
            background-color: rgb(243, 139, 139);
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: rgb(107, 219, 135);
        }

        .form-container {
            max-width: 400px;
            margin: 20px auto;
            text-align: center;
        }

        .form-control {
            text-align: center;
        }

        .blob-outer-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            filter: blur(80px);
            background: conic-gradient(from 0deg,rgb(173, 74, 65),rgb(150, 54, 65),rgb(92, 48, 155),rgb(43, 87, 158),rgb(187, 78, 68));
            animation: spinBlob 20s linear infinite;
        }

        @keyframes spinBlob {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="blob-outer-container"></div>

    <div class="container">
        <div class="form-container">
            <form method="post" action="">
                <div class="form-group">
                    <label for="number" class="text-white">กรอกแม่สูตรคูณ:</label>
                    <input type="number" id="number" name="number" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">แสดงแม่สูตรคูณ</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST['number']);

            echo "<h1>ตารางสูตรคูณแม่ $number</h1>";
            echo '<div class="table-responsive">';
            echo '<table class="table table-bordered">';
            echo '<thead class="thead-dark"><tr><th>สูตร</th><th>ผลลัพธ์</th></tr></thead>';
            echo '<tbody>';
            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "<tr><td>$number x $i</td><td>$result</td></tr>";
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
