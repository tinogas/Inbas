    	
<?php include'helpers/menu.php'; ?>
        <style>

.aboutus-section {
    padding: 90px 0;
}
.aboutus-title {
    font-size: 30px;
    letter-spacing: 0;
    line-height: 32px;
    margin: 0 0 39px;
    padding: 0 0 11px;
    position: relative;
    text-transform: uppercase;
    color: #000;
}
.aboutus-title::after {
    background: #f58820 none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    width: 54px;
}
.aboutus-text {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
    margin: 0 0 35px;
}

a:hover, a:active {
    color: #ffb901;
    text-decoration: none;
    outline: 0;
}
.aboutus-more {
    border: 1px solid #f58820;
    border-radius: 25px;
    color: #f58820;
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0;
    padding: 7px 20px;
    text-transform: uppercase;
}
.feature .feature-box .iconset {
    background: #fff none repeat scroll 0 0;
    float: left;
    position: relative;
    width: 18%;
}
.feature .feature-box .iconset::after {
    background: #f58820 none repeat scroll 0 0;
    content: "";
    height: 150%;
    left: 43%;
    position: absolute;
    top: 100%;
    width: 1px;
}

.feature .feature-box .feature-content h4 {
    color: #0f0f0f;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
}


.feature .feature-box .feature-content {
    float: left;
    padding-left: 28px;
    width: 78%;
}
.feature .feature-box .feature-content h4 {
    color: #0f0f0f;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
}
.feature .feature-box .feature-content p {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
}
.icon {
    color : #f4b841;
    padding:0px;
    font-size:40px;
    border: 1px solid #f58820;
    border-radius: 100px;
    color: #f58820;
    font-size: 28px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    width: 70px;
}

</style>
        <!-- CONTENT START -->
        <div class="page-content">
            
            
            
            
              <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/contacto.jpg);">
            	<div class="overlay-main bg-black" style="opacity:0.5;"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                                                                                <div class="section-head text-center">
                        <h1  class="text-uppercase text-white f animate" data-animate="fadeInDown" data-duration="2.0s" data-delay="0.5s" data-offset="100">Contacto</h1>
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
            
            
            
            
            
            
            

    <!-- SECTION CONTENTG START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                
                    <div class="section-content m-b50">
                        <div class="row">
                        
                        	<!-- LOCATION BLOCK-->
                            <div class="wt-box col-md-6">
                                                                 <div class="section-head text-center">
                        <h1 class="text-uppercase">UBICACI??N</h1>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div> 
                                <div class="gmap-outline m-b30">
                                    <div class="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1742.8232631692094!2d-110.96719947685543!3d29.116115158896466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce869a681af47b%3A0x25352c52790ac10f!2sAv.%20Siete%20225%2C%20Apolo%2C%2083100%20Hermosillo%2C%20Son.!5e0!3m2!1ses-419!2smx!4v1586322567135!5m2!1ses-419!2smx" width="90%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                                </div>
                            </div>

                            <!-- CONTACT FORM-->
                            <div  class="wt-box col-md-6">
                                                                               <div class="section-head text-center">
                        <h1 class="text-uppercase">ESCR??BENOS</h1>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                                
                                <form style="background-color:#000; padding:28px;" class="" method="post" action="envia.correo.php">
                        
                                    <div class="row">
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input name="nombre" type="text" required class="form-control" placeholder="Nombre">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input name="correo" type="text" class="form-control" required placeholder="Correo">
                                                </div>
                                            </div>
        
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                                    <textarea name="mensaje" rows="4" class="form-control " required placeholder="Mensaje"></textarea>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-12 text-right">
                                            <button name="submit" type="submit" id="enviar" value="Submit" class="site-button  m-r15">Enviar  <i class="fa fa-angle-double-right"></i></button>
                                            <button name="Resat" type="reset" value="Reset"  class="site-button " >Cancelar  <i class="fa fa-angle-double-right"></i></button>
                                        </div>
        
                                    </div>

                        		</form>
                        
                            </div>
                            
                        </div>
                    </div>
                    
 
                 <?php 
					
					if(isset($_GET['mensaje']) AND $_GET['mensaje']=='ok'){
						?>
						
						<script>
						swal("Correo Enviado!", "El correo se envio correctamente, te contactaremos tan pronto como sea posible!", "success");
						</script>
						
						
						<?php
					}
					
					?>
                                       
                                       
                                         <?php 
					
					if(isset($_GET['mensaje']) AND $_GET['mensaje']=='fallo'){
						?>
						
						<script>
						swal("El proceso fallo!", "No fue posible enviar el mensaje, por favor envie un correo a info@inbas.mx!", "danger");
						</script>
						
						
						<?php
					}
					
					?>
                                        <!-- CONTACT DETAIL BLOCK -->
                           <div style="background-color: #f9f9f9;padding:25px;" class="container-fluid">             
                    <div  class="section-content ">
                        <div class="row">
                            <div class="wt-box col-md-12">
                                                        <div class="section-head text-center">
                        <h1 class="text-uppercase">DIRECCI??N DE PROYECTOS</h1>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div> 
                                <div class="row">
                                
                                    <div class="col-md-6 col-sm-12 m-b30">
                                        <div style="    min-height: 255px;" class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20"><span class="icon-cell"><i class="fas fa-network-wired"></i></span></div>
                                            <div class="icon-content">
                                                <h5>infraestructura y Minero</h5>
                                                <p style="font-size:18px;">
Alejandro Hinojos Bastidas<br>
</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 m-b30">
                                        <div style="    min-height: 255px;" class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20"><span class="icon-cell"><i class="fas fa-industry"></i></span></div>
                                            <div class="icon-content">
                                                <h6>Industrial y Facility Management</h6>
                                                <p style="font-size:18px;">
Daniel Hinojos Bastidas<br>
</p>
                                            </div>
                                        </div>
                                    </div>  

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    <!-- CONTACT DETAIL BLOCK -->
                    <div class="section-content ">
                        <div class="row">
                            <div class="wt-box col-md-12">
                                                      <div class="section-head text-center">
                        <h1 class="text-uppercase">INFORMACI??N DE CONTACTO</h1>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div> 
                                <div class="row">
                                
                                    <div class="col-md-4 col-sm-12 m-b30">
                                        <div style="    min-height: 255px;" class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20"><span class="icon-cell"><i class="fa fa-phone"></i></span></div>
                                            <div class="icon-content">
                                                <h5>Tel??fono</h5>
                                                <p>(662) 1101990</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 m-b30">
                                        <div style="    min-height: 255px;" class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20"><span class="icon-cell"><i class="fa fa-envelope"></i></span></div>
                                            <div class="icon-content">
                                                <h6>Correo</h6>
                                                <p>info@inbas.mx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 m-b30">
                                        <div style="    min-height: 255px;" class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20"><span class="icon-cell"><i class="fa fa-map-marker"></i></span></div>
                                            <div class="icon-content">
                                                <h5>Direcci??n</h5>
                                                <p>Avenida Siete # 225 Col. Apolo
CP. 83100, Hermosillo, Sonora</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
           </div>
            <!-- SECTION CONTENT END -->
            
                     
        </div>
        <!-- CONTENT END -->


<?php
include'helpers/footer.php';
?>