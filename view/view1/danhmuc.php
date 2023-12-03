<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./conten/css.css" />
</head>

<body>
  <!-- products  -->
  <div class="products" id="products">
    <h1>NIKE</h1>
    <div class="box">
      <?php
      // var_dump($_SESSION['ten']);
      foreach ($data as $value) {
        if ($value['danhmuc'] == 'nike') {
      ?>
          <form action="" method="post">
            <div class="card">
              <div class="small-card">
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-share"></i>
              </div>
              <div class="img-card">
                <img src="conten/image/<?= $value['hinh'] ?>" alt="shoes" />
                <input type="hidden" name="hinh" value="<?= $value['hinh'] ?>">
                <input type="hidden" name="id" value="<?= $value['id'] ?>">
              </div>
              <div class="small-text">
                <h2><?= $value['ten'] ?></h2>
                <input type="hidden" name="ten" value="<?= $value['ten'] ?>">
                <p><?= $value['gioithieu'] ?></p>
                <h3><?= $value['gia'] ?>$</h3>
                <input type="hidden" name="gia" value="<?= $value['gia'] ?>">
                <div class="small-icoins">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  
                </div>

                <button href="" type="submit" name="chitiet" class="btn">
                  Xem chi tiết
                </button>
              
              </div>
            </div>
          </form>
      <?php
        }
      }
      ?>
    </div>
  </div>

  <!-- products  -->
  <div class="products" id="products">
    <h1>ZUCK</h1>
    <div class="box">
      <?php
      foreach ($data as $value) {
        if ($value['danhmuc'] == 'zuck') {
      ?>
          <form action="" method="post">
            <div class="card">
              <div class="small-card">
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-share"></i>
              </div>
              <div class="img-card">
                <img src="conten/image/<?= $value['hinh'] ?>" alt="shoes" />
                <input type="hidden" name="hinh" value="<?= $value['hinh'] ?>">
                <input type="hidden" name="id" value="<?= $value['id'] ?>">
              </div>
              <div class="small-text">
                <h2><?= $value['ten'] ?></h2>
                <input type="hidden" name="ten" value="<?= $value['ten'] ?>">
                <p><?= $value['gioithieu'] ?></p>
                <h3><?= $value['gia'] ?>$</h3>
                <input type="hidden" name="gia" value="<?= $value['gia'] ?>">
                <div class="small-icoins">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <button href="" type="submit" name="chitiet" class="btn">
                  Xem chi tiết
                </button>
               
              </div>
            </div>
          </form>
      <?php
        }
      }
      ?>
    </div>
  </div>

</body>

</html>