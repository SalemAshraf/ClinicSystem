<?php
session_start();
session_unset();  // يمسح جميع البيانات من الـ session
session_destroy(); // ينهي الـ session بالكامل

// إعادة التوجيه إلى صفحة الدخول أو الرئيسية
header("Location: index.php?page=login");
exit;
