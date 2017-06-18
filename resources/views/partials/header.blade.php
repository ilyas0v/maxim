<div id="header-wrapper" class="header-slider">
	<header class="clearfix">
	<div class="logo">
		<img src="img/logo-image.png" alt="" />
	</div>
	<div class="container">
		<div class="row">
			<div class="span12">
				<div id="main-flexslider" class="flexslider">
					<ul class="slides">
						@foreach($slides as $slide)
							<li>
							<p class="home-slide-content">
								{{$slide->cumle}}
							</p>
							</li>
						@endforeach
					</ul>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>
	</header>
</div>
