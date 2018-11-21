<?php 
include("header.php");
include("config.php");
$con = new Connect('cafepage');

$sql = "SELECT * FROM `pagecontent` WHERE 1";
 $row= $con->select($sql);
     if($row!=0){
         for($i = 0 ;$i<sizeof($row);$i++){
            echo ' <aside class="first-block mt-90">
            <div class="container">
                <div class="row text-center">
                    <h2 id="block-heading">'.$row[$i]['title'].'</h2>
                    <p id="para">'.$row[$i]['content'].'</p>
                   
                </div>
            </div>
        </aside>';
        }
    }

 ?>


   
        <!--Slider-->
        <div id="Carousel1" class="carousel slide mt-30 mb-60" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/Home/indexbanner.png" class="img-responsive" style="width: 100%" alt="banner1" height="700">
                    <div class="carousel-caption">
                        <h1>Hương vị đậm đà</h1>
                        <h2>Chất lượng tuyệt hảo</h2>
                    </div>      
                </div>

            </div>
        </div>

          
        <!--Main part-->
 <?php include("footer.php"); ?>