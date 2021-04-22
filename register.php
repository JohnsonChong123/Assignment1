<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
       
	<title>Home | COVID-19 Info Center</title>
    <meta name="description" content="">
    <meta name="keywords" content="">	
</head>

<body>
 
    <div class="container-fluid site-title">
    <!-- <div class=""> -->
        <div class="container">
            <div class="row">
                <h3>Lab2(Group4)</h3>
            </div>
        </div>
    </div>
  
    <div id="cdc-meganav-wrapper">
        
        <div class="container" id="cdc-meganav-bar">
            
            <nav class="navbar navbar-expand-xl yamm">
            
                <ul class="nav navbar-nav nav-justified w-100">
                  
                    <li class="nav-item" id="menu_home">
                        <a class="nav-link" href="home.html">
                            Home						</a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link" href="page1.html">
                            Pfizer						</a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link" href="page2.html">
                            AstraZeneca						</a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link" href="page3.html">
                            Sinovac						</a>
                    </li>
                    <li class="nav-item" id="menu4">
                        <a class="nav-link active" href="register.php">
                            Registeration					</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
	       
    <!-- Page Content Wrap -->
    <div class="container d-flex flex-wrap body-wrapper bg-white">
    
        <!-- Content -->
        <main class="col-xl-8 order-xl-2">
            
            <div class="row">
            
                <div class="col content">
                
                    <div class="row">
                        <br>
                        <h1 id="content" class="open d-lg-block"><b><u>COVID-19 Info Center</u></b><br></h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                    </div>
                    <div class="cdc-2020-bar container">
							
                    </div>
                    <section class="register-photo">
                        <div class="form-container">
                            <form method="post" action="success.php">
                                <h2 class="text-center"><strong>Register For Vaccination</strong></h2>
                                <div class="form-group"><input type="text" class="form-control" name="name" placeholder="Your Fullname" required/></div>
                                <div class="form-group"><input type="email" class="form-control" name="email" placeholder="Email" required/></div>
                                <div class="form-group"><input type="number" class="form-control" name="number" placeholder="Contact Number" required/></div>
                                <div class="form-group"><input type="text" class="form-control" name="address" placeholder="Address" required/></div>

                                
                                <div class="form-group">
                                    <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" />I agree to the license terms.</label></div>
                                </div>
                                
                                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div>
                            </form>
                        </div>
                    </section>
                    
                </div>
            </div>
							
          <br>
          <br>
          <br>
     
        </main>
    						
    </div> 
            
    <div class="container-fluid">
        <div class="container">
        
            <div class="card-body bg-quaternary">
                    
                <h5>Disclaimer</h5>
                <p style="font-size:14px;">This website is created mainly for educational and non-commercial use only. It is a 
                partial fulfillment for completion of unit SWE20001 - Development Project 1 offered in 
                Swinburne University of Technology, Sarawak Campus. The web-master and author(s) do not 
                represent the business entity. The content of the pages of this website might be out-dated 
                or inaccurate, thus, the author(s) and web-master does not take any responsibility for 
                incorrect information disseminated or cited from this website.</p>
                
            </div>
        </div>
    </div>
    
</body>
</html>

<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $name ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Contact Number :");
    fwrite($file, $number ."\n");
    fwrite($file,"Address :");
    fwrite($file, $address ."\n");
    fwrite($file," ");
    fclose($file);
 ?>

