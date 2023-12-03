<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
       
        <style>
         .a{
          color: red;
    padding: 0px;
    width: 15px;
    border: none;
         }
        </style>
   
</head>
<?php
if (isset($_SESSION['themgio']) && is_array($_SESSION['themgio'])) {
    $count = count($_SESSION['themgio']);
} else {
    $count = 0; // Mặc định số lượng là 0 nếu biến không tồn tại hoặc không phải là mảng
}
if (isset($_SESSION['check']) && is_array($_SESSION['check'])) {
    $count1 = count($_SESSION['check']);
} else {
    $count1 = 0; // Mặc định số lượng là 0 nếu biến không tồn tại hoặc không phải là mảng
}
?>
<body>
    <section>
        <nav>
            <a href="index.php">
                <div class="logo">
                    <h1>Shoe<span>S</span></h1>
                </div>
            </a>
            <ul>
                <li><a href="index.php?action=">Trang chủ</a></li>
                <li><a href="index.php?action=danhmuc">Sản Phẩm</a></li>
                <li><a href="#About">Giới Thiệu</a></li>
                <li><a href="#Review ">Đánh Giá</a></li>
                <li><a href="#Servise">Dịch Vụ</a></li>
                <form action="" method="post">

                </form>
                
            </ul>
            

            
            <form action="" method="post">
            <div class="icoins">
            <a href="index.php?action=dangxuat"><i class="fa-solid fa-heart"></i></a>
               
                <a href="index.php?action=tinhtien" > <i class="fa-solid fa-cart-shopping"></i><input type="text" class = "a" value="<?=$count + $count1?>"></a>
                
                <a href="index.php?action=lichsu_gd"><i class="fa-solid fa-user" name="lichsu_gd"></i></a>
            </div>
            </form>
            <label class="hamburger">
  <input type="checkbox"id="burger" >
  <svg viewBox="0 0 32 32">
    <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
    <path class="line" d="M7 16 27 16"></path>
  </svg>
</label>

<div>
    <div class="wrap">
    <input type="text" id="search-input" onkeyup="showSuggestions(event)"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="20px" width="20px">
      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#333" d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"></path>
      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#333" d="M22 22L20 20"></path>
    </svg>
    </div>
    <div class="search-suggestions" id="search-suggestions">
        <ul>
        <form action="" method="post">
            <?php
                foreach($data as $value){
            ?>
           
                <li onclick="selectSuggestion(event, 'index.php?action=chitiet')">
                <img src="conten/image/<?=$value['hinh'];?>" alt="" width="5%" height="5%" >
                 <p ><?=$value['ten']?></p>

                 <input type="hidden" name="ten" value="<?=$value['ten']?>">
                 <input type="hidden" name="hinh" value="<?=$value['hinh']?>">
                 
                </li>
               
               
            
            <?php
                }
            ?>
          
          </form>    
        </ul>
        
        

      

    </div>
</div>







        </nav>

      

  
    </section>
    <script>

                
        const burger = document.querySelector("#burger");
    const menu_mobile = document.querySelector(".menu-mobile");

burger.addEventListener("click", () => {        
        menu_mobile.classList.toggle("show");
  
        });


        function logout() {
    // Xóa session bằng cách gửi yêu cầu AJAX đến một tệp PHP xử lý
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'logout.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Xóa session thành công, chuyển hướng người dùng về trang đăng nhập
            window.location.href = 'index.php?action=login';
        }
    };
    xhr.send();
}
    </script>
</body>

</html>