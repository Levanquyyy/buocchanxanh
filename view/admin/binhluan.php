<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="/conten/binhluan.css">
 
 
<style>
    
a {
  text-decoration: none;
}
#testimonials {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width: 100%;
}
.testimonial-heading {
  letter-spacing: 1px;
  margin: 30px 0px;
  padding: 10px 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.testimonial-heading span {
  font-size: 1.3rem;
  color: #252525;
  margin-bottom: 10px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.testimonial-box-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  width: 100%;
}
.testimonial-box {
  width: 500px;
  box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.1);
  background-color: #ffffff;
  padding: 20px;
  margin: 15px;
  cursor: pointer;
}
.profile-img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 10px;
}
.profile-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}
.profile {
  display: flex;
  align-items: center;
}
.name-user {
  display: flex;
  flex-direction: column;
}
.name-user strong {
  color: #3d3d3d;
  font-size: 1.1rem;
  letter-spacing: 0.5px;
}
.name-user span {
  color: #979797;
  font-size: 0.8rem;
}
.reviews {
  color: #f9d71c;
}
.box-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}
.client-comment p {
  font-size: 0.9rem;
  color: #4b4b4b;
}
.testimonial-box:hover {
  transform: translateY(-10px);
  transition: all ease 0.3s;
}

@media (max-width: 1060px) {
  .testimonial-box {
    width: 45%;
    padding: 10px;
  }
}
@media (max-width: 790px) {
  .testimonial-box {
    width: 100%;
  }
  .testimonial-heading h1 {
    font-size: 1.4rem;
  }
}
@media (max-width: 340px) {
  .box-top {
    flex-wrap: wrap;
    margin-bottom: 10px;
  }
  .reviews {
    margin-top: 10px;
  }
}
::selection {
  color: #ffffff;
  background-color: #252525;
}

.container {
  display: flex;
  justify-content: space-around;
}
h1 {
  text-align: center;
}
.acp_cmt,
.dis_cmt {
  flex: 1;
}
.btn-12 {
  position: relative;
  right: 20px;
  bottom: 20px;
  border: none;
  box-shadow: none;
  width: 130px;
  height: 40px;
  line-height: 42px;
  -webkit-perspective: 230px;
  perspective: 230px;
}
.btn-12 span {
  background: rgb(0, 172, 238);
  background: linear-gradient(
    0deg,
    rgba(0, 172, 238, 1) 0%,
    rgba(2, 126, 251, 1) 100%
  );
  display: block;
  position: absolute;
  width: 130px;
  height: 40px;

  border-radius: 5px;
  margin: 0;
  text-align: center;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.btn-12 span:nth-child(1) {
  -webkit-transform: rotateX(90deg);
  -moz-transform: rotateX(90deg);
  transform: rotateX(90deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12 span:nth-child(2) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12:hover span:nth-child(1) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
}
.btn-12:hover span:nth-child(2) {
  color: transparent;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
}
.client-comment {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 9px;
}
.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: "Lato", sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;

  outline: none;
}

.button {
  color: #ecf0f1;
  font-size: 17px;
  background-color: #2c22e6;
  border: 1px solid rgb(243, 18, 18);
  border-radius: 5px;
  padding: 10px;
  box-shadow: 0px 6px 0px #d35400;
  transition: all 0.1s;
}

.button:active {
  box-shadow: 0px 2px 0px #00d30b;
  position: relative;
  top: 2px;
}

</style>

</head>

<body>
<!-- <a href="index.php?action=admin" target="_blank" rel="noopener noreferrer" class="btn" >Back</a> -->
<a href="index.php?action=admin" target="_blank" rel="noopener noreferrer" >Back</a>

  <div class="container">
    
<div class="acp_cmt">
  <h1> Bình luận đã chấp nhận</h1>
 
    <form action="" method="post">



    <section id="testimonials">
        <!--heading--->
        <div class="testimonial-heading">
            <span>Comments</span>
            <h4>Clients Says</h4>
        </div>
        <!--testimonials-box-container------>
        <?php
      foreach($data as $value){
        if($value['type'] == 1){
    ?>
        <div class="testimonial-box-container">
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong><?=$value['ten_khachhang']?></strong>
                            <span><?=$value['email_khachhang']?></span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p><?=$value['noidung']?></p>
                </div>
                
            </div>
         
        </div>
      </section>

    </form>

   


    
    <?php
      }
    }
    ?>



</div>
<div class="dis_cmt">
<h1> Bình luận chưa chấp nhận</h1>
 
 <form action="" method="post">



 <section id="testimonials">
     <!--heading--->
     <div class="testimonial-heading">
         <span>Comments</span>
         <h4>Clients Says</h4>
     </div>
     <!--testimonials-box-container------>
     <?php
   foreach($data as $value){
     if($value['type'] == 0){
 ?>
     <div class="testimonial-box-container">
         <!--BOX-1-------------->
         <div class="testimonial-box">
             <!--top------------------------->
             <div class="box-top">
                 <!--profile----->
                 <div class="profile">
                     <!--img---->
                     <div class="profile-img">
                         <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                     </div>
                     <!--name-and-username-->
                     <div class="name-user">
                         <strong><?=$value['ten_khachhang']?></strong>
                         <span><?=$value['email_khachhang']?></span>
                     </div>
                 </div>
                 <!--reviews------>
                 <div class="reviews">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="far fa-star"></i><!--Empty star-->
                 </div>
             </div>
             <!--Comments---------------------------------------->
             <div class="client-comment">
                <form method="post">
                 <p><?=$value['noidung']?></p>
                 <input type="hidden" value="<?=$value['id_binhluan']?>" name ="id_binhluan">
                <button class="custom-btn btn-12" name="xoa" type="submit" ><span>Click!</span><span>Xóa</span></button>
                <button class="custom-btn btn-12" name ="chapnhan" type="submit"><span>Click!</span><span>Chấp nhận</span></button>
             </form>
             </div>
         </div>
      
     </div>
   </section>

 </form>




 
 <?php
   }
 }
 ?>
</div>



   
  </div>

  
  
</body>

</html>