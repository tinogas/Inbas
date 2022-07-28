    	
<?php include'helpers/menu.php';



if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    
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

$sql = "SELECT * FROM proyectos WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


$titulo=$row['titulo'];
$contrato=$row['contrato'];
$obra=$row['obra'];
$descripcion=utf8_encode($row['descripcion']);
$inicio=$row['fecha_inicio'];
$fin=$row['fecha_terminacion'];
$cliente=$row['cliente'];
$responsable=$row['responsable'];
$plazo_ejecucion=$row['plazo_ejecucion'];
$imagen=$row['imagen'];
$video=$row['video'];











    }
} else {
    echo "0 results";
}


    
    
    ?>
    
    
    
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
  

           <!-- SECTION CONTENT -->
            <div class="section-full p-t80">
<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4"><?php echo utf8_encode($titulo)?>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
        
        
        
  
	
      <img class="img-fluid" src="<?php echo $imagen?>" alt="">
    </div>

    <div class="col-md-4">
        
        
       <?php if($contrato!=''){
       ?>
       
                     <h3 class="my-3">contrato</h3>
<p style="font-size:18px;text-align:justify;"><?php echo utf8_encode($contrato)?></p>
       
       <?php
       }?> 



       <?php if($obra!=''){
       ?>
      <h3 class="my-3">Obra</h3>
<p style="font-size:18px;text-align:justify;text-transform:capitalize;"><?php echo utf8_encode($obra)?></p>
       <?php
       }?> 


       <?php if($cliente!=''){
       ?>
 <h3 class="my-3">Cliente</h3>
<p style="font-size:18px;text-align:justify;"><?php echo ($cliente)?></p>
       <?php
       }?> 


       <?php if($inicio!=''){
       ?>
 <h3 class="my-3">Fecha</h3>
<p><b>Inicio</b> <?php echo utf8_encode($inicio)?></p>

<?php if($fin=='actual'){
		   
			   
		   }else{
		  ?>
		  
		  <p><b>Fin</b> <?php echo utf8_encode($fin)?></p>
		  
		  <?php
	   }?>

      
      
      
       <?php
       }?> 


       <?php if($plazo_ejecucion!=''){
       ?>
 <h3 class="my-3">Plazo_ejecucion</h3>
<p><?php echo utf8_encode($plazo_ejecucion)?></p>
       <?php
       }?> 



       <?php if($responsable!=''){
       ?>
 <h3 class="my-3">Responsable</h3>
<p><?php echo utf8_encode($responsable)?></p>
       <?php
       }?> 



       <?php if($video!=''){
       ?>
 <h3 class="my-3">Video del proyecto</h3>
<?php echo html_entity_decode($video)?>
       <?php
       }?> 
    </div>

  </div>
  <!-- /.row -->




       <?php if($descripcion!=''){
       ?>
  <!-- Related Projects Row -->
  <h3 class="my-4">Descripción</h3>

  <div class="row">

    <div class="col-md-12 col-sm-12 mb-4">
<p style="font-size:18px;text-align:justify;"><?php echo html_entity_decode($descripcion)?></p>
    </div>

  </div>
  <!-- /.row -->
  
         <?php
       }?> 

  
  
  
  

</div>
<!-- /.container -->
</div>




<br><br><br><br><br><br>


            
 
        </div>
        <!-- CONTENT END -->


    
    
    <?php
    
}else{
    
    
    echo'  <div class="page-content"><br><br><br><br><br><br><div> <center> <h1>Seleccione un proyecto en la seccion <a href="proyectos.php"> proyectos </a></h1></center></div></div><br><br><br><br><br><br>';
}





?>

       
<?php
include'helpers/footer.php';
?>
