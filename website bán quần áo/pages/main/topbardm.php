<?php
            

             $sql_cate = "SELECT *FROM danhmuc WHERE danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
             $query_cate = mysqli_query($mysqli,$sql_cate);
             $row_title = mysqli_fetch_array($query_cate);
           
            ?>
<div class="img-wrap col-sm-12">
       <div class="img-tops ">
           <img src="ad_mysqli/modules/quanlydanhmucsp/upload/<?php echo $row_title['hinhanhdm'] ?> ">
       </div>
       <div class="text-img-tops col-sm-5">
           <h1 ><?php echo $row_title['tendanhmuc'] ?></h1>
       </div>
      </div>
      <div class="container">
        <div class="infor">
          <h3> Limerence / <?php echo $row_title['tendanhmuc'] ?></h3>
        </div>
       