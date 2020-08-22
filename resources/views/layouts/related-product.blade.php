<!--Start Related Product Area-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-tob30">


		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding text-center">
			<h2>YOU MAY ALSO LIKE THIS</h2>

			<p class="margin-bot20">
				Score up to 80% off while these deals last.
			</p>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">

			<ul id="flexiselDemo3">
				@foreach($relProduct as $rsrelProduct)
				<li>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box-border">


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-bot10 text-center">
<a href="#"><img src="{{$rsrelProduct->img_url_small}}" alt="" width="100%" /></a>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-bot10 name text-center">
<a href="#">{{$rsrelProduct->name}}</a>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-bot10 text-center">
<div class="market">Was: <span class="price-cut">{{$rsrelProduct->msrp}}</span></div>
<div class="clr"></div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-bot10 text-center">
<div class="market">Now: <span class="price">{{$rsrelProduct->price}}</span></div>
<div class="clr"></div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
<a href="#"><img src="images/btn-addtocart2.png" alt=""/></a>
</div>


</div>

					</div>
				</li>

				@endforeach
			</ul>

		</div>


		<div class="clr"></div>

	<div class="clr"></div>
</div>
<!--End Related Product Area-->

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
<script src="{{ asset('js/jquery.flexisel.js') }}"></script>
<script type="text/javascript">
	$( window ).load( function () {

		$( "#flexiselDemo3" ).flexisel( {
			visibleItems: 4,
			itemsToScroll: 1,
			autoPlay: {
				enable: true,
				interval: 5000,
				pauseOnHover: true
			}
		} );

	} );
</script>