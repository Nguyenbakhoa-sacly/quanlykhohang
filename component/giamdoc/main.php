<div class="content">
                <div class="content_tab-list">

                    <?php
                        if(isset($_GET['quanly'])){
                            $tam = $_GET['quanly'];
                        }else{
                            $tam ='';
                        }
                        if($tam == 'duyetdonhang'){
                            include('../component/giamdoc/main/duyetdonhang.php');

                        }else if($tam == 'danhsachthanhvien'){
                            include('../component/giamdoc/main/danhsachthanhvien.php');

                        }
                    ?>
                </div>
            </div>