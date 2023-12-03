<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="/conten/menu.css" />
    <link rel="stylesheet" href="/conten/table.css" />
    <link rel="stylesheet" href="/conten/bill.css" />


    <style>
        p {
            margin: 0;
        }

        tbody {
            display: flex;
            flex-wrap: wrap;
        }
    </style>

    <title>Document</title>


</head>

<body>

    <div class="topbar">
        <div class="toggle" onclick="toggleMenu();"></div>
        <div class="search">
            <label>
                <input type="text" placeholder="Tìm kiếm..." id="searchInput" />
                <i class="fa fa-search" aria-hidden="true"></i>

            </label>
            <button type="button" onclick="searchProduct()">Tìm kiếm</button>
        </div>
        <div class="user">

            <img src="./conten/image/bguy.png" />
        </div>
    </div>

    </div>

    <section class="content">
        <nav class="menu menu--adsila">
            <a class="menu__item" href="#" onclick="showSlide(1)">
                <span class="menu__item-name">Đơn Hàng đã giao</span>

            </a>
            <a class="menu__item" href="#" onclick="showSlide(2)">
                <span class="menu__item-name">Đơn Hàng bị BOOM</span>

            </a>
            <a class="menu__item" href="#" onclick="showSlide(3)">
                <span class="menu__item-name">Đơn hàng chờ xác nhận</span>

            </a>
            <a class="menu__item" href="#" onclick="showSlide(4)">
                <span class="menu__item-name">Đơn hàng đã xác nhận</span>

            </a>

        </nav>

        <div class="slides">

            <div class="slide" id="slide1">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ngày Giao</th>
                            <th scope="col">Tên Giày</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Hành Động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($data as $value) {
                            if ($value['trangthai'] == 1) {
                                $i = $value['id'];
                        ?>

                                <tr>
                                    <th scope="row"><?= $value['id'] ?></th>
                                    <td><?= $value['date'] ?></td>
                                    <td><?= $value['ten'] ?></td>
                                    <td><?= $value['total'] ?></td>

                                    <td>
                                        <button type="button" class="btn btn-primary confirm-button" data-target="container_card_<?= $i ?>">Chi Tiết </button>

                                    </td>


                                </tr>
                                <div class="container_card" id="container_card_<?= $i ?>">


                                    <div class="card">
                                        <div class="tools">
                                            <div class="circle">
                                                <span class="red box"></span>
                                            </div>
                                            <div class="circle">
                                                <span class="yellow box"></span>
                                            </div>
                                            <div class="circle">
                                                <span class="green box"></span>
                                            </div>
                                        </div>
                                        <div class="card__content">
                                            <!-- in thông tin nv & tt khách hàng -->
                                            <h2>-- Bill Payment --</h2>
                                            <div class="printf-code">
                                                <div class="printf-code--l">
                                                    <p style="color: gray">Mã Bill:</p>
                                                </div>
                                                <div class="printf-code--r">
                                                    <p><?= $value['id'] ?></p>
                                                </div>

                                                <p></p>
                                            </div>

                                            <div class="printf-code">
                                                <div class="printf-code--l">
                                                    <p style="color: gray">Tên cửa hàng:</p>
                                                </div>
                                                <div class="printf-code--r">
                                                    <p>ShoeS</p>
                                                </div>

                                                <p></p>
                                            </div>
                                            <div class="printf-code">
                                                <div class="printf-code--l">
                                                    <p style="color: gray">Nhân viên trực ca:</p>
                                                </div>
                                                <div class="printf-code--r">
                                                    <p>Lê Văn Quý</p>
                                                </div>

                                                <p></p>
                                            </div>
                                            <div class="printf-code">
                                                <div class="printf-code--l">
                                                    <p style="color: gray">ID Đơn Hàng:</p>
                                                </div>
                                                <div class="printf-code--r">

                                                </div>

                                                <p></p>
                                            </div>


                                            <div class="card_food__wrap">
                                                <h3>-- Thông tin Đơn hàng --</h3>

                                                <div class="printf-code">
                                                    <div class="printf-code--l">
                                                        <p style="color: gray">Sản phẩm:</p>
                                                    </div>
                                                    <div class="printf-code--r">
                                                        <p><?= $value['ten'] ?></p>
                                                    </div>

                                                    <p></p>
                                                </div>


                                                <div class="printf-code">
                                                    <div class="printf-code--l">
                                                        <p style="color: gray">Số lượng:</p>
                                                    </div>
                                                    <div class="printf-code--r">
                                                        <p><?= $value['soluong'] ?></p>
                                                    </div>

                                                    <p></p>
                                                </div>
                                                <div class="printf-code">
                                                    <div class="printf-code--l">
                                                        <p style="color: gray">Tiền:</p>
                                                    </div>
                                                    <div class="printf-code--r">
                                                        <p><?= $value['total'] ?>$</p>
                                                    </div>

                                                    <p></p>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="printf">

                                        </div>
                                    </div>

                                </div>
                        <?php
                                $i++;
                            }
                        }

                        ?>





                    </tbody>

                </table>

            </div>
            <div class="slide" id="slide2">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ngày Giao</th>
                            <th scope="col">Tên Giày</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Hành Động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($data as $value) {
                            if ($value['trangthai'] == 2) {

                        ?>

                                <tr>
                                    <th scope="row"><?= $value['id'] ?></th>
                                    <td><?= $value['date'] ?></td>
                                    <td><?= $value['ten'] ?></td>
                                    <td><?= $value['total'] ?></td>

                                    <td>
                                        <button type="button" class="btn btn-primary confirm-button" data-target="container_card_<?= $i ?>">Chi Tiết </button>

                                    </td>


                                </tr>
                                <div class="container_card" id="container_card_<?= $i ?>">


                                    <div class="card">
                                        <div class="tools">
                                            <div class="circle">
                                                <span class="red box"></span>
                                            </div>
                                            <div class="circle">
                                                <span class="yellow box"></span>
                                            </div>
                                            <div class="circle">
                                                <span class="green box"></span>
                                            </div>
                                        </div>
                                        <div class="card__content">
                                            <!-- in thông tin nv & tt khách hàng -->
                                            <h2>-- Bill Payment --</h2>
                                            <div class="printf-code">
                                                <div class="printf-code--l">
                                                    <p style="color: gray">Mã Bill:</p>
                                                </div>
                                                <div class="printf-code--r">
                                                    <p><?= $value['id'] ?></p>
                                                </div>

                                                <p></p>
                                            </div>

                                            <div class="printf-code">
                                                <div class="printf-code--l">
                                                    <p style="color: gray">Tên cửa hàng:</p>
                                                </div>
                                                <div class="printf-code--r">
                                                    <p>ShoeS</p>
                                                </div>

                                                <p></p>
                                            </div>
                                            <div class="printf-code">
                                                <div class="printf-code--l">
                                                    <p style="color: gray">Nhân viên trực ca:</p>
                                                </div>
                                                <div class="printf-code--r">
                                                    <p>Lê Văn Quý</p>
                                                </div>

                                                <p></p>
                                            </div>
                                            <div class="printf-code">
                                                <div class="printf-code--l">
                                                    <p style="color: gray">ID Đơn Hàng:</p>
                                                </div>
                                                <div class="printf-code--r">

                                                </div>

                                                <p></p>
                                            </div>


                                            <div class="card_food__wrap">
                                                <h3>-- Thông tin Đơn hàng --</h3>

                                                <div class="printf-code">
                                                    <div class="printf-code--l">
                                                        <p style="color: gray">Sản phẩm:</p>
                                                    </div>
                                                    <div class="printf-code--r">
                                                        <p><?= $value['ten'] ?></p>
                                                    </div>

                                                    <p></p>
                                                </div>


                                                <div class="printf-code">
                                                    <div class="printf-code--l">
                                                        <p style="color: gray">Số lượng:</p>
                                                    </div>
                                                    <div class="printf-code--r">
                                                        <p><?= $value['soluong'] ?></p>
                                                    </div>

                                                    <p></p>
                                                </div>
                                                <div class="printf-code">
                                                    <div class="printf-code--l">
                                                        <p style="color: gray">Tiền:</p>
                                                    </div>
                                                    <div class="printf-code--r">
                                                        <p><?= $value['total'] ?>$</p>
                                                    </div>

                                                    <p></p>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="printf">

                                        </div>
                                    </div>

                                </div>
                        <?php
                                $i++;
                            }
                        }

                        ?>





                    </tbody>

                </table>
            </div>
            <div class="slide" id="slide3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ngày Giao</th>
                            <th scope="col">Tên Giày</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Hành động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $value) {
                            if ($value['type'] == 0) {

                        ?>
                                <form method="post">
                                    <tr>
                                        <th scope="row"><?= $value['id'] ?></th>
                                        <td><?= $value['date'] ?></td>
                                        <td><?= $value['ten'] ?></td>
                                        <td><?= $value['total'] ?></td>
                                        <td>
                                            <input type="hidden" value="<?= $value['id'] ?>" name="id_donhang">
                                            <a href=""><button type="submit" class="btn btn-primary" name="chapnhan">Duyệt</button></a>

                                        </td>

                                    </tr>
                                </form>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="slide" id="slide4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ngày Giao</th>
                            <th scope="col">Tên Giày</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Hành động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $value) {
                            if ($value['type'] == 1 & $value['trangthai'] == 0) {

                        ?>
                                <form method="post">
                                    <tr>
                                        <th scope="row"><?= $value['id'] ?></th>
                                        <td><?= $value['date'] ?></td>
                                        <td><?= $value['ten'] ?></td>
                                        <td><?= $value['total'] ?></td>
                                        <td>
                                            <input type="hidden" value="<?= $value['id'] ?>" name="id1_donhang">
                                            <a href=""><button type="submit" class="btn btn-primary" name="thanhcong">Duyệt</button></a>

                                            <a href=""><button type="submit" class="btn btn-primary" name="boomhang">Bị boom
                                                </button></a>


                                        </td>

                                    </tr>
                                </form>
                        <?php
                            }
                        }
                        ?>
                    </tbody>

                </table>


                <div class="container_card" id="container_card_1">


                    <div class="card">
                        <div class="tools">
                            <div class="circle">
                                <span class="red box"></span>
                            </div>
                            <div class="circle">
                                <span class="yellow box"></span>
                            </div>
                            <div class="circle">
                                <span class="green box"></span>
                            </div>
                        </div>
                        <div class="card__content">
                            <!-- in thông tin nv & tt khách hàng -->
                            <h2>-- Bill Payment --</h2>
                            <div class="printf-code">
                                <div class="printf-code--l">
                                    <p style="color: gray">Mã BIll : 1</p>
                                </div>
                                <div class="printf-code--r">
                                    <p>####092133488499-99</p>
                                </div>

                                <p></p>
                            </div>

                            <div class="printf-code">
                                <div class="printf-code--l">
                                    <p style="color: gray">Tên cửa hàng:</p>
                                </div>
                                <div class="printf-code--r">
                                    <p>ShoeS</p>
                                </div>

                                <p></p>
                            </div>
                            <div class="printf-code">
                                <div class="printf-code--l">
                                    <p style="color: gray">Nhân viên trực ca:</p>
                                </div>
                                <div class="printf-code--r">
                                    <p>Lê Văn Quý</p>
                                </div>

                                <p></p>
                            </div>
                            <div class="printf-code">
                                <div class="printf-code--l">
                                    <p style="color: gray">ID Đơn Hàng:</p>
                                </div>
                                <div class="printf-code--r">

                                </div>

                                <p></p>
                            </div>


                            <div class="card_food__wrap">
                                <h3>-- Thông tin Đơn hàng --</h3>
                                Giày:

                                <h3 class="quantity-f">Số lượng</h3>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="container_card" id="container_card_2">


                    <div class="card">
                        <div class="tools">
                            <div class="circle">
                                <span class="red box"></span>
                            </div>
                            <div class="circle">
                                <span class="yellow box"></span>
                            </div>
                            <div class="circle">
                                <span class="green box"></span>
                            </div>
                        </div>
                        <div class="card__content">
                            <!-- in thông tin nv & tt khách hàng -->
                            <h2>-- Bill Payment --</h2>
                            <div class="printf-code">
                                <div class="printf-code--l">
                                    <p style="color: gray">Mã BIll : 2</p>
                                </div>
                                <div class="printf-code--r">
                                    <p>####092133488499-99</p>
                                </div>

                                <p></p>
                            </div>

                            <div class="printf-code">
                                <div class="printf-code--l">
                                    <p style="color: gray">Tên cửa hàng:</p>
                                </div>
                                <div class="printf-code--r">
                                    <p>ShoeS</p>
                                </div>

                                <p></p>
                            </div>
                            <div class="printf-code">
                                <div class="printf-code--l">
                                    <p style="color: gray">Nhân viên trực ca:</p>
                                </div>
                                <div class="printf-code--r">
                                    <p>Lê Văn Quý</p>
                                </div>

                                <p></p>
                            </div>
                            <div class="printf-code">
                                <div class="printf-code--l">
                                    <p style="color: gray">ID Đơn Hàng:</p>
                                </div>
                                <div class="printf-code--r">

                                </div>

                                <p></p>
                            </div>


                            <div class="card_food__wrap">
                                <h3>-- Thông tin Đơn hàng --</h3>
                                Giày:

                                <h3 class="quantity-f">Số lượng</h3>

                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
        <div id="productInfo"></div>


    </section>

    <script>
        function showSlide(slideNumber) {
            // Lấy danh sách các slide
            var slides = document.querySelectorAll(".slide");

            // Ẩn tất cả các slide
            for (var i = 0; i < slides.length; i++) {
                slides[i].classList.remove("active");
            }

            // Hiển thị slide tương ứng với số được chọn
            var selectedSlide = document.getElementById("slide" + slideNumber);
            if (selectedSlide) {
                selectedSlide.classList.add("active");
            }
        }
        // Lắng nghe sự kiện khi nút xác nhận được nhấn
        document.querySelectorAll(".confirm-button").forEach((button) => {
            button.addEventListener("click", function() {
                // Lấy giá trị data-target để xác định class của phần tử cần hiển thị
                const targetId = this.getAttribute("data-target");
                const targetContainer = document.getElementById(targetId);
                if (!targetContainer) return;
                // Hiển thị tất cả các phần tử container_card tương ứng khi nút được nhấn
                if (targetContainer.style.display === "block") {
                    targetContainer.style.display = "none"; // Nếu đang hiển thị, ẩn đi
                    targetContainer.remove();

                } else {
                    targetContainer.style.display = "block"; // Nếu đang ẩn, hiển thị lên
                }
            });
        });


        function searchProduct() {
            var searchTerm = document.getElementById('searchInput').value;
            if (searchTerm === '') {
                alert('Vui lòng nhập giá trị tìm kiếm');
                return;
            }

            var data = <?php echo json_encode($data); ?>;

            for (var i = 0; i < data.length; i++) {
                if (data[i]['id'].toString() === searchTerm) {
                    var productInfo = document.getElementById('productInfo');
                    productInfo.innerHTML = '';

                    var productInfoContainer = document.createElement('div');
                    productInfoContainer.classList.add('product-info');

                    var idElement = document.createElement('p');
                    idElement.innerHTML = '<strong>ID:</strong> ' + data[i]['id'];
                    productInfoContainer.appendChild(idElement);

                    var tenElement = document.createElement('p');
                    tenElement.innerHTML = '<strong>Tên sản phẩm:</strong> ' + data[i]['ten'];
                    productInfoContainer.appendChild(tenElement);

                    var dateElement = document.createElement('p');
                    dateElement.innerHTML = '<strong>Ngày:</strong> ' + data[i]['date'];
                    productInfoContainer.appendChild(dateElement);

                    var totalElement = document.createElement('p');
                    totalElement.innerHTML = '<strong>Giá:</strong> ' + data[i]['total'];
                    productInfoContainer.appendChild(totalElement);

                    var soluongElement = document.createElement('p');
                    soluongElement.innerHTML = '<strong>Số lượng:</strong> ' + data[i]['soluong'];
                    productInfoContainer.appendChild(soluongElement);

                    var ten_khElement = document.createElement('p');
                    ten_khElement.innerHTML = '<strong>Tên khách hàng:</strong> ' + data[i]['ten_kh'];
                    productInfoContainer.appendChild(ten_khElement);

                    var statusElement = document.createElement('p');
                    statusElement.classList.add('product-status');
                    if (data[i]['trangthai'] == 2) {
                        statusElement.innerHTML = '<strong>Trạng thái:</strong> Bị boom hàng';
                    } else if (data[i]['trangthai'] == 1) {
                        statusElement.innerHTML = '<strong>Trạng thái:</strong> Đã giao thành công';
                    } else {
                        statusElement.innerHTML = '<strong>Trạng thái:</strong> Đang chờ xác nhận';

                    }
                    productInfoContainer.appendChild(statusElement);

                    productInfo.appendChild(productInfoContainer);

                    return;
                }
            }
            var foundProducts = [];
            for (var i = 0; i < data.length; i++) {
                if (data[i]['ten_kh'].toString() === searchTerm) {
                    foundProducts.push(data[i]);
                }
            }

            var productInfo = document.getElementById('productInfo');
            productInfo.innerHTML = '';

            if (foundProducts.length > 0) {
                for (var j = 0; j < foundProducts.length; j++) {
                    var productInfoContainer = document.createElement('div');
                    productInfoContainer.classList.add('product-info');

                    var idElement = document.createElement('p');
                    idElement.innerHTML = '<strong>ID:</strong> ' + foundProducts[j]['id'];
                    productInfoContainer.appendChild(idElement);

                    var tenElement = document.createElement('p');
                    tenElement.innerHTML = '<strong>Tên sản phẩm:</strong> ' + foundProducts[j]['ten'];
                    productInfoContainer.appendChild(tenElement);

                    var dateElement = document.createElement('p');
                    dateElement.innerHTML = '<strong>Ngày:</strong> ' + foundProducts[j]['date'];
                    productInfoContainer.appendChild(dateElement);

                    var totalElement = document.createElement('p');
                    totalElement.innerHTML = '<strong>Giá:</strong> ' + foundProducts[j]['total']
                    productInfoContainer.appendChild(totalElement);

                    var soluongElement = document.createElement('p');
                    soluongElement.innerHTML = '<strong>Số lượng:</strong> ' + foundProducts[j]['soluong'];
                    productInfoContainer.appendChild(soluongElement);

                    var ten_khElement = document.createElement('p');
                    ten_khElement.innerHTML = '<strong>Tên khách hàng:</strong> ' + foundProducts[j]['ten_kh'];
                    productInfoContainer.appendChild(ten_khElement);

                    var statusElement = document.createElement('p');
                    statusElement.classList.add('product-status');
                    if (foundProducts[j]['trangthai'] == 2) {
                        statusElement.innerHTML = '<strong>Trạng thái:</strong> Bị boom hàng';
                    } else {
                        statusElement.innerHTML = '<strong>Trạng thái:</strong> Đã giao thành công';
                    }
                    productInfoContainer.appendChild(statusElement);

                    productInfo.appendChild(productInfoContainer);
                }
            } else {
                productInfo.innerHTML = 'Không tìm thấy sản phẩm cho khách hàng "' + searchTerm + '"';
                alert('Không tìm thấy sản phẩm cho khách hàng "' + searchTerm + '"');
            }
        }
    </script>
</body>

</html>