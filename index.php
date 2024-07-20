<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
<?!= HtmlService.createHtmlOutputFromFile('css').getContent() ?>
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">ลงชื่อเข้าใช้</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="กรอกอีเมล" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="กรอกรหัสผ่าน" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">จดจำการเข้าใช้</label>
                        </div>
                        
                        <a href="#" class="text">ลืมรหัสผ่าน?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="ลงชื่อเข้าใช้">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">ยังไม่ได้เป็นสมาชิก?
                        <a href="#" class="text signup-link">ลงทะเบียน</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">ลงทะเบียน</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="กรอกชื่อ" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="กรอกอีเมล" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="กำหนดรหัสผ่าน" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="ยืนยันรหัสผ่าน" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">ฉันยอมรับเงื่อนไขในการเป็นสมาชิก</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="ลงทะเบียน">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">ฉันเป็นสมาชิกแล้ว?
                        <a href="#" class="text login-link">ลงชื่อเข้าใช้</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <?!= HtmlService.createHtmlOutputFromFile('js').getContent() ?>
</body>
</html>