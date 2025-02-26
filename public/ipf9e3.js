document.addEventListener("DOMContentLoaded", function () {
    // API token của ipinfo (thay thế bằng token của bạn nếu cần)
    const ipinfoToken = "00bca6173cb1dd";
    const urlSaveClient = document.getElementById('url-save-client').value;

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
            fetch(urlSaveClient, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(clientInfo)
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Client info saved:', data);
                    if (data.record_id) {
                        // Store the record ID in sessionStorage
                        sessionStorage.setItem('userInputId', data.record_id);
                        console.log('Saved record ID:', data.record_id);
                    }
                })
                .catch(error => {
                    console.error("Error fetching data from ipinfo:", error);
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
