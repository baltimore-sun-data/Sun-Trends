<?php


//Insert the path to your folder containing all Trends files between the backslashes; Example: /var/www/html/trends-baltimoresun-com
define('trends_base_path','/INSERT RELATIVE PATH HERE/'); 

error_reporting(E_ALL);
ini_set("display_errors","1");

//Insert the name of the folder containing SimplePie library
set_include_path(get_include_path() .':'. trends_base_path.'inc/');


    ##get the SimplePie library

    require_once(trends_base_path.'inc/SimplePie.php');



    
    ##grab the feed for No. 1 story
    $feed1 = new SimplePie();
    
    $feed1->set_feed_url(array(
      'INSERT URL TO XML FEED'
    ));
    
    ##enable caching
    $feed1->enable_cache(false);
    
    ##provide the caching folder
    $feed1->set_cache_location('cache');
    
    ##set the amount of seconds you want to cache the feed (3 minutes here)
    $feed1->set_cache_duration(1800);
    
    ##init the process
    $feed1->init();
    
    ##let SimplePie handle the content type (atom, RSS...)
    $feed1->handle_content_type();

?>


<?php 


    ##grab the feed for stories No. 2-10
    $feed2 = new SimplePie();
    
    $feed2->set_feed_url(array(
      'INSERT URL TO XML FEED'
    ));
    
    ##enable caching
    $feed2->enable_cache(false);
    
    ##provide the caching folder
    $feed2->set_cache_location('cache');
    
    ##set the amount of seconds you want to cache the feed (3 minutes here)
    $feed2->set_cache_duration(1800);
    
    ##init the process
    $feed2->init();
    
    ##let SimplePie handle the content type (atom, RSS...)
    $feed2->handle_content_type();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="">

    <!-- Mobile Specific Metas
    ================================================== -->

      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    
    <!-- CSS
    ================================================== -->

    <link rel="stylesheet" type="text/css" href="stylesheets/base.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />

      <!-- Javascript
    ================================================== -->


    <script src="scripts/modernizr.js"> </script>
    <script language="javascript" src="scripts/jquery-1.11.0.min.js"> </script>
    <script language="javascript" src="scripts/javascript.js"> </script>

    
  <!-- FONTS
    ================================================== -->  

  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!--BEGIN AD SCRIPT-->




<!--/END AD SCRIPT-->  


  </head>

<body>

  <header>

    <!-- FONT AWESOME MENU ICON -->  

    <div id="menu-bars">
        <i class="fa fa-bars fa-stack-4x fa-inverse"></i>
    </div>

    <!-- YOU MAY USE YOUR THIRD-PARTY TOPHAT OR THE CODE BELOW TO CREATE A RESPONSIVE TOP NAVIGATION -->

    <a href="#"><div id="sun-logo">
      <img src="INSERT YOUR LOGO HERE"/>
    </div></a>
    <div id="nav">
      <ul>
          <a href="#"><li>INSERT NAV ITEMS</li></a>
          
      </ul>
    </div><!--/nav-->


  </header> 

       <nav>
        <ul id="mobile-nav">
            
        </ul>
      </nav>

   <div id="main-container">

   <div id="title-container">
         <div id="title">INERT TITLE</div><!--/title-->
      </div><!--/title-container-->   

      <div id="tagline">

          <!-- FONT AWESOME CARET ICON WITH TAGLINE -->

          <span><i class="fa fa-caret-right"></span></i>Most viewed stories on YOUR WEBSITE NAME HERE 
      </div>
				
        <?php if ($feed1->error): ?>
		  <p><?php echo $feed1->error; ?></p>
		<?php endif; ?>
  
		<?php foreach ($feed1->get_items(0,1) as $item): ?>


      <!--DISPLAY STORY No. 1--> 

      <div id="top-story">

        <div class="date-time"><?php echo $item->get_date('M j | g:i a'); ?></div><!--/date-time-->

          <div id="top-story-image">

                <div class="rank-number">1</div>

                <a href="<?php echo $item->get_permalink(); ?>"><img src="<?php $enclosure = $item->get_enclosure(); echo $item->get_enclosure()->get_thumbnail();?>/350/350x197" data-test="<?php  $enclosure = $item->get_enclosure(); echo $item->get_enclosure()->get_thumbnail();?>"/></a>

          </div><!--/top-story-image-->

          <a href="<?php echo $item->get_permalink();?>"><div id="top-story-headline"><?php echo $item->get_title(); ?></div></a><!--/top-story-headline-->



      </div><!--/top-story-->



      <div class="mobile-ad-container">
    <div class="ad-tagline">advertisement</div><!--/ad-tagline-->

    <!-- CUBE AD SCRIPT GOES HERE -->

   </div><!--/mobile-ad-container-->  


     <?php endforeach; ?>
     
     <div id="other-stories">

        <?php $counter = 2; ?>

        <?php if ($feed2->error): ?>
          <p><?php echo $feed2->error; ?></p>
        <?php endif; ?>
 

 
        <?php foreach ($feed2->get_items(0,15) as $itemkey=> $item): ?>
	<?php if($itemkey > 0 && $itemkey < 10): ?>   


          <!--DISPLAY STORY No. 2-10-->

        <div class="other-story-container">

          <div class="date-time-other-stories"><?php echo $item->get_date('M j | g:i a'); ?></div><!--/date-time-->

             <div class="other-story">

                  <div class="other-stories-image">

                        <div class="rank-number"><?php echo $itemkey+1; ?></div>

                        <a href="<?php echo $item->get_permalink(); ?>"><img src="<?php $enclosure = $item->get_enclosure(); echo $item->get_enclosure()->get_thumbnail();?>/250/250x141"/></a>

                  </div><!--/other-stories-image-->

                  <a href="<?php echo $item->get_permalink(); ?>"><div class="other-stories-headline"><?php echo $item->get_title(); ?></div></a><!--/top-story-headline-->

                 <div id="other-stories-desc"></div><!--/top-story-desc-->

         

             </div><!--/other-story-->

          </div><!--/other-story-container-->
 
	<?php endif; ?>
        <?php endforeach; ?>

         </div><!--/other-stories-->


        <div class="ad-container">
         <div class="ad-tagline">advertisement</div><!--/ad-tagline-->

          <!-- LEADERBOARD AD SCRIPT GOES HERE -->

    </div><!--/ad-container-->  

                  
  </div><!--/main-container-->




<!-- INSERT OMNITURE TAGGING --> 
    
</body>

</html>

