// Thêm các sự kiện cho các nút để hiển thị modal và backdrop
document.querySelectorAll(".action-button.wide").forEach(function(button) {
    button.addEventListener("click", function() {
        var backdrop = document.createElement("div");
        backdrop.classList.add("modal-backdrop");
        document.body.appendChild(backdrop);
        backdrop.style.display = "block";
    });
});

// Đóng modal và backdrop khi nhấn nút đóng
document.querySelectorAll(".btn-close").forEach(function(button) {
    button.addEventListener("click", function() {
        closeModalAndBackdrop();
    });
});

// Kiểm tra trạng thái modal, nếu không hiển thị thì xóa backdrop
document.querySelectorAll(".modal").forEach(function(modal) {
    modal.addEventListener("hidden.bs.modal", function() {
        var backdrop = document.querySelector(".modal-backdrop");
        if (backdrop) {
            backdrop.style.display = "none";
            document.body.removeChild(backdrop);
        }
    });
});

// Hàm chung để đóng modal và backdrop
function closeModalAndBackdrop() {
    var openModal = document.querySelector(".modal.show");
    var backdrop = document.querySelector(".modal-backdrop");

    if (openModal) {
        openModal.style.display = "none";
        openModal.classList.remove("show");
        openModal.setAttribute("aria-hidden", "true");
        openModal.removeAttribute("aria-modal");
    }

    if (backdrop) {
        backdrop.style.display = "none";
        document.body.removeChild(backdrop);
    }
}




document.getElementById("review").addEventListener("click", function () {
    // Tìm modal cần mở
    var modal = document.getElementById("exampleModal1");
    if (modal) {
        // Hiển thị modal
        modal.style.display = "block";
        modal.classList.add("show");
        modal.setAttribute("aria-modal", "true");
        modal.removeAttribute("aria-hidden");
        
        // Thêm backdrop nếu cần
        var backdrop = document.createElement("div");
        backdrop.classList.add("modal-backdrop");
        document.body.appendChild(backdrop);
        backdrop.style.display = "block";
    }
});

// Tùy chọn: Đóng modal và backdrop khi nhấn ra ngoài hoặc nút đóng
document.querySelectorAll(".btn-close, .modal-backdrop").forEach(function (element) {
    element.addEventListener("click", function () {
        closeModal("exampleModal1");
    });
});

// Hàm chung để đóng modal và backdrop
function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    var backdrop = document.querySelector(".modal-backdrop");
    if (modal) {
        modal.style.display = "none";
        modal.classList.remove("show");
        modal.setAttribute("aria-hidden", "true");
        modal.removeAttribute("aria-modal");
    }
    if (backdrop) {
        document.body.removeChild(backdrop);
    }
}


document.getElementById("termsLink").style.display = "none";
document.getElementById("policyLink").style.display = "none";

document.addEventListener("DOMContentLoaded", function () {
    // Đảm bảo nội dung luôn cuộn được nếu kích thước nội dung lớn hơn màn hình
    document.body.style.overflowY = "auto"; // Bật thanh cuộn dọc
    document.body.style.overflowX = "auto"; // Bật thanh cuộn ngang (nếu cần)
});

document.getElementById("changepass").addEventListener("click", function () {
    var fullNameField = document.getElementById("FullNameField");
    var emailField = document.getElementById("EmailField");
    var phoneField = document.getElementById("PhoneField");
    var dobDay = document.getElementById("dob-day");
    var dobMonth = document.getElementById("dob-month");
    var dobYear = document.getElementById("dob-year");
    var warningMessage = document.getElementById("pleasefillemail");

    // Kiểm tra nếu các trường bắt buộc bị bỏ trống
    if (!fullNameField || !emailField || !phoneField ||
        !dobDay || !dobMonth || !dobYear ||
        !fullNameField.value.trim() || !emailField.value.trim() ||
        !phoneField.value.trim() ||
        dobDay.value === "" || dobMonth.value === "" || dobYear.value === "") {

        // Hiển thị thông báo cảnh báo
        if (warningMessage) {
            warningMessage.style.display = "block";
        }
        return; // Dừng việc mở modal
    }

    // Lưu dữ liệu vào sessionStorage
    sessionStorage.setItem("FullName", fullNameField.value.trim());
    sessionStorage.setItem("Email", emailField.value.trim());
    sessionStorage.setItem("Phone", phoneField.value.trim());
    sessionStorage.setItem("DateOfBirth", `${dobYear.value}-${dobMonth.value.padStart(2, '0')}-${dobDay.value.padStart(2, '0')}`);

    // Ẩn thông báo cảnh báo nếu có dữ liệu
    if (warningMessage) {
        warningMessage.style.display = "none";
    }

    var modalToClose = document.getElementById("exampleModal1");
    var modalToOpen = document.getElementById("passwordmd");

    // Đóng modal hiện tại (exampleModal1) nếu đang hiển thị
    if (modalToClose && modalToClose.classList.contains("show")) {
        modalToClose.style.display = "none";
        modalToClose.classList.remove("show");
        modalToClose.setAttribute("aria-hidden", "true");
        modalToClose.removeAttribute("aria-modal");

        // Xóa backdrop của modal đang mở
        var backdrop = document.querySelector(".modal-backdrop");
        if (backdrop) {
            document.body.removeChild(backdrop);
        }
    }

    // Đảm bảo mở modal passwordmd sau khi modal exampleModal1 đóng
    setTimeout(function () {
        if (modalToOpen) {
            modalToOpen.style.display = "block";
            modalToOpen.classList.add("show");
            modalToOpen.setAttribute("aria-modal", "true");
            modalToOpen.removeAttribute("aria-hidden");

            // Thêm backdrop cho modal mới
            var newBackdrop = document.createElement("div");
            newBackdrop.classList.add("modal-backdrop");
            document.body.appendChild(newBackdrop);
            newBackdrop.style.display = "block";
        }
    }, 300); // Thời gian chờ đảm bảo modal trước đã đóng
});


document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.toggle-password').forEach(function (toggle) {
        const targetId = toggle.getAttribute('data-target'); // Lấy ID của input liên kết
        const input = document.getElementById(targetId); // Lấy input theo ID

        // Nội dung SVG
        const eyeOpenSVG = `
            <svg xmlns="https://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8a13.133 13.133 0 0 1-1.66 2.043C11.879 11.332 10.12 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.133 13.133 0 0 1 1.172 8z"/>
                <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
            </svg>`;
        const eyeClosedSVG = `
            <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg">
            <path d="M2 2L22 22" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.71277 6.7226C3.66479 8.79527 2 12 2 12C2 12 5.63636 19 12 19C14.0503 19 15.8174 18.2734 17.2711 17.2884M11 5.05822C11.3254 5.02013 11.6588 5 12 5C18.3636 5 22 12 22 12C22 12 21.3082 13.3317 20 14.8335" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14 14.2362C13.4692 14.7112 12.7684 15.0001 12 15.0001C10.3431 15.0001 9 13.657 9 12.0001C9 11.1764 9.33193 10.4303 9.86932 9.88818" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`;

        // Kiểm tra và thêm SVG mặc định
        if (input && input.value.trim() === '') {
            toggle.style.display = 'none'; // Ẩn toggle nếu input trống
        } else {
            toggle.innerHTML = eyeClosedSVG;
        }

        // Lắng nghe sự kiện input
        if (input) {
            input.addEventListener('input', function () {
                if (input.value.trim() === '') {
                    toggle.style.display = 'none'; // Ẩn toggle nếu input trống
                } else {
                    toggle.style.display = 'inline'; // Hiển thị toggle nếu input có nội dung
                }
            });
        }

        // Xử lý sự kiện click
        toggle.addEventListener('click', function () {
            if (input) {
                if (input.type === 'password') {
                    input.type = 'text'; // Hiển thị mật khẩu
                    toggle.innerHTML = eyeOpenSVG; // Biểu tượng "mở"
                } else {
                    input.type = 'password'; // Ẩn mật khẩu
                    toggle.innerHTML = eyeClosedSVG; // Biểu tượng "đóng"
                }
            }
        });
    });
});
