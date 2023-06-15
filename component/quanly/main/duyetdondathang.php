<?php include 'connect.php';

    $sql = "SELECT * FROM `hoadonxuathang`";

    $sql1 = "SELECT * FROM `chitiethoadonxuathang`";

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
                    <th scope="row">'.$value['maDXH'].'</td>
                    <td class="content_table-list-item" >'.'<img src= "'.$path.$value['hinhAnh'].'" alt=""/>'.'</td>
                    <td>'.$value['maSP'].'</td>
                    <td>'.$value['maDL'].'</td>
                    
                    <td>'.$value['soLuong'].'</td>
                    <td>'.$value['tinhTrang'].'</td>
                    <td >
                        <input type="checkbox" name="maDXH[]" value="'.$value['maDXH'].'" class="product_choose_type_input">
                    </td>                  
                </tr>';
    }

    if(isset($_POST['OK'])){
        $xx = 1;
        $checkbox=$_POST['maDXH'];
        // echo "<pre>";
        // print_r($checkbox);
        foreach ($checkbox as $key => $value) {
            $sql = "UPDATE chitiethoadonxuathang SET 
            `tinhTrang`='".'Đã duyệt'."' 
            WHERE maDXH = ".$value;
            //Chạy câu SQL
            if ($result = $con->query($sql)) {
                echo "<h1>Duyệt đơn hàng ".$value." thành công</h1>";
            }else{
                echo "<h1>Duyệt đơn hàng ".$value." không thành công</h1>";
            }
        } 
    }

?>
                    <!-- Duyệt đơn đặt hàng -->
                    <div class="content_tab-list-item ">
                        <div class="content-header">
                            <h4>Duyệt đơn đặt hàng</h4>
                        </div>
                <form method="POST">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">MDH</th>
                                    <th scope="col">HÌNH ẢNH</th>
                                    <!-- <th scope="col">TÊN HÀNG</th> -->
                                    <th scope="col">MÃ SẢN PHẨM</th>
                                    <!-- <th scope="col">NGÀY ĐẶT</th> -->
                                    <th scope="col">MÃ DL</th>
                                    <th scope="col">SỐ LƯỢNG</th>
                                    <!-- <th scope="col">ĐƠN GIÁ(VNG)</th> -->
                                    <th scope="col">TRẠNG THÁI</th>
                                    <th scope="col">THAO TÁC</th>
                                </tr>
                            </thead>
                            <tbody>
                              

                                <!-- <tr>
                                    <th scope="row">MDH001</th>
                                    <td class="content_table-list-item">
                                        <img src="https://bizweb.dktcdn.net/100/418/539/products/bot-giat-omo-he-bot-thong-minh-6kg-202106221712071149.jpg?v=1656038121737" alt="">
                                    </td>
                                    <td>Bột giặt Omo</td>
                                    <td>H001</td>
                                    <td>20/04/2023</td>
                                    <td>987654321</td>
                                    <td>3000</td>
                                    <td>3.000.000</td>

                                    <td>
                                        <button class="btn-confirma">Đã xác nhận</button>
                                    </td>
                                </tr> -->
                                
                                <?php echo $html;
                        
                                ?>
                                

                            </tbody>
                        </table>
                        <div class="d-f">
                                <button class="btn-add" name="OK">Xác nhận</button>
                        </div>
                </form>
                    </div>