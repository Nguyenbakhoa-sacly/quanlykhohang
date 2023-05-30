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
    <title>Trang đại lý</title> 
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
                    <span class="info">Đại lý A</span>
                </div>
            
            </div>
        </div>

        <div class="wrapper">
            <div class="menu">
                <div class="menu_left">
                    <div class="menu_left_nav">
                        <div class="">
                            <ul class="menu_left_nav_list">
                                <li  class=" menu_nav menu_left_nav_list-item action"> <i class="fa-sharp fa-solid fa-clipboard-list"></i>Đặt hàng</li>
                                <li class=" menu_nav menu_left_nav_list-item"> <i class="fa-sharp fa-solid fa-clipboard-list"></i>Đánh giá sản phẩm</li>
                                <li class=" menu_nav menu_left_nav_list-item"> <i class="fa-sharp fa-solid fa-clipboard-list"></i> Cập nhật thông tin</li>
                                <li class=" menu_nav menu_left_nav_list-item"> <i class="fa-sharp fa-solid fa-clipboard-list"></i> Yêu cầu trả hàng</li>
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
                    <!-- Đặt hàng -->
                    <div class="content_tab-list-item action ">
                        <div class="content_tab-list-input ">

                            <div class="form-group">
                                <div>
                                    <form class="">
                                        <div class="form-group-list m-bottom">
                                            <div class="form-group-list-item m-right">
                                                <label for="validationDefault01" class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập tên..." required>
                                            </div>
                                            <div class="form-group-list-item m-right ">
                                                <label for="validationDefault01" class="form-label">Mã sản phảm</label>
                                                <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập mã sản phẩm..." required>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-group-list m-bottom">
                                            <div class="form-group-list-item m-right">
                                                <label for="validationDefault01" class="form-label">Số lượng</label>
                                                <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập số lượng..." required>
                                            </div>
                                            <div class="form-group-list-item m-right ">
                                                <label for="validationDefault01" class="form-label">Ghi chú</label>
                                                <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập ghi chú..." required>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="">
                                    <label for="validationDefault01" class="form-label">Hình ảnh</label>
                                    <div class="img-product">
                                        <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="btn-confirma">
                                <button >Đặt hàng</button>
                            </div>
                        </div>
                        <div class="scrollbar" id="style-1">
                            <table class="table scroll_table">
                                <thead>
                                    <tr>
                                        <th scope="col">MÃ SẢN PHẨM</th>
                                        <th scope="col">TÊN SẢN PHẨM</th>
                                        <th scope="col">HÌNH ẢNH</th>
                                        <th scope="col">SỐ LƯỢNG</th>
                                        <th scope="col">GHI CHÚ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>H001</td>
                                        <td>Bột giặt Omo</td>
                                        <td class="content_table-list-item">
                                            <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                        </td>
                                        <td>3000</td>
                                        <td>Hàng loại 1</td>
                                    </tr>
                                    <tr>
                                        <td>H001</td>
                                        <td>Bột giặt Omo</td>
                                        <td class="content_table-list-item">
                                            <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                        </td>
                                        <td>3000</td>
                                        <td>Hàng loại 1</td>
                                    </tr>
                                    <tr>
                                        <td>H001</td>
                                        <td>Bột giặt Omo</td>
                                        <td class="content_table-list-item">
                                            <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                        </td>
                                        <td>3000</td>
                                        <td>Hàng loại 1</td>
                                    </tr>
                                    <tr>
                                        <td>H001</td>
                                        <td>Bột giặt Omo</td>
                                        <td class="content_table-list-item">
                                            <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                        </td>
                                        <td>3000</td>
                                        <td>Hàng loại 1</td>
                                    </tr>
                                    <tr>
                                        <td>H001</td>
                                        <td>Bột giặt Omo</td>
                                        <td class="content_table-list-item">
                                            <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                        </td>
                                        <td>3000</td>
                                        <td>Hàng loại 1</td>
                                    </tr>
                                    <tr>
                                        <td>H001</td>
                                        <td>Bột giặt Omo</td>
                                        <td class="content_table-list-item">
                                            <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                        </td>
                                        <td>3000</td>
                                        <td>Hàng loại 1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Đánh giá sản phẩm-->
                    <div class="content_tab-list-item ">
                        <div class="content-header">
                            <h4>Đánh giá sản phẩm</h4>
                        </div>
                        <div class="conten-product-list-item">
                            <div class="d-flex content_product">
                                <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                <div class="content-product-info">
                                    <h4>Nước Giặt, Xả Downy Khử Mùi Ẩm Mốc </h4>
                                    <p>NƯỚC GIẶT, TÚI 3,1L </p>
                                    <div class="icon-evaluate" >
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="btn-confirma  btn-evaluate">
                                    <button>Gửi</button>
                                </div>
                            </div>
                            <div class="input-evaluate">
                                <input type="text" placeholder="Nhập dánh giá...">
                            </div>
                        </div>
                        <div class="conten-product-list-item">
                            <div class="d-flex content_product">
                                <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                <div class="content-product-info">
                                    <h4>Nước Giặt, Xả Downy Khử Mùi Ẩm Mốc </h4>
                                    <p>NƯỚC GIẶT, TÚI 3,1L </p>
                                    <div class="icon-evaluate" >
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="btn-confirma  btn-evaluate">
                                    <button>Gửi</button>
                                </div>
                            </div>
                            <div class="input-evaluate">
                                <input type="text" placeholder="Nhập dánh giá...">
                            </div>
                        </div>
                        
                    </div>
                    <!-- Cập nhật thôn tin -->
                    <div class="content_tab-list-item ">
                        <div class="content-header m-bottom">
                            <h4>Cập nhật thông tin tài khoản</h4>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <div class="icon_img">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="">
                                    <input type="file" accept=".jpg, .png" multiple />
                                </div>
                                <form class="">
                                    <div class="form-group-list m-bottom">
                                        <div class="form-group-list-item m-right">
                                            <label for="validationDefault01" class="form-label">Họ và Tên</label>
                                            <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Họ và Tên" required>
                                        </div>
                                        <div class="form-group-list-item m-right ">
                                            <label for="validationDefault01" class="form-label">Số điện thoại</label>
                                            <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Số điện thoại" required>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group-list m-bottom">
                                        <div class="form-group-list-item m-right">
                                            <label for="validationDefault01" class="form-label">Email</label>
                                            <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Email" required>
                                        </div>
                                        <div class="form-group-list-item m-right ">
                                            <label for="validationDefault01" class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Địa chỉ" required>
                                        </div>
                                    </div>
                                    <div class="form-group-list m-bottom">
                                        <div class="form-group-list-item m-right">
                                            <label for="validationDefault01" class="form-label">CCCD/CMND</label>
                                            <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="CCCD/CMND" required>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                            <div class="btn-Shared">
                                <button >Cập nhật</button>
                            </div>
                        </div>
                    </div>
                    <!-- Yêu cầu trả hàng -->
                    <div class="content_tab-list-item ">
                        <div class="">
                            <div class="form-group">
                                <div>
                                    <form class="">
                                        <div class="form-group-list m-bottom">
                                            <div class="form-group-list-item m-right">
                                                <label for="validationDefault01" class="form-label">Tên sản phẩm</label>
                                                <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập tên..." required>
                                            </div>
                                            <div class="form-group-list-item m-right ">
                                                <label for="validationDefault01" class="form-label">Tên đại lý</label>
                                                <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập tên đại lý..." required>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group-list m-bottom">
                                            <div class="form-group-list-item m-right">
                                                <label for="validationDefault01" class="form-label">Số lượng</label>
                                                <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập số lượng..." required>
                                            </div>
                                            <div class="form-group-list-item m-right">
                                                <label for="validationDefault01" class="form-label">Đơn giá</label>
                                                <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập đơn giá..." required>
                                            </div>
                                        </div>
                                        <div class="form-group-list m-bottom">
                                            <div class="form-group-list-item m-right">
                                                <label for="validationDefault01" class="form-label">lý do</label>
                                                <input type="text" class="form-control form-input-width " id="validationDefault01" placeholder="Nhập đơn giá..." required>
                                            </div>
                                            
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="">
                                    <label for="validationDefault01" class="form-label">Hình ảnh</label>
                                    <div class="img-product">
                                        <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                                <div class="btn-Shared" >
                                    <button>Trả hàng</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>