
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

