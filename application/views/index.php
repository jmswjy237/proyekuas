	<!-- featured -->		
	<div id="featured">			
	
		<div id="featured-block" class="clear">
			
			<div id="featured-ribbon"></div>	
				
			<a name="TemplateInfo"></a>
			
			<div class="image-block">
              <a href="index.html" title=""><img src="images/img-featured.jpg" alt="featured" width="350px" height="250px"/></a>
         </div>			
			
			<div class="slider-wrapper theme-default">
				<div class="ribbon"></div>
				<div id="slider" class="nivoSlider">
					<img src="/lab/revisitugas01/root/images/nivoslider/makassar.jpg" title="This picture is describe how fast the changes in my hometown" />
					<img src="/lab/revisitugas01/root/images/nivoslider/jmswjy.jpg" title="Hai, My Names is James Wijaya." />
					<img src="/lab/revisitugas01/root/images/nivoslider/viewlosari.jpg" title="Unforgettable moment at Losari Beach, Makassar" />
				</div>
				<div id="htmlcaption" class="nivo-html-caption">
					<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
				</div>
			</div>
			
			
			<script type="text/javascript" src="/lab/revisitugas01/root/scripts/jquery.nivo.slider.pack.js"></script>
			<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider();
			});
			</script>
			
			<!--<div class="text-block">
			
				<h2><a href="index.html">Read me first</a></h2>
			
				<p class="post-info">Posted by <a href="index.html">erwin</a> | Filed under <a href="index.html">templates</a>, <a href="index.html">internet</a></p>
				
				<p><strong>JungleLand 1.0</strong> is a free, W3C-compliant, CSS-based website template
				by <a href="http://www.styleshout.com/">styleshout.com</a>. This work is 
				distributed under the <a rel="license" href="http://creativecommons.org/licenses/by/2.5/">
				Creative Commons Attribution 2.5  License</a>, which means that you are free to 
				use and modify it for any purpose. All I ask is that you give me credit for the design by including a <strong>link back</strong> to
				<a href="http://www.styleshout.com/">my website</a>.
                </p>

                <p>
                You can find more of my free template designs at <a href="http://www.styleshout.com/">my website</a>.
				For premium commercial designs, you can check out
                <a href="http://themeforest.net?ref=ealigam" title="Site Templates">Themeforest.net</a>.
				</p>
				
				<p><a href="index.html" class="more-link">Read More</a></p>
								
			</div>-->
		
		</div>		
	
	<!-- /featured -->
	</div>

	<!-- content -->
	<div id="content-wrap" class="clear">

		<div id="content">

			<!-- main -->
			<div id="main">

				<h3>Recent Articles</h3>

				
				
				<?php
					foreach ($news->result() as $row){
				?>
					<div class="block odd">
						<?php echo anchor('Control/'.$row->gambar,"<img src='/lab/revisitugas01/root/images/".$row->gambar.".jpg' class='thumbnail' alt='img' width='240px' height='100px'/>")
						?>
						
						<div class="blk-top">
							<h4><?php
									echo anchor('Control/'.$row->gambar,$row->judul);
								?>
							</h4>	
							<p><span class="datetime"><?php echo $row->tglpost ?></span></p>
						</div>
						
						<div class="blk-content">
						
						<p>
						<?php echo $row->isisingkat ?> 				
						</p>					
								
						<p><? echo anchor('Control/'.$row->gambar, 'continue reading &raquo;', 'class="more"'); ?></p>
					
						</div>
					</div>	
				<?php
					}
				?>
				
				
				<div class="fix"></div>	
			
			<!-- /main -->	
			</div>
		
			
