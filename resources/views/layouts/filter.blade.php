@if(count($objProduct)>0)

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb20">

  <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2 border margin-tb5 text-center"></div>

  <!--Strat More  Filter Area-->
  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border margin-tb5 text-center">
    <div class="dropdown-cat">
      <div data-pushbar-target="top" class="click"> 
      @if(isset($objCategory)) 
        <button class="dropbtn-cat" id="morefilter" data-id="{{$objCategory->id}}" data-name="category_id">More Filter <i class="fa fa-chevron-up"></i></button>
      @else
       <button class="dropbtn-cat" id="morefilter" data-id="{{$objBrand->id}}" data-name="brand_id">More Filter <i class="fa fa-chevron-up"></i></button>
      @endif
      </div>
    </div>  
    <div class="clr"></div>
  </div>
  <!--End More Filter Area-->

  <!--Strat Filter Detail Area-->
  <aside data-pushbar-id="top" class="pushbar from_top" id="filtercontainer">
    <div id="parentFilter">
        <div class="title heading-pd">
          <span data-pushbar-close class="close push_right"></span>
          <h6 class="white">More Filter</h6>
        </div>


        <!--Start Categories Area-->
        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 col-cell margin-bot10 border">
          
          <h5 class="text-uppercase">Categories<label data-header="category_id"></label></h5>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border text-left margin-tb5">
              <div class="sb-container container-example1">
                @foreach($productCollection->unique('cname') as $rsfilter)  
                 
                  <input type="radio"  name="category_id" data-id="{{$rsfilter->category_id}}">{{$rsfilter->cname}}<br> 
                 
                @endforeach
              </div>
         </div>
         <div class="clr"></div>
     </div>
     <!--End Categories Area-->




     <!--Start Brand Area-->
     <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 col-cell margin-bot10 border">
      <h5 class="text-uppercase">Brand<label data-header="brand_id"></label></h5>
      <div class="sb-container container-example1">

      <!--Dynamic brands menu on filter Ghazanfar 20-1-2020 -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border text-left margin-tb5 filter">
        @foreach($productCollection->unique('bname') as $rsbfilter)
          <input type="radio" name="brand_id" data-id="{{$rsbfilter->brand_id}}" id="brand_id">{{$rsbfilter->bname}}<br>
        @endforeach
      </div>            


    </div>
    <div class="clr"></div>
    </div>
    <!--End Brand Area-->


    <!--Start Collections Area-->
    <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 col-cell margin-bot10 border">
      <h5 class="text-uppercase">Collections<label data-header="collection"></label></h5>
      <div class="sb-container container-example1">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border text-left margin-tb5 filter">
            @foreach($productCollection->unique('collection') as $rscolfilter )
              <input type="radio"  name="collection" data-id="{{$rscolfilter->collection}}" id="collection">{{$rscolfilter->collection}}<br>
            @endforeach
          </div>



      </div>
      <div class="clr"></div>
    </div>
    <!--End Collections Area-->


    <!--Start Size Area-->

    <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 col-cell margin-bot10 border">
      <h5 class="text-uppercase">Size<label data-header="map_size"></label></h5>
      <div class="sb-container container-example1">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border text-left margin-tb5 filter">
          @foreach($productCollection->unique('size') as $rssfilter)
            <input type="radio" name="size" data-id="{{$rssfilter->size}}" id="size">{{$rssfilter->size}}<br>
          @endforeach
        </div>
    </div>
    <div class="clr"></div>
    </div>
    <!--End Size Area-->


    <!--Start Color Area-->
    <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 col-cell margin-bot10 border">
      <h5 class="text-uppercase">Color<label data-header="color"></label></h5>
      <div class="sb-container container-example1">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border text-left margin-tb5 filter">
        @foreach($productCollection->unique('color') as $rscfilter)
          <input type="radio" name="color" data-id="{{$rscfilter->color}}" id="color">{{$rscfilter->color}}<br>
        @endforeach
        </div>



    </div>
    <div class="clr"></div>
    </div>
    <!--End Color Area-->


    <!--Start Price Area-->
    <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 col-cell margin-bot10 border">
      <h5 class="text-uppercase">Price</h5>
      <div class="sb-container container-example2">


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border text-left margin-tb5">
          <input type="radio" name="price" data-id="0-299"> Under - $299<br>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border text-left margin-tb5">
          <input type="radio" name="price" data-id="300-599"> $300 - $599<br>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border text-left margin-tb5">
          <input type="radio" name="price" data-id="600-899"> $600 - $899<br>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border text-left margin-tb5">
          <input type="radio" name="price" data-id="900-100000"> $900 - Above<br>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding border margin-tb5">
          <p class="font-14">
          Specify Your Price Range</br>
        </p>
      </div> 

      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding border">
        <input type="text" class="filter-price" name="lowprice" required="">  
      </div>

      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 padding border text-center">-</div>

      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 padding border">
        <input type="text" class="filter-price" name="highprice" required="">  
      </div>


      <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 padding border text-center">-</div>

    </div>
    <div class="clr"></div>
    </div>
    <!--End Price Area-->


      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 padding border" style="float: right; width: 100px;">
        <button type="submit" class="btn btn-dark filterprice-submit" id="go">GO</button>  
      </div>
</div>
</aside>
<!--End Filter Detail Area-->





<!--Strat Sort Area-->
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border margin-tb5 text-center">
  <div class="dropdown-cat">
    <button class="dropbtn-cat">Sort By&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></button>
    <div class="dropdown-content-cat" id="pricefilter">
      <a href="" data-attr="asc">Price: Low to High</a>
      <a href="" data-attr="desc">Price: High to Low</a>
    </div>
  </div>	
  <div class="clr"></div>
</div>
<!--End Sort Area-->



<!--Strat Sort Area-->
<div id="fbysv">
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border margin-tb5 text-center">
  <div class="dropdown-cat">
    <button class="dropbtn-cat">Size By&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></button>
    <div class="dropdown-content-cat">
      <div class="sb-container container-example1" style="width: 100%">
      @foreach($productCollection->unique('size') as $rssfilter)
          <a href="" id="size" data-id="{{$rssfilter->size}}" data-cat="{{$rsbfilter->category_id}}">{{$rssfilter->size}}</a>
           
      @endforeach
    </div>
  </div>

</div>	
<div class="clr"></div>
</div>
<!--End Sort Area-->

<!--Strat Vendor Area-->
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border margin-tb5 text-center">
  <div class="dropdown-cat">
    <button class="dropbtn-cat">Vendor By <i class="fa fa-chevron-down"></i></button>
    <div class="dropdown-content-cat">
    
    @foreach($productCollection->unique('bname') as $rsbfilter)
      <a href="" id="brand_id" data-id="{{$rsbfilter->brand_id}}">{{$rsbfilter->bname}}</a>
    @endforeach
  </div>
</div>	
<div class="clr"></div>
</div>
</div>
<!--End Vendor Area-->

<div class="col-xs-0 col-sm-0 col-md-0 col-lg-2 border margin-tb5 text-center"></div>

<script type="text/javascript" src="/js/scrollBar.js?load=6"></script>
<script type="text/javascript">
$(".sb-container").scrollBox();
  
</script> 

@endif
