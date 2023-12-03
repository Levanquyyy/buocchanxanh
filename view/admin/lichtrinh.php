<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./conten/lichtrinh.css" />
  <!-- <link rel="stylesheet" href="./conten/cssadmin.css"> -->
  <title>Document</title>
</head>

<body>
  <div class="table">
    
    <div class="table-cell plattform">
      <h3>Đơn hàng đã giao</h3>
  
    </div>
    <div class="table-cell enterprise">
      <h3>Đơn hàng bị boom</h3>
     
    </div>

    <div class="table-cell success">

      <?php
      foreach ($data as $value) {
        if ($value['trangthai'] == 1) {
      ?>
          <div class="container_card">
            <form action="" method="post">
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
                    <div class="printf-code--r"></div>

                    <p></p>
                  </div>

                  <div class="card_food__wrap">
                    <h3>-- Thông tin Đơn hàng --</h3>
                    Giày:

                    <h3 class="quantity-f">Số lượng</h3>
                  </div>
                </div>

                <div class="printf">
                  <div class="container">
                    <div class="tabs">
                    
                      <button>
                        <p>Xác Nhận</p>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
      <?php
        }
      }
      ?>
    </div>



    <div class="table-cell fail">

      <?php
      foreach ($data as  $value) {
        if ($value['trangthai'] == 0 && $value['trangthai'] != null) {


      ?>
          <div class="container_card">
            <form action="" method="post">
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
                    <div class="printf-code--r"></div>

                    <p></p>
                  </div>

                  <div class="card_food__wrap">
                    <h3>-- Thông tin Đơn hàng --</h3>
                    Giày:

                    <h3 class="quantity-f">Số lượng</h3>
                  </div>
                </div>

                <div class="printf">
                  <div class="container">
                  <div class="tabs">
                    
                    <button>
                      <p>Xác Nhận</p>
                    </button>
                  </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

      <?php
        }
      }
      ?>
    </div>



  </div>
</body>

</html>