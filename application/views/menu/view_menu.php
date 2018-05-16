        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><span class="fa  fa-sitemap"></span>&nbsp;<?php echo $isi_menu['menu'];?></h3>
            </div>
			<div class="col-md-12">
			<?php
			echo str_replace('..//',base_url(),str_replace('<p>','<p align="justify">',$isi_menu['isi_menu']));
			?>
			</div>
			
        </div>
        <!-- /.row -->


