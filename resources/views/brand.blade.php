
@extends('layouts.master')
@section('content')


<!--Start Main Middle Area--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border"> 
<div class="main-middle margin-tb20">


<!--Strat Breadcrumb--> 
<ul class="breadcrumb "> 
		<li><ahref="/index.php">Home</a></li>
		 <li><a href=" #">Casual</a></li>
</ul>
<!--End Breadcrumb-->



<!--Strat Middle Categories List Area--> 
<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<h1>{{count($objProduct)}}</h1>
<p>{{count($objProduct)}} results. {{$objProduct->currentPage()}} of {{ $objProduct->lastPage()}}</p>
</div> -->


<!--Strat Filter Area--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding" id="filter-container">
  @include('layouts.filter')
</div>
<!--End Filter Area--> 

<!--Start Product Listing Area--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding" id="product_listing">

	@include('layouts.product_listing');
 

</div>
<!--End Product Listing Area--> 
<div class="clr"></div>
</div>
</div>
<!--End Main Middle Area--> 

<!-- Pushbar -->
<script type="text/javascript" src="/js/pushbar.js"></script>
<script type="text/javascript">
    
    var pushbar = new Pushbar({
        blur:true,
        overlay:true,
    });
</script> 
<!-- End Pushbar -->
<script type="text/javascript">
    /*====Variables====*/

    var filter={};  	// for general filter 
    var price=[];   	// for price filter
    var order="";

 /*=====Ajax Pagination by Ghazanfar 25-1-2020=====*/
	$(document).on('click','.pagination a', function(e){ 
	    e.preventDefault();
	   
	    url = $(this).attr('href');

	    $.get(url,{filter,price,order},function(data){     
	        $('#product_listing').html(data);    
	    }); 
	  

	    $('li').removeClass('active');
	    $(this).parent('li').addClass('active');

	});
	</script>

	    
	<!-- /*==Filter By Ajax by Ghazanfar 14-02-2020 ==*/ -->
	<script type="text/javascript">

		//Defualt values for brand_id and category_id 


	/*==Getting filter input value from price radio button==*/
	$("input[name='price']").on('click',function(){
	    price=[];
	    price=$(this).attr('data-id').split('-');         
	});
	$("input[name='lowprice']").on('click',function(){
	    price=[];
	    $("input[name='price']").prop('checked',false);
	});
	$("input[name='highprice']").on('click',function(){
	    price=[];
	    $("input[name='price']").prop('checked',false);         
	});

	/*== Ajax Filteration For More Filtre==*/  
	    
	$(document).on('click','#go',function(e){
	    e.preventDefault();
	   
	    /*==checking price array is null or not==*/
	    if (price.length===0 && ($("input[name='lowprice']").val() != "" && $("input[name='highprice']").val() != "")){
	        price.push($("input[name='lowprice']").val());
	        price.push($("input[name='highprice']").val());             
	    }
	   
	    $.each($('#parentFilter h5 label'),function(){ 
	        filter[$(this).attr('data-header')]=$("input[name="+$(this).attr('data-header')+"]:checked").attr('data-id');
	    }); 
	    
	      
	   
	    $.ajaxSetup({				 //Setting ajax
	        headers: {
	           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')           
	        }           
	    });
	    $.ajax({

	        type:'GET',
	        url:"{{route('ajaxProbrandlist')}}",
	        data:{filter,price},
	        success:function(data){
	          $('#product_listing').html(data);                  
	        },
	        complete:function(){
	            $('#filtercontainer').removeClass('opened');
	        }
	       
	    });      
	               
	  
	});

	/*==Sort By price filter ajax by ghazanfar 26-1-2020==*/
	$(document).on('click','#pricefilter a',function(e){
	    e.preventDefault();
	   // console.log(filter);
	    order=$(this).attr('data-attr');  // variable for sorting order
	    
	    url="{{route('ajaxpricelist')}}"; //url route for ajax
	    
	    $.ajaxSetup({					  //declaring ajax
	        headers: {
	         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	           }
	    });
	    $.get(url,{filter,order},function(data){
	        $('#product_listing').html(data);           
	    }); 
	});

	/*Filter by Size and Vendor by ghazanfar on 27-1-2020*/

	$(document).on('click','#fbysv a',function(e){
	    e.preventDefault();
	   
	    filter[$(this).attr('id')]=$(this).attr('data-id');

	    url="{{route('ajaxProbrandlist')}}";	//url route for ajax
	    
	    $.ajaxSetup({							//declaring ajax
	        headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
	    $.get(url,{filter,price},function(data){
	        $('#product_listing').html(data);           
	    }); 
	});

</script>
@endsection