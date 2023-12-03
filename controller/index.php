
<?php
session_start();
// var_dump($_SESSION);




if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}


switch ($action) {

    case "register":
        $a = "";
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $type = $_POST['user_type'];
            if ($db->register($name, $password, $type)) {
            } else {
                $a = "Tài khoản đã tồn tại";
            }
        }

        require_once('view/admin/register.php');

        break;

    case "login":
        $b = "";
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $_SESSION['ten'] = $name;
            $password = $_POST['password'];
            $_SESSION['pass'] = $password;
            $type = $_POST['user_type'];
            if ($db->login($name, $password, $type)) {


                if ($type == "admin") {
                    header("location:index.php?&action=admin");
                }
                if ($type == "user") {
                    header("location:index.php?&action=");
                }
            } else {
                $b = "Mật khẩu hoặc user_type không chính xác";
            }
        }

        require_once('view/admin/login.php');

        break;

    case "":

        $dname = "products";
        $data = $db->getALLData($dname);

        if (isset($_POST['submit'])) {
            if ($_SESSION['ten'] == '' & $_SESSION['pass'] == '') {
                header("location:index.php?&action=login");
            }
        }

     
        if (!isset($_SESSION['array'])) {
            $_SESSION['array'] = array();
        }

        if (isset($_POST['chitiet'])) {
            $array1 = [
                'id' => $_POST['id'],
                'ten' => $_POST['ten'],
                'gia' => $_POST['gia'],
                'hinh' => $_POST['hinh'],
            ];
            $_SESSION['array'][] = $array1;
            header("Location: index.php?action=chitiet");
            exit();
        }

        if (!isset($_SESSION['themgio'])) {
            $_SESSION['themgio'] = [];
        }
        if (isset($_POST['submit'])) {
            $themgio1 = [
                'ten' => $_POST['ten'],
                'gia' => $_POST['gia'],
                'hinh' => $_POST['hinh'],
                'soluong' => $_POST['soluong']
            ];
            $_SESSION['themgio'][] = $themgio1;
        }

        // timkiem

        require_once('view/view1/header.php');
        require_once('view/view1/home.php');
        require_once('view/view1/footer.php');
        // var_dump($_SESSION['ten']);
        break;

    case "admin":
        $dname = "products";
        $data = $db->getALLData($dname);
        require_once('view/admin/header.php');
        require_once('view/admin/home.php');
        break;

    case "add":
        $dname = "products";
        $data = $db->getALLData($dname);
        if (isset($_POST['submit'])) {
            $p_ten = $_POST['p_ten'];
            $p_gia = $_POST['p_gia'];
            $p_soluong = $_POST['p_soluong'];
            $p_hinh = $_FILES['p_hinh']['name'];
            $p_image_tmp_name = $_FILES['p_hinh']['tmp_name'];
            $p_image_folder = 'conten/image/' . $p_hinh;

            if ($db->InsertData($p_hinh, $p_ten, $p_gia, $p_soluong)) {
                move_uploaded_file($p_image_tmp_name, $p_image_folder);
            }
            header("location:index.php?action=add");
        }

        if (isset($_GET['delete_id'])) {

            $delete_id = $_GET['delete_id'];
            $dname1 = "products";
            if ($db->DeleteData($delete_id, $dname1)) {
                header("location:index.php?&action=add");
            }
        }
        require_once('view/admin/header.php');
        require_once('view/admin/add.php');
        break;

    case "update":
        $dname = "products";
        $data = $db->getALLData($dname);
        if (isset($_GET['update_id'])) {
            $update_id = $_GET['update_id'];
            $dname1 = "products";
            $data1 = $db->getDataID($dname1, $update_id);
        }

        if (isset($_POST['submit'])) {
            $id = $_GET['update_id'];
            $p_ten = $_POST['p_ten'];
            $p_gia = $_POST['p_gia'];
            $p_soluong = $_POST['p_soluong'];
            $p_hinh = $_FILES['p_hinh']['name'];
            $p_image_tmp_name = $_FILES['p_hinh']['tmp_name'];
            $p_image_folder = 'conten/image/' . $p_hinh;

            if ($db->UpdateData($id, $p_hinh, $p_ten, $p_gia, $p_soluong)) {
                move_uploaded_file($p_image_tmp_name, $p_image_folder);
            }
            header("location:index.php?action=add");
        }
        require_once('view/admin/header.php');
        require_once('view/admin/update.php');
        break;

    case "chitiet":

        if (!isset($_SESSION['check'])) {
            $_SERVER['check'] = [];
        }
        if (isset($_POST['check'])) {

            if ($_SESSION['ten'] == '' & $_SESSION['pass'] == '') {
                header("location:index.php?&action=login");
            } else {
                $check1 = [
                    'ten' => $_POST['ten'],
                    'gia' => $_POST['gia'],
                    'hinh' => $_POST['hinh'],
                    'size' => $_POST['size'],
                    'soluong' => $_POST['soluong'],
                    'date' => $_POST['date']
                ];
                $_SESSION['check'][] = $check1;
            }
        }
        //   ----binhluan---
        if (isset($_POST['binhluan'])) {
            $id_sanpham = $_POST['id'];
            $id_ten = $_POST['ten_bl'];
            $id_noidung = $_POST['noidung'];
            $type = 0;
            $ten_kh = $_POST['ten_kh'];
            $email_kh = $_POST['email_kh'];
            $rating = $_POST['rating'];
            if ($db->BinhLuan($id_sanpham, $id_ten, $id_noidung, $type, $ten_kh, $email_kh, $rating)) {
                header("location: index.php?action=chitiet");
            }
        }
        $dataname1 = "binhluan";
        $noidung = $db->getALLData($dataname1);


        require_once('view/view1/header.php');
        require_once('view/view1/chitiet.php');

        break;

    case "bieudo":

        $dataname = 'giaodich';
        $data = $db->getALLData($dataname);
        require_once('view/admin/bieudo.php');
        break;


    case "tinhtien":
        if (isset($_POST['xoagiohang'])) {
            $index = $_POST['index'];
            unset($_SESSION['themgio'][$index]);
            $_SESSION['themgio'] = array_values($_SESSION['themgio']);
        }

        if (isset($_POST['xoaall'])) {
            unset($_SESSION['themgio']);
            unset($_SESSION['check']);
            header("location:index.php?action=tinhtien");
        }

        if (isset($_POST['xoacheck'])) {
            $index = $_POST['index'];
            unset($_SESSION['check'][$index]);
            $_SESSION['check'] = array_values($_SESSION['check']);
        }

        if (isset($_POST['xoaallcheck'])) {
            unset($_SESSION['check']);
            unset($_SESSION['themgio']);
            header("location:index.php?action=tinhtien");
        }

        if (isset($_POST['muahang'])) {
            $ten = $_POST['ten'];
            $ten1 = $_POST['ten1'];
            $tenall = array($ten, $ten1);
            $gia = $_POST['tongtien'];
            $ten_kh = $_POST['ten_kh'];
            if (isset($_POST['date'])) {
                $date = $_POST['date'];
                  
            }
            
          
            $soluong = isset($_POST['soluong123']) ? $_POST['soluong123'] : 0;
            $type = 0;
            if ($db->GiaoDich($date, $gia, $type, $tenall, $soluong, $ten_kh)) {
                unset($_SESSION['check']);
                unset($_SESSION['themgio']);
                header("location: index.php?action=");
            }
        }


        require_once('view/view1/header.php');
        require_once('view/view1/tinhtien.php');
        // echo "<pre>";
        // print_r($_SESSION['muahang']);
        // echo "</pre>";
        // var_dump($ten);
        // var_dump($ten1);
        //    unset($_SERVER['muahang']);
        // var_dump($tenall);
        // var_dump($gia);
        // var_dump($date);
        // unset($_SESSION['muahang']);
        //   echo "<pre>";
        // print_r($_SESSION['themgio']);
        // echo "</pre>";
        //   echo "<pre>";
        // print_r($_SESSION['ten']);
        // echo "</pre>";
        break;


    case "danhmuc":
        $dname = "products";
        $data = $db->getALLData($dname);
        if (!isset($_SESSION['array'])) {
            $_SESSION['array'] = array();
        }

        if (isset($_POST['chitiet'])) {
            $array1 = [
                'id' => $_POST['id'],
                'ten' => $_POST['ten'],
                'gia' => $_POST['gia'],
                'hinh' => $_POST['hinh'],
            ];
            $_SESSION['array'][] = $array1;
            header("Location: index.php?action=chitiet");
            exit();
        }

        if (!isset($_SESSION['themgio'])) {
            $_SESSION['themgio'] = [];
        }
        if (isset($_POST['submit'])) {
            $themgio1 = [
                'ten' => $_POST['ten'],
                'gia' => $_POST['gia'],
                'hinh' => $_POST['hinh'],
                'soluong' => $_POST['soluong']
            ];
            $_SESSION['themgio'][] = $themgio1;
        }

        require_once('view/view1/header.php');
        require_once('view/view1/danhmuc.php');
        // var_dump($_SESSION['themgio']);
        break;

    case "binhluan":
        $dname = "binhluan";
        $data = $db->getALLData($dname);
        if (isset($_POST['chapnhan'])) {
            $id = $_POST['id_binhluan'];
            $newType = 1;

            if ($db->UpdateBinhLuan($id, $newType)) {
                header("location:index.php?action=binhluan");
            }
        }

        if (isset($_POST['xoa'])) {
            $id = $_POST['id_binhluan'];

            if ($db->DeleteBinhLuan($id)) {
                header("location:index.php?action=binhluan");
            }
        }

        // require_once('view/admin/header.php');
        require_once('view/admin/binhluan.php');
        break;

    case "donhang":
        $dname = "giaodich";
        $data = $db->getALLData($dname);

        $id = null;
        $newType = null;

        if (isset($_POST['chapnhan'])) {
            $id = $_POST['id_donhang'];
            $newType = 1;
        }

        if ($id !== null && $newType !== null && $db->ChapNhan($id, $newType)) {
            header("location: index.php?action=donhang");
        }



        $id = null;
        $trangthai = null;

        if (isset($_POST['thanhcong'])) {
            $trangthai = 1;
            if (isset($_POST['id1_donhang'])) {
                $id = $_POST['id1_donhang'];
            }
        }

        if ($id !== null && $trangthai !== null && $db->Shipper($id, $trangthai)) {
            header("location: index.php?action=donhang");
        }

        if (isset($_POST['boomhang'])) {
            $trangthai = 2;
            if (isset($_POST['id1_donhang'])) {
                $id = $_POST['id1_donhang'];
            }
        }

        if ($id !== null && $trangthai !== null && $db->Shipper($id, $trangthai)) {
            header("location: index.php?action=donhang");
        }
        require_once('view/admin/header.php');
        require_once('view/admin/donhang.php');
        break;

    case "shipper":
        $dname = "giaodich";
        $data = $db->getALLData($dname);

        $id = null;
        $trangthai = null;

        if (isset($_POST['chap_nhan'])) {
            $trangthai = 1;
            if (isset($_POST['id1_donhang'])) {
                $id = $_POST['id1_donhang'];
            }
        }

        if ($id !== null && $trangthai !== null && $db->Shipper($id, $trangthai)) {
            header("location: index.php?action=shipper");
        }

        if (isset($_POST['boomhang'])) {
            $trangthai = 0;
            if (isset($_POST['id1_donhang'])) {
                $id = $_POST['id1_donhang'];
            }
        }

        if ($id !== null && $trangthai !== null && $db->Shipper($id, $trangthai)) {
            header("location: index.php?action=shipper");
        }
        require_once('view/view1/shipper.php');
        break;


    case "lichtrinh":
        $dname = "giaodich";
        $data = $db->getALLData($dname);
        require_once('view/admin/lichtrinh.php');
        break;

    case "binhluan1":
        $dname = "giaodich";
        $data = $db->getALLData($dname);
        require_once('view/admin/binhluan1.php');
        break;
    case "lichtrinh":
        $dname = "giaodich";
        $data = $db->getALLData($dname);
        require_once('view/admin/lichtrinh.php');
        break;

    case "lichsu_gd":

        if ($_SESSION['ten'] == '' & $_SESSION['pass'] == '') {
            header("location:index.php?&action=login");
        } else {
            $dname = "giaodich";
            $data = $db->getALLData($dname);
        }

        // require_once('view/view1/header.php');
        require_once('view/view1/lichsu_gd.php');
        require_once('view/view1/footer.php');
        // var_dump($_SESSION['ten']);
        break;


    case "dangxuat":
        if (isset($_SESSION['ten']) && isset($_SESSION['pass'])) {
            unset($_SESSION['ten']);
            unset($_SESSION['pass']);
            session_destroy();
        }
        header("location: index.php?action=login");
        exit;

        break;
}
