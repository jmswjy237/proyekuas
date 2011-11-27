<div id="content-wrap" class="clear">
	
		<div id="content">		
			
			<!-- main -->
			<div id="main">	
					
				<div class="post">
					<?php foreach ($query->result() as $row){?>
					<h2><?php echo $row->judul?></h2>
					
					<p><?php echo "<img src=/lab/revisitugas01/root/images/".$row->gambar.".jpg align=left/> ".$row->isipanjang?></p>
					<?php }?>
				<!-- /post -->	
				</div>	
			
			<!-- /main -->	
			</div>