@extends('layouts.master')
@section('content')

<!--Start Main Middle Area--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border"> 
	<div class="main-middle margin-tb20">

		<!--Strat Breadcrumb--> 
		<ul class="breadcrumb "> 
			<li><ahref="/index.php">Home</a></li>
			<li><a href="#">Orian Rugs</a></li>
			<li><a href="#">Kids Rugs</a></li>
			<li>Orian Rugs Kids I'm Puzzled Rainbow Area Rug.</li>
		</ul>
		<!--End Breadcrumb-->

		<!--Start Product Image Area-->
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 margin-bot20 padding-all all-border">
				<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:500px;padding-left:90px;padding-right:0px;margin:0px auto 0px;">
					<div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
						<ul class="amazingslider-slides" style="display:none;">
							@foreach($productSize as $rsProductSize)
								<li><img src="{{ $rsProductSize->image_url}} "/></li>			
							@endforeach
							 </ul>
							<ul class="amazingslider-thumbnails">
								@foreach($productSize as $rsProductSize)
								<li><img src="{{ $rsProductSize->image_url_small}} "/></li>			
								@endforeach
							</ul>
						</div>
					</div>

					<div class="clr"></div>
			</div>
		<!--End Product Image Area-->


		<!--Start Product Detail Area-->
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 margin-bot20 padding-rb">

			<div id="container" class="all-border">
				<div id="parentHorizontalTab">

					<ul class="resp-tabs-list hor_1">
						<li>DETAILS</li>
						<li>DESCRIPTION</li>
						<li>SPECIFICATION</li>
						<li>SHIPPING & RETURNS</li>
					</ul>
					<div class="resp-tabs-container hor_1" id="prdouct_detail_ajax">
					 
					 @if($productData->product_type_id === 10)
						 @include('ajax.product_detail_rug_ajax');
					 @else
					 	@include('ajax.product_detail_decor_ajax');
					 @endif	 

					</div>
				</div>
				<div class="clr"></div>
			</div>

		</div>
		<!--End Product Detail Area-->



<!--Start Write a Review Area-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-t15">
	@include('ajax.ajax_product_review')
</div>
<!--End Write a Review Area-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
	@include('layouts.related-product')
</div>



<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
<!--End Main Middle Area-->


<!-- <script src="{{ asset('sliderengine/jquery.js') }}"></script> -->
<script src="{{ asset('sliderengine/amazingslider.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('sliderengine/amazingslider-1.css') }}">
<script src="{{ asset('sliderengine/initslider-1.js') }}"></script>
<script type="text/javascript">

/*========= ajax on selected size by Junaid bhai========*/
	$(document).on('click','#size_ajax', function(e){

		e.preventDefault();
		var productsize = $(this).attr('data-size'); ///Getting product size of the selected button
			
		$.ajaxSetup({
			headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.ajax({
		    type:'POST',
		    url:"{{ route('ajaxRequestIndex') }}",
		    data:{id:$(this).attr('data-id')},
		    success:function(data){
		        $("#prdouct_detail_ajax").html(data);         	
	        },
	    /*Display size on size button by Ghazanfar 10-1-2020*/
	        complete:function(data){   
				$('#selected-size').text(productsize);
				$("input[name='size']").val(productsize);
	        }

	    });	

	});

/*===Ajax Request For Saving Review By Ghazanfar on 16-1-2020===*/
	$(document).on('click','#rating-submit',function(e){

		e.preventDefault();

		$.ajaxSetup({
			headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		var name=$("input[name=rating-name]").val();
		var email=$("input[name=rating-email]").val();
		var comment=$("#rating-comments").val();
		var rating=parseInt($("#rating-star").children("option:selected").val());	
		var pid =parseInt($(this).attr('data-id'));
		$.ajax({
			type:'POST',
			url:"{{ route('ajaxReqsubmit')}}",
			data:{
				pid:pid,
				name:name,
				email:email,
				rating:rating,
				comments:comment,
				anonymous:0,
				active:0,
				allow_deny:0,
			},
			success:function(){				
				$('#reviewdiv').html('<h1>Data save successfully</h1>');
				},
			error:function(err){
				if(err.status==422){
					if(err.responseJSON.errors['name']){
						$('#reviewname').html("<span style='color:red;'>"+err.responseJSON.errors['name']+"</span>");
					}
					if(err.responseJSON.errors['email']){
						$('#reviewemail').html("<span style='color:red;'>"+err.responseJSON.errors['email']+"</span>");
					}
					if(err.responseJSON.errors['comments']){
						$('#reviewcomment').html("<span style='color:red;'>"+err.responseJSON.errors['comments']+"</span>");
					}
					if(err.responseJSON.errors['captcha']){
						$('#reviewcaptcha').html("<span style='color:red;'>"+err.responseJSON.errors['captcha']+"</span>");

					}
				}
			}
		});
	});
/*===ajax request for fetching Review by Ghazanfar on 16-1-2020===*/
	$(document).on('click','#fetching',function(e){

		e.preventDefault();
		var revhtml=""; // for response data variable
		//ajax setup  
		$.ajaxSetup({
			headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});	
		var pid =$(this).attr('data-id');		
		$.ajax({
			type:'GET',
			url:"/pd/ajaxfetchReview/"+pid,
			datatype:'json',
			success:function(response){
				$('#reviewdata').html(response);				
			}			
		});

	});
/*==Captcha refreshing==*/
$(document).on('click','#refresh',function(){

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
  	$.ajax({
	     type:'GET',
	     url:'/getcaptcha',
	     success:function(data){
	        $(".captcha span").html(data);
    }
  });
});
</script>
@endsection