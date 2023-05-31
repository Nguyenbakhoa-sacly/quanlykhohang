<div class="content">
    <div class="content_tab-list">
        <?php 
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }else{
                $tam ='';
            }
            if($tam == 'duyetnhaphang'){
                include('../component/nhacungcap/main/duyetnhaphang.php');
            }elseif($tam =='xacnhantrahang'){
                include('../component/nhacungcap/main/xacnhantrahang.php');
            }
        ?>
    </div>
</div>
