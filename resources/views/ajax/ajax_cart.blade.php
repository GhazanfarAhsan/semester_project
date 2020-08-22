
<div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 border margin-bot20">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border cart-heading cart-display">Product Detail</div>
<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 border cart-heading cart-display">del</div>
<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 border cart-heading cart-display">Qty</div>
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border cart-heading cart-display">Price</div>
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border cart-heading cart-display">Total</div>
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border cart-heading cart-display">Ship-Cost</div>


@foreach($ProductDetailSize as $rsProductDetailSize)
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 cart-border">

<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 border padding">
<a href=""><img src="{{$rsProductDetailSize->image_url_small}}" alt=""/></a>
</div>

<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 border padding">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
<a href=""><b>{{$rsProductDetailSize->name}}</b></a>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb5">
<b>By:</b>{{$rsProductDetailSize->bname}}
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 border">
<b>Size:</b>{{$rsProductDetailSize->size}}
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 border">
<b>SKU #</b> {{$rsProductDetailSize->sku}}
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 border">
<b>Product ID:</b> {{$rsProductDetailSize->product_id}}
</div>

</div>

</div>

<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 cart-border text-center red-icon">
<i class="fa fa-trash-o" title="Romove" id="delete" data-id="{{$rsProductDetailSize->product_id}}"></i>
</div>

<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 cart-border text-center">
<input type="text" class="cart-qty" name="cart_qty" id="cart_qty" maxlength="3" placeholder="{{$rsProductDetailSize->qty}}" data-id="{{$rsProductDetailSize->product_id}}">
</div>

<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 cart-border text-center">
<p class="cart-font">$ {{number_format((float)$rsProductDetailSize->sprice,2,'.','')}}</p>
</div>

<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 cart-border text-center">
<p class="cart-market">$ {{number_format((float)($rsProductDetailSize->sprice*$rsProductDetailSize->qty),2,'.','')}}</p>

<p class="cart-font">$ {{number_format((float)($rsProductDetailSize->sprice*$rsProductDetailSize->qty)-($rsProductDetailSize->sprice*0.1*$rsProductDetailSize->qty),2,'.','')}}</p>	
<p class="cart-red">(10% Discount)</p>
</div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 cart-border text-center">
<p class="cart-font">Free</p>
</div>
@endforeach


<div class="col-xs-12 col-sm-8 col-md-4 col-lg-4 border padding text-right right">
<button type="submit" class="cart-continue" id="continue-shopping">Continue Shopping</button>
</div>


<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 padding margin-tb10">

<div class="checkout-heading">Apply Promation Coupon code Here</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all-border padding10">

<p class="margin-bot20 text-center">
If you have any coupon code, you can enter here and click Apply. The discount will be reflected in the cart
</p>

<div class="col-xs-12 col-sm-8 col-md-7 col-lg-8 border">
<input type="text" class="checkout-input" name="ccode" id="ccode" placeholder="Coupan Code" required="">
</div>	


<div class="col-xs-12 col-sm-4 col-md-5 col-lg-4 border">
<button type="submit" class="cart-apply" id="continue">Apply Now</button>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-center">
<p>
If you see issues with the coupon code.please contact is <a href="#">Here</a>
</p>
</div>

</div>
</div>
</div>
<!--Strat Shopping Cart Area--> 
<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 border margin-bot20">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">

<div class="checkout-heading">Shopping Cart</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all-border padding10">

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border-bottom margin-tb5 padding text-left">
<p>Sub Total</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border-bottom margin-tb5 padding text-right">
<p>$ {{number_format((float)$TotPrice,2,'.','')}}</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border-bottom margin-tb5 padding text-left">
<p>Shipping Charger</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border-bottom margin-tb5 padding text-right">
<p>Free</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border-bottom margin-tb5 padding text-left">
<p>Tax</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border-bottom margin-tb5 padding text-right">
<p>$30.00</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border-bottom margin-tb5 padding text-left">
<p>Total</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border-bottom margin-tb5 padding text-right">
	
<p>$ {{number_format((float)$TotPrice,2,'.','')}}</p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-left margin-top5 red-text">
<p><b>Final Total</b></p>
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding text-right margin-top5 red-text">
<p><b>$ {{number_format((float)($TotPrice+30.00),2,'.','')}}</b></p>
</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<a href="/checkout"><button type="submit" class="cart-proceed" id="continue-shopping">Proceed To checkout</button></a>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<img src="images/visa-mastercard-icon.jpg" alt=""/>
</div>

</div>
<!--End Shopping Cart Area--> 



<div class="clr"></div>
</div>
