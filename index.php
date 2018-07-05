<?php include('db_connection.php');
session_start();
?>
          <?php include("header.php"); ?>
          <?php //include("navigation.php"); ?>
        <?php include('sidebar.php');  ?>
        <body style="padding-top:20px; background-color:#f4f4f4"><?php include("navbar.php"); ?> <div class="container" style="ackground-color:white" > <div id="wrapper"  class="rimbus"  >
          <div >
  

        <div class="body-content outer-top-xs" >
 
 <div class="col-md-3"  style="background-color:#f0f0f0; box-shadow:0px 0px .3px black">
<br>

 <ul class="nav ">
   <h6 style="color:red"><b>TRENDING PRODUCTS</b></h6>

 <p>
 The chairperson opened the meeting by asking one of the members to pray.Without delay a member prayed
Min2 communication from the chair
The chairperson thanked the executive members present and welcomed them for the meeting.He however apologized for coming late.That he had some domestic issues to solve  in his communication speech,he said that,he was sorry to learn that the minute book for SMC got lost
Later on the chairman awared the members that some teachers went with school money PTA and have failed to pay back.This made him to follow with one of the executive members.That the chief Administrative officer,had acknowledged the matter and told that,those teachers will pay the money this month April which will be deducted from their salaries.And that this money will be deposited on the PTA Account

             <br>
<div class="divider" style="border:1px solid #666666"></div>
<h6 style="color:red"><b>TRENDING NEWS</b></h6>

 <p>
 The chairperson opened the meeting by asking one of the members to pray.Without delay a member prayed
Min2 communication from the chair
The chairperson thanked the executive members present and welcomed them for the meeting.He however apologized for coming late.That he had some domestic issues to solve  in his communication speech,he said that,he was sorry to learn that the minute book for SMC got lost
Later on the chairman awared the members that some teachers went with school money PTA and have failed to pay back.This made him to follow with one of the executive members.That the chief Administrative officer,had acknowledged the matter and told that,those teachers will pay the money this month April which will be deducted from their salaries.And that this money will be deposited on the PTA Account
The chairperson had nothing nothing to say,he later declared the agendium opened.
Min 3 Report from the headteacher 
Under this minute,the headteacher welcomed the members present and thanked them for coming.He apologized for being late
In his report he told the committee that,there are 7 male government paid teachers
9 female teachers ,2 PTA paid male teachers 2PTA teachers and 1 computer teacher[male] paid by both PTA and caritas,making the number21teachers in all.
Earlier there were 17 teachersgovernment paid but 1 teacher is absent i.e mr.Obulejo Richard .He told the members that he had already informed the education department.The headteacher again reported that,there are 471 male pupils Ugandan 605female,53male refugeesand 88female refugees.This made the total number to be 1,236 pupils registered.
He went on and said that there are around 56 pupils whose names are not there in the register only discovered recently when the registers were compared with that of amref.That these names have not been identified.
Porridge:
He told members that,p.1 eat their porridge at break time in the morning mean while  from P.3-P7 eat their porridge at lunch time 
He said since the programmestarted,there were two cases of accident  2 pupils got burnt but not  serious

 </p>
            </ul>
            </div>

</div>

</div>
 
        <div class=" col-md-9 col-sm-12 outer-bottom-sm" style="background-color:white"> 
         
        
                
        
         <div class="search-result-container"> <div id="myTabContent" class="tab-content"> <div class="tab-pane active " id="grid-container"> <div class="category-product inner-top-xs"> <div class="row" style="padding:0; margin:0 auto">
      <p style="argin-left:7px;color:#FF0000;"> Recently released products</p>

         <div class="divider" style="width:100%; margin:auto; eight:0.5px; border:0.1px solid orange; opacity:.1; padding:0"></div>
         <br>
           <?php  $query=mysql_query("SELECT * FROM products  ORDER BY product_id DESC LIMIT 4");
				   while($row=mysql_fetch_array($query)){
				    ?>

          <div class="col-sm-4 col-md-3 wow fadeInUp" style="padding:3px" data-wow-delay="0s">  <div class="product"> <div class="product-image">  <div class="image">
          <a href="product_info.php?<?php  echo 'pro_id='.$row['product_id']; ?>&<?php  echo 'cat_id='.$row['catergory_id']; ?>">
         <img src="assets/images/loading.gif" data-echo="pages/<?php  echo $row['photo'];  ?>" class="img-responsive" alt="" width="100%"  height="100%">
</a>
          
           </div>  <div class="tag" style="padding:0; width:100%; color:#FFCC66; text-shadow:50px solid black" ><b><br><font style="text-transform:capitalize"><?php  echo $row['productname'];  ?></font><br><font style="text-transform:uppercase; color:#FFFFFF">UGX : </font><font style="color:#FF3300"><?php  echo $row['price'];  ?></font></b></div>  </div> <div class="product-info" style="overflow:hidden; max-height:42px"> <h5 lass="name"><a href="product_info.php?<?php  echo 'pro_id='.$row['product_id']; ?>&<?php  echo 'cat_id='.$row['catergory_id']; ?>" style="text-transform:; color:#6666FF"> <?php  echo $row['description'];  ?> </a></h5></div> <div class="product-info" style="overflow:hidden; max-height:45px; padding:0"><span style="width:100%; color:#FF3300; padding:0"><?php  echo $row['manufacturer'];  ?> </span>  <div class="product-price"> <ins> <small class="amount" style="color:purple">456,678 views</small> <small class="amount" style="color:gray"><i class="entypo-dot"></i> 1 day ago</small></ins> </div>  </div> </div> </div> 
         <?php } ?>
         </div></div><br>
         <p style="argin-left:2em;color:#FF0000;"> Trending Products</p>

         <div class="divider" style="width:100%; eight:0.5px; border:0.1px solid orange; opacity:.1; padding:0"></div>
         <br>
          <?php  $query=mysql_query("SELECT * FROM products ");
				   while($row=mysql_fetch_array($query)){
				   $_SESSION['cater_id']=$row['catergory_id'];
				    ?>

          <div class="col-sm-4 col-md-3 wow fadeInUp" style="padding:3px" data-wow-delay="0s"><div class="product"> <div class="product-image">  <div class="image">
          <a href="product_info.php?<?php  echo 'pro_id='.$row['product_id']; ?>&<?php  echo 'cat_id='.$row['catergory_id']; ?>">
         <img src="assets/images/loading.gif" data-echo="pages/<?php  echo $row['photo'];  ?>" class="img-responsive" alt="" width="100%"  height="100%">
</a>
          
           </div>  <div class="tag" style="padding:0; width:100%; color:#FFCC66; text-shadow:50px solid black" ><b><br><?php  echo $row['productname'];  ?><br><font style="text-transform:uppercase; color:black">UGX : </font><font style="color:#FF3300"><?php  echo $row['price'];  ?></font></b></div>   <div class="product-info" style="overflow:hidden; max-height:42px"> <h5 lass="name"><a href="product_info.php?<?php  echo 'pro_id='.$row['product_id']; ?>&<?php  echo 'cat_id='.$row['catergory_id']; ?>" style="text-transform:; color:#6666FF"> <?php  echo $row['description'];  ?> </a></h5></div> <div class="product-info" style="overflow:hidden; max-height:45px; padding:0"><span style="width:100%; color:#FF3300; padding:0"><?php  echo $row['manufacturer'];  ?> </span>  <div class="product-price"> <ins> <small class="amount" style="color:purple">456,678 views</small> <small class="amount" style="color:gray"><i class="entypo-dot"></i> 1 day ago</small></ins> </div> </div>  </div> </div> </div> 
         <?php } ?>
         
 </div> </div> </div>   </div> 
         
         
         
        
        </div> </div> </div>
        
        
        
         <div class="footer-outer-2 outer-top-vs"> <div class="container"> <div class="row"> <div class="col-xs-12 col-sm-6 col-md-6"> <p class="copy-rights">copyright <i class="fa fa-copyright"></i> 2015 <a href="#">Rokan Themes</a> all the rights reserved.</p> </div> <div class="col-xs-12 col-sm-6 col-md-6 payment-card"> <ul class="payment-link list-unstyled list-inline"> <li><a href="#"><img src="assets/images/payments/6.png" alt="#"></a></li> <li><a href="#"><img src="assets/images/payments/7.png" alt=""></a></li> <li><a><img src="assets/images/payments/8.png" alt=""></a></li> <li><a><img src="assets/images/payments/9.png" alt=""></a></li> <li><a><img src="assets/images/payments/10.png" alt=""></a></li> </ul> </div> </div> </div> </div> </div> </footer> 
        
        
        
        
        
        
         
        
        
        <script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-1.11.2.min.js"></script> <script src="assets/js/bootstrap.min.js"></script> <script src="assets/js/bootstrap-slider.min.js"></script> <script src="assets/js/owl.carousel.min.js"></script> <script src="assets/js/bootstrap-hover-dropdown.min.js"></script> <script src="assets/js/jquery.custom-select.js"></script> <script src="assets/js/echo.min.js"></script> <script src="assets/js/lightbox.min.js"></script> <script src="assets/js/pace.min.js"></script> <script src="assets/js/jquery.easing-1.3.min.js"></script> <script src="assets/js/wow.min.js"></script> <script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54b609f040a301ca" async="async"></script> <script src="assets/js/scripts.min.js"></script> <script src="switchstylesheet/switchstylesheet.js"></script> <script>
        $(document).ready(function(){ 
            $(".changecolor").switchstylesheet( { seperator:"color"} );
            $('.show-theme-options').click(function(){
                $(this).parent().toggleClass('open');
                return false;
            });
        });
$(window).bind("load", function() {
           $('.show-theme-options').delay(2000).trigger('click');
        });
       
    </script> </body> 
<!-- Mirrored from demo2.chethemes.com/html/rimbus/index.php?page=category-v1 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 May 2018 06:59:23 GMT -->
</html>