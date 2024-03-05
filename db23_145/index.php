<?php
    if (isset($_GET['controller']) & isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }else {
        $controller = 'pages';
        $action = 'home';
    }
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>db23_145</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <section class="main">
            <div class="main-top">
                <h1>6420503795 Aonkunya Chaitup</h1>
                <i class="fa-solid fa-house"></i>
                <button type="button">
                    <a href="?controller=pages&action=home"></a>Home</button>
            </div>
            <div class="main-pages">
                <div class="card">
                    <i class="fa-solid fa-landmark"></i>
                    <h3>Ministry</h3>
                    <p>กระทรวง</p>
                    <button type="button">
                        <a href="?controller=ministry&action=index"></a>Ministry</button>
                </div>
                <div class="card">
                    <i class="fa-solid fa-building"></i>
                    <h3>Agency</h3>
                    <p>หน่วยงาน</p>
                    <button type="button">
                        <a href="?controller=agency&action=index"></a>Agency</button>
                </div>
                <div class="card">
                    <i class="fa-solid fa-address-card"></i>
                    <h3>Worker</h3>
                    <p>เจ้าหน้าที่</p>
                    <button type="button">
                        <a href="?controller=worker&action=index"></a>Worker</button>
                </div>
                <div class="card">
                    <i class="fa-solid fa-cube"></i>
                    <h3>Equipment</h3>
                    <p>อุปกรณ์</p>
                    <button type="button">
                        <a href="?controller=equipment&action=index"></a>Equipment</button>
                </div>
                <div class="card">
                    <i class="fa-solid fa-marker"></i>
                    <h3>List</h3>
                    <p>รายการอุปกรณ์</p>
                    <button type="button">
                        <a href="?controller=report&action=index"></a>List</button>
                </div>
                <div class="card">
                    <i class="fa-solid fa-file-lines"></i>
                    <h3>Summarize</h3>
                    <p>แสดงจำนวน ข้อมูลอุปกรณ์ในแต่ละหน่วยงาน</p>
                    <button type="button">
                        <a href="?controller=summarize&action=index"></a>Summarize</button>
                </div>
            </div>
        </section>
    </div>
        <!-- [<a href="?controller=pages&action=home">Home</a>] -->
        <!-- [<a href="?controller=ministry&action=index">Ministry</a>]
        [<a href="?controller=agency&action=index">Agency</a>]
        [<a href="?controller=worker&action=index">Worker</a>]
        [<a href="?controller=equipment&action=index">Equipment</a>]
        [<a href="?controller=report&action=index">Report</a>]
        [<a href="?controller=summarize&action=index">Summarize</a>] -->
    <br>
    <?php require_once("routes.php"); ?>
</body>
</html>