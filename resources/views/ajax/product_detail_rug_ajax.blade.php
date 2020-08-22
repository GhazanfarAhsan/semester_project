			
				<!--Start DETAILS-->
						<div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-bot10">
								<h1>{{ $productData->name }}</h1>
							</div>

							<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 border padding margin-bot10">
								<h2>{{ $productData->price }}</h2>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-10 col-lg-10 border freeshipping padding margin-top12"> 
								+Free Shipping 
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border market-price padding margin-bot10"> {{ $productData->msrp }} </div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
								<p><b>Colour : {{ $productData->productRug->color }}</b>
								</p>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 selected-color margin-tb10">
								@foreach($productSize as $rsProductSize)
								<div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 boder padding">
									<div class="zoom"> <img src="{{ $rsProductSize->image_url_small }}" alt="" width="65" height="92" /> </div>
									<!-- {{ $rsProductSize->image_url_small }} -->
									<div class="clr"></div>
								</div>
								@endforeach
							</div>

							<!--Start Size Listing-->
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding selected-size margin-tb10" data-pushbar-target="size">

								<div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 boder padding15">
									<p id="selected-size"><b>{{ count($productSize) }} sizes to choose from.</b></p>
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

								@foreach($productSize as $rsProductSize)
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border selected-size margin-tb10" data-id="{{ $rsProductSize->id  }}" id="size_ajax" data-size="{{ $rsProductSize->size }}">


									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 boder text-left">
										<p class="font-16" id="size" data-id="{{ $rsProductSize->size }}">{{ $rsProductSize->size }}</p>
									</div>

									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 boder text-right"> 
										<p class="market-pd font-16"><b>{{ $rsProductSize->price }}</b></p>
									</div>


									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 boder text-left">
										<p class="font-16">Ships in 48 Hours</p>
									</div>

									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 boder text-right"> 
										<p class="price-red font-16"><b>{{ $rsProductSize->msrp }} </b></p>
									</div>


								</div>
								@endforeach
								<div class="clr"></div>

							</aside>
							<!--End Size Listing-->


							<!--Start Select Quantity-->
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding selected-size margin-tb10" data-pushbar-target="quantity" >
								


								<div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 boder padding15">
									<p id="show-qty"><b>Select Quantity: 1</b></p>
									
								</div>

								<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 boder padding15 font-18"> 
									<i class="fa fa-chevron-right"></i> 
								</div>
								

							</div>
							
							<aside data-pushbar-id="quantity" class="pushbar from_right" id="quandiv">
								
								<div class="title heading-pd">
									<span data-pushbar-close class="close push_right white"></span>
									<p>Select Quantity</p>
								</div>
								<!--for click event for quatity -->
								<div id="qty-container">

									@for($i=1;$i<=6;$i++)
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border selected-size margin-tb10 " id="qty-col1">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 boder text-left " id="qty-col2">
											<p class="font-16" id="slt-qty" data-id="{{ $i }}">{{ $i }}</p>
										</div>
									</div>
									@endfor
								</div>	
								<div class="clr"></div>

							</aside>

							<form name="frmCart" method="post" action="{{ route('cart.redir') }}">
								@csrf
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb10 padding">

									<!-- <a href="#"><img src="{{ asset('images/btn-addtocart.png') }}"/></a> -->
									
				
									<input type="hidden" name="product_id" value="{{ $productData->id}}">
									<input type="hidden" name="prod_qty" id="pquantity" value="">
									<input type="hidden" name="size" value="">
									<button type="Submit"><img src="{{ asset('images/btn-addtocart.png') }}" width="102" height="32" /></button>

								</div>
							
							</form>	
							<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb10 padding">
								<a href="/cart"><img src="{{ asset('images/btn-addtocart.png') }}"/></a>
							</div>	 -->

							<!--End Select Quantity-->

							
							<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb10 padding">
								<a href="/cart"><img src="{{ asset('images/btn-addtocart.png') }}"/></a>
							</div> -->	

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
								<p>{{ $productData->brand->name }}</p>
							</div>


							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Item Code</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{ $productData->sku }}</p>
							</div>

							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Product ID</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{ $productData->id }}</p>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb5 padding text-justify">
								<p>
									{{ $productData->description }}
								</p>
							</div>
							<div class="clr"></div>
						</div>
						<!--End DESCRIPTION-->

						<!--Start SPECIFICATION-->
						<div>
							@if($productData->productRug->size != "")
								<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
									<p><b>Size</b></p>
								</div>

								<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
									<p>{{ $productData->productRug->size }}</p>
								</div>
							@endif
							@if($productData->productRug->material != "")
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Material</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{ $productData->productRug->material }}</p>
							</div>
							@endif
							@if($productData->productRug->color != "")
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Color</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{ $productData->productRug->color }}</p>
							</div>
							@endif
							@if($productData->productRug->collection != "")
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Collection</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{ $productData->productRug->collection }}</p>
							</div>
							@endif
							@if($productData->productRug->construction != "")
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Construction</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{ $productData->productRug->construction }}</p>
							</div>
							@endif
							@if($productData->productRug->pile_height != "")
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Pile Height</b></p>
							</div>

							<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{ $productData->productRug->pile_height }}</p>
							</div>
							@endif
							@if($productData->productRug->pattern != "")
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Pattern</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{  $productData->productRug->pattern}}</p>
							</div>
							@endif
							@if($productData->productRug->weave_type != "")
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Weave Type</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{  $productData->productRug->weave_type }}</p>
							</div>
							@endif
							@if($productData->productRug->shape != "")
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Shape</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{ $productData->productRug->shape }}</p>
							</div>
							@endif
							@if($productData->productRug->country != "")
							<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 border margin-tb5 padding">
								<p><b>Country</b></p>
							</div>

							<div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 border margin-tb5 padding">
								<p>{{  $productData->productRug->country }}</p>
							</div>
							@endif



							<div class="clr"></div>
						</div>
						<!--End SPECIFICATION-->

						<!--Start SHIPPING & RETURNS-->
						<div>
							<p>SHIPPING & RETURNS</p>
							<div class="clr"></div>
						</div>
						<!--End SHIPPING & RETURNS-->

   
    <script type="text/javascript" src="{{ asset('js/pushbar.js') }}"></script>
	<script type="text/javascript">
		var pushbar = new Pushbar({
		blur:true,
		overlay:true,
		});

	</script> 

	<link rel="stylesheet" type="text/css" href="{{ asset('css/easy-responsive-tabs.css') }} "/>
	<script src="{{ asset('js/easyResponsiveTabs.js') }}"></script>
	<script type="text/javascript">

	$( document ).ready( function () {


		//Horizontal Tab
		$( '#parentHorizontalTab' ).easyResponsiveTabs( {
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function ( event ) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $( '#nested-tabInfo' );
				var $name = $( 'span', $info );
				console.log($tab.text());
				$name.text( $tab.text() );
				$info.show();
			}
		} );
		
		
		$( '#parentHorizontalTab2' ).easyResponsiveTabs( {
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function ( event ) { // Callback function if tab is switched
				var $tab = $( this );
				var $info = $( '#nested-tabInfo' );
				var $name = $( 'span', $info );
				$name.text($tab.text());
				$info.show();
			}
		} );


		// Child Tab
		$( '#ChildVerticalTab_1' ).easyResponsiveTabs( {
			type: 'vertical',
			width: 'auto',
			fit: true,
			tabidentify: 'ver_1', // The tab groups identifier
			activetab_bg: '#fff', // background color for active tabs in this group
			inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
			active_border_color: '#c1c1c1', // border color for active tabs heads in this group
			active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
		} );

		//Vertical Tab
		$( '#parentVerticalTab' ).easyResponsiveTabs( {
			type: 'vertical', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function ( event ) { // Callback function if tab is switched
				var $tab = $( this );
				var $info = $( '#nested-tabInfo2' );
				var $name = $( 'span', $info );
				$name.text( $tab.text() );
				$info.show();
			}
		} );




	} );

//Working on size and quantity on 10-Jan-2020 by Ghazanfar Ahsan
	
$(document).on('click','#qty-col2 #slt-qty',function(){

			var val = $(this).attr('data-id');

			$('#show-qty').text(val);
			//$('#prod_qty').val(val);
			$('#pquantity').val(val);
			$('#quandiv').removeClass('opened');
			//console.log($('#pquantity').val());
			
});



</script>

