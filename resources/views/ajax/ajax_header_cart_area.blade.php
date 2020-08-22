
<!--Start View Cart -->
<div class="col-lg-2 border padding">
<a href="#" class="show_hide">
	<div class="cart-main">
		
		<div class="cart1">
			<img src="{{ asset('images/cart-icon.png') }}" alt=""/>
				@if(isset($ProductDetailSize))
					<div class="cart-bg">{{count($ProductDetailSize)}}</div>
				@else
					<div class="cart-bg">0</div>
				@endif
		</div>
				

		@if(isset($TotPrice))
			<div class="cart2 cart-text">
				<b>MY CART</b>
				</br>
				<span class="red-text"><b>$ {{number_format((float)$TotPrice,2,'.','')}}</b></span>
			</div>

			<div class="clr"></div>
			</div>
			</a>
			</div>
		@else
			<div class="cart2 cart-text">
				<b>MY CART</b>
				</br>
				<span class="red-text"><b>$ 0.0</b></span>
			</div>

			<div class="clr"></div>
			</div>
			</a>
			</div>
		@endif
	
<!--End View Cart -->

		<!--Start Cart Box Product List-->
		<div class="slidingDiv">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">

				<!--Start Btn Area-->
				<div class="btn-left">
					<a href="/">Continue Shopping</a>
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
						<select class="cart-input" name="header_cart_qty" id="header_cart_qty" data-id="{{$rsProductDetailSize->product_id}}" data-type="0">
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
					<a href="/">Continue Shopping</a>
				</div>

				<div class="btn-right">
					<a href="/checkout">checkout</a>
				</div>
				<!--End Btn Area-->
			@endif

	</div>

	<div class="clr"></div>
	</br>
	<a href="#" class="show_hide"><img src="{{ asset('images/close') }}" width="20" height="20" alt=""/> Close</a>
	</br>
	</br>
	</div>
<!--End Cart Box Product List-->
