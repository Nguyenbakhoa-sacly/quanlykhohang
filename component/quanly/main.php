<div class="content">
                <div class="content_tab-list">

                <?php 

                    if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }else{
                        $tam ='';
                    }
                    if($tam == 'guiyeucaunhaphang'){
                        include('../component/quanly/main/gyeucaunhaphang.php');

                    }else if($tam == 'yeucaunhapthemhang'){
                        include('../component/quanly/main/gycnhapthemhang.php');

                    }else if($tam == 'dexuattrahang'){
                        include('../component/quanly/main/dexuattrahang.php');

                    }else if($tam == 'yeucautrahang'){
                        include('../component/quanly/main/yeucautrahang.php');

                    }else if($tam == 'duyetdondathang'){
                        include('../component/quanly/main/duyetdondathang.php');

                    }else if($tam == 'danhsachtrahang'){
                        include('../component/quanly/main/danhsachtrahang.php');

                    }else {
                        include('../component/quanly/main/duyettrahang.php');
                    }
                ?>

                </div>
            </div>