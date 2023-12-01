// Lắng nghe sự kiện khi người dùng chọn ảnh
document.getElementById('upload-avatar').addEventListener('change', function (event) {
    const file = event.target.files[0];

    if (file) {
        // Đọc dữ liệu ảnh và chuyển đổi sang Data URL
        const reader = new FileReader();
        reader.onload = function (e) {
            const dataURL = e.target.result;

            // Hiển thị ảnh trên trang web
            document.getElementById('uploadedImage').src = dataURL;
        };

        reader.readAsDataURL(file);
    }
});

const form = document.getElementById('registerForm')

form.onsubmit = function(event) {
    sessionStorage.removeItem("formData");
    const formData = {};
    const formInputs = form.querySelectorAll('input');

    formInputs.forEach(input => {
        if(!['password','passwordconfirm'].includes(input.name))
        formData[input.name] = input.value;
    });

    sessionStorage.setItem('formData', JSON.stringify(formData));
}

const storedFormData = sessionStorage.getItem('formData');
if (storedFormData) {
    const formData = JSON.parse(storedFormData);
    
    Object.keys(formData).forEach(key => {
        const input = document.querySelector(`[name="${key}"]`);
        if (input) {
            input.value = formData[key];
        }
    });
}
