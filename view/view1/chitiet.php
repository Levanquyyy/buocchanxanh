<?php

?>

<!DOCTYPE html>
<html lang="en">
<!-- =================================================================================== -->
<!--        Home Page   -->
<!-- =================================================================================== -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce</title>
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- <link rel="stylesheet" href="css/all.min.css" /> -->
    <!-- Css -->
    <link rel="stylesheet" href="output.css?" />

    <link rel="stylesheet" href="./conten/chitiet.css" />
    <link rel="stylesheet" href="./conten/css.css" />

    <!--  -->
</head>

<body>


    <!-- ===================== -->
    <!--   Prodetails Section    -->
    <!-- ===================== -->
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
        <a href="index.php?action=" class="normal btn_a toP">Back</a>

            <img src="conten/image/<?php echo $hinh = $_SESSION['array'][count($_SESSION['array']) - 1]['hinh']; ?>" width="100%" id="MainImg" alt="" />

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="conten/image/shoes2.png" width="100%" class="small-img" alt="" />
                </div>
                <div class="small-img-col">
                    <img src="conten/image/shoes3.png" width="100%" class="small-img" alt="" />
                </div>
                <div class="small-img-col">
                    <img src="conten/image/shoes4.png" width="100%" class="small-img" alt="" />
                </div>
                <div class="small-img-col">
                    <img src="conten/image/shoes5.png" width="100%" class="small-img" alt="" />
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <form action="" style="display: inline;" method="post">
                <h4 style="text-transform: uppercase; font-size: 30px;"><?php echo $ten = $_SESSION['array'][count($_SESSION['array']) - 1]['ten']; ?></h4>
                <h2><?php echo $gia = $_SESSION['array'][count($_SESSION['array']) - 1]['gia']; ?>$</h2>
                <!-- $ngayHienTai = date("Y-m-d"); -->

                <select name="size">
                    <option>Select Size</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>XL</option>
                    <option>XXL</option>

                </select>
                <?php $id = $_SESSION['array'][count($_SESSION['array']) - 1]['id']; ?>
                <input type="hidden" value="<?= $date = date("Y-m-d") ?>" name="date">
                <input type="hidden" value="<?= $hinh ?>" name="hinh">
                <input type="hidden" value="<?= $id = $_SESSION['array'][count($_SESSION['array']) - 1]['id']; ?>" name="id">
                <input type="hidden" value="<?= $ten = $_SESSION['array'][count($_SESSION['array']) - 1]['ten']; ?>" name="ten">
                <input type="hidden" value="<?= $gia ?>" name="gia">
                <input type="number" min="1" value="1" name="soluong" />
                <button type="submit" class="normal btn" name="check">Add To cart</button>

              


            </form>

            <h4 style="text-transform: uppercase; font-size: 60px;"> <span>
                    Details</< /span>
            </h4>
            <span>The Gildan Ultra Cotton Shirt is made from a substontial 6.0 oz. per
                sq. yd. fabric constructed from 100% cotton. This classic fit
                preshrunk jersey knit provides unmatched comfort with each wear.
                Featuring a toped neck and shoulder, and a seemless double-needle
                collar, and available in a range of colors, it offers it all in the
                ultimate head- turning package.</span>
        </div>
    </section>

    <!-- form binh luan xong nhớ xóa -->


    <form action="" method="post">
    <div class="wrap_feedback">
    <div class="mb-3">
            <label for="name">Tên</label>
            <input type="text" class="form-control form-feedback-input" id="ten" name="ten_kh" placeholder="Nhập tên của bạn">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control form-feedback-input" id="email" name="email_kh" placeholder="Nhập email của bạn">
        </div>

        <div class="mb-3">
            <label for="rating">Mức độ hài lòng</label>
            <select class="form-control form-feedback-input" id="rating" name="rating">
                <option >Rất không hài lòng</option>
                <option >Không hài lòng</option>
                <option >Hài lòng</option>
                <option >Rất hài lòng</option>
            </select>
        </div>
        <div class="mb-3">
        <label for="rating">Nội Dung</label>

             <input type="text" name="noidung" class="nd">
        </div>
    </div>
        <input type="hidden" value="<?= $id = $_SESSION['array'][count($_SESSION['array']) - 1]['id']; ?>" name="id">
        <input type="hidden" value="<?= $_SESSION['array'][count($_SESSION['array']) - 1]['ten']; ?>" name="ten_bl">
        <button type="submit" class="btn btn-primary form-feedback-submit" name="binhluan">Gửi</button>
    
    </form>

    <div class="overflw">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Bình luận</th>
                </tr>
            </thead>

            <tbody>
              
            
                    <?php
                    if(is_array($noidung)){
                        foreach ($noidung as $value) {
                            if ($value['id_sanpham'] == $id && $value['type'] == 1) {
                    ?>
                     </tr>
                        <td><?=$value['ten_khachhang']?></td>
                        <td><?=$value['email_khachhang']?></td>
                        <td><?=$value['noidung']?></td>
                        <tr>
                    <?php
                            }
                        }
                    }
                    ?>
                </tr>
                
            </tbody>

        </table>
    </div>





    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p class="heading">Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="conten/image/shoes8.png" alt="" />
                <div class="des">
                    <span>H&M</span>
                    <h5>Jx5</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>279$</h4>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="conten/image/shoes7.png" alt="" />
                <div class="des">
                    <span>WxO</span>
                    <h5>Adidas</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>230$</h4>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="conten/image/shoes6.png" alt="" />
                <div class="des">
                    <span>H&M</span>
                    <h5>Prada</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <h4>350$</h4>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="conten/image/shoes5.png" alt="" />
                <div class="des">
                    <span>Nike</span>
                    <h5>Gucci</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>285$</h4>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== -->
    <!--   Newsletter    -->
    <!-- ===================== -->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>
                Get E-mail updates about our latest shop and
                <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email adress" />
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <!-- ===================== -->
    <!-----       Footer -------->
    <!-- ===================== -->


    <!-- ===================== -->
    <!-----     Replacing images  -------->
    <!-- ===================== -->

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        };
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        };

        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        };

        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        };
    </script>
    <!-- ============================================================================================================ -->

</body>

</html>