<div class="content">
                <div class="content_tab-list">
                    <?php
                        if(isset($_GET['quanly'])){
                            $tam = $_GET['quanly'];
                        }else{
                            $tam ='';
                        }
                        if($tam == 'danhsachhanghoa'){
                            include('../nhanvien/main/dshanghoa.php');
                        }else if($tam == 'danhsachnhaphang'){
                            include('../nhanvien/main/dsnhaphang.php');
                        }else if($tam == 'danhsachxuathang'){
                            include('../nhanvien/main/dsxuathang.php');
                        }else if($tam == 'danhsachhangtrave'){
                            include('../nhanvien/main/dshangtrave.php');
                        }else if($tam == 'lichsuxuathang'){
                            include('../nhanvien/main/lichsuxuat.php');
                        }else if($tam == 'lichsunhaphang'){
                            include('../nhanvien/main/lichsunhap.php');
                        }else if($tam == 'hangtonkho'){
                            include('../nhanvien/main/dstonkho.php');
                        }else if($tam == 'xacnhantrahang'){
                            include('../nhanvien/main/xacnhantrahang.php');
                        }else{
                            include('../nhanvien/main/dexuattrahang.php');
                        }

                    ?>
                </div>
            </div>