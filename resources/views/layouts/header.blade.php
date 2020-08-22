<!--Start Top Nav Bar-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border nav-topbar none">
	<div class="main-middle">

		<div class="col-lg-3 border padding margin-t15">
			<a href=""><i class="fa fa-envelope red-icon"></i>&nbsp; support@shoppingideausa.com</a>
		</div>
		<div class="col-lg-3 border padding margin-t15">
			<a href="tel:9058229375"><i class="fa fa-phone red-icon"></i>&nbsp; <b>1-424-245-7835</b></a>
		</div>


		<div class="col-lg-2 border text-center padding margin-t5">
			<img src="{{ asset('images/free-shipping.png') }}" alt=""/>
		</div>

		<div id="header_cart_detail">
			@include('ajax.ajax_header_cart_area')
		</div>
		<div class="col-lg-2 border padding text-center margin-t15">

		@if(Auth::user())
			<i class="fa fa-user blue-icon"></i>&nbsp;
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				     <b>{{Auth::user()->name}}</b>
				</button>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
		             			 document.getElementById('logout-form').submit();">
		                    	{{ __('Logout') }}
		                	</a>
						</li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                    @csrf
		                </form>
					</ul>
	               
			  	</div>	

			
		
		@else
			<i class="fa fa-user blue-icon"></i>&nbsp;
			<a href="/checkout"><b>Sign In</b></a>&nbsp; / &nbsp;
			<a href="/checkout"><b>Sign Up</b></a>
		@endif
		</div>



		<div class="clr"></div>
	</div>
	<div class="clr"></div>
</div>
<!--End Top Nav Bar-->

<!--Start Desktop Logo Nav and Serch-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border none padding">
	<nav class="navbar navbar-dark bg-primary padding-tb" id="demo">
		<div class="main-middle">

			<!--Start logo-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 border text-left">
				<a href="#"><img src="{{ asset('images/logo.png') }}"  alt=""/></a>
			</div>
			<!--End logo-->

			<!--Start Nav-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 border">
				<div class="navbar1">
					<div class="dropdown">
		<!--Working on Dynamic Menus Ghazanfar Ahsan on 10-1-2020-->				
						<button class="dropbtn">All Brands <i class="fa fa-caret-down"></i>	</button>
						<div class="dropdown-content">
							<div class="row">
								<div class="column">
									<div class="heading">All Brands</div>
								@php $count=0; 
								$tot=count($brandData);

								@endphp
								
								@foreach($brandData as $rsbrand)
								<a href="/{{$rsbrand->dest_link}}.htm">{{$rsbrand->name}}</a>
								@php $count=$count+1; @endphp
								@if($count%8==0 && $count<$tot)
								</div>
								<div class="column">
									<br>
									<div class="heading"></div>
								@endif
								
								@endforeach
								</div>
																	
								<div class="nav-box">
									<img src="{{ asset('images/boho-interiors.jpg') }}" alt=""/>
								</div>


							</div>
						</div>
					</div>

						@foreach($CatData as $rscatdata)
						<div class="dropdown">
						<button class="dropbtn">{{$rscatdata->name}}
	 					 <i class="fa fa-caret-down"></i>
						</button>
		<div class="dropdown-content">
							<div class="row">
								@php $count=0;
								$tot=count($rscatdata->children);
								@endphp
								
								

								<div class="column">
										<div class="heading">{{$rscatdata->name}}</div>
										@foreach($rscatdata->children as $rscCatData)
										<a href="/c/{{$rscCatData->store_keyword}}.htm">{{$rscCatData->name}}</a>
										@php $count++;
										@endphp
										
										@if($count%8==0 && $count<$tot)
										</div>
										<div class="column">
											<br>
											<div class="heading"></div>
										@endif
										@endforeach
								
																
								</div>
								<div class="nav-box">
									<img src="{{ asset('images/boho-interiors.jpg') }}" alt=""/>
								</div>
							</div>
						</div>
						</div>
				@endforeach	
			<!--Working on Dynamic Menus Ghazanfar Ahsan on 10-1-2020 ended-->		
					<a href="#home">Blog</a>

				</div>
					<div class="clr"></div>
			</div>
			<!--End Nav-->

			<!--Start Search-->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 border padding">
				<form>
					<div class="search">
						<input type="text" class="search-input" name="keyword" id="search-keyword" autocomplete="off" value="" placeholder="Search products" required="">
						<span class="search-button">
				<input type="image" name="" id="" value="submit" img src="{{ asset('images/search-icon.png') }}" width="24" height="24"/></span>
					


						<div class="clr"></div>
					</div>
				</form>
			</div>
			<!--End Search-->


			<div class="clr"></div>
		</div>
	</nav>
	<div class="clr"></div>
</div>
<!--End Desktop Logo Nav and Search-->


<!--Start Cell Phone and Tablet Logo Nav Serch cart-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 boder display padding">
	<nav class="navbar navbar-dark bg-primary padding15" id="demo1">

		<div class="main-middle">

			<!--Start Nav-->
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 border padding text-center">
				<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


					<div id='cssmenu'>
						<ul>
				<!-- Dynamic mobile menu by Ghazanfar Ahsan on 14-1-2020 -->			

							<li class='active has-sub'><a href='#'><span>All Brands</span></a>
								<ul>
									@foreach($brandData as $rsbrand)
									<li><a href='#'><span>{{$rsbrand->name}}</span></a></li>
									@endforeach
								
								</ul>
							</li>
							@foreach($CatData as $rscatdata)

							<li class='has-sub'><a href='#'><span>{{$rscatdata->name}}</span></a>
								<ul>
									@foreach($rscatdata->children as $rsccatdata)
										<li ><a href='#'><span>{{$rsccatdata->name}}</span></a>
					
									</li>
									@endforeach
								</ul>
							@endforeach

							<li><a href='#'><span>Storage</span></a>
							</li>
							<li><a href='#'><span>Contact Us</span></a>
							</li>
							<li><a href='#'><span>About us</span></a>
							</li>
							<li><a href='#'><span>Special Sale</span></a>
							</li>
							<li><a href='#'><span>Blog</span></a>
							</li>

						</ul>
					</div>

				</div>
				<span onclick="openNav()" class="menu-icon"><i class="fa fa-th-list" title="menu"></i></span>
			</div>
			<!--End Nav-->

			<!--Start logo-->
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border padding text-center">
				<a href="#"> <img src="{{ asset('images/logo.png') }}" alt="" height="43"/></a>
			</div>
			<!--End logo-->

			<!--Start Cart-->
			<div id="menu_header_cart_detail">
			@include('ajax.ajax_mobile_menu_cart')
			</div>
			<!--End Add Cart Product-->

			<!--Start Search box-->
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 border padding text-center">
				<button id="myBtn"> <img src="{{ asset('images/icon-search.png') }}" alt=""/></button>
			</div>
			<div id="myModal" class="modal">

				<!-- Modal content -->
				<div class="modal-content">
					<form>
						<div class="search">
							<input type="text" class="search-input" name="keyword" id="search-keyword" autocomplete="off" value="" placeholder="Search products" required="">
							<span class="search-button">
							<input type="image" name="" id="" value="submit" img src="{{ asset('images/search-icon.png') }}" width="24" height="24"/></span>
						


							<div class="clr"></div>
						</div>
					</form>
				</div>

			</div>
			<!--End Search box-->




			<div class="clr"></div>
		</div>

	</nav>
	<div class="clr"></div>
</div>
<!--End Cell Phone and Tablet Logo Nav Serch cart-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>


<script type="text/javascript">
	$( document ).ready( function () {


		$(".slidingDiv").hide();
		$(".show_hide").show();

		$('.show_hide').click( function () {
			$(".slidingDiv").slideToggle();
		} );

	} );
</script>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>-->
<script src="{{ asset('js/jquery.fixit.js') }}"></script>
<script>
	// $( document ).ready( function () {
	// 	$( "#demo" ).fixit();
	// } );

	// $( document ).ready( function () {
	// 	$( "#demo1" ).fixit();
	// } );
</script>


<!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->
<script src="{{ asset('js/script.js') }}"></script>


<script>
	function openNav() {
		document.getElementById( "mySidenav" ).style.width = "300px";
	}

	/* Set the width of the side navigation to 0 */
	function closeNav() {
		document.getElementById( "mySidenav" ).style.width = "0";
	}
</script>

<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function () {
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function () {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function ( event ) {
		if ( event.target == modal ) {
			modal.style.display = "none";
		}
	}
</script>


<script>
	var acc = document.getElementsByClassName( "accordion" );
	var i;

	for ( i = 0; i < acc.length; i++ ) {
		acc[ i ].onclick = function () {
			this.classList.toggle( "active" );
			var panel = this.nextElementSibling;
			if ( panel.style.maxHeight ) {
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			}
		}
	}
</script>


<script type="text/javascript">
///=====Ajax for Updating and deleting header Cart======///
$(document).on('change',"#header_cart_qty",function(e){
			
		var product_id=$(this).attr('data-id');
		var qty=$(this).val();
		var header_cart_type=$(this).attr('data-type');
		//alert('hellow world');
		$.ajaxSetup({
			headers: {
				    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		if(qty==0){

			$.post("{{route('headercartdelete')}}",{product_id,header_cart_type},function(response){
				if(header_cart_type==0){
					$("#header_cart_detail").html(response);
					$(".slidingDiv").hide();
					$(".show_hide").show();
					$('.show_hide').click( function () {
						$(".slidingDiv").slideToggle();
					});
				}
				else{
					$("#menu_header_cart_detail").html(response);
				}
				
			});
		}
		else{

			$.post("{{route('headercartupdate')}}",{product_id,qty,header_cart_type},function(data){
	
				if(header_cart_type==0){
					$("#header_cart_detail").html(data);
					$(".slidingDiv").hide();
					$(".show_hide").show();
					$('.show_hide').click( function () {
						$(".slidingDiv").slideToggle();
					});
				}
				else{
					$("#menu_header_cart_detail").html(data);
					///$('#mobile_cart_area').addClass('opened');
				}
			});
		}		
	
			
		
});
</script>