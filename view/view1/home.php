

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../img/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./conten/css.css" />

    <title>Document</title>
  </head>

  <body>
  
    <section>
      <div class="main" id="home">
        <div class="main-content">
          <div class="main-text">
            <h1>
              NIKE
              <br />
              <span>Collection</span>
            </h1>
            <p>
              Tại Nike, sứ mệnh của chúng tôi rất rõ ràng: đánh thức tinh thần
              thể thao trong mọi người. Cho dù bạn là một chuyên nghiệp có kinh
              nghiệm, một người chơi cuối tuần, hay đơn giản là một người mốt
              thời trang tiên phong, chúng tôi ở đây để nâng cao mọi bước chân
              của bạn. Cam kết của chúng tôi là thúc đẩy giới hạn của trang phục
              thể thao và giày dép, tạo ra không ít cuộc đột phá, thiết lập các
              tiêu chuẩn mới về hiệu suất và thiết kế.
            </p>
          </div>
          <div class="main-img">
            <img src="./conten/image/shoes.png" alt="shoes" />
          </div>
        </div>
        <div class="social_icon">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-linkedin-in"></i>
        </div>
        <div class="button ">
          <a href="#">Mua Ngay</a>
          <i class="fa-solid fa-chevron-right"></i>
        </div>
      </div>
    </section>

  
    <!-- products  -->
    <div class="products" id="products">
      <h1>Sản Phẩm</h1>
      <div class="box">
        <?php
            foreach ($data as $value) {
            ?>
<form action="" method="post">
        <div class="card">
          <div class="small-card">
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-share"></i>
          </div>
          <div class="img-card">
           <img src="conten/image/<?= $value['hinh'] ?>" alt="shoes" />
           <input type="hidden" name="hinh" value="<?=$value['hinh']?>">
           <input type="hidden" name="id" value="<?=$value['id']?>">
          </div>
          <div class="small-text">
            <h2><?=$value['ten']?></h2>
            <input type="hidden" name="ten" value="<?=$value['ten']?>">
            <p><?=$value['gioithieu']?></p>
            <h3><?=$value['gia']?>$</h3>
            <input type="hidden" name="gia" value="<?=$value['gia']?>">
            <select name="soluong">
  <option value="1">1</option>
  <option value="2">2</option>
  <!-- Thêm các option khác tùy ý -->
</select>
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
            <button href="" type="submit" name="submit" class="btn">
              Thêm giỏ
            </button>
          </div>
        </div>
        </form>
        <?php
            }
            ?>
      </div>
    </div>
    <!-- about -->

    <div class="about" id="About">
      <h1>web <span>about</span></h1>
      <div class="about-main">
        <div class="about-img">
          <div class="small-img">
            <img
              src="./conten/image/red_shoes1.png"
              alt=""
              onclick="functio(this)"
            />
            <img
              src="./conten/image/red_shoes2.png"
              alt=""
              onclick="functio(this)"
            />
            <img
              src="./conten/image/red_shoes3.png"
              alt=""
              onclick="functio(this)"
            />
            <img
              src="./conten/image/red_shoes4.png"
              alt=""
              onclick="functio(this)"
            />
          </div>
          <div class="img-center">
            <img src="./conten/image/red_shoes1.png" alt="" id="imagebox" />
          </div>
        </div>

        <div class="about-text">
          <p>
            Đôi giày Nike - Sự Kết Hợp Hoàn Hảo Giữa Thể Thao và Phong Cách
            Trong thế giới thời trang thể thao, Nike nổi bật như một biểu tượng
            không thể thiếu. Từng bước chân trong một đôi giày Nike là một hành
            trình khám phá về sức mạnh, thiết kế tinh tế và phong cách không
            giới hạn. Với hơn một thế kỷ phát triển và đổi mới không ngừng, Nike
            đã định hình lại cách chúng ta nhìn vào giày thể thao. Mỗi đôi giày
            Nike không chỉ là một sản phẩm, mà là một tác phẩm nghệ thuật, một
            sự kết hợp tinh tế giữa công nghệ và thiết kế. Những người yêu thể
            thao biết rằng Nike không chỉ là một thương hiệu, mà là một cơ hội
            để thể hiện bản thân. Đôi giày chạy Nike mang đến sự thoải mái và
            linh hoạt, giúp bạn vượt qua mọi giới hạn. Chúng được thiết kế với
            công nghệ tiên tiến như công nghệ Nike Air để cung cấp sự giảm chấn
            và hỗ trợ cần thiết cho mỗi bước chân. Cho những người yêu bóng rổ,
            giày bóng rổ Nike không chỉ đáng tin cậy trong sân bóng, mà còn là
            biểu tượng thời trang. Thiết kế đẹp mắt kết hợp với độ bám và đàn
            hồi tối ưu, giúp bạn thể hiện phong cách riêng trong mỗi trận đấu.
            Và không chỉ dừng lại ở đó, Nike đã xâm nhập mọi lĩnh vực của cuộc
            sống. Giày thể thao Nike đã trở thành một biểu tượng của phong cách
            cá nhân, từ đường phố đến sân trường. Bên cạnh thiết kế và hiệu suất
            xuất sắc, Nike còn cam kết với bảo vệ môi trường và xã hội. Chương
            trình tái chế Nike Grind giúp tái sử dụng các vật liệu để giảm thiểu
            tác động đến môi trường.
          </p>
        </div>
      </div>
      <div class="btn-about">Mua ngay</div>
    </div>
    
     
   
    <script>
      function functio(small) {
        var full = document.getElementById("imagebox");
        full.src = small.src;
      }
    </script>

    <!-- customer -->

    <div class="review" id="review">
      <h1>Đánh Giá <span>Khách Hàng</span></h1>
      <div class="review-box">
   
      <div class="slider-container">
      <div class="left-slide">
        <div style="background-color: #e2a13c">
          <img src="conten/image/u1.png" alt="" class="user_slide" />

          <h1>Sneak Joe</h1>
          <p>Web-developer</p>
        </div>
        <div style="background-color: #212021">
          <img src="conten/image/u2.png" alt="" class="user_slide" />

          <h1 style="color: #ffffff">Christ Joe</h1>
          <p style="color: #ffffff">Designer</p>
        </div>
        <div style="background-color: #686e73">
          <img src="conten/image/u3.png" alt="" class="user_slide" />

          <h1>Leo Joe</h1>
          <p>Graphic-Design</p>
        </div>
        <div style="background-color: #d55024">
          <img src="conten/image/u4.png" alt="" class="user_slide" />

          <h1 style="color: #ffffff">Leo Joe</h1>
          <p style="color: #ffffff">Back-end(Java)</p>
        </div>
      </div>
      <div class="right-slide">
        <div>
          <span>
            <i class="fa-solid fa-quote-left"></i>
            Nike nổi tiếng với việc sản xuất giày thể thao và quần áo chất lượng cao. Sản phẩm của họ thường rất bền, thoải mái và phù hợp cho nhiều hoạt động thể thao.

            <i class="fa-solid fa-quote-right"></i>
          </span>
          <img src="conten/image/shoes6.png" alt="Img1" class="cus_img" />
        </div>
        <div>
          <span>
            <i class="fa-solid fa-quote-left"></i>
            Nike luôn tiên phong trong việc tạo ra các thiết kế thời trang và hiện đại. Sản phẩm của họ thường có sự kết hợp giữa kiểu dáng và hiệu suất, giúp bạn tỏa sáng trên sân thể thao và trong cuộc sống hàng ngày.

            <i class="fa-solid fa-quote-right"></i>
          </span>
          <img src="conten/image/shoes5.png" alt="Img2" class="cus_img" />
        </div>
        <div>
          <span>
            <i class="fa-solid fa-quote-left"></i>
            Nike đã đưa ra những cam kết mạnh mẽ về bền vững và trách nhiệm xã hội. Họ đang dần giảm thiểu tác động tiêu cực đến môi trường và đảm bảo điều kiện làm việc tốt cho người lao động trong toàn cầu.

            <i class="fa-solid fa-quote-right"></i>
          </span>
          <img src="conten/image/shoes2.png" alt="Img3" class="cus_img" />
        </div>
        <div>
          <span>
            <i class="fa-solid fa-quote-left"></i>
            Nike cho phép khách hàng tùy chỉnh thiết kế của giày thể thao của họ thông qua dịch vụ tùy chỉnh trực tuyến. Điều này cho phép người dùng tạo ra sản phẩm riêng của họ với các yếu tố cá nhân hóa.
            <br />
            đồ uống phục vụ nhanh chóng.
            <br />Họ không bao giờ làm tôi thất vọng

            <i class="fa-solid fa-quote-right"></i>
          </span>
          <img src="conten/image/shoes1.png" alt="Img4" class="cus_img" />
        </div>
      </div>
      <div class="action-buttons">
        <button class="down-button">
          <i class="fas fa-arrow-down"></i>
        </button>
        <button class="up-button">
          <i class="fas fa-arrow-up"></i>
        </button>
      </div>
    </div>
    </div>
    </div>
    <!-- services -->
    <div class="service" id="Service">
      <h1>dịch vụ của <span>chúng tôi</span></h1>
      <div class="service-card">
        <div class="service-box">
          <i class="fa-solid fa-truck-fast"></i>
          <h3>Dịch Vụ Giao Nhanh</h3>
          <p>Cam kết Dịch Vụ Giao Nhanh nhất đến với bạn</p>
        </div>
        <div class="service-box">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Hòan Trả</h3>
          <p>Nhận HOÀN TRẢ khi sản phẩm có lỗi</p>
        </div>
        <div class="service-box">
          <i class="fa-solid fa-headset"></i>
          <h3>Chăm Sóc Khách Hàng</h3>
          <p>24/7 Luôn hỗ trợ bạn</p>
        </div>
      </div>
    </div>
    <!-- login-form -->
    <div class="login-form">
      <div class="left">
        <img src="./conten/image/logshoes.png" alt="logo-login" />
      </div>
      <div class="right">
        <h1>Form Đăng Nhập</h1>

        <form action="#" method="post">
          <p>user name</p>
          <div class="user">
            <i class="fa-solid fa-user"></i>
            <input
              type="text"
              placeholder="User name"
              class="user-name"
              name="user"
            />
          </div>
          <p>Password</p>
          <div class="password">
            <i class="fa-solid fa-lock"></i>
            <input type="text" name="password" placeholder="Password" />
          </div>
          <p class="forget">forget password</p>
          <button type="submit" class="btn">login</button>
          <div class="loggin-icon">
            <a href=""><i class="fa-brands fa-google"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
          </div>
        </form>
      </div>
    </div>


    <script>
      const sliderContainer = document.querySelector('.slider-container')
const slideRight = document.querySelector('.right-slide')
const slideLeft = document.querySelector('.left-slide')
const upButton = document.querySelector('.up-button')
const downButton = document.querySelector('.down-button')
const slidesLength = slideRight.querySelectorAll('div').length

let activeSlideIndex = 0

slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`

upButton.addEventListener('click', () => changeSlide('up'))
downButton.addEventListener('click', () => changeSlide('down'))

const changeSlide = (direction) => {
    const sliderHeight = sliderContainer.clientHeight
    if(direction === 'up') {
        activeSlideIndex++
        if(activeSlideIndex > slidesLength - 1) {
            activeSlideIndex = 0
        }
    } else if(direction === 'down') {
        activeSlideIndex--
        if(activeSlideIndex < 0) {
            activeSlideIndex = slidesLength - 1
        }
    }

    slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`
    slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`
}

function showSuggestions(event) {
        const input = event.target;
        const suggestions = document.getElementById('search-suggestions');
        const suggestionsList = suggestions.getElementsByTagName('li');

        if (event.key === 'Enter') {
            // Handle search logic
            console.log('Search term:', input.value);
        } else {
            if (input.value.length > 0) {
                suggestions.style.display = 'block';
                for (let i = 0; i < suggestionsList.length; i++) {
                    const suggestion = suggestionsList[i];
                    if (suggestion.innerText.toLowerCase().includes(input.value.toLowerCase())) {
                        suggestion.style.display = 'block';
                    } else {
                        suggestion.style.display = 'none';
                    }
                }
            } else {
                suggestions.style.display = 'none';
            }
        }
    }

    function selectSuggestion(event, pageUrl) {
        const selectedSuggestion = event.target.innerText;
        const input = document.getElementById('search-input');
        input.value = selectedSuggestion;
        // Redirect to the specified page
        window.location.href = pageUrl;
    }
    </script>
  </body>
</html>
