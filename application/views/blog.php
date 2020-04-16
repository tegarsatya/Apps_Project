<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>PT. PRIMA HANDANU BHAKTI</title>
	<base href="<?php echo base_url() ?>">
	<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="web/css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
					<li class="facebook"><a href="https://web.facebook.com/primahandanu/"><span> </span></a></li>
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
		<div class="about_banner_img"><img src="web/12440297_541563699356921_7136798201031747469_o.jpg" class="img-responsive" alt="" /></div>
		<div class="about_banner_wrap">
			<h1 class="m_11">Blog</h1>
		</div>
		<div class="border"> </div>
		<div class="container">
			<div class="row single-top">
				<div class="col-md-8">
					<?php
					foreach ($d_artikel as $data) {
					?>
						<div class="blog_box">
							<div class="blog_grid">
								<h3><a href="<?php echo base_url() ?>app/detail_artikel/<?php echo set_linkurl($data->id_artikel, $data->judul) ?>"><?php echo $data->judul; ?></a></h3><i class="document"> </i>
								<a href="<?php echo base_url() ?>app/detail_artikel/<?php echo set_linkurl($data->id_artikel, $data->judul) ?>"><img src="<?php echo base_url() ?>gambar/<?php echo $data->gambar; ?>" class="img-responsive" alt="" /></a>
								<div class="singe_desc">
									<?php echo substr($data->isi, 0, 300); ?>
									<div class="comments">
										<ul class="links">
											<li><a href="#"><i class="blog_icon1"> </i><br><span><?php echo $data->hari . ', ' . tgl_indo($data->tgl); ?></span></a></li>
											<li><a href="#"><i class="blog_icon2"> </i><br><span><?php echo $data->posting; ?></span></a></li>
										</ul>
										<div class="btn_blog"><a href="<?php echo base_url() ?>app/detail_artikel/<?php echo set_linkurl($data->id_artikel, $data->judul) ?>">Read More</a>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<!--
				<ul class="dc_pagination dc_paginationA dc_paginationA06">
				  <li><a href="#" class="current">Prev</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">...</a></li>
				  <li><a href="#">19</a></li>
				  <li><a href="#">20</a></li>
				  <li><a href="#" class="current">Next</a></li>
		       </ul>
		       -->
					<?php
					echo $this->pagination->create_links();
					?>
				</div>
				<div class="col-md-4 ">
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
						<li><a href="#">aliquam erat volutpat</a><br><span>25 April 2020</span></li>
						<li><a href="#">aliquam erat volutpat</a><br><span>25 April 2020</span></li>
						<li><a href="#">aliquam erat volutpat</a><br><span>25 April 2020</span></li>
						<li><a href="#">aliquam erat volutpat</a><br><span>25 April 2020</span></li>
					</ul>

				</div>

			</div>
			<div class="clear"></div>
		</div>
	</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row section group">
				<div class="col-md-4">
					<h4 class="m_7">Berlangganan Situs kami</h4>
					<p class="m_8"></p>
					<form class="subscribe">
						<input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					</form>
					<div class="subscribe1">
						<a href="#">Submit Email<i class="but_arrow"> </i></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="f-logo">
						<img src="web/images/logo.png" alt="" />
					</div>
					<p class="m_9">Alamat : <br />
						Jl M yamin . Paal merah lama <br />
						Kec Jambi selatan No 3 <br />
						HP : 081366665456
					</p>
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
				<p>© 2017 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
			</div>
			<div class="social">
				<ul>
					<li class="facebook"><a href="https://web.facebook.com/primahandanu/"><span> </span></a></li>
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