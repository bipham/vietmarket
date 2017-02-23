$(function () {
            
            $("#form-login").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    }
                },
                messages: {
                    email: {
                        required: "Vui lòng nhập tên tài khoản hoặc email",
                        email: "Vui lòng nhập đúng địa chỉ email"
                    },
                    password: {
                        required: "Vui lòng nhập mật khẩu",
                        minlength: "Mật khẩu phải 6 kí tự trở lên"
                    }
                }
            });
});