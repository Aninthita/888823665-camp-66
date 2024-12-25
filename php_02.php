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
            background-color: rgb(87, 86, 86);
            color: rgb(0, 0, 0);
            padding: 20px;
        }

        h1 {
            color: rgb(255, 255, 255);
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(189, 183, 183, 0.2);
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

        .container {
            min-height: calc(100vh - 60px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .blob-outer-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            filter: blur(80px);
            background: conic-gradient(from 0deg, rgb(173, 74, 65), rgb(150, 54, 65), rgb(92, 48, 155), rgb(43, 87, 158), rgb(187, 78, 68));
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

        thead {
            background-color: rgba(247, 222, 222, 0.2);
            color: rgb(65, 64, 64);
        }
    </style>
</head>
<body>
<div class="blob-outer-container"></div>

<!-- Title placed at the top -->
<h1><b>แสดงตัวเลข 1-100 (เลขคู่/เลขคี่)</b></h1>

<div class="container mt-3">
    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th><b>ตัวเลข</b></th>
                <th><b>ประเภท</b></th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                $type = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
                echo "<tr>";
                echo "<td>" . htmlspecialchars($i) . "</td>";
                echo "<td>" . htmlspecialchars($type) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
