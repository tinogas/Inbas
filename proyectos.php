    	
<?php include'helpers/menu.php'; ?>

        <style>
h2{
  text-align:center;
  padding: 20px;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}


.box:nth-of-type(odd) {
background-color:#000;
}
    
.box:nth-of-type(even) {
background-color:#f58820;
}

.box {

min-height: 400px;
max-height: 400px;
}






.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}


</style>


        <!-- CONTENT START -->
        <div class="page-content">
  

              <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/proyectos.jpg);">
            	<div class="overlay-main bg-black" style="opacity:0.5;"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                                                                                <div class="section-head text-center">
                        <h1  class="text-uppercase text-white f animate" data-animate="fadeInDown" data-duration="2.0s" data-delay="0.5s" data-offset="100">PROYECTOS</h1>
                        <div style="display:none;" class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span id="c" class="separator-right bg-primary"></span>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>




           <!-- SECTION CONTENT -->
            <div class="section-full p-t80">
                <div class="container-fluid">

                    
                    
                    
                    
                    
                    
                     <!-- SECTION CONTENT -->
            <div class="section-full">
                <div class="container">

                    
                    
                                    <div class="section-head text-center">
                        <h1 class="text-uppercase">NUESTROS CLIENTES</h1>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div> 
                    <!-- 5 ITEM CAROUSEL -->
                	<div class="section-content">
                        <div class="owl-carousel client-logo-carousel owl-btn-center-lr">
                        
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div  class="client-logo wt-img-effect client-logo-media on-color ">
                                    <a href="javascript:void(0);"><img src="images/1.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div  class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/3.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/4.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div  class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/5.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div  class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/6.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div  class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/7.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                                                        <div class="item">
                                <div class="ow-client-logo">
                                    <div  class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/8.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                                                        <div class="item">
                                <div class="ow-client-logo">
                                    <div  class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/9.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                                                        <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/10.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                                                        <div class="item">
                                <div class="ow-client-logo">
                                    <div  class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/11.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
          
                            
                                                        <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/13.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                                                                <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect client-logo-media on-color ">
                                        <a href="javascript:void(0);"><img  src="images/nogales.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="wt-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>                            
                </div>
            </div>
            <!-- SECTION CONTENT END -->          
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                                    <div class="section-head text-center">
                        <h1 class="text-uppercase">NUESTROS PROYECTOS</h1>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div> 

</div>
</div>



 <div class="container">
        <div class="row">
 


        <br/>


  <?php
$servername = "localhost";
$username = "inbasmx_bowar";
$password = "Sanchez2020+";
$dbname = "inbasmx_martaisa_inbas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM proyectos ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
    
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                <div style="padding-bottom: 30px;" class="">
                                    <div style="min-height: 300px; background-color:#fff;" class="wt-thum-bx wt-img-effect zoom">
                                        <img src="<?php if($row['imagen'] != ''){echo $row['imagen']; }else{echo 'images/ind.jpg';}?>" alt="">
                                    </div>
                                    <div style="min-height: 180px;    padding-top: 1px;" class="wt-info">
                                        <p style="line-height: 1.25;font-weight: 700;" class=""><a href="javascript:void(0);"><?php echo utf8_encode(html_entity_decode($row['titulo']))?></a></p>
                                        <a style="position: absolute; bottom: 40px; left: 30px;" href="proyecto?id=<?php echo $row['id']?>" class="site-button ">Ver proyecto <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
    
    
    
    <?php
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>





        </div>
    </div>





            
 
        </div>
        <!-- CONTENT END -->


<?php
include'helpers/footer.php';
?>
