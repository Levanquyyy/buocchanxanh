<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/binhluan.css">
  <link rel="stylesheet" href="./css/cssadmin.css">

  <style>
    .container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 0 20px;
    }

    .card {
      height: 100%;
      background-color: rgb(255, 255, 255);
      display: flex;

      align-items: center;

      padding: 20px 30px;
      gap: 13px;
      position: relative;
      overflow: hidden;
      box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.062);
    }

    .card img {
      width: 100px;
      border-radius: 999px;
      height: 100px;
      object-fit: cover;
    }

    .commentHeading {
      font-size: 1.2em;
      font-weight: 800;
      color: rgb(26, 26, 26);
    }

    .commentDescription {
      text-align: center;
      font-size: 0.7em;
      font-weight: 600;
      color: rgb(99, 99, 99);
    }

    .buttonContainer {
      display: flex;
      gap: 20px;
      flex-direction: row;
    }

    .acceptButton {
      width: 80px;
      height: 30px;
      background-color: #7b57ff;
      transition-duration: 0.2s;
      border: none;
      color: rgb(241, 241, 241);
      cursor: pointer;
      font-weight: 600;
      border-radius: 20px;
    }

    .declineButton {
      width: 80px;
      height: 30px;
      background-color: rgb(218, 218, 218);
      transition-duration: 0.2s;
      color: rgb(46, 46, 46);
      border: none;
      cursor: pointer;
      font-weight: 600;
      border-radius: 20px;
    }

    .declineButton:hover {
      background-color: #ebebeb;
      transition-duration: 0.2s;
    }

    .acceptButton:hover {
      background-color: #9173ff;
      transition-duration: 0.2s;
    }
  </style>
</head>

<body>
  <div class="container">
    
    <?php
      foreach($data as $value){
        if($value['type'] == 0){
    ?>
    <form action="" method="post">
    <p>Bình luân chưa chấp nhận</p>
    <div class="card">
      <img src="./conten/image/user Image.png" alt="" />
      <p class="commentHeading"><?=$value['ten_khachhang']?></p>
      <p class="commentDescription">Nội dung: <?=$value['noidung']?></p>
      <input type="hidden" value="<?=$value['id_binhluan']?>" name ="id_binhluan">

      <div class="buttonContainer">
        <button class="acceptButton" name = "chapnhan">Chấp nhận</button>
        <button class="declineButton"name = "xoa">Xoá</button>
      </div>
    </div>

    </form>
    <?php
      }
    }
    ?>


<?php

      foreach($data as $value){
        if($value['type'] == 1){
    ?>
    <form action="" method="post">
<p>Bình luân đã chấp nhận</p>
    <div class="card">
      <img src="./conten/image/user Image.png" alt="" />
      <p class="commentHeading"><?=$value['ten_khachhang']?></p>
      <p class="commentDescription">Nội dung: <?=$value['noidung']?></p>
      <input type="hidden" value="<?=$value['id_binhluan']?>" name ="id_binhluan">
      
      <div class="buttonContainer">
        <button class="acceptButton" name = "chapnhan">Chấp nhận</button>
        <button class="declineButton"name = "xoa">Xoá</button>
      </div>
    </div>

    </form>
    <?php
      }
    }
    ?>
   
  </div>
  
</body>

</html>