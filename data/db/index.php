<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mạnh Tiến Account</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        background: #f6f8fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    #warpper {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    #header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
        background: #fff;
        border-bottom: 2px solid #eee;
        padding: 16px 32px;
    }
    #header1 h3 {
        margin: 0;
        color: #db4036;
        letter-spacing: 2px;
    }
    #header2 select {
        padding: 6px 12px;
        border-radius: 6px;
        border: 1px solid #ccc;
        background: #f8f8f8;
        font-size: 15px;
    }
    #main-content {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #content {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        padding: 32px 32px 24px 32px;
        max-width: 420px;
        width: 100%;
        margin: 32px 0;
    }
    #nd h4 {
        margin: 0 0 18px 0;
        font-size: 22px;
        color: #db4036;
        letter-spacing: 1px;
        text-align: center;
    }
    .tkmk {
        display: flex;
        flex-direction: column;
        gap: 18px;
        margin-bottom: 12px;
    }
    .input-1 {
        display: flex;
        align-items: center;
        gap: 10px;
        position: relative;
    }
    .input-1 label {
        font-size: 18px;
        color: #db4036;
        min-width: 20px;
        text-align: left;
    }
    .input-1 input[type="text"],
    .input-1 input[type="password"] {
        width: 100%;
        padding: 10px 12px;
        border: 1.5px solid #ccc;
        font-size: 16px;
        transition: border 0.2s;
        outline: none;
        background: #f9f9f9;
    }
    .input-1 input:focus {
        border-color: #db4036;
        background: #fff;
    }
    #togglePassword {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #888;
        user-select: none;
    }
    #nd3 {
        text-align: right;
        margin: 8px 0 18px 0;
    }
    #nd3 a {
        color: #db4036;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.2s;
    }
    #nd3 a:hover {
        color: #c0392b;
        text-decoration: underline;
    }
    .button-group {
        display: flex;
        flex-direction: column;
        gap: 14px;
        align-items: stretch;
        margin: 10px 0 18px 0;
    }
    .button-group input[type="submit"] {
        background: #db4036;
        color: #fff;
        border: none;
        font-size: 17px;
        font-weight: bold;
        padding: 12px 0;
        cursor: pointer;
    }
    .button-group input[type="submit"]:hover {
        background: #c0392b;
    }
    .button-group input[type="button"] {
        background: #fff;
        color: #607080;
        border: 1.5px solid #ccc;
        font-size: 16px;
        font-weight: bold;
        padding: 12px 0;
        cursor: pointer;
    }
    .button-group input[type="button"]:hover {
        border-color: #db4036;
        color: #db4036;
    }
    #nd6 {
        color: #b0b5bb;
        font-size: 13px;
        text-align: center;
        margin-top: 10px;
    }
    #nd6 a {
        color: #1976d2;
        text-decoration: none;
    }
    #nd6 a:hover {
        text-decoration: underline;
        color: #db4036;
    }
    @media (max-width: 600px) {
        #content {
            padding: 18px 6px 16px 6px;
            max-width: 98vw;
        }
        #header {
            flex-direction: column;
            gap: 8px;
            padding: 10px 6px;
        }
    }
    </style>
</head>
<body>
    <div id="warpper">
        <div id="header">
            <div id="header1"><h3>Mạnh Tiến</h3></div>
            <div id="header2">
                <label for="ngonngu"></label>
                <select name="ngonngu" id="ngonngu">
                     <option value="anh">Tiếng Anh</option>
                     <option value="trung">Tiếng Trung</option>
                     <option value="tv">Tiếng Việt</option>
                </select>
            </div>
        </div>
        <div id="main-content">
            <div id="content">
                <div id="nd">
                    <h4>Đăng Nhập </h4>
                </div>
                <form id="loginForm" method="POST" action="login.php">
                    <div class="tkmk">
                        <div class="input-1">
                            <label for="taikhoan">*</label>
                            <input type="text" id="taikhoan" name="taikhoan" placeholder="Tài khoản,Email hoặc Số Điện Thoại" required>
                        </div>
                        <div class="input-1">
                            <label for="matkhau">*</label>
                            <input type="password" id="matkhau" name="matkhau" placeholder="Mật khẩu" required>
                            <span id="togglePassword">
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><circle cx="12" cy="12" r="3"/><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/></svg>
                            </span>
                        </div>
                    </div>
                    <div id="nd3">
                        <a href="">Quên mật khẩu?</a>
                    </div>
                    <div class="button-group">
                        <input type="submit" class="btn-primary" name="btn-reg" value="Đăng Nhập Ngay">
                        <input type="button" value="Tạo tài khoản mới" onclick="window.location.href='register.html'">
                    </div>
                    <div id="nd6">
                        <p>
                            <a href="https://policies.google.com/terms?hl=vi" target="_blank">Điều Khoản Dịch Vụ</a>
                            và
                            <a href="https://policies.google.com/privacy?hl=vi" target="_blank">Chính Sách Quyền Riêng Tư</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    const pwd = document.getElementById('matkhau');
    const toggle = document.getElementById('togglePassword');
    const eyeIcon = document.getElementById('eyeIcon');
    let show = false;

    toggle.onclick = function () {
        show = !show;
        pwd.type = show ? 'text' : 'password';
        // Đổi icon khi ẩn/hiện
        eyeIcon.innerHTML = show
            ? `<path d="M17.94 17.94A10.94 10.94 0 0 1 12 19c-7 0-11-7-11-7a21.77 21.77 0 0 1 5.06-6.06M1 1l22 22"/><circle cx="12" cy="12" r="3"/>`
            : `<circle cx="12" cy="12" r="3"/><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/>`;
    };
    </script>
</body>
</html>