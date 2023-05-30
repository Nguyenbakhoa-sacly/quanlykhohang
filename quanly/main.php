<div class="content">
                <div class="content_tab-list">

                <?php 

                    if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }else{
                        $tam ='';
                    }
                    if($tam == 'guiyeucaunhaphang'){
                        include('../quanly/main/gyeucaunhaphang.php');

                    }else if($tam == 'yeucaunhapthemhang'){
                        include('../quanly/main/gycnhapthemhang.php');

                    }else if($tam == 'dexuattrahang'){
                        include('../quanly/main/dexuattrahang.php');

                    }else if($tam == 'yeucautrahang'){
                        include('../quanly/main/yeucautrahang.php');

                    }else if($tam == 'duyetdondathang'){
                        include('../quanly/main/duyetdondathang.php');

                    }else if($tam == 'danhsachtrahang'){
                        include('../quanly/main/danhsachtrahang.php');

                    }else {
                        include('../quanly/main/duyettrahang.php');
                    }
                ?>

                    
                  
                
                </div>
            </div>