@extends('layouts.master')
@section('content')

<!--Start Main Middle Area--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border"> 
<div class="main-middle margin-tb20">

<!--Strat Breadcrumb--> 
<ul class="breadcrumb "> 
	<li><ahref="/index.php">Home</a></li>
	<li><a href=" #">Checkout</a></li>
</ul>
<!--End Breadcrumb-->
	<div id="loading-div-background">
		<div id="loading-div" class="ui-corner-all" >
			<img style="height:80px;margin:30px;" src="{{ asset('images/loading.gif') }}" alt="Loading.."/>
			<h2 style="color:gray;font-weight:normal;">Please wait....</h2>
		</div>
	</div>
<div class="container-fluid">
<!-- Start Shipping Address Area -->
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="shipping_address_container">
			

			@include('ajax.ajax_shipping_address')
		</div>
	</div>
<!-- Start Cart Area -->
	<div class="row" style="margin-top: 20px;">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
			<div class="container-fluid all-border" style="padding-left: 0px; padding-right: 0px;">
				<div class="payment-heading">Shopping Cart</div>
				@include('ajax.ajax_payment_cart')
			</div>
		</div>
	</div>
<!-- Start Billing Area -->
	<div class="row" style="margin-top: 20px;">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="container-fluid all-border" style="padding-left: 0px; padding-right: 0px;">
				<div class="payment-heading">Billing Information</div>
				<input class="form-check-input" type="checkbox" name="same_billing" id="same_billing" style="margin-left: 10px;">
				<label class="form-check-label shipping-heading" for="existing_shipping" style="font-weight: bolder;">
					  Copy the Shipping Address from above
				</label>
			
				<form action="/add_new_shipping.htm" method="post">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 20px;">
						<div class="payment-heading">Billing Address</div>
						<div class="container-fluid all-border">
							<input type="hidden" name="CustomerID" value="{{$CustomerAddressDetail[0]->customer_id}}">
							<input type="hidden" name="isbilling" id="isbilling" value="1">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="fname">First Name</label>
								<input type="text" class="checkout-input" name="billing_fname" id="billing_fname" placeholder="First Name" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="lname">Last Name</label>
								<input type="text" class="checkout-input" name="billing_name" id="billing_name" placeholder="Last Name" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="address_1">Address 1</label>
								<input type="text" class="checkout-input" name="billing_address_1" id="billing_address_1" placeholder="Address 1" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="address_2">Address 2</label>
								<input type="text" class="checkout-input" name="billing_address_2" id="address_2" placeholder="Address 2" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="cname">Company Name</label>
								<input type="text" class="checkout-input" name="billing_cname" id="billing_cname" placeholder="Company" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="phone_no">Phone No</label>
								<input type="text" class="checkout-input" name="billing_phone_no" id="billing_phone_no" placeholder="Phone" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="city">City</label>
								<input type="text" class="checkout-input" name="billing_city" id="billing_city" placeholder="City" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="zip">Zip</label>
								<input type="text" class="checkout-input" name="billing_zip" id="billing_zip" placeholder="Zip" required="">			 
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="billing_country">Country</label>
								<input type="text" class="checkout-input" name="billing_country" id="billing_country" placeholder="Zip" required="" value="USA">			 
							</div>
					
							</div>

						</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 20px;">
						<div class="payment-heading">PAYMENT INFORMATION</div>
						<div class="container-fluid all-border">
							<input type="hidden" name="CustomerID" value="{{$CustomerAddressDetail[0]->customer_id}}">
							<input type="hidden" name="isbilling" value="1">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="card_name">Card Name</label>
								<input type="text" class="checkout-input" name="card_name" id="card_name" placeholder="Card Name" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="payment_method">Payment Method</label>
								<select class="checkout-input" name="payment_method" id="payment_method" required="">
									<option>Select Payment Method</option>
								</select>			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="card_no">Card No</label>
								<input type="text" class="checkout-input" name="card_no" id="card_no" placeholder="Card No" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="exp_date">Expiration Date</label>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<select class="checkout-input" name="expiration_month" id="expiration_month" required="">
										<option>Select Month</option>
										<option>01</option>
										<option>02</option>
										<option>03</option>
										<option>04</option>
										<option>05</option>
										<option>06</option>
										<option>07</option>
										<option>08</option>
										<option>09</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<select class="checkout-input" name="expiration_year" id="expiration_year" required="">
										<option>Select Year</option>
										<option>2020</option>
										<option>2021</option>
										<option>2023</option>
										<option>2024</option>
										<option>2025</option>
										<option>2026</option>
										<option>2027</option>
										<option>2028</option>
										<option>2029</option>
										<option>2030</option>
										<option>2031</option>
										<option>2032</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
								<label for="card_no">CVC Code</label>
								<input type="text" class="checkout-input" name="cvc_code" id="cvc_code" placeholder="CVC Code" required="">			 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  text-center">
								<button type="submit" class="shipping-submit" id="Confirm_payment">Confirm Payment</button>			 
							</div>			 
									 
						</div>
					</div>
				</form>
				</div>	
			</div>
		</div>
	</div>
	
</div>
<!-- Start Shipping Address Area -->
<div class="clr"></div>
</div>
<!--End Main Middle Area--> 
<script type="text/javascript">

	$("input[name='shipping']").on('click',function(){

		if($(this).val() == 1)
			$('#new_ship_address').slideDown(1000);
		else
			$('#new_ship_address').slideUp(1000);
		
	});
//	Add Shipping address
	$("#add_shipping_address").on('click',function(){
		
		var data =$('#CustShipping').serializeArray();
		
		$.ajaxSetup({
			beforeSend:ShowProgressAnimation(),

            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      	});
		//console.log(data);
      	$.post("/add_new_shipping.htm",data,function(data){

      		$('#shipping_address_container').html(data);
      		                                   
      	}).done(function() {
    		$("#loading-div-background").hide();
    		$('#response').html('<h2>Your address added successfully</h2>');
      		$('#response').addClass('text-success');

  		}).fail(function(error){
  				console.log(error.responseJSON);
  				if(error.responseJSON.errors.fname){
  					$('#error_fname').html('<span>'+error.responseJSON.message+'</span>');
  					$('#error_fname').addClass('text-danger');
  				}
             	if(error.responseJSON.errors.lname){
  					$('#error_lname').html('<span>'+error.responseJSON.message+'</span>');
  					$('#error_lname').addClass('text-danger');
  				}
             	if(error.responseJSON.errors.phone_no){
  					$('#error_phone_no').html('<span>'+error.responseJSON.message+'</span>');
  					$('#error_phone_no').addClass('text-danger');
  				}
             	$("#loading-div-background").hide();
      	})
	});


	$(document).ready(function () {
        $("#loading-div-background").css({ opacity: 0.8 });
           
    });

    function ShowProgressAnimation(){
    	$("#loading-div-background").show();
    }

//	Reset Button 
$('#reset_form').click(function(){
		$("input[name='CustomerID']").val();
		$("input[name='isbilling']").val();
		$("#fname").val('');
		$("#lname").val('');
		$("#address_1").val('');
		$("#address_2").val('');
		$("#cname").val('');
		$("#phone_no").val('');
		$("#city").val('');
		$("#zip").val('');
		$("#state"). val('0');
})


//	Billing is same as shipping
$('#same_billing').on('change',function(){

	if($(this).prop("checked") == true){
		//console.log("BOX IS CHECKED");
		//alert("BOX IS CHECKED");
		$.ajaxSetup({
			beforeSend:ShowProgressAnimation(),
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    	});

		data = {

			id:$('#shipping_address:checked').val(),
		}
		console.log(data);
		$.post("/get_cust_address.htm",data,function(response){
			//console.log(response);
			$("#billing_fname").val(response.full_name);
			// $("#billing_lname").val(response.last_name);
			$("#billing_address_1").val(response.address1);
			$("#billing_address_2").val(response.address2);
			$("#billing_cname").val(response.company_name);
			$("#billing_phone_no").val(response.phone_no);
			$("#billing_city").val(response.city);
			$("#billing_zip").val(response.zip);
			$("#billing_state").val(response.state);
			$("billing_country").val(response.country);
			
		}).done(function() {
    		$("#loading-div-background").hide();

  		}).fail(function(){
			alert("Something went wrong");
		})
		
	}
//reset billing form	
	else{

		$("#billing_fname").val();
		$("#billing_lname").val();
		$("#billing_address_1").val();
		$("#billing_address_2").val();
		$("#billing_cname").val();
		$("#billing_phone_no").val();
		$("#billing_city").val();
		$("#billing_zip").val();
		$("#billing_state"). val('0');
	}


});

// Guest Customer Update

$("#update_guest").on('click',function(e){

	e.preventDefault();
	var data = $('#guestShipping').serializeArray();

		$.ajaxSetup({
			beforeSend:ShowProgressAnimation(),

            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      	});
		
      	$.post("/update_guest.htm",data,function(data){

      		$('#shipping_address_container').html(data);
      		                                   
      	}).done(function() {
    		$("#loading-div-background").hide();
    		$('#response').html('<h2>Your address added successfully</h2>');
      		$('#response').addClass('text-success');

  		}).fail(function(error){
  				console.log(error.responseJSON);
  				if(error.responseJSON.errors.fname){
  					$('#error_fname').html('<span>'+error.responseJSON.message+'</span>');
  					$('#error_fname').addClass('text-danger');
  				}
             	if(error.responseJSON.errors.lname){
  					$('#error_lname').html('<span>'+error.responseJSON.message+'</span>');
  					$('#error_lname').addClass('text-danger');
  				}
             	if(error.responseJSON.errors.phone_no){
  					$('#error_phone_no').html('<span>'+error.responseJSON.message+'</span>');
  					$('#error_phone_no').addClass('text-danger');
  				}
             	$("#loading-div-background").hide();
      	})



})

</script>

@endsection