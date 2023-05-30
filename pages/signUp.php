<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="shortcut icon" href="https://static.vecteezy.com/system/resources/previews/015/132/727/original/3d-rendering-warehouse-isolated-useful-for-ecommerce-shopping-and-business-online-design-png.png" type="image/png" >
    <title>Quản lý kho hàng</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

.contain{
    background: url('../images/imgkhohang.jpg');
    background-size: cover;
    background-position-y: -80px;
    font-size: 16px;
}
#wrapper{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#form-signin{
    max-width: 450px;
    background: rgba(56, 54, 54, 0.6);
    flex-grow: 1;
    padding: 30px 30px 40px;
    /* box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8); */
}
.form-heading{
    font-size: 25px;
    color: #ffffff;
    text-align: center;
    margin-bottom: 30px;
}
.form-group{
    border-bottom: 1px solid #ffffff;
    margin-top: 15px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color: #ffffff;
    font-size: 14px;
    padding-top: 5px;
    padding-right: 10px;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color: #ffffff;
    flex-grow: 1;
}

.form-input::placeholder{
    color: #ffffff;
}

#eye i{
    padding-right: 0;
    cursor: pointer;
}

.form_link a{
    cursor: pointer;
    font-size: 12px;
    color: #ffffff;
    text-decoration: none; 
    width: 140px;
}
.form_link a:hover{
    color: var(--bk-green);
}

.form-submit{
    background: transparent;
    border: 1px solid #ffffff;
    color: #ffffff;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 30px;
    cursor: pointer;
}
.form-submit:hover{
    border: 1px solid var(--bk-green);
}

    </style>
</head>
<body>
    <div class="contain">
        <div id="wrapper">
            <form onsubmit="signup()" action="" id="form-signin">
                <h1 class="form-heading">Đăng ký</h1>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input id="username" type="text" class="form-input" placeholder="Tên đăng ký">
                </div>
                <div class="form-group">
                    <i class="far fa-envelope"></i>
                    <input id="email" type="text" class="form-input" placeholder="Email">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input id="password" type="password" class="form-input" placeholder="Mật khẩu">
                    <div id="eye">
                        <i class="far fa-eye"></i>
                    </div>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input id="password" type="password" class="form-input" placeholder="Nhập lại mật khẩu">
                    <div id="eye">
                        <i class="far fa-eye"></i>
                    </div>
                </div>   
                    <p class="form_link"><a href="signIn.php">Bạn muốn đăng nhập?</a></p>
                <input type="submit" value="Đăng ký" class="form-submit">
            </form>
        </div>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>


</html>