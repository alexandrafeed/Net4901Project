


<!DOCTYPE html>
<html lang="en">
<!--by Alex S-->
<head>
     <title> NET4901 - Network technology project </title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
    <link rel="stylesheet" type="text/css" href="fullPage.js-master/jquery.fullPage.css" />
    
    <script type="text/javascript" src="fullPage.js-master/jquery1.11.1/jquery.min.js"/>

        <script type="text/javascript" src="fullPage.js-master/jquery.fullPage.js"></script>
                              
    <!-- This following line is only necessary in the case of using the plugin option `scrollOverflow:true` -->
    <script type="text/javascript" src="fullPage.js-master/vendors/jquery.slimscroll.min.js"></script>
    
    <script type="text/javascript" src="fullPage.js-master/jquery.fullPage.js"></script>
    
    <!-- custom -->
    <link rel="stylesheet" type="text/css" href="final.css" />
    <!-- needed for NAVBAR -->
    <link rel="stylesheet" type="text/css" href="css-bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
    
    
    <!-- initalization -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['#001A27', '#063852', '#F0810F'], //section color
                anchors:['Page1','Page2','Page3'],
                scrollOverflow:true,
                css3: true,
                menu:'#myNavbar' //used for section transition via menu
            }); 
        });
    </script>
    
</head>

    
    
    <body>
            <div id="header">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header"> <!-- base of the navbar -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#Page1">WPA Recovery Thingy Project</a>
                        </div>

                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li data-menuanchor="Page1"><a href="#Page1">Graphs</a></li>
                                <li data-menuanchor="Page2"><a href="#Page2">About the project</a></li>
                                <li data-menuanchor="Page3"><a href="#Page3">About us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav> 
            </div>

        
        <div id ="fullpage">
            <div class="section">
                <div class="slide"  id="s1" data-anchor="Page1">
                    <div class="datachart">
                        <h1>GRAPHS</h1>
                        <?php include ('php-alex-sql.php');?>
                    </div>
                </div>
                <div class="slide"  id="s2"> 
                    <div class="datachart">
                        <?php include "php-Taqi-WpsGraph.php";?>
                    </div>
                </div>
                <div class="slide"  id="s3"> 
                    <div class="datachart">
                        <?php include "php-Taqi-PassGraph.php";?>
                    </div>
                </div>
                <div class="slide"  id="s4"> 
                    <div class="datachart">
                        <?php include "php-Taqi-WCountGraph.php";?>
                    </div>
                </div>
                    
            </div><!-- end of Main-->
            
            
            <div class="section" data-anchor="Page2">
                <div id='Project' class="container">
                    <h1>PROJECT</h1>
                    <? php include "php-alex-project.php";?>
                </div>
            </div><!-- end of Project-->
            
            
            <div class="section" id= "AboutUs" data-anchor="Page3">
                <div id='AboutUs' class="container">
                        <?php include "php-Muj&Nnam.php";?>
                </div>
            </div> <!-- end of About Us-->
        </div>
    </body>
</html>