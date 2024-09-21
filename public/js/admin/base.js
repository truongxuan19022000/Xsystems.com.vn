const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})

document.addEventListener('DOMContentLoaded', function () {
    const viewInput = document.getElementById('number');
    const totalPriceInput = document.getElementById('totalPrice');
    const totalPrice = document.getElementById('price');
    const view1Checkbox = document.getElementById('view1');
    const view2Checkbox = document.getElementById('view2');

    // Hàm tính tổng tiền
    function calculatePrice() {
        const viewCount = parseInt(viewInput.value) || 0; // Lấy giá trị nhập vào
        let price = 0;
        if (view1Checkbox.checked) {
            price += viewCount * 1; // Giá cho View giá rẻ
        }
        if (view2Checkbox.checked) {
            price += viewCount * 2; // Giá cho View nhanh
        }

        totalPriceInput.value = price.toFixed(0); // Cập nhật giá vào input
        totalPrice.value = price.toFixed(0); // Cập nhật giá vào input
    }

    // Gán sự kiện cho input và checkbox
    viewInput.addEventListener('input', calculatePrice);
    view1Checkbox.addEventListener('change', calculatePrice);
    view2Checkbox.addEventListener('change', calculatePrice);
});