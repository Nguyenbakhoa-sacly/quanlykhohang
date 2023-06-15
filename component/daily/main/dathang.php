<?php 
            include 'connect.php';
            //Viết câu SQL lấy tất cả dữ liệu trong bảng sanpham
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
            // var_dump($data);
            $path = '../images/imgsp/';
            $date_array = getdate();
            $formated_date = "" ;
            $formated_date .= $date_array['mday'] . "/";

            $formated_date .= $date_array['mon'] . "/";

            $formated_date .= $date_array['year'];
            $date = $formated_date;     
            // var_dump($date_array);
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

            $sql2 = "INSERT INTO hoadonxuathang
                    (`MaDL`, `hoTen`, `ngayXuat`, `hinhAnh`) 
                    VALUES (
                    '".'1'."', 
                    '".'Đại lý A'."',
                    '".$date."',  
                    '".$hinhAnh."');";

            $sql3 = "INSERT INTO chitiethoadonxuathang
                    (`MaSP`, `soLuong`, `tinhTrang`, `ghiChu`) 
                    VALUES (
                    '".$_POST['MaSP']."', 
                    '".$_POST['soluong']."',
                    '".'Chưa duyệt'."',  
                    '".$_POST['ghichu']."');";



            //Chạy câu SQL
            if ($result = $con->query($sql2) && $result2 = $con->query($sql3)) {
                echo "<h1>Gửi yêu cầu thành công</h1>";
            }else{
                echo "<h1>Gửi yêu cầu không thành công</h1>";
            }
        }  
    }
?>
                    <!-- Đặt hàng -->
                    <div class="content_tab-list-item  ">
                        <div class="content-header">
                            <h4>Đặt hàng</h4>
                        </div>
                        <div class="content_tab-list-input ">

                        <form method="POST">
                            <div class="form-group">
                                <div class="form-group-item" >
                                    <div class="inputGroup">
                                        <input type="text" name="MaSP" required="" autocomplete="off">
                                        <label for="name">Mã sản phẩm</label>
                                    </div>
                                    <div class="inputGroup">
                                        <input type="text" required="" name="soluong" autocomplete="off">
                                        <label for="name" >Số lượng</label>
                                    </div>
                                    <!-- <div class="inputGroup">
                                        <input type="text" required="" autocomplete="off">
                                        <label for="name">Tên sản phẩm</label>
                                    </div> -->
                                </div>
                                <!-- <div  class="form-group-item">
                                    <div class="inputGroup">
                                        <input type="text" required="" autocomplete="off">
                                        <label for="name">Mã yêu cầu</label>
                                    </div>
                                    <div class="inputGroup">
                                        <input type="text" required="" autocomplete="off">
                                        <label for="name">Mã trạng thái</label>
                                    </div>
                                </div> -->
                                <div  class="form-group-item">
                                    
                                    <div class="inputGroup" style="width:581px;">
                                        <input type="text" name="ghichu" required="" autocomplete="off">
                                        <label for="name">Ghi chú</label>
                                    </div>
                                </div>
                
                            </div>
                            <div>
                                <!-- <div class="input_img">
                                    <div class="img-product">
                                        <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                    </div>
                                    
                                </div> -->
                                    <button type="submit" name="OK" class="btn-add " > Đặt hàng </button>
                            </div>
                        </form>
                        </div>
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