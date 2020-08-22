<div class="container-sm all-border">
	<div class="payment-heading">Shipping Information</div>

				@if($guest_customer == 0)
				<div class="row">
					<input class="form-check-input" type="radio" name="shipping" id="existing_shipping" value="0" checked style="margin-left: 20px;">
					<label class="form-check-label shipping-heading" for="existing_shipping">
					   Existing Shipping Address
					</label>
					<div class="container-sm" id="ship_addresses">
						@foreach($CustomerAddressDetail as $rsCustomerAddressDetail)
						<input class="form-check-input" type="radio" name="existing_shipping" id="shipping_address" value="{{$rsCustomerAddressDetail->CID}}" style="margin-left: 25px;">
						<label class="form-check-label shipping-addresses" for="existing_shipping">
						  {{$rsCustomerAddressDetail->full_name}}, {{$rsCustomerAddressDetail->address1}}, {{$rsCustomerAddressDetail->city}}, {{$rsCustomerAddressDetail->state}}, {{$rsCustomerAddressDetail->country}}
						</label>
						<br>
						@endforeach
					</div>
					<input class="form-check-input" type="radio" name="shipping" id="new_shipping" value="1" style="margin-left: 20px;">
					<label class="form-check-label  shipping-heading" for="new_shipping">
					   New Shipping Address
					</label>
					<!-- <br> -->
					<div class="container new-shipping-container all-border" id="new_ship_address">
						
						<form action="" onsubmit="false" id="CustShipping">
							<div class="payment-heading">Add Shipping Address</div>
							<div style="margin-top: 10px;">
								<input type="hidden" name="CustomerID" value="{{$CustomerAddressDetail[0]->customer_id}}">
								<input type="hidden" name="isbilling" id="isbilling" value="0">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ship-col">
									<label for="fname">First Name</label>
									<input type="text" class="checkout-input" name="fname" id="fname" placeholder="First Name" required="">
									<div id="error_fname"></div>			 
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="lname">Last Name</label>
									<input type="text" class="checkout-input" name="lname" id="lname" placeholder="Last Name" required="">
									<div id="error_lname"></div>			 
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="address_1">Address 1</label>
									<input type="text" class="checkout-input" name="address_1" id="address_1" placeholder="Address 1" required="">			 
									<!-- <div id="response"></div> -->
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="address_2">Address 2</label>
									<input type="text" class="checkout-input" name="address_2" id="address_2" placeholder="Address 2">			 
									<!-- <div id="response"></div> -->
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="cname">Company Name</label>
									<input type="text" class="checkout-input" name="cname" id="cname" placeholder="Company Name" required="">			 
									<!-- <div id="response"></div> -->
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="phone_no">Phone No</label>
									<input type="text" class="checkout-input" name="phone_no" id="phone_no" placeholder="Phone No" required="">			 
									<div id="error_phone_no"></div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="city">City</label>
									<input type="text" class="checkout-input" name="city" id="city" placeholder="City" required="">			 
									<!-- <div id="response"></div> -->
								</div>

								

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="zip">Zip</label>
									<input type="text" class="checkout-input" name="zip" id="zip" placeholder="Zip" required="">			 
									<!-- <div id="response"></div> -->
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="state">Select State</label>
									<select class="checkout-input" name="state" id="state" required="">
										<option value="0">Select State</option>
	                                    <option value="AL">Alabama</option>
	                                    <option value="AR">Arkansas</option>
	                                    <option value="AZ">Arizona</option>
	                                    <option value="CA">California</option>
	                                    <option value="CO">Colorado</option>
	                                    <option value="CT">Connecticut</option>
	                                    <option value="DC">Dist Of Col</option>
	                                    <option value="DE">Delaware</option>
	                                    <option value="FL">Florida</option>
	                                    <option value="GA">Georgia</option>
	                                    <option value="IA">Iowa</option>
	                                    <option value="ID">Idaho</option>
	                                    <option value="IL">Illinois</option>
	                                    <option value="IN">Indiana</option>
	                                    <option value="KS">Kansas</option>
	                                    <option value="KY">Kentucky</option>
	                                    <option value="LA">Louisiana</option>
	                                    <option value="MA">Massachusetts</option>
	                                    <option value="MD">Maryland</option>
	                                    <option value="ME">Maine</option>
	                                    <option value="MI">Michigan</option>
	                                    <option value="MN">Minnesota</option>
	                                    <option value="MO">Missouri</option>
	                                    <option value="MS">Mississippi</option>
	                                    <option value="MT">Montana</option>
	                                    <option value="NC">North Carolina</option>
	                                    <option value="ND">North Dakota</option>
	                                    <option value="NE">Nebraska</option>
	                                    <option value="NH">New Hampshire</option>
	                                    <option value="NJ">New Jersey</option>
	                                    <option value="NM">New Mexico</option>
	                                    <option value="NV">Nevada</option>
	                                    <option value="NY">New York</option>
	                                    <option value="OH">Ohio</option>
	                                    <option value="OK">Oklahoma</option>
	                                    <option value="OR">Oregon</option>
	                                    <option value="PA">Pennsylvania</option>
	                                    <option value="RI">Rhode Island</option>
	                                    <option value="SC">South Carolina</option>
	                                    <option value="SD">South Dakota</option>
	                                    <option value="TN">Tennessee</option>
	                                    <option value="TX">Texas</option>
	                                    <option value="UT">Utah</option>
	                                    <option value="VA">Virginia</option>
	                                    <option value="VT">Vermont</option>
	                                    <option value="WA">Washington</option>
	                                    <option value="WI">Wisconsin</option>
	                                    <option value="WV">West Virginia</option>
	                                    <option value="WY">Wyoming</option>
									</select>	
											 
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<label for="country">Select country</label>
									<select class="checkout-input" name="country" id="country" required="">
										<option value="0">Select Country</option>
	                                    <option value="USA">USA</option>
									</select>	
								</div>
								 
							<div class="row text-center">
								<button type="submit" class="shipping-submit" id="add_shipping_address">Add Shipping</button>
								<button type="submit" class="shipping-submit" id="reset_form">Reset Form</button>
								<div id="response"></div>
							</div>	
								
								
							</div>
						</form>

					</div>
				</div>
				@else

					<div class="container new-guest-shipping-container all-border" id="new_ship_address">
						
						<form class="row" onsubmit="false" id="guestShipping">
							<div class="payment-heading">Add Shipping Address</div>
							<div style="margin-top: 10px;">
								<input type="hidden" name="CustomerID" value="{{$CustomerAddressDetail[0]->CID}}">
								<input type="hidden" name="isbilling" id="isbilling" value="0">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ship-col">
									<label for="fname">First Name</label>
									<input type="text" class="checkout-input" name="fname" id="fname" placeholder="First Name" required="">
									<div id="error_fname"></div>			 
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="lname">Last Name</label>
									<input type="text" class="checkout-input" name="lname" id="lname" placeholder="Last Name" required="">
									<div id="error_lname"></div>			 
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="address_1">Address 1</label>
									<input type="text" class="checkout-input" name="address_1" id="address_1" placeholder="Address 1" required="">			 
									<!-- <div id="response"></div> -->
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="address_2">Address 2</label>
									<input type="text" class="checkout-input" name="address_2" id="address_2" placeholder="Address 2">			 
									<!-- <div id="response"></div> -->
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="cname">Company Name</label>
									<input type="text" class="checkout-input" name="cname" id="cname" placeholder="Company Name" required="">			 
									<!-- <div id="response"></div> -->
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="phone_no">Phone No</label>
									<input type="text" class="checkout-input" name="phone_no" id="phone_no" placeholder="Phone No" required="">			 
									<div id="error_phone_no"></div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="city">City</label>
									<input type="text" class="checkout-input" name="city" id="city" placeholder="City" required="">			 
									<!-- <div id="response"></div> -->
								</div>

								

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="zip">Zip</label>
									<input type="text" class="checkout-input" name="zip" id="zip" placeholder="Zip" required="">			 
									<!-- <div id="response"></div> -->
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<label for="state">Select State</label>
									<select class="checkout-input" name="state" id="state" required="">
										<option value="0">Select State</option>
	                                    <option value="AL">Alabama</option>
	                                    <option value="AR">Arkansas</option>
	                                    <option value="AZ">Arizona</option>
	                                    <option value="CA">California</option>
	                                    <option value="CO">Colorado</option>
	                                    <option value="CT">Connecticut</option>
	                                    <option value="DC">Dist Of Col</option>
	                                    <option value="DE">Delaware</option>
	                                    <option value="FL">Florida</option>
	                                    <option value="GA">Georgia</option>
	                                    <option value="IA">Iowa</option>
	                                    <option value="ID">Idaho</option>
	                                    <option value="IL">Illinois</option>
	                                    <option value="IN">Indiana</option>
	                                    <option value="KS">Kansas</option>
	                                    <option value="KY">Kentucky</option>
	                                    <option value="LA">Louisiana</option>
	                                    <option value="MA">Massachusetts</option>
	                                    <option value="MD">Maryland</option>
	                                    <option value="ME">Maine</option>
	                                    <option value="MI">Michigan</option>
	                                    <option value="MN">Minnesota</option>
	                                    <option value="MO">Missouri</option>
	                                    <option value="MS">Mississippi</option>
	                                    <option value="MT">Montana</option>
	                                    <option value="NC">North Carolina</option>
	                                    <option value="ND">North Dakota</option>
	                                    <option value="NE">Nebraska</option>
	                                    <option value="NH">New Hampshire</option>
	                                    <option value="NJ">New Jersey</option>
	                                    <option value="NM">New Mexico</option>
	                                    <option value="NV">Nevada</option>
	                                    <option value="NY">New York</option>
	                                    <option value="OH">Ohio</option>
	                                    <option value="OK">Oklahoma</option>
	                                    <option value="OR">Oregon</option>
	                                    <option value="PA">Pennsylvania</option>
	                                    <option value="RI">Rhode Island</option>
	                                    <option value="SC">South Carolina</option>
	                                    <option value="SD">South Dakota</option>
	                                    <option value="TN">Tennessee</option>
	                                    <option value="TX">Texas</option>
	                                    <option value="UT">Utah</option>
	                                    <option value="VA">Virginia</option>
	                                    <option value="VT">Vermont</option>
	                                    <option value="WA">Washington</option>
	                                    <option value="WI">Wisconsin</option>
	                                    <option value="WV">West Virginia</option>
	                                    <option value="WY">Wyoming</option>
									</select>	
											 
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<select class="checkout-input" name="country" id="country" required="">
										<option value="0">Select Country</option>
	                                    <option value="USA">USA</option>
									</select>
								</div>
								 
							<div class="row text-center">
								<button type="submit" class="shipping-submit" id="update_guest">Add Shipping</button>
								<button type="submit" class="shipping-submit" id="reset_form">Reset Form</button>
								<div id="response"></div>
							</div>	
								
								
							</div>
						</form>

					</div>
				@endif
			</div>