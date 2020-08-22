<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 payment-cart-border margin-bot20">
<div class="row payment-cart-border">
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 payment-cart-heading">Product Detail</div>
	<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1  payment-cart-heading">del</div>
	<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 payment-cart-heading">Qty</div>
	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 payment-cart-heading">Price</div>
	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 payment-cart-heading">Total</div>
	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 payment-cart-heading">Ship-Cost</div>

</div>



@foreach($ProductDetailSize as $rsProductDetailSize)
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">

<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 padding">
<a href=""><img src="{{$rsProductDetailSize->image_url_small}}" alt=""/></a>
</div>

<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 padding">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<a href=""><b>{{$rsProductDetailSize->name}}</b></a>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-tb5">
<b>By:</b>{{$rsProductDetailSize->bname}}
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
<b>Size:</b>{{$rsProductDetailSize->size}}
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
<b>SKU #</b> {{$rsProductDetailSize->sku}}
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
<b>Product ID:</b> {{$rsProductDetailSize->product_id}}
</div>

</div>

</div>

<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center red-icon">
<i class="fa fa-trash-o" title="Romove" id="delete" data-id="{{$rsProductDetailSize->product_id}}"></i>
</div>

<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center">
<input type="text" class="cart-qty" name="cart_qty" id="cart_qty" maxlength="3" placeholder="{{$rsProductDetailSize->qty}}" data-id="{{$rsProductDetailSize->product_id}}">
</div>

<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-center">
<p class="cart-font">$ {{number_format((float)$rsProductDetailSize->sprice,2,'.','')}}</p>
</div>

<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-center">
<p class="cart-market">$ {{number_format((float)($rsProductDetailSize->sprice*$rsProductDetailSize->qty),2,'.','')}}</p>

<p class="cart-font">$ {{number_format((float)($rsProductDetailSize->sprice*$rsProductDetailSize->qty)-($rsProductDetailSize->sprice*0.1*$rsProductDetailSize->qty),2,'.','')}}</p>	
<p class="cart-red">(10% Discount)</p>
</div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
<p class="cart-font">Free</p>
</div>
@endforeach


<!-- <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4 border padding text-right right">
<button type="submit" class="cart-continue" id="continue-shopping">Continue Shopping</button>
</div> -->
</div>
<!--Strat Shopping Cart Area--> 
<div class="col-xs-12 col-sm-7 col-md-9 col-lg-9 text-center">
	<button type="submit" class="shipping-submit" id="add_shipping_address">Update</button>
</div>
<div class="col-xs-12 col-sm-5 col-md-3 col-lg-3 border margin-bot20 payment-cart-total">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">

<!-- <div class="checkout-heading">Shopping Cart</div> -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-left">
<p class="payment-cart-text">Sub Total</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-right">
<p class="payment-cart-text">$ {{number_format((float)$TotPrice,2,'.','')}}</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-left">
<p class="payment-cart-text">Shipping Charger</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-right">
<p class="payment-cart-text">Free</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-left">
<p class="payment-cart-text">Tax</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-right">
<p class="payment-cart-text">$ 30.00</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-left">
<p class="payment-cart-text">Total</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-right">
	
<p class="payment-cart-text">$ {{number_format((float)$TotPrice,2,'.','')}}</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-left red-text">
<p class="payment-cart-text"><b>Final Total</b></p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-right red-text">
<p class="payment-cart-text"><b>$ {{number_format((float)($TotPrice+30.00),2,'.','')}}</b></p>
</div>

</div>

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<a href="/checkout"><button type="submit" class="cart-proceed" id="continue-shopping">Proceed To checkout</button></a>
</div> -->

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<img src="images/visa-mastercard-icon.jpg" alt=""/>
</div> -->

</div>
<!--End Shopping Cart Area--> 



<div class="clr"></div>
</div>
