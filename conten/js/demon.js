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
