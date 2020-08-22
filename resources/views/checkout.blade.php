@extends('layouts.master')

@section('content')

<!--Start Main Middle Area--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border"> 
<div class="main-middle margin-tb20">

<!--Strat Breadcrumb--> 
<ul class="breadcrumb "> 
		<li><ahref="/index.php ">Home</a></li>
		 <li><a href=" #">Checkout</a></li>
</ul>
<!--End Breadcrumb-->

<h1 class="margin-bot20">Checkout</h1>


<!--Strat Register Form--> 
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border margin-bot20">
<div class="checkout-heading">{{ __('Register') }}</div>

<form action="{{ route('register') }}" method="post">
      @csrf
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all-border padding15">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">{{ __('Name') }}</div>
	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
	<input type="text" class="checkout-input @error('reg_name') is-invalid @enderror" name="reg_name" value="{{ old('reg_name') }}" id="reg_name" placeholder="Full Name" required="">
            @error('reg_name')
             <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
             </span>
            @enderror
    </div>
	

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Last Name</div>
	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
	<input type="text" class="checkout-input" name="lname" id="lname" placeholder="Last Name" required="">
    </div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Company Name</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input" name="cname" id="cname" placeholder="Company Name" required="">
 
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Street Address</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input" name="sddress" id="sddress" placeholder="Street Address" required="">
</div>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">City</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input" name="city" id="city" placeholder="City" required="">
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Country</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<select class="checkout-input" name="country" id="country" required="">
<option value="">Select Country</option>
<option value="usa">USA</option>
</select>
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">
State/Province
</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<select class="checkout-input" name="state" id="state" required="">
<option value="">Select State</option>
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


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Zip/Postal Code</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input" name="zip" id="zip" placeholder="Zip/Postal Code" required="">
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Phone</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input" name="phone" id="phone" placeholder="Phone" required="">
</div>


<!-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Fax</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input" name="fax" id="fax" placeholder="Fax" required="">
</div> -->

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">{{ __('E-Mail Address') }}</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input @error('reg_email') is-invalid @enderror" name="reg_email" value="{{ old('reg_email') }}" id="reg_email" placeholder="Email" required="">
      @error('reg_email')
            <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
            </span>
      @enderror
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">{{ __('Password') }}</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="Password" class="checkout-input @error('reg_password') is-invalid @enderror" name="reg_password" id="reg_password" placeholder="Password" required="">
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Confirm Password</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="Password" class="checkout-input" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required="">
      @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
            </span>
      @enderror
</div>

<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4 border padding">
</div>
 
<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 border padding">
<button type="submit" class="checkout-submit" id="register">{{ __('Register') }}</button>
</div>

<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4 border padding">
</div>


</div>
</form>


<div class="clr"></div>
</div>
<!--End Register Form--> 


<!--Start Sign In Form--> 
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border margin-bot20">
<div class="checkout-heading">Sign In</div>


<form action="{{ route('login') }}" method="post">
      @csrf
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all-border padding15">


<!--Start Already Registered? Sign In Form--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding margin-bot20">

<div class="checkout-heading">Already Registered? Sign In</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all-border padding15">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">{{__('E-Mail Address') }}</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input" name="email" id="email" placeholder="Email" required="">

      @error('email')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
      </span>
      @enderror
</div>	

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">{{ __('Password') }}</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="Password" class="checkout-input" name="password" id="password" placeholder="Password" required="">
      @error('password')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
      </span>
      @enderror
</div>
<!-- Authenticated forget password request Ghazanfar 11-02-2020 -->
<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-t10 text-center">

      @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}"><i class="fa fa-unlock"></i> 
                  {{ __('Forgot Your Password?') }}
            </a>
      @endif
</div> -->

<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4 border padding">
</div>


<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 border padding">
<button type="submit" class="checkout-submit" id="login">login</button>
</div>
</div>
</form>
<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4 border padding">
</div>


</div>

</div>

<!--End Already Registered? Sign In Form--> 


<!--Start FORGET PASSWORD? Form--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding margin-bot20">

<div class="checkout-heading">Reset Password</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all-border padding15">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Email Address</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input" name="forget_email" id="forget_email" placeholder="Email" required="">
<div id="response"></div>
</div>	


<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4 border padding">
</div>


<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 border padding">
<button type="submit" class="checkout-submit" id="forget-password">Sent</button>
</div>
<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4 border padding">
</div>

</div>
</div>
<!--End FORGET PASSWORD? Form--> 


<!--Start Sign in as Guest Form--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
<form action="{{ route('payment')}}" method="post">
      @csrf
<div class="checkout-heading">Sign in as Guest</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 all-border padding15">

<p class="margin-bot20">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.	
</p>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 border padding margin-top9">Email</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 border padding">
<input type="text" class="checkout-input" name="email" id="email" placeholder="Email" required="">
<!-- field for guest -->
<input type="hidden" class="checkout-input" name="is_guest" value="1">    
</div>	


<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4 border padding">
</div>


<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 border padding">
<button type="submit" class="checkout-submit" id="continue">Continue</button>
</div>

<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4 border padding">
</div>

</div>
</form>
</div>
<!--End Sign in as Guest Form--> 





<div class="clr"></div>

<!--End Sign In Form--> 




<div class="clr"></div>
</div>
<div class="clr"></div>

<!--End Main Middle Area--> 

<script type="text/javascript">

 //******Ajax for Forget Password******//
 $(document).on('click','#forget-password',function(){
      var forget_email=$("#forget_email").val();
      
      //alert(forget_email);

      $.ajaxSetup({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });

      $.post("{{ route('password.email') }}",{forget_email},function(data){

            //alert(data.status);
            $("#response").html('<p class="text-success">An email has been sent. Please follow the instruction to reset you password.</p>');                        
      }).fail(function(){
            $("#response").html('<p class="text-danger">Something went wrong</p>');  
      });
 
 });

</script>
@endsection 

