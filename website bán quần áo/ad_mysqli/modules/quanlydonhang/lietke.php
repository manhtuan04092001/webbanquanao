<p>Liệt kê đơn hàng</p>
<?php
$sql_lietke_dh = "SELECT * FROM cart,dangky WHERE cart.id_khachhang=dangky.id_dangky ORDER BY cart.id_cart DESC ";
$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

?>

<table class="table-lk" border="1" style="border-collapse:collapse; width :100%;">
  <tr>
    <th>id</th>
    <th>Mã Đơn Hàng</th>
    <th>Tên Khách Hàng</th>
    <th>Địa Chỉ </th>
    <th>Email</th>
    <th>Số Điện THoại</th>
    <th>Tình Trạng</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
    ?>
    <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
        <?php
        if($row['cart_status']==1){
          echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn Hàng Mới </a>';
        } else{
            echo 'Đã Duyệt';
        }
          
        ?>
    </td>
    <td>
        <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem Đơn Hàng</a> 
    </td>
  </tr>
  <?php
  }
  ?>
  

</table>       