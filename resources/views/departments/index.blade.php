@extends('layouts.master')

@section('content')

<div role="main" class="main">

<!-- Home Slider -->
<div class="rs-container light rev_slider_wrapper">
	<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 1170, "gridheight": 500}'>
		<ul>
			<li data-transition="fade" class="typo-dark heavy">
				<img src="images/banner/bg-17.jpg"  
				alt=""
				data-bgposition="center center" 
				data-bgfit="cover" 
				data-bgrepeat="no-repeat" 
				class="rev-slidebg">
				
				<div class="tp-caption sm-text"
				data-x="right" data-hoffset="30"
				data-y="135"
				data-start="600"
				data-transform_in="y:[-300%];opacity:0;s:500;">The 1st Education Template Comes with 150+ pages With</div>
				
				<div class="tp-caption big-text"
				data-x="right" data-hoffset="30"
				data-y="center" data-voffset="-30"
				data-start="1500"
				data-whitespace="nowrap"						 
				data-transform_in="y:[100%];s:500;"
				data-transform_out="opacity:0;s:500;"
				data-mask_in="x:0px;y:0px;">Material Design</div>
				
				<div class="tp-caption sm-text"
				data-x="right" data-hoffset="30"
				data-y="285"
				data-start="2000"
				data-transform_in="y:[100%];opacity:0;s:500;"><a href="#" class="btn">View All Courses</a></div>
			</li>
			
			<li data-transition="fade" class="typo-dark heavy">
				
				<img src="images/banner/hero-01.jpg"  
				alt=""
				data-bgposition="center center" 
				data-bgfit="cover" 
				data-bgrepeat="no-repeat" 
				class="rev-slidebg">
				
				<div class="tp-caption big-text"
				data-x="right" data-hoffset="30"
				data-y="top" data-voffset="20"
				data-start="500"
				data-whitespace="nowrap"						 
				data-transform_in="y:[100%];s:500;"
				data-transform_out="opacity:0;s:500;"
				data-mask_in="x:0px;y:0px;">Education
			</div>
			
			<div class="tp-caption big-text"
			data-x="right" data-hoffset="30"
			data-y="top" data-voffset="100"
			data-start="1000"
			data-whitespace="nowrap"						 
			data-transform_in="y:[100%];s:500;"
			data-transform_out="opacity:0;s:500;"
			data-mask_in="x:0px;y:0px;">For Everyone
		</div>
		
		<div class="tp-caption big-text"
		data-x="right" data-hoffset="30"
		data-y="top" data-voffset="180"
		data-start="2000"
		data-whitespace="nowrap"						 
		data-transform_in="y:[100%];s:500;"
		data-transform_out="opacity:0;s:500;"
		data-mask_in="x:0px;y:0px;"><a href="#" class="btn">View All Courses</a>
	</div>
	
</li>

<li data-transition="fade" class="typo-dark heavy">
	<img src="images/banner/bg-13.jpg"  
	alt=""
	data-bgposition="center center" 
	data-bgfit="cover" 
	data-bgrepeat="no-repeat" 
	class="rev-slidebg">
	
	<div class="tp-caption sm-text"
	data-x="left" data-hoffset="30"
	data-y="150"
	data-start="500"
	data-transform_in="y:[-300%];opacity:0;s:500;">You only have to know one thing</div>
	
	<div class="tp-caption big-text"
	data-x="left" data-hoffset="30"
	data-y="center" data-voffset="-5"
	data-start="1500"
	data-whitespace="nowrap"						 
	data-transform_in="y:[100%];s:500;"
	data-transform_out="opacity:0;s:500;"
	data-mask_in="x:0px;y:0px;">You can learn anything</div>
	
	<div class="tp-caption sm-text"
	data-x="left" data-hoffset="30"
	data-y="310"
	data-start="2000"
	data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>
</li>
</ul>
</div>
</div><!-- Home Slider -->

<!-- Section -->
<section class="pad-top-none typo-dark">
	<div class="container">
		<!-- Row -->
		<div class="row">
			<!-- Title -->
			<div class="col-sm-12">
				<div class="title-container sm">
					<div class="title-wrap">
						<h3 class="title">Our Featured Departments</h3>
						<span class="separator line-separator"></span>
					</div>
				</div>
			</div>
			<!-- Title -->
			
			<!-- Column -->
			<div class="col-sm-3">
				<!-- Course Wrapper -->
				<div class="course-wrapper">
					<!-- Course Banner Image -->
					<div class="course-banner-wrap">
						<img width="600" height="220" src="images/course/course-01.jpg" class="img-responsive" alt="Course">
						<span class="cat bg-yellow">Cumputer Science - $ 90</span>
					</div><!-- Course Banner Image -->
					<!-- Course Detail -->
					<div class="course-detail-wrap">
						<!-- Course Teacher Detail -->
						<div class="teacher-wrap">
							<img width="100" height="100" src="images/teacher/thumb-teacher-01.jpg" class="img-responsive" alt="Course">
							<h5><small>with Prof.</small> <span>Jocop</span></h5>
						</div><!-- Course Teacher Detail -->
						<!-- Course Content -->
						<div class="course-content">
							<h5>Myanmar</h5>
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste...</p>
							<a class="btn" href="department-details.php">Apply Now</a>
						</div><!-- Course Content -->
					</div><!-- Course Detail -->
				</div><!-- Course Wrapper -->
			</div><!-- Column -->

			<!-- Column -->
			<div class="col-sm-3">
				<!-- Course Wrapper -->
				<div class="course-wrapper">
					<!-- Course Banner Image -->
					<div class="course-banner-wrap">
						<img width="600" height="220" src="images/course/course-01.jpg" class="img-responsive" alt="Course">
						<span class="cat bg-yellow">Cumputer Science - $ 90</span>
					</div><!-- Course Banner Image -->
					<!-- Course Detail -->
					<div class="course-detail-wrap">
						<!-- Course Teacher Detail -->
						<div class="teacher-wrap">
							<img width="100" height="100" src="images/teacher/thumb-teacher-01.jpg" class="img-responsive" alt="Course">
							<h5><small>with Prof.</small> <span>Jocop</span></h5>
						</div><!-- Course Teacher Detail -->
						<!-- Course Content -->
						<div class="course-content">
							<h5>English</h5>
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste...</p>
							<a class="btn" href="department-details.php">Apply Now</a>
						</div><!-- Course Content -->
					</div><!-- Course Detail -->
				</div><!-- Course Wrapper -->
			</div><!-- Column -->
			
			<!-- Column -->
			<div class="col-sm-3">
				<!-- Course Wrapper -->
				<div class="course-wrapper">
					<!-- Course Banner Image -->
					<div class="course-banner-wrap">
						<img width="600" height="220" src="images/course/course-02.jpg" class="img-responsive" alt="Course">
						<span class="cat bg-pink">Fashion Designing - $ 120</span>
					</div><!-- Course Banner Image -->
					<!-- Course Detail -->
					<div class="course-detail-wrap">
						<!-- Course Teacher Detail -->
						<div class="teacher-wrap">
							<img width="100" height="100" src="images/teacher/thumb-teacher-02.jpg" class="img-responsive" alt="Course">
							<h5><small>with Prof.</small> <span>Jonathan</span></h5>
						</div><!-- Course Teacher Detail -->
						<!-- Course Content -->
						<div class="course-content">
							<h5>Mathematic</h5>
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste...</p>
							<a class="btn" href="department-details.php">Apply Now</a>
						</div><!-- Course Content -->
					</div><!-- Course Detail -->
				</div><!-- Course Wrapper -->
			</div><!-- Column -->
			
			<!-- Column -->
			<div class="col-sm-3">
				<!-- Course Wrapper -->
				<div class="course-wrapper">
					<!-- Course Banner Image -->
					<div class="course-banner-wrap">
						<img width="600" height="220" src="images/course/course-03.jpg" class="img-responsive" alt="Course">
						<span class="cat bg-green">Dance - $ 4500</span>
					</div><!-- Course Banner Image -->
					<!-- Course Detail -->
					<div class="course-detail-wrap">
						<!-- Course Teacher Detail -->
						<div class="teacher-wrap">
							<img width="100" height="100" src="images/teacher/thumb-teacher-03.jpg" class="img-responsive" alt="Course">
							<h5><small>with Prof.</small><span>Alex Soms</span></h5>
						</div><!-- Course Teacher Detail -->
						<!-- Course Content -->
						<div class="course-content">
							<h5>Physics</h5>
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste...</p>
							<a class="btn" href="department-details.php">Apply Now</a>
						</div><!-- Course Content -->
					</div><!-- Course Detail -->
				</div><!-- Course Wrapper -->
			</div><!-- Column -->

		</div><!-- Row -->
		<hr>
		<!-- Row -->
		<div class="row">				
			<!-- Column -->
			<div class="col-sm-3">
				<!-- Course Wrapper -->
				<div class="course-wrapper">
					<!-- Course Banner Image -->
					<div class="course-banner-wrap">
						<img width="600" height="220" src="images/course/course-01.jpg" class="img-responsive" alt="Course">
						<span class="cat bg-yellow">Cumputer Science - $ 90</span>
					</div><!-- Course Banner Image -->
					<!-- Course Detail -->
					<div class="course-detail-wrap">
						<!-- Course Teacher Detail -->
						<div class="teacher-wrap">
							<img width="100" height="100" src="images/teacher/thumb-teacher-01.jpg" class="img-responsive" alt="Course">
							<h5><small>with Prof.</small> <span>Jocop</span></h5>
						</div><!-- Course Teacher Detail -->
						<!-- Course Content -->
						<div class="course-content">
							<h5>Chemistry</h5>
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste...</p>
							<a class="btn" href="department-details.php">Apply Now</a>
						</div><!-- Course Content -->
					</div><!-- Course Detail -->
				</div><!-- Course Wrapper -->
			</div><!-- Column -->

			<!-- Column -->
			<div class="col-sm-3">
				<!-- Course Wrapper -->
				<div class="course-wrapper">
					<!-- Course Banner Image -->
					<div class="course-banner-wrap">
						<img width="600" height="220" src="images/course/course-01.jpg" class="img-responsive" alt="Course">
						<span class="cat bg-yellow">Cumputer Science - $ 90</span>
					</div><!-- Course Banner Image -->
					<!-- Course Detail -->
					<div class="course-detail-wrap">
						<!-- Course Teacher Detail -->
						<div class="teacher-wrap">
							<img width="100" height="100" src="images/teacher/thumb-teacher-01.jpg" class="img-responsive" alt="Course">
							<h5><small>with Prof.</small> <span>Jocop</span></h5>
						</div><!-- Course Teacher Detail -->
						<!-- Course Content -->
						<div class="course-content">
							<h5>Botany</h5>
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste...</p>
							<a class="btn" href="department-details.php">Apply Now</a>
						</div><!-- Course Content -->
					</div><!-- Course Detail -->
				</div><!-- Course Wrapper -->
			</div><!-- Column -->
			
			<!-- Column -->
			<div class="col-sm-3">
				<!-- Course Wrapper -->
				<div class="course-wrapper">
					<!-- Course Banner Image -->
					<div class="course-banner-wrap">
						<img width="600" height="220" src="images/course/course-02.jpg" class="img-responsive" alt="Course">
						<span class="cat bg-pink">Fashion Designing - $ 120</span>
					</div><!-- Course Banner Image -->
					<!-- Course Detail -->
					<div class="course-detail-wrap">
						<!-- Course Teacher Detail -->
						<div class="teacher-wrap">
							<img width="100" height="100" src="images/teacher/thumb-teacher-02.jpg" class="img-responsive" alt="Course">
							<h5><small>with Prof.</small> <span>Jonathan</span></h5>
						</div><!-- Course Teacher Detail -->
						<!-- Course Content -->
						<div class="course-content">
							<h5>History</h5>
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste...</p>
							<a class="btn" href="department-details.php">Apply Now</a>
						</div><!-- Course Content -->
					</div><!-- Course Detail -->
				</div><!-- Course Wrapper -->
			</div><!-- Column -->
			
			<!-- Column -->
			<div class="col-sm-3">
				<!-- Course Wrapper -->
				<div class="course-wrapper">
					<!-- Course Banner Image -->
					<div class="course-banner-wrap">
						<img width="600" height="220" src="images/course/course-03.jpg" class="img-responsive" alt="Course">
						<span class="cat bg-green">Dance - $ 4500</span>
					</div><!-- Course Banner Image -->
					<!-- Course Detail -->
					<div class="course-detail-wrap">
						<!-- Course Teacher Detail -->
						<div class="teacher-wrap">
							<img width="100" height="100" src="images/teacher/thumb-teacher-03.jpg" class="img-responsive" alt="Course">
							<h5><small>with Prof.</small><span>Alex Soms</span></h5>
						</div><!-- Course Teacher Detail -->
						<!-- Course Content -->
						<div class="course-content">
							<h5>Geology</h5>
							<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those intereste...</p>
							<a class="btn" href="department-details.php">Apply Now</a>
						</div><!-- Course Content -->
					</div><!-- Course Detail -->
				</div><!-- Course Wrapper -->
			</div><!-- Column -->

		</div><!-- Row -->

	</div><!-- Container -->
</section><!-- Section -->

<!-- Section -->
<section id="gallery" class="bg-lgrey typo-dark">
	<div class="container">
		
		<div class="row">
			<!-- Title -->
			<div class="col-sm-12">
				<div class="title-container text-left">
					<div class="title-wrap">
						<h3 class="title">Gallery</h3>
						<span class="separator line-separator"></span>
					</div>
					<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam</p>
				</div>
			</div><!-- Title -->
		</div><!-- Row -->
		
		<div class="row">
			<div class="col-md-12">
				<!-- Filters -->
				<div class="isotope-filters">
					<ul class="nav nav-pills">
						<li><a href="#" data-filter=".all" class="filter active">All</a></li>
						<li><a href="#" data-filter=".design" class="filter">Cambus</a></li>
						<li><a href="#" data-filter=".identity" class="filter">Classes</a></li>
						<li><a href="#" data-filter=".web" class="filter">Events</a></li>
						<li><a href="#" data-filter=".photography" class="filter">Projects</a></li>
					</ul>
				</div><!-- Filters -->
				<!-- Gallery Block -->
				<div class="isotope-grid grid-three-column has-gutter-space" data-gutter="20" data-columns="3">
					<div class="grid-sizer"></div>
					<!-- Portfolio Item -->
					<div class="item all design web">
						<!-- Image Wrapper -->
						<div class="image-wrapper">
							<!-- IMAGE -->
							<img src="images/gallery/grid/1.jpg" alt="" />
							<!-- Gallery Btns Wrapper -->
							<div class="gallery-detail btns-wrapper">
								<a href="gallery-single.html" class="btn uni-upload-2"></a>
								<a href="images/gallery/grid/1.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
							</div><!-- Gallery Btns Wrapper -->
						</div><!-- Image Wrapper -->
					</div><!-- Portfolio Item -->
					<!-- Portfolio Item -->
					<div class="item all design identity photography">
						<!-- Image Wrapper -->
						<div class="image-wrapper">
							<!-- IMAGE -->
							<img src="images/gallery/grid/2.jpg"/>
							<!-- Gallery Btns Wrapper -->
							<div class="gallery-detail btns-wrapper">
								<a href="gallery-single.html" class="btn uni-upload-2"></a>
								<a href="images/gallery/grid/2.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
							</div><!-- Gallery Btns Wrapper -->
						</div><!-- Image Wrapper -->
					</div><!-- Portfolio Item -->
					<!-- Portfolio Item -->
					<div class="item all identity web">
						<!-- Image Wrapper -->
						<div class="image-wrapper">
							<!-- IMAGE -->
							<img src="images/gallery/grid/3.jpg"/>
							<!-- Gallery Btns Wrapper -->
							<div class="gallery-detail btns-wrapper">
								<a href="gallery-single.html" class="btn uni-upload-2"></a>
								<a href="images/gallery/grid/3.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
							</div><!-- Gallery Btns Wrapper -->
						</div><!-- Image Wrapper -->		 
					</div><!-- Portfolio Item -->
					<!-- Portfolio Item -->
					<div class="item all design web">
						<!-- Image Wrapper -->
						<div class="image-wrapper">
							<!-- IMAGE -->
							<img src="images/gallery/grid/4.jpg"/>
							<!-- Gallery Btns Wrapper -->
							<div class="gallery-detail btns-wrapper">
								<a href="gallery-single.html" class="btn uni-upload-2"></a>
								<a href="images/gallery/grid/4.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
							</div><!-- Gallery Btns Wrapper -->
						</div><!-- Image Wrapper -->		 
					</div><!-- Portfolio item -->
					<!-- Portfolio Item -->
					<div class="item all identity">
						<!-- Image Wrapper -->
						<div class="image-wrapper">
							<!-- IMAGE -->
							<img src="images/gallery/grid/5.jpg"/>
							<!-- Gallery Btns Wrapper -->
							<div class="gallery-detail btns-wrapper">
								<a href="gallery-single.html" class="btn uni-upload-2"></a>
								<a href="images/gallery/grid/5.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
							</div><!-- Gallery Btns Wrapper -->
						</div><!-- Image Wrapper -->		 
					</div><!-- Portfolio item -->
					<!-- Portfolio Item -->
					<div class="item all identity web">
						<!-- Image Wrapper -->
						<div class="image-wrapper">
							<!-- IMAGE -->
							<img src="images/gallery/grid/6.jpg"/>
							<!-- Gallery Btns Wrapper -->

							<div class="gallery-detail btns-wrapper">
								<a href="gallery-single.html" class="btn uni-upload-2"></a>
								<a href="images/gallery/grid/6.jpg" data-rel="prettyPhoto[portfolio]" class="btn uni-full-screen"></a>
							</div><!-- Gallery Btns Wrapper -->
						</div><!-- Image Wrapper -->		 
					</div><!-- Portfolio item -->
				</div><!-- Gallery Block -->
			</div><!-- Column -->
		</div><!-- Row -->
	</div><!-- Container -->
</section><!-- Section -->

<!-- Section -->
<section class="relative bg-light typo-light bg-cover overlay" data-background="images/banner/bg-01.jpg">
	<div class="container parent-has-overlay">
		<div class="row">
			<!-- Column Begins -->
			<div class="col-sm-12">
				<div class="owl-carousel" 
				data-animatein="" 
				data-animateout="" 
				data-items="1" 
				data-loop="true" 
				data-merge="true" 
				data-nav="false" 
				data-dots="true" 
				data-stagepadding="" 
				data-margin="30"
				data-mobile="1" 
				data-tablet="1" 
				data-desktopsmall="1"  
				data-desktop="2" 
				data-autoplay="true" 
				data-delay="3000" 
				data-navigation="true">
				
				<!-- Item Ends -->
				<div class="item">
					<!-- Blockquote Wrapper -->
					<div class="quote-wrap dark">
						<blockquote>		
							<p>When you can earn more than you could ever imagine by doing something that you love.</p>
						</blockquote>
						<!-- Blockquote Author -->
						<div class="quote-author">
							<img width="80" height="80" src="images/default/thumb-01.jpg" class="img-responsive" alt="thumb">
							<!-- Blockquote Footer -->
							<div class="quote-footer">
								<h5 class="name"><a href="#">John Mathew</a></h5>
								<span>/ Parent</span>
							</div><!-- Blockquote Footer -->
						</div><!-- Blockquote Author -->
					</div><!-- Blockquote Wrapper -->
				</div><!-- Item Ends -->
				
				<!-- Item Ends -->
				<div class="item">
					<!-- Blockquote Wrapper -->
					<div class="quote-wrap dark">
						<blockquote>		
							<p>When you can earn more than you could ever imagine by doing something that you love.</p>
						</blockquote>
						<!-- Blockquote Author -->
						<div class="quote-author">
							<img width="80" height="80" src="images/default/thumb-02.jpg" class="img-responsive" alt="thumb">
							<!-- Blockquote Footer -->
							<div class="quote-footer">
								<h5 class="name"><a href="#">John Mathew</a></h5>
								<span>/ Parent</span>
							</div><!-- Blockquote Footer -->
						</div><!-- Blockquote Author -->
					</div><!-- Blockquote Wrapper -->
				</div><!-- Item Ends -->
				
				<!-- Item Ends -->
				<div class="item">
					<!-- Blockquote Wrapper -->
					<div class="quote-wrap dark">
						<blockquote>		
							<p>When you can earn more than you could ever imagine by doing something that you love.</p>
						</blockquote>
						<!-- Blockquote Author -->
						<div class="quote-author">
							<img width="80" height="80" src="images/default/thumb-03.jpg" class="img-responsive" alt="thumb">
							<!-- Blockquote Footer -->
							<div class="quote-footer">
								<h5 class="name"><a href="#">John Mathew</a></h5>
								<span>/ Parent</span>
							</div><!-- Blockquote Footer -->
						</div><!-- Blockquote Author -->
					</div><!-- Blockquote Wrapper -->
				</div><!-- Item Ends -->
				
				<!-- Item Ends -->
				<div class="item">
					<!-- Blockquote Wrapper -->
					<div class="quote-wrap dark">
						<blockquote>		
							<p>When you can earn more than you could ever imagine by doing something that you love.</p>
						</blockquote>
						<!-- Blockquote Author -->
						<div class="quote-author">
							<img width="80" height="80" src="images/default/thumb-04.jpg" class="img-responsive" alt="thumb">
							<!-- Blockquote Footer -->
							<div class="quote-footer">
								<h5 class="name"><a href="#">John Mathew</a></h5>
								<span>/ Parent</span>
							</div><!-- Blockquote Footer -->
						</div><!-- Blockquote Author -->
					</div><!-- Blockquote Wrapper -->
				</div><!-- Item Ends -->
			</div><!-- carousel -->
		</div><!-- Column -->
	</div><!-- Row -->
</div><!-- Container -->
</section><!-- Section -->				

</div><!-- Page Main -->

@endsection