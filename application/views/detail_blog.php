<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>ABGym</title>
<base href="<?php echo base_url() ?>">
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="web/js/jquery.min.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="web/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="web/js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
</head>
<body>
    <!-- start header_bottom -->
    <div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				<i class="phone"> </i><span>1-200-346-2986</span>
			</div>
			<div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
    </div>
    <!-- start menu -->
    <?php $this->load->view('menu.php'); ?>
	<!-- end menu -->
	 <div class="main">
       <div class="about_banner_img"><img src="web/images/blog_single.jpg"  class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Blog<span class="class_1">&nbsp;&nbsp; &gt;&nbsp;&nbsp;&nbsp;&nbsp; Detail Artikel </span></h1>
      	</div>
      	<div class="border"> </div>
      	<div class="container">
		  <div class="row single-top">
		  	   <div class="col-md-8">
		  	     <div class="blog_single_grid">
				  <ul class="links_blog">
				  	<h3><a href="<?php echo base_url()?>app/detail_artikel/<?php echo set_linkurl($data->id_artikel,$data->judul) ?>"><?php echo $data->judul; ?></a></h3>
		  			<li><a href="#"><i class="blog_icon5"> </i><span><?php echo $data->hari.', '.tgl_indo($data->tgl); ?></span></a> <div class="clear"></div></li>
		  			<li><a href="#"><i class="blog_icon6"> </i><span><?php echo $data->posting; ?></span></a><div class="clear"></div></li>
		  			
		  		  </ul>
				  <img src="<?php echo base_url()?>gambar/<?php echo $data->gambar; ?>" class="img-responsive" alt=""/>
				  <div class="blog_single_desc">
				    <?php echo $data->isi; ?>
				  </div>
				  
			    </div>
			   </div>
			   <div class="col-md-4">
			    	<ul class="blog-list">
					  <h4>Categories</h4>
					  <li><a href="#">Events</a></li>
					  <li><a href="#">Aerobics</a></li>
					  <li><a href="#">Crossfit</a></li>
					  <li><a href="#">Spinning</a></li>
					  <li><a href="#">news</a></li>
				    </ul>
				    <ul class="recent-list">
					  <h4>Recent Posts</h4>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					</ul>
					
					  
		   	     </div>
				<div class="clear"></div>
			  </div>
			</div>
		  </div>
		  <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				   <h4 class="m_7">Newsletter Signup</h4>
				   <p class="m_8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy.</p>
				      <form class="subscribe">
			             <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Submit Email<i class="but_arrow"> </i></a>
			          </div>
				</div>
				<div class="col-md-4">
					<div class="f-logo">
						<img src="web/images/logo.png" alt=""/>
					</div>
					<p class="m_9">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
					<p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(00) 222 666 444</span></p>
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">info[at]mycompany.com</span></p>
				</div>
				<div class="col-md-4">
					<ul class="list">
						<h4 class="m_7">Menu</h4>
						<li><a href="#">About</a></li>
						<li><a href="#">Trainers</a></li>
						<li><a href="#">Classes</a></li>
						<li><a href="#">Pricing</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="list1">
						<h4 class="m_7">Community</h4>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Newsletter</a></li>
					</ul>
				</div>
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		    </div>
		    <div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		    </div>
		   <div class="clear"></div>
		  </div>
	     </div>
</body>
</html><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Gym Website Template | Blog_single :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
</head>
<body>
    <!-- start header_bottom -->
    <div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				<i class="phone"> </i><span>1-200-346-2986</span>
			</div>
			<div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
    </div>
    <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="index.html">Home</a></li>
			   <li><a href="about.html">About</a></li>
			   <li><a href="trainers.html">Trainers</a></li>
			   <li><a href="classes.html">Classes</a></li>
			   <li class="active"><a href="blog.html">Blog</a></li>
			   <li><a href="pricing.html">Pricing</a></li>
			   <li><a href="contact.html">Contact</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	 <div class="main">
       <div class="about_banner_img"><img src="images/blog_single.jpg"  class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Blog<span class="class_1">&nbsp;&nbsp; &gt;&nbsp;&nbsp;&nbsp;&nbsp; nostrud exerci tation ullamcorper suscipit lobortis </span></h1>
      	</div>
      	<div class="border"> </div>
      	<div class="container">
		  <div class="row single-top">
		  	   <div class="col-md-8">
		  	     <div class="blog_single_grid">
				  <ul class="links_blog">
				  	<h3><a href="blog_single.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed </a></h3>
		  			<li><a href="#"><i class="blog_icon5"> </i><span>April 14, 2014</span></a> <div class="clear"></div></li>
		  			<li><a href="#"><i class="blog_icon6"> </i><span>admin</span></a><div class="clear"></div></li>
		  			<li><a href="#"><i class="blog_icon7"> </i><span>1206</span></a><div class="clear"></div></li>
		  			<li><a href="#"><i class="blog_icon8"> </i><span>1206</span></a><div class="clear"></div></li>
		  		  </ul>
				  <img src="images/blog_single1.jpg" class="img-responsive" alt=""/>
				  <div class="blog_single_desc">
				    <p class="m_16">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
				    <p class="m_17">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
				    <p class="m_16">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
				    <p class="m_17">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure</p>
				  </div>
				  
			    </div>
			   </div>
			   <div class="col-md-4">
			    	<ul class="blog-list">
					  <h4>Categories</h4>
					  <li><a href="#">Events</a></li>
					  <li><a href="#">Aerobics</a></li>
					  <li><a href="#">Crossfit</a></li>
					  <li><a href="#">Spinning</a></li>
					  <li><a href="#">news</a></li>
				    </ul>
				    <ul class="recent-list">
					  <h4>Recent Posts</h4>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					</ul>
					
					  
			    
		   	     </div>
				<div class="clear"></div>
			  </div>
			</div>
		  </div>
		  <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				   <h4 class="m_7">Newsletter Signup</h4>
				   <p class="m_8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy.</p>
				      <form class="subscribe">
			             <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Submit Email<i class="but_arrow"> </i></a>
			          </div>
				</div>
				<div class="col-md-4">
					<div class="f-logo">
						<img src="images/logo.png" alt=""/>
					</div>
					<p class="m_9">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis</p>
					<p class="address">Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">(00) 222 666 444</span></p>
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">info[at]mycompany.com</span></p>
				</div>
				<div class="col-md-4">
					<ul class="list">
						<h4 class="m_7">Menu</h4>
						<li><a href="#">About</a></li>
						<li><a href="#">Trainers</a></li>
						<li><a href="#">Classes</a></li>
						<li><a href="#">Pricing</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="list1">
						<h4 class="m_7">Community</h4>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Newsletter</a></li>
					</ul>
				</div>
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		    </div>
		    <div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		    </div>
		   <div class="clear"></div>
		  </div>
	     </div>
</body>
</html>