<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 border padding text-center padding-tb2 margin-botsub22">
	<div data-pushbar-target="right" class="click">
		<img src="{{ asset('images/cart-icon-phone.png') }}" alt=""/>
		@if(isset($ProductDetailSize))
			<div class="cart-bg1">{{count($ProductDetailSize)}}</div>
		@else
			<div class="cart-bg1">0</div>
		@endif
	</div>
	<div class="clr"></div>
</div>
			<!--End Cart-->

			<!--Start Add Cart Product-->
			<aside data-pushbar-id="right" class="pushbar from_right" id="mobile_cart_area">
				<div class="title"><span data-pushbar-close class="close push_right"></span>
					<h6>Your Cart</h6>
				</div>


				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb20">

					<!--Start Btn Area-->
					<div class="btn-left">
						<a href="/">Continue</a>
					</div>

					<div class="btn-right">
						<a href="/checkout">checkout</a>
					</div>
					<!--End Btn Area-->

					<!--Start Cart Add Area-->
				@if(isset($ProductDetailSize))	
					@foreach($ProductDetailSize as $rsProductDetailSize)
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 border padding text-center">
						<img src="{{ $rsProductDetailSize->image_url_small }}" alt="" height="100px"/>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border padding">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding text-right">
							<a href="/cart">{{$rsProductDetailSize->name}}</a>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb5 text-right">
							<p><b>Quantity</b>: </p>
							<select class="cart-input" name="header_cart_qty" id="header_cart_qty" data-id="{{$rsProductDetailSize->product_id}}" data-type="1">
								<option value="0">Remove</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>

						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding text-right">
							<p><b>$ {{number_format((float)$rsProductDetailSize->sprice,2,'.','')}}</b>
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-cart padding"></div>
					@endforeach
				@endif
					<!--End Cart Add Area-->

					<!--Start Total Area-->
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border text-right padding">
						<p>Subtotal ({{count($ProductDetailSize)}} item)</p>
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 border text-right padding">
						<p>$ {{number_format((float)$TotPrice,2,'.','')}}</p>
					</div>

					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border text-right padding margin-t5">
						<p><b>Est. Total</b>
						</p>
					</div>

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 border text-right padding margin-t5">
						<p><b>$ {{number_format((float)$TotPrice,2,'.','')}}</b>
						</p>
					</div>
					<!--End Total Area-->

					<!--Start Btn Area-->
					<div class="btn-left">
						<a href="/">Continue</a>
					</div>

					<div class="btn-right">
						<a href="/checkout">checkout</a>
					</div>
					<!--End Btn Area-->


				</div>

			</aside>

<script type="text/javascript" src="/js/pushbar.js"></script>
<!-- Pushbar for Mobile cart -->
<script type="text/javascript">
    
    var pushbar = new Pushbar({
        blur:true,
        overlay:true,
    });

</script> 