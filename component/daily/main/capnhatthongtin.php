 <!-- Cập nhật thôn tin -->
 <div class="content_tab-list-item ">
    <?php include 'connect.php';
    //Viết câu SQL lấy tất cả dữ liệu trong bảng daily
        $sql = "SELECT `maDL`,`hoTen`,`soDT`,`diaChi`,`email` FROM `daily` WHERE `maTK`= 1 ";
        $id = 1;
        //Chạy câu SQL
        $result = $con->query($sql);

        //thu var_dump($result)
        //if co num_rows > 0 la co data muon lay, num_rows =0


        $data = [];
        if ($result->num_rows > 0) {

            //Gắn dữ liệu lấy được vào mảng $data
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        // echo "<pre>";
        // print_r($data);
        // var_dump($data);
        $_email = $data[0]['email'];
        $_sdt = $data[0]['soDT'];
        $_ten = $data[0]['hoTen'];
        $_diachi = $data[0]['diaChi'];

        $_msg;
        $err_name = "";
        $err_age = "";
        $err_citi ="";
        $err_posi="";
        $err_sala="";

    if(isset($_POST['OK'])){
        $xx = 1;
        if(empty($_POST['Email'])){
            $err_name =  "Chưa nhập email";
            $xx = 2;
        }
        if(empty($_POST['SDT'])){
            $err_age =  "Chưa nhập số điện thoại";
            $xx = 2;
        }
        if(empty($_POST['Hoten'])){
            $err_citi =  "Chưa nhập tên";
            $xx = 2;
        }
        if(empty($_POST['diachi'])){
            $err_posi =  "Chưa nhập địa chỉ";
            $xx = 2;
        }

        if($xx==1){
            //Viết câu SQL lấy tất cả dữ liệu trong bảng players
            $sql = "UPDATE daily  SET 
            `hoTen`='".$_POST['Hoten']."',
            `soDT`='".$_POST['SDT']."',
            `diaChi`='".$_POST['diachi']."',
            `email`='".$_POST['Email']."' 
            WHERE maTK = ".$id;
                  
            //Chạy câu SQL
            if ($result = $con->query($sql)) {
                echo "<h1>Chỉnh sửa thông tin thành công</h1>";
            }else{
                echo "<h1>Chỉnh sửa không thành công</h1>";
            }
        }  
    }       

    ?>
    <div class="content-header m-bottom">
        <h4>Cập nhật thông tin</h4>
    </div>

    <div class="content-card">
        <div class="content-cart-left">
            <img class="content-cart-left-img" src="https://img4.thuthuatphanmem.vn/uploads/2020/05/14/hinh-anh-hoa-hong-leo-dep_021528729.jpg" alt="">
            <p class="content-cart-left-info"><?php echo $_ten?></p>

            <div class="profile">
                <div class="profile-address">
                    <i class="fa-solid fa-address-card"></i>
                </div>
                <div class="profile_content">
                    <p class="profile_content-header">Quản lý thông tin</p>
                    <p class="profile_content-description">Quản lý thông tin đăng nhập và thông tin tài khoản</p>
                </div>
            </div>
        </div>
        <form method="POST" class="content-cart-right">
        <div class="content-cart-right">
            <p class="content-cart-right-hader">Thông tin tài khoản</p>
            <div class="content-cart-right-Information">
                <p class="content-cart-right-Information-header">Thông tin đăng nhập </p>
            </div>
                <div class="content-cart-right-Information-item">
                <label >Số điền thoại</label>
                <input type="text" name="SDT" value="<?php echo $_sdt?>" placeholder="0929084423">
            </div>
            <div class="content-cart-right-Information-item">
                <label >Email</label>
                <input type="text" name="Email" value="<?php echo $_email?>" placeholder="Abc@123456">
            </div>
            <div class="content-cart-right-Information">
                <p class="content-cart-right-Information-header">Thông tin cá nhân </p>
            </div>
            <div class="content-cart-right-Information-item">
                <label >Tên đại lý</label>
                <input type="text" name="Hoten" value="<?php echo $_ten?>" placeholder="Nguyễn Bá Khoa">
            </div>
            <div class="content-cart-right-Information-item">
                <label >Địa chỉ</label>
                <input type="text" name="diachi" value="<?php echo $_diachi?>" placeholder="02 Thanh sơn, Thanh bình">
            </div>

            <div class="content-cart-right-Information-item">
                <button type="submit" name="OK" id="button">Cập Nhật</button>
            </div>     
            </form>
        </div>
    </div>
</div>