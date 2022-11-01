<header id="header" class="header">
           <?php
           include ('pages/topbar.php');
           ?>
            <?php
             $sql_danhmuc = "SELECT *FROM danhmuc ORDER BY id_danhmuc DESC";
             $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
            ?>
<div class="menu" data-show="0">
                        <div class=" menu_parent  h-100 justify-content-center align-items-center">
                <ul class="menu_child">
      
                  <li><a href="index.php?quanly=trangchu">Trang Chủ</a>
                  <div id="iconn" class="menu-icon">
              <i class="fa-solid fa-bars"></i>
              </div>
                </li>  
                 <?php
                  while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
              ?>
                    <li><a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
               <?php
               }     
              ?>          
                 
                  <li><a href="index.php?quanly=about">Về Chúng Tôi</a></li>               
                 <li>
                    <div class="search">
                    <input type="search" placeholder="Search">
                    <a href="Trang Chủ.html"><i class="fa-solid fa-magnifying-glass"></i></a>
                    
                  </li>
                </ul>
              </div>
              </div>
          </header>
          