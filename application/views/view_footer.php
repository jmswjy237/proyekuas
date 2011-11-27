<!-- footer -->
<div id="footer">	

	<!-- footer-outer -->	
	<div id="footer-outer" class="clear"><div id="footer-wrap">
	
		<div class="col-a">
				
			<h3>Contact Info</h3>
			
			<p>
			<strong>Phone: </strong>+681342469097
			</p>
			
			<p><strong>Address: </strong>Jl. A. Mangerangi No. 40, Makassar</p>
				
			<p><strong>E-mail: </strong>james.wijaya@uphsurabaya.ac.id</p>
			<p>Want more info - go to my <?php echo anchor('Control/contact','contact page')?></p>			
			
			<h3>Follow Me</h3>
			
			<div class="footer-list">
				<ul>				
					<li><a href="http://www.facebook.com/jmswijaya" class="facebook" target="_blank">&nbsp;&nbsp; Facebook</a></li>
					<li><a href="http://twitter.com/#!/jmswjy" class="twitter" target="_blank">&nbsp;&nbsp; Twitter</a></li>
				</ul>
			</div>					
				
		</div>
		
		<div class="col-a">			
			
			<h3>Site Links</h3>
			
			<div class="footer-list">
				<ul>				
					<!--<li><a href="index.html">Home</a></li>
					<li><a href="index.html">Style Demo</a></li>
					<li><a href="index.html">Blog</a></li>
					<li><a href="index.html">Archive</a></li>
					<li><a href="index.html">About</a></li>		
					<li><a href="index.html">Template Info</a></li>		
					<li><a href="index.html">Site Map</a></li>-->
					<?php
							foreach ($menu as $idx=>$value){
								echo "<li>".anchor($value, $idx)."</li>";
							}
					?>
				</ul>
			</div>					
				
		</div>
			
		<div class="col-a">
			<h3>Recently Post</h3>
			
			<div class="footer-list">
				<ul>
					<?php
						foreach ($news->result() as $row){
							echo "<li>".anchor('Control/'.$row->gambar,$row->judul)."</li>";
						}
					?>
				</ul>
			</div>
		</div>	

		<div class="col-b">
		
			<h3>About</h3>			
			
			<p>
			<a href="about"><img src="/lab/revisitugas01/root/images/gravatar.jpg" width="40" height="40" alt="James WIjaya" class="float-left" /></a>
			Hi, James Wijaya adalah nama yang kedua orang tua saya berikan kepada saya. Saya seorang Katolik dan memiliki nama baptis "Alexandros". Saya lahir di Ujung Pandang (Makassar) pada 4 Juli 1990. 
			<!--<a href="index.html">Learn more...</a>-->
			<?php
				echo anchor('Control/about', 'Read more ...');
			?>
			</p>			
			
		</div>		
		
		<div class="fix"></div>
		
		<!-- footer-bottom -->
		<div id="footer-bottom">
	
			<div class="bottom-left">
				<p>
				&copy; 2010 <strong>- Alexandros James Wijaya</strong>&nbsp; &nbsp; &nbsp;
				Design by <a href="http://www.styleshout.com/">styleshout</a>
				</p>
			</div>		
	
			<div class="bottom-right">
				<p>		
					<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
		   		    <a href="http://validator.w3.org/check/referer">XHTML</a>	|
					<a href="index.html">Home</a> |
					<strong><a href="#top" class="back-to-top">Back to Top</a></strong>								
				</p>
			</div>

		<!-- /footer-bottom -->		
		</div>
	
	<!-- /footer-outer -->		
	</div></div>		

<!-- /footer -->
</div>

</body>
</html>