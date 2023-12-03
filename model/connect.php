<?php

class Database
{
    private $hostname = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $dbname = 'an11';
    private $conn = NULL;
    private $result = NULL;

    public function connect()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);

        if (!$this->conn) {
            echo " Ket noi that bai";
            exit();
        } else {
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }

    // thuc thi cau lenh truy van
    public function execute($slq)
    {
        $this->result = $this->conn->query($slq);
        return $this->result;
    }

    // Phuong thuc lay du lieu
    public function getData()
    {

        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }





    //Phuong thuc lay toan bo du lieu
    public function getALLData($table)
    {
        $sql = "SELECT * FROM $table";
        $this->execute($sql);
        if ($this->num_row() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }



    //phuong thuc dem so ban ghi
    public function num_row()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }

    //Phuong thuc them du lieu
    public function InsertData($hinh, $ten, $gia, $soluong)
    {
        $slq = "INSERT INTO `products`(`id`, `hinh`, `ten`, `gioithieu`, `gia`, `soluong`) VALUES (null,'$hinh','$ten',null,'$gia','$soluong')";
        return $this->execute($slq);
    }


    public function register($name, $password, $user_type)
    {
        // Kiểm tra xem username đã tồn tại trong cơ sở dữ liệu chưa
        $sql = "SELECT * FROM cus WHERE name = '$name'";
        $result = $this->execute($sql);

        if ($result->num_rows > 0) {
            return false; // Username đã tồn tại
        } else {
            // Thực hiện truy vấn để thêm người dùng mới vào cơ sở dữ liệu
            $sql = "INSERT INTO cus (name, password, user_type) VALUES ('$name', '$password','$user_type')";
            $result = $this->execute($sql);

            return $result;
        }
    }

    public function login($name, $password, $user_type)
    {
        // Lấy thông tin người dùng từ cơ sở dữ liệu bằng username
        $sql = "SELECT * FROM cus WHERE name = '$name'";
        $result = $this->execute($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];
            $user_type1 = $row['user_type'];
            // Kiểm tra mật khẩu đã nhập có khớp với mật khẩu đã lưu trong cơ sở dữ liệu hay không
            if ($password == $hashedPassword & $user_type == $user_type1) {
                return true; // Đăng nhập thành công
            }
        }

        return false; // Đăng nhập thất bại
    }

    public function UpdateData($id, $hinh, $ten, $gia, $soluong)
    {
        $sql = "UPDATE products SET hinh = '$hinh', ten = '$ten', gia = '$gia', soluong ='$soluong' WHERE id = '$id'";
        return $this->execute($sql);
    }


    public function DeleteData($id, $table)
    {
        $sql = "DELETE FROM $table WHERE id = '$id'";
        return $this->execute($sql);
    }





    public function getDataID($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        $this->execute($sql);
        if ($this->num_row() != 0) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }







    public function GiaoDich($date, $gia, $type, $tenall,$soluong,$ten_kh)
    {
        $tenallString = implode(',', $tenall);
        $slq = "INSERT INTO `giaodich`(`id`, `date`, `total`, `type`,  `ten`,`trangthai`,`soluong`,`ten_kh`) VALUES (null,'$date','$gia',$type,'$tenallString',null,'$soluong','$ten_kh')";
        return $this->execute($slq);
    }


    public function BinhLuan($id_sanpham, $id_ten, $id_noidung, $type, $ten_khachhang, $email_khachhang, $mucdohailong)
    {

        $slq = "INSERT INTO `binhluan`(`id_binhluan`,`id_sanpham`, `ten_sanpham`, `noidung`, `type`,`ten_khachhang`,`email_khachhang`,`muc_do_hai_long`) VALUES (null,$id_sanpham,'$id_ten','$id_noidung','$type','$ten_khachhang','$email_khachhang','$mucdohailong')";
        return $this->execute($slq);
    }



    public function UpdateBinhLuan($id, $newType)
    {
        $sql = "UPDATE `binhluan` SET `type` = '$newType' WHERE `id_binhluan` = $id";
        return $this->execute($sql);
    }
    public function DeleteBinhLuan($id)
    
    {
        $sql = "DELETE FROM `binhluan` WHERE `id_binhluan` = $id";
        return $this->execute($sql);
    }

    public function ChapNhan($id, $newType)
    {
        $sql = "UPDATE `giaodich` SET `type` = '$newType' WHERE `id` = $id";
        return $this->execute($sql);
    }

    public function Shipper($id, $trangthai)
    {
        $sql = "UPDATE `giaodich` SET `trangthai` = '$trangthai' WHERE `id` = $id";
        return $this->execute($sql);
    }
}
