<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Application</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">



</head>
<body>


	 <?php include'header.php';?>

	
	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Application</h2>
					
				</div>
			</div>
		</div>
	</section>

	<section class="sec-padding donation-section">
    	<div class="container">
    		<h2 class="text-thm">Membership registration</h2>
    		
    		
        	<div class="donation-form-outer" style="background-color: #ebfbc5;">
            	<form action="" method="post">
                	
                    
                  
                    <div class="form-portlet">
                    	
                        
                        <div class="row clearfix">
                            
                         
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Name <span class="required">*</span></div>
                                <input type="text" required="" placeholder="Enter your Name" value="" name="name">
                            </div>
                             <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Father Name<span class="required">*</span></div>
                                <input type="text" required="" placeholder="Enter your Father Name" value="" name="name">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Date of Birth<span class="required">*</span></div>
                                <input type="text" required="" placeholder="Enter your Date of Birth" value="" name="name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Blood Group<span class="required">*</span></div>
                                <input type="text" required="" placeholder="Enter your Blood Group" value="" name="name">
                            </div>
                              <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Phone no<span class="required">*</span></div>
                                <input type="text" required="" placeholder="Enter your Phone no" value="" name="name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Photo <span class="required">*</span></div>
                                <input type="file" class="btn" required="" placeholder="Upload your Photo" value="" name="name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">aadhar card <span class="required">*</span></div>
                                <input type="file" class="btn" required="" placeholder="Upload your Aadhar card" value="" name="name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Signature <span class="required">*</span></div>
                                <input type="file" class="btn" required="" placeholder="Upload your Signature" value="" name="name">
                            </div>


                            
                            
                            
                           
                            
                    
		                    <hr>

		                    
		                    
		                    <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Submit Now</button></div>
                            
                        </div>
                    </div>
                    
                   
                    
                   
                    
                </form>
            </div>
        </div>



        <div class="container">
    		<h2 class="text-thm">Complaint</h2>
    		
    		
        	<div class="donation-form-outer" style="background-color: #ffeae6;">
            	<form action="" method="post">
                	
                    
                  
                    <div class="form-portlet">
                    	
                        
                        <div class="row clearfix">
                            
                         
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Name <span class="required">*</span></div>
                                <input type="text" required="" placeholder="Enter your Name" value="" name="name">
                            </div>
                             
                            
                              <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Phone no<span class="required">*</span></div>
                                <input type="text" required="" placeholder="Enter your Phone no" value="" name="name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Photo <span class="required">*</span></div>
                                <input type="file" class="btn" required="" placeholder="Upload your Photo" value="" name="name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">aadhar card <span class="required">*</span></div>
                                <input type="file" class="btn" required="" placeholder="Upload your Aadhar card" value="" name="name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Signature <span class="required">*</span></div>
                                <input type="file" class="btn" required="" placeholder="Upload your Signature" value="" name="name">
                            </div>

                             <div class="form-group col-lg-6 col-md-6 col-xs-12">
                            	<div class="field-label">Writter copy & Evidence copy attech file
<span class="required">*</span></div>
                                <input type="file" class="btn" required="" placeholder="Upload your Signature" value="" name="name">
                            </div>


		                    
		                    
		                    <div class="text-center"><button class="thm-btn mt_30 mb_30" type="submit">Submit Now</button></div>
                            
                        </div>
                    </div>
                  
                   
                </form>
            </div>
        </div>
    </section>


	

<style type="text/css">
		                    	.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
  border: 1px solid #e1e1e1;
  color: gray;
  background-color: white;
  padding: 8px 70px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: normal;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
		                    </style>
	
	
	<?php include'footer.php';?>


	


	<!-- main jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- bx slider -->
	<script src="js/jquery.bxslider.min.js"></script>
	<!-- owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- validate -->
	<script src="js/validate.js"></script>
	<!-- mixit up -->
	<script src="js/jquery.mixitup.min.js"></script>
	<!-- fancybox -->
	<script src="js/jquery.fancybox.pack.js"></script>
	<!-- easing -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- circle progress -->
	<script src="js/circle-progress.js"></script>
	<!-- appear js -->
	<script src="js/jquery.appear.js"></script>
	<!-- count to -->
	<script src="js/jquery.countTo.js"></script>
	<!-- gmap helper -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!-- gmap main script -->
	<script src="js/gmap.js"></script>

	<!-- isotope script -->
	<script src="js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>


	<!-- thm custom script -->
	<script src="js/custom.js"></script>



</body>

<!-- Mirrored from hasan.themexlab.com/new/charity-home-html/donations.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 08:21:51 GMT -->
</html>