<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./conten/cssadmin.css">
</head>

<body>



    <div class="container">

        <div class="main">

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,042</div>
                        <div class="cardName">Lượt xem</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">208</div>
                        <div class="cardName">Bình luận</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$6,042</div>
                        <div class="cardName">Doanh thu</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Products</h2>
                        <a href="index.php?action=add" class="btn">Sửa</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>STT</td>
                                <td>Tên</td>
                                <td>Giá</td>
                                <td>Số lượng</td>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $value) {
                            ?>
                                <tr>
                                    <td><?= $value['id'] ?></td>
                                    <td><?= $value['ten'] ?></td>
                                    <td><?= $value['gia'] ?></td>
                                    <td><?= $value['soluong'] ?></td>
                                   
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customer</h2>
                    </div>
                    <table>
                        <tbody>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="./conten/image/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>David<br /><span>Italy</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="./conten/image/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Muhummad<br /><span>France</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="./conten/image/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Ammelia<br /><span>India</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="./conten/image/user Image.png" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <h4>Olivia<br /><span>USA</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="./conten/image/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Amit<br /><span>Japan</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="./conten/image/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Ashraf<br /><span>Mexico</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="./conten/image/user Image.png" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <h4>Jose<br /><span>india</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx">
                                        <img src="./conten/image/user Image.png" alt="" />
                                    </div>
                                </td>

                                <td>
                                    <h4>Diana<br /><span>Malaysia</span></h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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