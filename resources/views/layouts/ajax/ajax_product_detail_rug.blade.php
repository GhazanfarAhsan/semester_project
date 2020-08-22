
<div id="container" class="all-border">
		<div id="parentHorizontalTab">

			<ul class="resp-tabs-list hor_1">
				<li>DETAILS</li>
				<li>DESCRIPTION</li>
				<li>SPECIFICATION</li>
				<li>SHIPPING & RETURNS</li>
			</ul>
			<div class="resp-tabs-container hor_1">

				<!--Start DETAILS-->
				<div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-bot10">
						<h1>Clair Gray Area Rug</h1>
					</div>

					<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 border padding margin-bot10">
						<h2>$184.17</h2>
					</div>

					<div class="col-xs-8 col-sm-8 col-md-10 col-lg-10 border freeshipping padding margin-top12"> 
+Free Shipping 
</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border market-price
						padding margin-bot10"> $90.17 </div>

						

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
						<p><b>Colour : Gary/Gold</b>
						</p>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 selected-color
						margin-tb10">
						@for($i=1;$i<=8;$i++)
						<div class="col-xs-4
						col-sm-3 col-md-2 col-lg-2 boder padding">
							<div class="zoom"> <img src="{{asset('images/p1.jpg')}}" alt=""/> </div>
							<div class="clr"></div>
						</div>
						<?php
						endfor;
						?> </div>
					
  				<!--Start Size Listing-->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding selected-size margin-tb10"
				data-pushbar-target="size">


					<div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 boder padding15">
					<p><b>{{count($prouctSize)}} sizes to choose from.</b></p>
					</div>

					<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 boder padding15 font-18"> 
					<i class="fa fa-chevron-right"></i> 
					</div>
	
			   </div>
			   	<aside data-pushbar-id="size" class="pushbar from_right">
				<div class="title heading-pd">
				<span data-pushbar-close class="close push_right white"></span>
				<p>Select a Size</p>
				</div>
		
				@foreach($productSize as $rsproductsize)
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border selected-size margin-tb10">


					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 boder text-left">
					<p class="font-16">$rsproductsize->size</p>
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 boder text-right"> 
					<p class="market-pd font-16"><b>$rsproductsize->msrp</b></p>
					</div>
					
					
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 boder text-left">
					<p class="font-16">Ships in 48 Hours</p>
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 boder text-right"> 
					<p class="price-red font-16"><b>$rsproductsize->price</b></p>
					</div>
	
	
			   </div>
				@endforeach	
					<div class="clr"></div>
				
				</aside>
				<!--End Size Listing-->
			

				<!--Start Select Quantity-->
		        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding selected-size margin-tb10"
				data-pushbar-target="quantity">


					<div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 boder padding15">
					<p><b>Select Quantity: 1</b></p>
					</div>

					<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 boder padding15 font-18"> 
					<i class="fa fa-chevron-right"></i> 
					</div>
	
			   </div>
			   	<aside data-pushbar-id="quantity" class="pushbar from_right">
				<div class="title heading-pd">
				<span data-pushbar-close class="close push_right white"></span>
				<p>Select Quantity</p>
				</div>
		
				<?php for($i=1;$i<=6;$i++) : ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border selected-size margin-tb10">


					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 boder text-left">
					<p class="font-16">QTY: 1</p>
					</div>

			   </div>
				<?php endfor; ?>	
					<div class="clr"></div>
				
				</aside>
				<!--End Select Quantity-->
					
					
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb10 padding">
				<a href="#"><img src="images/btn-addtocart.png"/></a>
				</div>	
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb10 padding text-center">
				<p class="red-text">
				Congratulation you have qualified  for 10% Discount of this item which is reflected on 
				your cart
				</p>
				</div>
				
			    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb10 padding text-center">
				<p>
				<b class="red-text">Note</b> : 
				Select the item/size from the dropdown (the picture may remain the same) With our great prices, buy more and save more.
				</p>
				</div>
					
				  <div class="clr"></div>
				</div>
				<!--End DETAILS-->
				
				<!--Start DESCRIPTION-->
				<div>
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Brand</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>Jaipur</p>
				</div>
				
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Item Code</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>RUG141590</p>
				</div>
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Product ID</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>113929</p>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb5 padding text-justify">
				<p>
				The Amuze collection showcases traditional and vintage inspirations, 
				creating whimsical displays of patterns with pops of vibrant hues. The Caba 
				area rug features a stunning washed effect in a vivid blue, pink, and gold 
				colorway. The ornate scrollwork and center medallion lends bohemian vibes 
				to any contemporary space, while the power-loomed polypropylene 
				construction offers durable style.
				</p>
				</div>
				<div class="clr"></div>
				</div>
				<!--End DESCRIPTION-->

				<!--Start SPECIFICATION-->
				<div>
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Size</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>5'3"X7'6"</p>
				</div>
				
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Material</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>100% Polypropylene</p>
				</div>
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Color</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>Blue</p>
				</div>
				
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Collection</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>Amuze</p>
				</div>
				
								
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Construction</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>Machine Made</p>
				</div>
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Pile Height</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>0.43</p>
				</div>
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Pattern</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>Blue</p>
				</div>
				
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Weave Type</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>Power Loomed</p>
				</div>
				
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Shape</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>Rectangle</p>
				</div>
				
				
				<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
				<p><b>Country</b></p>
				</div>
				
				<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
				<p>India</p>
				</div>
				
				
				
				
				
				
				<div class="clr"></div>
				</div>
				<!--End SPECIFICATION-->
				
				<!--Start SHIPPING & RETURNS-->
				<div>
				<p>SHIPPING & RETURNS</p>
				<div class="clr"></div>
				</div>
				<!--End SHIPPING & RETURNS-->

				
				
			</div>
		</div>
		<div class="clr"></div>
	</div>

