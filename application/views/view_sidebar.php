<!-- sidebar -->
			<div id="sidebar">
							
				<div class="sidemenu">
					<h3>Menu</h3>
					<ul>				
						<!--<li><a href="index.html">Home</a></li>
						<li><a href="index.html#TemplateInfo">TemplateInfo</a></li>
						<li><a href="style.html">Style Demo</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="archives.html">Archives</a></li>-->
						<?php
							foreach ($menu as $idx=>$value){
								echo "<li>".anchor($value, $idx)."</li>";
							}
						?>
					</ul>	
				</div>
							
				<div class="sidemenu">
					
				</div>
				
				<h3>Image Gallery </h3>
				
				<p>
					<!--<a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
					<a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
					<a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
					<a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
					<a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
					<a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>	
					<a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>
					<a href="index.html"><img src="images/thumb.jpg" width="40" height="40" alt="thumbnail" /></a>-->
					<script type="text/javascript" src="/lab/revisitugas01/root/scripts/jquery.lightbox-0.5.js"></script>
					
					<script type="text/javascript">
					$(function() {
						$('#gallery a').lightBox();
					});
					</script>
					
					<div id="gallery">
						<ul>
							<li>
								<a href="/lab/revisitugas01/root/images/pirobox/ryn.jpg" title="">
									<img src="/lab/revisitugas01/root/images/pirobox/zryn.jpg" width="72" height="72" alt="" />
								</a>
							</li>
							<li>
								<a href="/lab/revisitugas01/root/images/pirobox/bareng.jpg" title="">
									<img src="/lab/revisitugas01/root/images/pirobox/zbareng.jpg" width="72" height="72" alt="" />
								</a>
							</li>
							<li>
								<a href="/lab/revisitugas01/root/images/pirobox/bareng2.jpg" title="">
									<img src="/lab/revisitugas01/root/images/pirobox/zbareng2.jpg" width="72" height="72" alt="" />
								</a>
							</li>
						</ul>
					</div>
				</p>					
				
			<!-- /sidebar -->				
			</div>		
			
		<!-- /content -->	
		</div>
	<!-- /content-wrap -->	
	</div>
<!-- /wrap -->
</div>