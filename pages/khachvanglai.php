<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fonts/fontawesome-free-6.3.0-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://static.vecteezy.com/system/resources/previews/015/132/727/original/3d-rendering-warehouse-isolated-useful-for-ecommerce-shopping-and-business-online-design-png.png" type="image/png" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Trang khách vãng lai</title> 
</head>
<body>
    <div class="contain">
        <div class=" nav_right">
            <div class=" nav_right-header">
                <div class="img_logo">
                <img src="../images/logo-1.png" alt="">
                </div>
                <div class="search-header ">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 p" type="search" placeholder="Search..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class=" notification">
                    <i class="fa-sharp fa-solid fa-bell"></i>
                </div>
                <div class=" icon_user" >
                    <i class="fa-solid fa-user"></i>
                    <span class="info"> </span>
                </div>
            
            </div>
        </div>

        <div class="wrapper">
            <div class="menu">
                <div class="menu_left">
                    <div class="menu_left_nav">
                        <div class="">
                            <ul class="menu_left_nav_list">
                                <li  class=" menu_nav menu_left_nav_list-item action"> <i class="fa-sharp fa-solid fa-clipboard-list"></i>Đăng ký thành viên</li>
                                <li class="icon_logout">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="content">
                <div class="content_tab-list">
                    <!-- Đăng ký thành viên -->
                    <div class="content_tab-list-item action ">
                        <div class="">
                            <div class="form-group">
                                <form class="">
                                    <div class="form-group-list m-bottom">
                                        <div class="form-group-list-item m-right">
                                            <label for="validationDefault01" class="form-label">Họ và tê<nav></nav></label>
                                            <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập tên..." required>
                                        </div>
                                        <div class="form-group-list-item m-right ">
                                            <label for="validationDefault01" class="form-label">Số điện thoại</label>
                                            <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập số điện thoại..." required>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group-list m-bottom">
                                        <div class=" m-right width-select">
                                            <label for="validationDefault01" class="form-label">địa chỉ</label>
                                            <div class="d-flex">
                                                <select class="form-select distance"  aria-label="Default select example">
                                                    <option selected>--Chọn phường--</option>
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                </select>
                                                <select class="form-select distance" aria-label="Default select example">
                                                    <option selected>--Quận/ huyện--</option>
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                </select>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>--Thành phố--</option>
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group-list m-bottom">
                                        <div class="form-group-list-item m-right">
                                            <label for="validationDefault01" class="form-label">Quyền</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--Chọn quyền--</option>
                                                <option value="1">Đại lý</option>
                                                <option value="2">Nhà cung cấp</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group-list-item m-right ">
                                            <label for="validationDefault01" class="form-label">Địa chỉ cụ thể</label>
                                            <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập mã trạng thái..." required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="btn-Shared">
                        <button >Đăng ký</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

</body>
</html>