<div class="content">
    <div class="content_tab-list">

    <?php

        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam ='';
        }
        if($tam == 'dathang'){
            include('../component/daily/main/dathang.php');

        }else if($tam == 'danhgiasanpham'){
            include('../component/daily/main/danhgiasanpham.php');

        }else if($tam == 'capnhatthongtin'){
            include('../component/daily/main/capnhatthongtin.php');

        }else{
            include('../component/daily/main/yeucautrahang.php');

        }
    ?>
    </div>
</div>