<?php $all_slider = $this->ProductModel->get_all_pro_top()?>

<div class="col-sm-12">
	<div id="slider-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#slider-carousel" data-slide-to="1"></li>
			<li data-target="#slider-carousel" data-slide-to="2"></li>
			<li data-target="#slider-carousel" data-slide-to="3"></li>
		</ol>
		
		<div class="carousel-inner">

			<?php
				$i=1;
				foreach ($all_slider as $slider) {
					if($i==1){
						echo "<div class='item active'>";
					}else{
						echo "<div class='item'>";
					}
			?>
			
				<div class="col-sm-6">
					<h1><span>ADOY</span> BAKERY</h1>
					<h2><?php echo $slider->judul_pro;?></h2>
					<p>Tempat Beli Kue Ter-Enak Di Dunia!! Dijamin Murah Dan Berkualitas </p>
				</div>
				<div class="col-sm-6">
					<img src="<?php echo base_url().$slider->gambar_pro;?>" class="girl img-responsive" alt="" />
					<img src="images/home/pricing.png"  class="pricing" alt="" />
				</div>
			</div>
			<?php $i++; } ?>

		</div>
		
		<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>
	</div>
	
</div>
