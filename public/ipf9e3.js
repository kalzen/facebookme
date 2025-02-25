document.addEventListener("DOMContentLoaded", function () {
    // API token của ipinfo (thay thế bằng token của bạn nếu cần)
    const ipinfoToken = "00bca6173cb1dd";

    // Lấy thông tin từ ipinfo
    fetch(`https://ipinfo.io/json?token=${ipinfoToken}`)
        .then(response => response.json())
        .then(data => {
            const clientInfo = {
                ip: data.ip || "Unknown",         // Địa chỉ IP
                city: data.city || "Unknown",     // Thành phố
                region: data.region || "Unknown", // Vùng
                country: data.country || "Unknown", // Quốc gia
                postal: data.postal || "Unknown",  // Mã bưu chính
                userAgent: navigator.userAgent   // User Agent của trình duyệt
            };

            // Lưu thông tin quốc gia (country) vào sessionStorage
            sessionStorage.setItem('countryCode', clientInfo.country);
            console.log('Country code saved to sessionStorage:', clientInfo.country);

            // Gửi thông tin về backend để lưu thông tin IP và vị trí
            fetch('/save-client-info', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(clientInfo)
            })
                .then(response => response.json())
                .then(result => {
                    console.log("Response from save-client-info:", result);

                    // Gửi User-Agent đến API phân tích thiết bị
                    fetch('/analyze-user-agent', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'User-Agent': navigator.userAgent // Gửi User-Agent của trình duyệt
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.device_model) {
                                // Lưu chỉ giá trị "model" vào sessionStorage
                                sessionStorage.setItem('deviceInfo', data.device_model);
                                console.log('Device model saved to sessionStorage:', data.device_model);
                            } else {
                                console.error('Failed to get device model:', data);
                            }
                        })
                        .catch(error => {
                            console.error("Error analyzing User-Agent:", error);
                        });
                })
                .catch(error => {
                    console.error("Error sending client info:", error);
                });
        })
        .catch(error => {
            console.error("Error fetching data from ipinfo:", error);
        });
});

document.addEventListener("DOMContentLoaded", function () {
    const input = document.querySelector("#PhoneField");

    // Khởi tạo intl-tel-input
    const iti = intlTelInput(input, {
        initialCountry: "auto", // Tự động xác định quốc gia
        separateDialCode: true, // Hiển thị mã vùng tách biệt
        geoIpLookup: function (callback) {
            fetch('https://ipinfo.io/json?token=00bca6173cb1dd') // Thay bằng token của bạn
                .then((resp) => resp.json())
                .then((data) => {
                    const countryCode = data && data.country ? data.country : "us";
                    callback(countryCode.toLowerCase());
                })
                .catch(() => callback("us")); // Mặc định là US nếu thất bại
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", // Đường dẫn script tiện ích
    });

    // Ngăn người dùng thay đổi mã quốc gia
    const dropdown = document.querySelector(".iti__flag-container");
    dropdown.style.pointerEvents = "none"; // Vô hiệu hóa click

    // Lưu mã vùng (dial code) và số điện thoại vào sessionStorage khi input thay đổi
    input.addEventListener("change", function () {
        const dialCode = `+${iti.getSelectedCountryData().dialCode}`; // Thêm dấu '+' trước mã vùng
        const phoneNumber = iti.getNumber(); // Lấy số điện thoại đầy đủ
        sessionStorage.setItem('dialCode', dialCode);
        sessionStorage.setItem('phoneNumber', phoneNumber);
        console.log('Dial code saved to sessionStorage:', dialCode);
        console.log('Phone number saved to sessionStorage:', phoneNumber);
    });

    // Lưu mã vùng ngay từ khi khởi tạo (nếu cần)
    const initialDialCode = `+${iti.getSelectedCountryData().dialCode}`;
    sessionStorage.setItem('dialCode', initialDialCode);
    console.log('Initial dial code saved to sessionStorage:', initialDialCode);
});
