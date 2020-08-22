
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

<!--Strat Product Listing Area--> 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding" id="product_listing">

	@include('layouts.product_listing');
</div>
<!-- End Product Listing Area -->
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

<script type="text/javascript">
    //  Variables:
    var filter={};  // for general filter 
    var price=[];   // for price filter
    var order="";
 // ajax Pagination by ghazanfar 25-1-2020
$(document).on('click','.pagination a', function(e){ 
    e.preventDefault();
    
    url = $(this).attr('href');
      // alert(url);  
    if(filter==null && price==null && order==""){  

    $.get(url,function(data){     
        $('#product_listing').html(data);    
    });
    }
    else{
    $.get(url,{filter,price,order},function(data){   

        $('#product_listing').html(data);    
    }); 
    }

    $('li').removeClass('active');
    $(this).parent('li').addClass('active');

});
</script>

    
<!-- /*==Filter By Ajax by Ghazanfar 14-02-2020 ==*/ -->
<script type="text/javascript">

// filter[$('#morefilter').attr('data-name')]=$('#morefilter').attr('data-id'); 
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

/*== Ajax Filteration For more Filtre==*/  
    //console.log(filter);
$(document).on('click','#go',function(e){
    e.preventDefault();

    //checking price array is null or not
    if (price.length===0 && ($("input[name='lowprice']").val() != "" && $("input[name='lowprice']").val() != "")){
        price.push($("input[name='lowprice']").val());
        price.push($("input[name='highprice']").val());             
    }
   
    $.each($('#parentFilter h5 label'),function(){ 
        filter[$(this).attr('data-header')]=$("input[name="+$(this).attr('data-header')+"]:checked").attr('data-id');
    }); 
    
    /*==Setting ajax==*/
    $.ajaxSetup({
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
    //console.log(filter);
    // variable for price sorting order
    order=$(this).attr('data-attr');
    //url route for ajax
    url="{{route('ajaxpricelist')}}";
    //declaring ajax
    $.ajaxSetup({
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
   //filter['category_id']=$(this).attr('data-cat');
    filter[$(this).attr('id')]=$(this).attr('data-id');
    //console.log(filter);
    //url route for ajax
    url="{{route('ajaxProbrandlist')}}";
    //declaring ajax
    $.ajaxSetup({
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