<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./conten/cssadmin.css">
    <!-- <link rel="stylesheet" href="./conten/menu.css"> -->
    <style>
        td {
            padding: 0 17px;
            text-align: center;
            font-size: 18px;
        }
        tr {
            height: 60px;
        }
    </style>
</head>

<body>
    <div class="wrap_c">
        <div class="form_container">
            <form class="form" method="post" enctype="multipart/form-data" action="">
                <!-- muon lay file hinh anh phai them enctype -->
                <ul class="wrapper">

                    <li style="--i:4;"><input class="input" type="text" placeholder="Name Products" required="" name="p_ten">

                    </li>
                    <li style="--i:3;"><input class="input" placeholder="Price product" required="" name="p_gia">
                    </li>
                    <li style="--i:2;"><input class="input" type="number" placeholder="Quantity" required="" name="p_soluong">
                    </li>
                    <li style="--i:1;"><input class="input" placeholder="upload img"  name="" >
                        <input accept=".jpg, .jpeg, .png, .gif, .pdf" class="inpdddut" name="p_hinh" id="arquivo" type="file">

                    </li>



                    <input style="--i:0;" class="sub" type="submit" name="submit" value="submit">
                </ul>
            </form>
        </div>

        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Products</h2>
                <a href="index.php?action=admin" class="btn">Quay lại</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td colspan="1">STT</td>
                        <td colspan="1">Tên</td>
                        <td colspan="1">Giá</td>
                        <td colspan="1">Số lượng</td>
                        <td colspan="1">Hành động</td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($data as $value) {
                    ?>
                        <tr>
                            <form action="" method="get">
                                <input type="hidden" name="id" value="<?=$value['id']?>">
                                <input type="hidden" name="img" value="<?=$value['hinh']?>">
                                <input type="hidden" name="namea" value="<?=$value['ten']?>">
                                <input type="hidden" name="pri" value="<?=$value['gia']?>">
                                <input type="hidden" name="soluong" value="<?=$value['soluong']?>">
                                <td name=<?=$value['id']?>><?=$value['id']?></td>
                                <td><?=$value['ten']?></td>
                                <td><?=$value['gia']?></td>
                                <td><?=$value['soluong']?></td>
                                <td>

                                    <a class="btn" href="index.php?action=update&update_id=<?=$value['id']?>"> Sửa</a>
                                    <a class="btn" href="index.php?action=add&delete_id=<?=$value['id']?>">Xoá</a>
                                </td>
                            </form>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>