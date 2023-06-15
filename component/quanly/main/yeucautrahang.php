<?php include 'connect.php';
    $sql = "SELECT * FROM `sanpham` ORDER BY `maSP`";

    //Chạy câu SQL
    $result = $con->query($sql);

    $data = [];
    if ($result->num_rows > 0) {

        //Gắn dữ liệu lấy được vào mảng $data
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    $path = '../images/imgsp/';

    $html = '';
            foreach ($data as $value) {
                $html .= '
                <tr>
                    <td>'.$value['maSP'].'</td>
                    <td>'.$value['tenSP'].'</td>
                    <td class="content_table-list-item" >'.'<img src= "'.$path.$value['hinhAnh'].'" alt=""/>'.'</td>
                    <td>'.$value['soLuongCon'].'</td>
                    <td>'.$value['moTa'].'</td>                    
                </tr>';
    }

    $err_name = "";
    $err_age = "";

    if(isset($_POST['OK'])){
        $xx = 1;

        if(empty($_POST['MaSP'])){
            $err_name =  "Chưa nhập mã sản phẩm";
            $xx = 2;
        }

        if(empty($_POST['soluong'])){
            $err_age =  "Chưa nhập số lượng";
            $xx = 2;
        }

        if($xx==1){
            $hinhAnh = "";
            foreach ($data as $value) {
                if($_POST['MaSP'] == $value['maSP']){
                    $hinhAnh = $value['hinhAnh'];
                }
            }            

            $sql2 = "INSERT INTO chitietyeucau 
                    (`MaSP`, `soLuong`, `tinhTrang`, `ghiChu`) 
                    VALUES (
                    '".$_POST['MaSP']."', 
                    '".$_POST['soluong']."',
                    '".'Chưa duyệt'."',  
                    '".$_POST['ghichu']."');";
            
            $sql3 = "INSERT INTO yeucau 
                    (`MaTT`, `MaNV`, `ngayYC`) 
                    VALUES (
                    '".'1'."', 
                    '".'1'."', 
                    '".''."');";


            //Chạy câu SQL
            if ($result = $con->query($sql2) && $result2 = $con->query($sql3)) {
                echo "<h1>Gửi yêu cầu thành công</h1>";
            }else{
                echo "<h1>Gửi yêu cầu không thành công</h1>";
            }
        }  
    }
    
?>
                    <!--  Yêu cầu trả hàng -->
                    <div class="content_tab-list-item ">
                    <div class="content-header">
                            <h4>Yêu cầu trả hàng</h4>
                        </div>
                        
                <form method="POST">
                    <div class="form-group">
                        <form method="POST">
                    <div class="form-group-item" >
                        <div class="inputGroup">
                            <input type="text" name="MaSP" required="" autocomplete="off">
                            <label for="name">Mã sản phẩm</label>
                        </div>
                        <div class="inputGroup">
                            <input type="text" name="soluong" required="" autocomplete="off">
                            <label for="name">Số lượng</label>
                        </div>
                        
                    </div>
                    <div  class="form-group-item">
                        <div class="inputGroup">
                            <input type="text" name="ghichu" required="" autocomplete="off">
                            <label for="name">Ghi chú</label>
                        </div>
                    </div>
                        <button type="submit" name="OK" class="btn-add m-left" > Gửi </button>
                </form>
                </div>
                <div>
                    <!-- <div class="input_img">
                        <div class="img-product">
                            <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                        </div>
                        
                    </div> -->
                        
                </div>
            
                            </div>


                            <!-- <div class="scrollbar" id="style-1" >

                                <table class="table scroll_table">
                                
                                    <thead>
                                        <tr>
                                            <th scope="col">MÃ SẢN PHẨM</th>                           
                                            <th scope="col">TÊN SẢN PHẨM</th>
                                            <th scope="col">MÃ YÊU CẦU</th>
                                            <th scope="col">MÃ TRẠNG THÁI</th>
                                            <th scope="col">SỐ LƯỢNG</th>
                                            <th scope="col">GI CHÚ</th>
                                            <th scope="col">TRẠNG THÁI</th>
                                            <th scope="col">THAO TÁC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">H001</th>
                                            <td>Bột giặt Omo</td>
                                            <td>YC001</td>
                                            <td>TTC01</td>
                                            <td>300</td>
                                            <td>Hàng giao sai mẫu mã</td>
                                            <td>Chờ duyệt</td>
                                            <td>
                                                <div class="btn-cancel">
                                                    <button >Hủy</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">H001</th>
                                            <td>Bột giặt Omo</td>
                                            <td>YC001</td>
                                            <td>TTC01</td>
                                            <td>300</td>
                                            <td>Hàng giao sai mẫu mã</td>
                                            <td>Chờ duyệt</td>
                                            <td>
                                                <div class="btn-cancel">
                                                    <button >Hủy</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">H001</th>
                                            <td>Bột giặt Omo</td>
                                            <td>YC001</td>
                                            <td>TTC01</td>
                                            <td>300</td>
                                            <td>Hàng giao sai mẫu mã</td>
                                            <td>Chờ duyệt</td>
                                            <td>
                                                <div class="btn-cancel">
                                                    <button >Hủy</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">H001</th>
                                            <td>Bột giặt Omo</td>
                                            <td>YC001</td>
                                            <td>TTC01</td>
                                            <td>300</td>
                                            <td>Hàng giao sai mẫu mã</td>
                                            <td>Chờ duyệt</td>
                                            <td>
                                                <div class="btn-cancel">
                                                    <button >Hủy</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">H001</th>
                                            <td>Bột giặt Omo</td>
                                            <td>YC001</td>
                                            <td>TTC01</td>
                                            <td>300</td>
                                            <td>Hàng giao sai mẫu mã</td>
                                            <td>Chờ duyệt</td>
                                            <td>
                                                <div class="btn-cancel">
                                                    <button >Hủy</button>
                                                </div>
                                            </td>
                                        </tr>
        
                                    </tbody>
                                </table>
                            </div> -->
                            <div class="scrollbar" id="style-1">
                            <table class="table scroll_table">
                                <thead>
                                    <tr>
                                        <th scope="col">MÃ SẢN PHẨM</th>
                                        <th scope="col">TÊN SẢN PHẨM</th>
                                        <th scope="col">HÌNH ẢNH</th>
                                        <th scope="col">SỐ LƯỢNG TỒN KHO</th>
                                        <th scope="col">MÔ TÁ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php echo $html?>
                                </tbody>
                            </table>
                        </div>
    
                        </div>
                    </div>