 

      <div class="pagination-bar text-center">
        {{ $objProduct->links() }}
    </div>  
    <!-- Checking the Object is null or not -->
    @if(isset($objProduct))
        @foreach($objProduct as $rsobjProduct)
            
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 border">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box-border">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-bot10 text-center" style="margin:auto;height:200px; width:150px; border:0px solid navy; overflow: hidden;">
                        <a href="#"><img src="{{ $rsobjProduct->image_url }}" alt="" width="100%" /></a>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-bot10 name text-center">
                        <a href="#">{{ $rsobjProduct->name }}</a>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-bot10 text-center col-50">
                        <div class="market">Was: <span class="price-cut">{{ $rsobjProduct->msrp }}</span></div>
                        <div class="clr"></div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 margin-bot10 text-center col-50">
                        <div class="market">Now: <span class="price">{{ $rsobjProduct->price }}</span></div>
                        <div class="clr"></div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <a href="{{ url('/pd/'.$rsobjProduct->url_name.$rsobjProduct->id )}}" id="price"><img src="images/btn-addtocart2.png" alt=""/></a>
                    </div>


                </div>
            </div>
       
        @endforeach

            <div class="pagination-bar text-center">
            {{ $objProduct->links() }}
            </div>
    @else
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 border">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box-border">
                    <h1>No Product Found</h1>
                </div>
            </div>
    @endif
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        @if(count($objProduct)>0)
          <h1>By {{$objProduct[0]->brand->name}}</h1>
          <p> {{ $objProduct->total()}} results. Displaying page {{ $objProduct->currentPage()}} of {{ $objProduct->lastPage()}}.</p> 
        @else
            <h1>0 Product Found</h1> 
        @endif

    </div> 



