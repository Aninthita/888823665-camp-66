<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Type Display</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <!-- Internal CSS -->
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background-color: rgb(236, 215, 201);
            color: rgb(64, 64, 64);
        }

        h1 {
            color: rgb(128, 64, 64);
            font-weight: 700;
        }

        .form-container {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
        }

        .btn-primary {
            background-color: rgb(115, 198, 236);
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: rgb(102, 51, 51);
        }

        .result-list {
            list-style: none;
            padding: 0;
        }

        .result-list li {
            margin: 5px 0;
            padding: 5px;
            border-radius: 4px;
            background-color: rgba(115, 198, 236, 0.1);
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

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="blob-outer-container"></div>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="form-container text-center">
            <form method="post" action="">
                <h1>แสดงเลขคู่และเลขคี่</h1>

                <div class="form-group">
                    <label for="start">กรอกค่าเริ่มต้น</label>
                    <input type="number" id="start" name="start" class="form-control" required aria-label="Start value">
                </div>

                <div class="form-group">
                    <label for="end">กรอกค่าสิ้นสุด</label>
                    <input type="number" id="end" name="end" class="form-control" required aria-label="End value">
                </div>

                <button type="submit" class="btn btn-primary">แสดงตัวเลข</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $start = intval($_POST['start']);
                $end = intval($_POST['end']);

                if ($start > $end) {
                    echo "<p class='error'>ข้อผิดพลาด: ค่าเริ่มต้นต้องน้อยกว่าหรือเท่ากับค่าสิ้นสุด</p>";
                } else {
                    echo "<h3>แสดงตัวเลขจาก $start ถึง $end</h3>";
                    echo "<ul class='result-list'>";
                    for ($i = $start; $i <= $end; $i++) {
                        $type = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
                        echo "<li>$i เป็น $type</li>";
                    }
                    echo "</ul>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
