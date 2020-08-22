@extends('layouts.master')

@section('content')

<!--Start Main Middle Area--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border"> 
<div class="main-middle margin-tb20">

<!--Strat Breadcrumb--> 
<ul class="breadcrumb "> 
		<li><ahref="/index.php ">Home</a></li>
		 <li><a href=" #">cart</a></li>
</ul>
<!--End Breadcrumb-->

<h1 class="margin-bot20">My Cart</h1>

<!--Strat Cart Area--> 
<div id="cartdetail">
@include('ajax.ajax_cart')
</div>
<!--End Cart Area--> 
<div class="clr"></div>
</div>
<!--End Main Middle Area--> 

<script type="text/javascript">

///=====Ajax for Updating Cart======///
$(document).on('keypress',"input[name='cart_qty']",function(e){
	
		
		if(e.keyCode=='13'){
			var product_id=$(this).attr('data-id');
			var qty=$(this).val();

			$.ajaxSetup({
				headers: {
				    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.post("{{route('cartupdate')}}",{product_id,qty},function(data){

				$("#cartdetail").html(data);
				
			});
		}
	});


///=====Ajax for Deleting Cart======///
$(document).on('click','#delete',function(){

	var product_id=$(this).attr('data-id');
	//alert(product_id);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.post("{{route('cartdelete')}}",{product_id},function(response){

		$("#cartdetail").html(response);
	});


});
</script>
@endsection 