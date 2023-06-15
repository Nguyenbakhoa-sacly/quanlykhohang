<?php include 'connect.php';
    $sql = "SELECT * FROM `hoadontrahangxuat`";

    $sql1 = "SELECT * FROM `chitiethoadontrahangxuat`";

    //Chạy câu SQL
    $result = $con->query($sql);

    $result1 = $con->query($sql1);

    $data = [];
    $data1 = [];
    $data_merge = [];
    if ($result->num_rows > 0 && $result1->num_rows > 0) {
        //Gắn dữ liệu lấy được vào mảng $data
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        while ($row1 = $result1->fetch_assoc()) {
            $data1[] = $row1;
        }
    }

    $data_merge = $data;

    for ($i=0; $i < count($data); $i++) { 
        $data_merge[$i]['maSP'] = $data1[$i]['maSP'];
        $data_merge[$i]['soLuong'] = $data1[$i]['soLuong'];
        $data_merge[$i]['ghiChu'] = $data1[$i]['ghiChu'];
        $data_merge[$i]['tinhTrang'] = $data1[$i]['tinhTrang'];
    }

    // $data_merge = array_merge($data, $data1);
    // echo "<pre>";
    // print_r($data_merge);
    // echo "<pre>";
    // print_r($data);
    // echo "<pre>";
    // print_r($data1);

    $path = '../images/imgsp/';
    $html ="";
    foreach ($data_merge as $value) {
        $html .= '
                <tr>
                    <th scope="row">'.$value['maSP'].'</td>
                    <td>'.$value['maDL'].'</td>
                    <td class="content_table-list-item" >'.'<img src= "'.$path.$value['hinhAnh'].'" alt=""/>'.'</td>
                    <td>'.$value['soLuong'].'</td>
                    <td>'.$value['ghiChu'].'</td>

                    <td>'.$value['tinhTrang'].'</td>
                    <td >
                        <input type="checkbox" name="maTHX[]" value="'.$value['maTHX'].'" class="product_choose_type_input">
                    </td>               
                </tr>';
    }

    if(isset($_POST['OK'])){
        $xx = 1;
        $checkbox=$_POST['maTHX'];
        // echo "<pre>";
        // print_r($checkbox);
        foreach ($checkbox as $key => $value) {
            $sql = "UPDATE chitiethoadontrahangxuat SET 
            `tinhTrang`='".'Đã duyệt'."' 
            WHERE maTHX = ".$value;
            //Chạy câu SQL
            if ($result = $con->query($sql)) {
                echo "<h1>Duyệt đơn trả hàng ".$value." thành công</h1>";
            }else{
                echo "<h1>Duyệt đơn trả hàng ".$value." không thành công</h1>";
            }
        } 
    } 
?>  
                            <!-- Duyệt trả hàng -->
                            <div class="content_tab-list-item ">
                            <div class="content-header">
                                <h4>Duyệt trả hàng</h4>
                            </div>
                            <div class="">
                                
                                <div class="scrollbar" id="style-1" >
                            <form method="POST">
                                    <table class="table scroll_table">
                                        <thead>
                                            <tr>
                                                <th scope="col">MÃ SẢN PHẨM</th>                           
                                                <!-- <th scope="col">TÊN SẢN PHẨM</th>
                                                <th scope="col">MÃ YÊU CẦU</th> -->
                                                <th scope="col">MÃ ĐẠI LÝ</th>
                                                <th scope="col">HÌNH ẢNH</th>
                                                <th scope="col">SỐ LƯỢNG</th>
                                                <th scope="col">GHI CHÚ</th>
                                                <th scope="col">TRẠNG THÁI</th>
                                                <th scope="col">THAO TÁC</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php echo $html;?>
                                        </tbody>
                                    </table>
                                <div class="d-f">
                                    <button class="btn-add" name="OK">Xác nhận</button>
                                </div>
                            </form>
                                </div>

                            </div>
                            </div>