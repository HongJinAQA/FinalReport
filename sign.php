<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>登入與註冊</title>
    <?php
    $msg = $_GET["msg"]??"";
    ?>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #2F5061;
        }

        .container {
            position: relative;
            width: 400px;
            padding: 40px 20px;
            background-color: #F4EAE6;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .container h2 {
            color: #4297A0;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #E57F84;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn:hover {
            background-color: #e7666c;
            color: white;
            box-shadow: 0 5px 15px rgba(188, 16, 70, 0.3);
        }

        .role-select {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .role-select label {
            font-size: 16px;
            color: #333;
            cursor: pointer;
        }

        .role-select input[type="radio"] {
            display: none;
        }

        .role-select label span {
            padding: 10px 20px;
            border-radius: 25px;
            background-color: #f1f1f1;
            transition: background-color 0.3s, color 0.3s;
        }

        .role-select input[type="radio"]:checked+label span {
            background-color: #e7666c;
            color: white;
        }
        .alternative-option {
            margin-top: 20px;
            font-size: 16px;
            color: #333;
        }

        .alternative-option a {
            color: #E57F84;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .alternative-option a:hover {
            color: #e7666c;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>登入</h2>
        <form action="sign_process.php" method="post">
            <div class="role-select">
                <input type="radio" id="student" name="role" value="student" checked>
                <label for="student"><span>學 生</span></label>
                <input type="radio" id="admin" name="role" value="admin">
                <label for="admin"><span>管理者</span></label>
            </div>

            <div class="mb-3">
                <label class="form-label">帳 號</label>
                <input type="text" class="form-control" name="account" required>
            </div>

            <div class="mb-3">
                <label class="form-label">密 碼</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn">確 定</button>
            
            <p class="text-danger"><?= $msg ?></p>
            
            <div class="alternative-option">
                還沒有帳號？<a href="#">註冊</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>