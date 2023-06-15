<?php include 'connect.php';

    $sql = "SELECT * FROM `hoadonnhaphang`";

    $sql1 = "SELECT * FROM `chitiethoadonnhaphang`";

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
        $data_merge[$i]['tinhTranng'] = $data1[$i]['tinhTranng'];
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
                    <th scope="row">'.$value['maDNH'].'</th>
                    <td class="content_table-list-item" >'.'<img src= "'.$path.$value['hinhAnh'].'" alt=""/>'.'</td>
                    <td>'.$value['maSP'].'</td>
                    <td>'.$value['ngayNhap'].'</td>
                    <td>'.$value['maNCC'].'</td>
                    
                    <td>'.$value['soLuong'].'</td>
                    <td>'.$value['tinhTranng'].'</td>
                    <td >
                        <input type="checkbox" name="maDNH[]" value="'.$value['maDNH'].'" class="product_choose_type_input">
                    </td>                 
                </tr>';
    }

    if(isset($_POST['OK'])){
        $xx = 1;
        $checkbox=$_POST['maDNH'];
        // echo "<pre>";
        // print_r($checkbox);
        foreach ($checkbox as $key => $value) {
            $sql = "UPDATE chitiethoadonnhaphang SET 
            `tinhTranng`='".'Đã xác nhận'."' 
            WHERE maDNH = ".$value;
            //Chạy câu SQL
            if ($result = $con->query($sql)) {
                echo "<h1>Xác nhận thành công</h1>";
            }else{
                echo "<h1>Xác nhận không thành công</h1>";
            }
        } 
    }

?>
                    <!--danh sach nhap hang  -->
                
                    <div class="content_tab-list-item  ">
                        
                            <div class="content-header">
                                <h4>Danh sách nhập hàng</h4>
                            </div>
                        <form method="POST">    
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th >DNH</th>
                                        <th >HÌNH ẢNH</th>
                                        <!-- <th scope="col">TÊN HÀNG</th> -->
                                        <th >MSP</th>
                                        <th >NGÀY NHẬP</th>
                                        <th >NCC</th>
                                        <th >SỐ LƯỢNG</th>
                                        <!-- <th scope="col">MÃ DANH MỤC</th>
                                        <th scope="col">ĐƠN GIÁ</th> -->
                                        <th >TRẠNG THÁI</th>
                                        <th>THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php echo $html;?>
                                        <!-- <tr>
                                            <td >1</td>
                                            <td class="content_table-list-item" >
                                                <img src= "https://flowershop.com.vn/wp-content/uploads/2020/09/y-nghia-hoa-cuc-hoa-mi-6-min.jpg" alt=""/>
                                            </td>
                                            <td>0003</td>
                                            <td>20/22/22222</td>
                                            <td>Nha cung cap</td>
                                            <td>03000300</td>
                                            <td>Chua duyet</td>
                                            <td >
                                                <input type="checkbox" name="maDNH[]" value="'.$value['maDNH'].'" class="product_choose_type_input">
                                            </td>                 
                                        </tr> -->
                                </tbody>
                            </table>
                            
                            <div class="d-f">
                                <button class="btn-add" name="OK">Xác nhận</button>
                            </div>
                        </form>     
                    </div>
                