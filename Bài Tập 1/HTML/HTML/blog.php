<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>TheBest</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animations.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!--[if lt IE 9]>
            <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php
					include("header.php");
		?>

<section id="abovecontent" class="color_section">
	<div class="container">
		<div class="row">
			<div class="block col-sm-12">
				<ul class="breadcrumb">
					<li><a href="./" class="pathway"><i class="rt-icon-home"></i></a></li>
					<li><span>Blog</span></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<section id="middle" class="grey_section">
	<div class="container">
		<div class="row blog">


			<div class="col-sm-9">
				<div class="content-area" id="primary">
					<div role="main" class="site-content" id="content">
						<h1 class="entry-title">Blog</h1>
						<article class="post format-standard">
							<header class="entry-header">
								<div class="entry-thumbnail">
									<img alt="" src="example/blog-post.jpg">
								</div>
								<h2 class="entry-title">
									<a href="./blog-single.html" rel="bookmark">Post With Large Image</a>
								</h2>
								<div class="entry-meta">
									By
									<span class="author vcard">
										<a rel="author" href="#" class="url fn n">Alan Smith</a>
									</span>
									<span class="categories-links">
										In
										<a rel="category" href="#">Graphic Design</a>, 
										<a rel="category" href="#">Photography</a>
									</span>
									<span class="date">
										Posted
										<time datetime="2013-08-08T15:05:23+00:00" class="entry-date">December 8, 2013</time>
									</span>
									<span class="comments-link">
										<a href="#">5 comments</a>
									</span>
								</div>
								<!-- .entry-meta --> 
							</header>
							<!-- .entry-header -->

							<div class="entry-content">
								<p>At vero eos et accusam et justo duo dolores et ea rebum. Ut wisi enim adinim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequa orem ipsum dolor sit amet.</p>

							</div>
							<!-- .entry-content -->
							<div class="entry-tags">
								<span class="tags-links">
									<a rel="tag" href="#">Graphic Design</a>, 
									<a rel="tag" href="#">Photography</a>
								</span>
							</div>
							<!-- .entry-tags -->
						</article>
						<!-- .post --> 

						<article class="post format-small-image">
							<div class="row">
								<div class="entry-thumbnail col-sm-5">
									<img alt="" src="example/blog-post-small.jpg">
								</div>
								<div class="col-sm-7">
									<header class="entry-header">
										<h2 class="entry-title">
											<a href="./blog-single.html" rel="bookmark">Post With Small Image</a>
										</h2>
										<div class="entry-meta">
											By
											<span class="author vcard">
												<a rel="author" href="#" class="url fn n">Alan Smith</a>
											</span>
											<span class="categories-links">
												In
												<a rel="category" href="#">Graphic Design</a>, 
												<a rel="category" href="#">Photography</a>
											</span>
											<span class="date">
												Posted
												<time datetime="2013-08-08T15:05:23+00:00" class="entry-date">December 8, 2013</time>
											</span>
											<span class="comments-link">
												<a href="#">5 comments</a>
											</span>
										</div>
										<!-- .entry-meta --> 
									</header>
									<!-- .entry-header -->

									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ad, architecto, suscipit et officiis autem eius ratione volupta consectetur adipisicing elits ut exercitationem ullam natus quia nihil magnam ad, architecto, suscipit et officiis consectetur adipisicing elit sunt repellat officia facere similique?</p>
									</div>
									<!-- .entry-content -->
									<div class="entry-tags">
										<span class="tags-links">
											<a rel="tag" href="#">Graphic Design</a>, 
											<a rel="tag" href="#">Photography</a>
										</span>
									</div>
									<!-- .entry-tags -->
								</div>
							</div>
						</article>
						<!-- .post --> 
						<article class="post format-gallery">
							<header class="entry-header">
								<div class="entry-thumbnail">
									<div id="carousel-generic" class="carousel slide">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-generic" data-slide-to="1"></li>
											<li data-target="#carousel-generic" data-slide-to="2"></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<div class="item active">
												<img src="example/blog-post.jpg" alt="image">
											</div>
											<div class="item">
												<img src="example/blog-post.jpg" alt="image">
											</div>
											<div class="item">
												<img src="example/blog-post.jpg" alt="image">
											</div>
										</div>

										<!-- Controls -->
										<a class="left carousel-control" href="#carousel-generic" data-slide="prev">
											<span class="icon-prev"></span>
										</a>
										<a class="right carousel-control" href="#carousel-generic" data-slide="next">
											<span class="icon-next"></span>
										</a>
									</div>
								</div>
								<h2 class="entry-title">
									<a href="./blog-single.html" rel="bookmark">Post With Slider</a>
								</h2>
								<div class="entry-meta">
									By
									<span class="author vcard">
										<a rel="author" href="#" class="url fn n">Alan Smith</a>
									</span>
									<span class="categories-links">
										In
										<a rel="category" href="#">Graphic Design</a>, 
										<a rel="category" href="#">Photography</a>
									</span>
									<span class="date">
										Posted
										<time datetime="2013-08-08T15:05:23+00:00" class="entry-date">December 8, 2013</time>
									</span>
									<span class="comments-link">
										<a href="#">5 comments</a>
									</span>
								</div>
								<!-- .entry-meta --> 
							</header>
							<!-- .entry-header -->

							<div class="entry-content">
								<p>At vero eos et accusam et justo duo dolores et ea rebum. Ut wisi enim adinim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequa orem ipsum dolor sit amet.</p>

							</div>
							<!-- .entry-content -->
							<div class="entry-tags">
								<span class="tags-links">
									<a rel="tag" href="#">Graphic Design</a>, 
									<a rel="tag" href="#">Photography</a>
								</span>
							</div>
							<!-- .entry-tags -->

						</article>
						<!-- .post --> 
						<article class="post format-video">
							<header class="entry-header">
								<div class="entry-thumbnail">
									<iframe src="//player.vimeo.com/video/1084537" width="848" height="390"></iframe>
								</div>
								<h2 class="entry-title">
									<a href="./blog-single.html" rel="bookmark">Post With Video</a>
								</h2>
								<div class="entry-meta">
									By
									<span class="author vcard">
										<a rel="author" href="#" class="url fn n">Alan Smith</a>
									</span>
									<span class="categories-links">
										In
										<a rel="category" href="#">Graphic Design</a>, 
										<a rel="category" href="#">Photography</a>
									</span>
									<span class="date">
										Posted
										<time datetime="2013-08-08T15:05:23+00:00" class="entry-date">December 8, 2013</time>
									</span>
									<span class="comments-link">
										<a href="#">5 comments</a>
									</span>
								</div>
								<!-- .entry-meta --> 
							</header>
							<!-- .entry-header -->

							<div class="entry-content">
								<p>At vero eos et accusam et justo duo dolores et ea rebum. Ut wisi enim adinim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequa orem ipsum dolor sit amet.</p>

							</div>
							<!-- .entry-content -->
							<div class="entry-tags">
								<span class="tags-links">
									<a rel="tag" href="#">Graphic Design</a>, 
									<a rel="tag" href="#">Photography</a>
								</span>
							</div>
							<!-- .entry-tags -->

						</article>
						<!-- .post --> 

					</div>
					<!-- #content --> 
				</div>
				<div class="text-center"> 
					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
				</div> 
			</div>



			<aside class="col-sm-3">

				<div class="block widget_categories">
					<h3>Post Categories</h3>
					<ul>
						<li class="cat-item"><a href="#">Graphic Design</a> (3)</li>
						<li class="cat-item"><a href="#">Icon Desgin</a> (7)</li>
						<li class="cat-item"><a href="#">Interactive Media</a> (1)</li>
						<li class="cat-item"><a href="#">Photography</a> (2)</li>
						<li class="cat-item"><a href="#">Web Design</a> (4)</li>
					</ul>
				</div>


				<div class="block widget_archive">
					<h3>Blog Archives</h3>
					<ul>
						<li><a href="#">July 2013</a></li>
						<li><a href="#">June 2013</a></li>
						<li><a href="#">May 2013</a></li>
						<li><a href="#">April 2013</a></li>
						<li><a href="#">March 2013</a></li>
					</ul>
				</div>



				<div class="block widget_tag_cloud">
					<h3>Tags</h3>
					<div class="tagcloud">
						<a href="#" class="tag-link">Graphic Design</a>
						<a href="#" class="tag-link">Photography</a>
						<a href="#" class="tag-link">Design</a>
						<a href="#" class="tag-link">Media</a>
						<a href="#" class="tag-link">Typography</a>
					</div>
				</div>

			</aside>


		</div></div></section>



		<?php
include("bottom.php");
?>
