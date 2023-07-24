
<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>CFG | Routine</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <link href="a1style.css" rel="stylesheet" type="text/css">
    <style>
      .page-container .sidebar-menu #main-menu li#routinehassubopen > a {
      background-color: #2b303a;
      color: red;
    }
    logo {
    height: 40px; 
    width: 40px; 
    
   border-radius: 50%
  
}
body {
  background-image: url('background5.jpg');
  background-repeat: no-repeat;
   background-attachment: fixed;
  
  
  background-size: 100% 100%;
}

    </style>
</head>
     <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
      <div class="logo">
                            
                            <a href = "index.php"><img src="logo2.png" alt = "CROSS FIT LOGO"></a>
                            </div>
		
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div>
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>						
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>CREATE ROUTINE</h3>

		

		
		
		 <div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-tranparent" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-transparent a1-center">
        	<h6 style="color:white;">NEW ROUTINE</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="saveroutine.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35"style="color:white;">ROUTINE NAME:</td>
                <td height="35"><label for="textarea"></label>
                 <textarea name="day1" id="textarea" style="margin: 0px; width: 136px; height: 32px; resize:none;"></textarea></td>
           	   

         	   </tr>
			   
			   <tr>
               <td height="35"style="color:white;">DAY 1:</td>
               <td height="35"><label for="textarea"></label>
                 <textarea name="day1" id="textarea" style="margin: 0px; width: 236px; height: 42px; resize:none;"></textarea></td>
             </tr>
             <tr>
               <td height="35"style="color:white;">DAY 2:</td>
               <td height="35"><label for="textarea"></label>
                 <textarea name="day2" id="textarea" style="margin: 0px; width: 236px; height: 42px;resize:none;"></textarea></td></td>
             </tr>
             <tr>
               <td height="35"style="color:white;">DAY 3:</td>
               <td height="35"><label for="textarea"></label>
                 <textarea name="day3" id="textarea" style="margin: 0px; width: 236px; height: 42px;resize:none;"></textarea></td></td>
             </tr>
             <tr>
               <td height="35"style="color:white;">DAY 4:</td>
               <td height="35"><label for="textarea"></label>
                 <textarea name="day4" id="textarea" style="margin: 0px; width: 236px; height: 42px;resize:none;"></textarea></td></td>
             </tr>
            <tr>
               <td height="35"style="color:white;">DAY 5:</td>
               <td height="35"><label for="textarea"></label>
                 <textarea name="day5" id="textarea" style="margin: 0px; width: 236px; height: 42px;resize:none;"></textarea><td></td>
             </tr>
             <tr>
               <td height="35"style="color:white;">DAY 6:</td>
               <td height="35"><label for="textarea"></label>
                 <textarea name="day6" id="textarea" style="margin: 0px; width: 236px; height: 42px;resize:none;"></textarea></td></td>
             </tr>
			 
            
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Add Routine" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
		
		
		
		
		


<?php include('footer.php'); ?>
    	</div>

    </body>
</html>


				