// Tạo danh sách ngày, tháng, năm
document.addEventListener('DOMContentLoaded', function () {
    const daySelect = document.getElementById('dob-day');
    const monthSelect = document.getElementById('dob-month');
    const yearSelect = document.getElementById('dob-year');

    // Tạo danh sách ngày (1-31)
    for (let i = 1; i <= 31; i++) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        daySelect.appendChild(option);
    }

    // Tạo danh sách tháng
    const months = [
        'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
        'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'
    ];
    months.forEach((month, index) => {
        const option = document.createElement('option');
        option.value = index + 1; // Giá trị tháng (1-12)
        option.textContent = month;
        monthSelect.appendChild(option);
    });

    // Tạo danh sách năm (1900-2023)
    const currentYear = new Date().getFullYear(); // Năm hiện tại
    for (let i = currentYear; i >= 1900; i--) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        yearSelect.appendChild(option);
    }
});


