<?php

//必須在使用session變數之前啟動session
session_start();

//檢查是否取得POST內容
$account = $_POST['account'] ?? ["N/A"];
$password = $_POST['password'] ?? ["N/A"];
$role = $_POST['role']??["N/A"];

//檢查帳號密碼是否正確

if ($account == "root" && $password == "123" && $role == "student") {
    // 將帳號存入 session 變數
    $_SESSION["account"] = $account;
    // 導向成功頁面
    header("Location: index.html");
    exit; // 停止後續腳本執行

} elseif ($account == "root" && $password == "123" && $role == "admin") {
    // 將帳號存入 session 變數
    $_SESSION["account"] = $account;
    // 導向成功頁面
    header("Location: ma_.html");
    exit; // 停止後續腳本執行
    
} else {
    // 顯示錯誤訊息
    header("Location: sign.php?msg=帳密錯誤");
    exit; // 停止後續腳本執行
}

