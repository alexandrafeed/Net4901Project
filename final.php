


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
                    <h1>Project</h1>
                    <p>
Pecten along the beak
Ducks exploit a variety of food sources such as grasses, aquatic plants, fish, insects, small amphibians, worms, and small molluscs.

Dabbling ducks feed on the surface of water or on land, or as deep as they can reach by up-ending without completely submerging.[3] Along the edge of the beak there is a comb-like structure called a pecten. This strains the water squirting from the side of the beak and traps any food. The pecten is also used to preen feathers and to hold slippery food items.

Diving ducks and sea ducks forage deep underwater. To be able to submerge more easily, the diving ducks are heavier than dabbling ducks, and therefore have more difficulty taking off to fly.

A few specialized species such as the mergansers are adapted to catch and swallow large fish.

The others have the characteristic wide flat beak adapted to dredging-type jobs such as pulling up waterweed, pulling worms and small molluscs out of mud, searching for insect larvae, and bulk jobs such as dredging out, holding, turning head first, and swallowing a squirming frog. To avoid injury when digging into sediment it has no cere, but the nostrils come out through hard horn.

The Guardian (British newspaper) published an article on Monday 16 March 2015 advising that ducks should not be fed with bread because it damages the health of the ducks and pollutes waterways.[4]

Breeding

A Muscovy duck duckling.
The ducks are generally monogamous, although these bonds generally last only a single year. Larger species and the more sedentary species (like fast river specialists) tend to have pair-bonds that last numerous years. Most duck species breed once a year, choosing to do so in favourable conditions (spring/summer or wet seasons). Ducks also tend to make a nest before breeding, and after hatching to lead their ducklings to water. Mother ducks are very caring and protective of their young, but may abandon some of their ducklings if they are physically stuck in an area they cannot get out of (including nesting in an enclosed courtyard) or are not prospering due to genetic defects or sickness brought about by hypothermia, starvation, or disease. Ducklings can also be orphaned by inconsistent late hatching where a few eggs hatch after the mother has abandoned the nest and led her ducklings to water.[citation needed]

Most domestic ducks neglect their eggs and ducklings, and their eggs must be hatched under a broody hen or artificially.
                    </p></div>
            </div><!-- end of Project-->
            
            
            <div class="section" id= "AboutUs" data-anchor="Page3">
                <div id='AboutUs' class="container">
                        <?php include "php-Muj&Nnam.php";?>
                </div>
            </div> <!-- end of About Us-->
        </div>
    </body>
</html>