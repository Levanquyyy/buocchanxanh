<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
        <link rel="stylesheet" href="./conten/cssadmin.css">
</head>

<body>
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon1"><i class="fa fa-apple" aria-hidden="true"></i>
                    </span>
                    <span class="title">

                        <h2>PHP ADMIN</h2>

                    </span>
                </a>
            </li>
            <li>
                <a href="index.php">
                    <span class="icon1"><i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class="title">Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=bieudo">
                    <span class="icon1"><i class="fa fa-users" aria-hidden="true"></i></span>
                    <span class="title">Biểu đồ thống kê</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=binhluan">
                    <span class="icon1"><i class="fa fa-comment" aria-hidden="true"></i></span>
                    <span class="title">Bình Luận</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=donhang">
                    <span class="icon1"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                    <span class="title">Hóa Đơn</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=shipper">
                    <span class="icon1"><i class="fa fa-cog" aria-hidden="true"></i></span>
                    <span class="title">Shipper</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=lichtrinh">
                    <span class="icon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    <span class="title">Lichtrinh</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=login">
                    <span class="icon1"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                    <span class="title">Đăng xuất</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- <div class="topbar">
        <div class="toggle" onclick="toggleMenu();"></div>
        <div class="search">
            <label>
                <input type="text" placeholder="Tìm kiếm..." />
                <i class="fa fa-search" aria-hidden="true"></i>
            </label>
        </div>
        <div class="user">
            <img src="./conten/image/bguy.png" />
        </div>
    </div> -->
    <script>
    function toggleMenu() {
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");
        toggle.classList.toggle("active");
        navigation.classList.toggle("active");
        main.classList.toggle("active");
    }
    </script>
</body>

</html>