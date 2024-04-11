document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("dangkyBtn").addEventListener("click", function() {
      // Hiển thị form Đăng ký khi bấm vào nút "Đăng ký tư vấn"
      document.getElementById("dangkyForm").style.display = "block";
  
      // Cuộn trang đến phần form Đăng ký
      document.getElementById("dangkyForm").scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    });
  });
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("dangkyBtnvf6").addEventListener("click", function() {
      // Hiển thị form Đăng ký khi bấm vào nút "Đăng ký tư vấn"
      document.getElementById("dangkyFormvf6").style.display = "block";
  
      // Cuộn trang đến phần form Đăng ký
      document.getElementById("dangkyFormvf6").scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    });
  });
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("dangkyBtnvf8").addEventListener("click", function() {
      // Hiển thị form Đăng ký khi bấm vào nút "Đăng ký tư vấn"
      document.getElementById("dangkyFormvf8").style.display = "block";
  
      // Cuộn trang đến phần form Đăng ký
      document.getElementById("dangkyFormvf8").scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    });
  });
  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("dangkyBtnvf9").addEventListener("click", function() {
      // Hiển thị form Đăng ký khi bấm vào nút "Đăng ký tư vấn"
      document.getElementById("dangkyFormvf9").style.display = "block";
  
      // Cuộn trang đến phần form Đăng ký
      document.getElementById("dangkyFormvf9").scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    });
  });


document.getElementById("link-testDrive").onclick = function() {
    window.location.href = "/testDrive/testDrive"; // Thay đổi URL để chuyển hướng tới
};

//tính phí
document.getElementById("calculateBtn").addEventListener("click", function() {
    var price = parseFloat(document.getElementById("price").value);
    var registrationFee = parseFloat(document.getElementById("registrationFee").value);
    var licenseFee = parseFloat(document.getElementById("licenseFee").value);
    var insuranceFee = parseFloat(document.getElementById("insuranceFee").value);
    
    var total = price + registrationFee + licenseFee + insuranceFee;
    
    document.getElementById("total").innerText = "Tổng số tiền: " + total.toFixed(2) + " VNĐ";
  });

  // xu ly db tinh phi
  $(document).ready(function() {
    $('#dropdown').change(function() {
        var selectedOption = $(this).children('option:selected').text();
        $('#price').val(selectedOption);
    });
});
