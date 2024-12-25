<!DOCTYPE html>
<html lang="th">
<?php
$number = 2;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: rgb(121, 122, 122);
            color: rgb(0, 0, 0);
            padding: 20px;
        }

        h1 {
            color: rgb(255, 255, 255);
            font-weight: 700;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.2);
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: rgb(245, 237, 237);
            font-weight: bold;
        }

        .blob-outer-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            filter: blur(80px);
            background: conic-gradient(from 0deg, #da5e52, #bd4351, #6435a7, #356fcb, #ff6f61);
            animation: spinBlob 10s linear infinite;
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
        <div class="text-center">
            <h1>ตารางสูตรคูณแม่ <?php echo $number; ?></h1>
            <table>
                <thead>
                    <tr>
                        <th>การคูณ</th>
                        <th>ผลลัพธ์</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        $result = $number * $i;
                        echo "<tr>";
                        echo "<td>$number x $i</td>";
                        echo "<td>$result</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
