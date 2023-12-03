// Lắng nghe sự kiện khi nút xác nhận được nhấn
document.querySelectorAll(".confirm-button").forEach((button) => {
  button.addEventListener("click", function () {
    // Lấy giá trị data-target để xác định class của phần tử cần hiển thị
    const targetId = this.getAttribute("data-target");
    const targetContainer = document.getElementById(targetId);
    if (!targetContainer) return;
    // Hiển thị tất cả các phần tử container_card tương ứng khi nút được nhấn
    if (targetContainer.style.display === "block") {
      targetContainer.style.display = "none"; // Nếu đang hiển thị, ẩn đi
    } else {
      targetContainer.style.display = "block"; // Nếu đang ẩn, hiển thị lên
    }
  });
});
