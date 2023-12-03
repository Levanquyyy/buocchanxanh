<!DOCTYPE html>
<html lang="en">
<!-- =================================================================================== -->
<!--        about Page   -->
<!-- =================================================================================== -->

<head>
    <script src="https://kit.fontawesome.com/bcb2c05d90.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce</title>
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- <link rel="stylesheet" href="css/all.min.css" /> -->
    <!-- Css -->
    <link rel="stylesheet" href="./conten/chitiet.css" />
    <link rel="stylesheet" href="./conten/css.css" />
    <!--  -->
</head>

<body>


    <!-- ===================== -->
    <!--    P-Header Section   -->
    <!-- ===================== -->
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>

        <p> leave a messege , we love to hear from you! </p>
    </section>

    <!-- ===================== -->
    <!---     cart details    --->
    <!-- ===================== -->
    <section id="cart" class="section-p1">
        <form action="" method="post">
            <table width="100%">
                <thead>
                    <tr>

                        <td>Image</td>
                        <td>Product</td>
                        <td>Size</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $all = 0;
                    $tongtien = 0;
                    if (isset($_SESSION['themgio']) && is_array($_SESSION['themgio'])) {
                        for ($i = 0; $i < count($_SESSION['themgio']); $i++) {
                            $ten = $_SESSION['themgio'][$i]['ten'];
                            $gia = $_SESSION['themgio'][$i]['gia'];
                            $hinh = $_SESSION['themgio'][$i]['hinh'];
                            $soluong_themgio = $_SESSION['themgio'][$i]['soluong'];
                            $tongtien += $gia;
                            $all += $soluong_themgio;
                    ?>

                            <tr>

                                <td><img src="conten/image/<?= $hinh ?>"></td>
                                <td><?= $ten ?></td>
                                <input type="hidden" name="ten" value="<?= $ten ?>">
                                <td>M</td>
                                <td><?= $soluong_themgio ?></td>
                                <td><?= $gia ?>$ <button type="submit" name="xoagiohang">Xóa</button> <button type="submit" name="xoaall">Xóa tất cả</button></td>
                            </tr>
                            <input type="hidden" name="index" value="<?= $i ?>">

                    <?php
                        }
                    }
                  
                    ?>

                    <?php
                    $tongtien1 = 0;
                    $all1 =0;
                    if (isset($_SESSION['check']) && is_array($_SESSION['check'])) {
                        for ($i = 0; $i < count($_SESSION['check']); $i++) {
                            $ten1 = $_SESSION['check'][$i]['ten'];
                            $gia = $_SESSION['check'][$i]['gia'];
                            $hinh = $_SESSION['check'][$i]['hinh'];
                            $size = $_SESSION['check'][$i]['size'];
                            $soluong = $_SESSION['check'][$i]['soluong'];
                            $sizeSL = $soluong * $gia;
                            $tongtien1 += $sizeSL;
                            $all1 += $soluong;
                    ?>

                            <tr>

                                <td><img src="conten/image/<?= $hinh ?>"></td>
                                <td><?= $ten1 ?></td>
                                <input type="hidden" name="ten1" value="<?= $ten1 ?>">
                                <td><?= $size ?></td>
                                <td><?= $soluong ?></td>
                                <td><?= $gia ?>$ <button type="submit" name="xoacheck">Xóa</button> <button type="submit" name="xoaallcheck">Xóa tất cả</button></td>
                            </tr>
                            <input type="hidden" name="index" value="<?= $i ?>">

                    <?php
                        }
                    }
                    ?>

                   



                </tbody>
                <p><?=$all2 = $all + $all1?></p>
             

            </table>
                <div class="right">
                <p value="" class="texT">Tong tien:<?= $tongtien2 = $tongtien + $tongtien1 ?>$</p>
                <button type="submit" name="muahang" class="btn" style="width: 130px;">Mua</button>

                </div>
                <input type="hidden" name="tongtien"  value="<?=$tongtien2?>">
                <input type="hidden" name="soluong123"  value="<?=$all2 = $all + $all1?>">
            
                <input type="hidden" name="ten_kh" value="<?php
                                                                if(isset($_SESSION['ten'])){
                                                                    echo $_SESSION['ten'];
                                                                }
                                                            ?>">
            
                <input type="hidden" name="date" value="<?= $date = date("Y-m-d"); ?>">

        </form>

    </section>

    <!-- ===================== -->
    <!--     cart add details    -->
    <!-- ===================== -->
    <!-- <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>50 EGP</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section> -->

    <!-- ===================== -->
    <!-----    Footer    -------->
    <!-- ===================== -->

    <!-- ============================================================================================================ -->
    <script src="script.js"></script>
</body>

</html>