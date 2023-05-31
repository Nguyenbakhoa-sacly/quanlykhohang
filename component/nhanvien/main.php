<div class="content">
                <div class="content_tab-list">
                    <?php
                        if(isset($_GET['quanly'])){
                            $tam = $_GET['quanly'];
                        }else{
                            $tam ='';
                        }
                        if($tam == 'danhsachhanghoa'){
                            include('../component/nhanvien/main/dshanghoa.php');
                        }else if($tam == 'danhsachnhaphang'){
                            include('../component/nhanvien/main/dsnhaphang.php');
                        }else if($tam == 'danhsachxuathang'){
                            include('../component/nhanvien/main/dsxuathang.php');
                        }else if($tam == 'danhsachhangtrave'){
                            include('../component/nhanvien/main/dshangtrave.php');
                        }else if($tam == 'lichsuxuathang'){
                            include('../component/nhanvien/main/lichsuxuat.php');
                        }else if($tam == 'lichsunhaphang'){
                            include('../component/nhanvien/main/lichsunhap.php');
                        }else if($tam == 'hangtonkho'){
                            include('../component/nhanvien/main/dstonkho.php');
                        }else if($tam == 'xacnhantrahang'){
                            include('../component/nhanvien/main/xacnhantrahang.php');
                        }else{
                            include('../component/nhanvien/main/dexuattrahang.php');
                        }

                    ?>
                </div>
            </div>