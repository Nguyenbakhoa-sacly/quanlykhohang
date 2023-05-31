<div class="content">
    <div class="content_tab-list">
        <?php 
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }else{
                $tam ='';
            }
            if($tam == 'dangkythanhvien'){
                include('../component/khachvanglai/main/dangkythanhvien.php');
            }
        ?>
    </div>
</div>