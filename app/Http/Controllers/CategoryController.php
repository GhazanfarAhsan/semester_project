<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Brand;
use App\ProductRug;
use App\Http\Controllers\MetaController;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        dd("this is index function");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        dd($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }


    public function getProductList(Request $req,$category_name){

        // Working with Meta by Ghazanfar//
        $meta=new MetaController();
        $MetaData=$meta->getMeta($req);

    /*==Fetching categories and product by Ghazanfar on 13-02-2020==*/
        $objCategory = Category::where('store_keyword',$category_name)->where('active',1)->first();
        $objProduct = Product::where('category_id', $objCategory->id)->where('active',1)->paginate(12);
        if(count($objProduct)>0){

                $productCollection=Product::select('products.id','products.name','pr.size','pr.collection','pr.color','pd.size','pd.collection','pd.color','products.id','products.price as rprice','brands.name as bname','products.brand_id','products.category_id','categories.name as cname')->Join('product_rugs as pr','pr.product_id','=','products.id')->Join('product_decors as pd','pd.product_id','=','products.id')->Join('brands','brands.id','=','products.brand_id')->Join('categories','categories.id','=','products.category_id')->where('products.category_id',$objCategory->id)->get();
            
            if(count($productCollection)==0){ 

                $productCollection=Product::has('productRug')->select('products.id','products.name','products.price as rprice','pr.size','pr.collection','pr.color','brands.name as bname','products.brand_id','products.category_id','categories.name as cname')->Join('product_rugs as pr','pr.product_id','=','products.id')->Join('brands','brands.id','=','products.brand_id')->Join('categories','categories.id','=','products.category_id')->where('products.category_id',$objCategory->id)->get();
           
            }

            if(count($productCollection)==0){
                
                $productCollection=Product::has('productDecor')->select('products.id','products.name','products.price as rprice','pd.size','pd.collection','pd.color','brands.name as bname','products.brand_id','products.category_id','categories.name as cname')->Join('product_decors as pd','pd.product_id','=','products.id')->Join('brands','brands.id','=','products.brand_id')->Join('categories','categories.id','=','products.category_id')->where('products.category_id',$objCategory->id)->get();
                 
            }
            
    }
   
        /*==Setting Pagination path by Ghazanfar on 14-1-2020==*/  
    $objProduct->withpath('/c/ajax/'.$category_name.'.htm'); 
          
        return view('categories',compact('objProduct','objCategory','brandData','CatData','productCollection','MetaData'));

            
    }

     public function getProductListPaging($category_name){


        $objCategory = Category::where('store_keyword',$category_name)->first();
        $objProduct = Product::where('category_id', $objCategory->id)->where('active',1)->paginate(12);
        //$objProduct->withpath('ajax/'.$category_name.'.htm'); 

        return view('layouts.product_listing',compact('objProduct'));
    }

    public function getTestList(){
        dd("xxxxxxxxxxxxxxxxxxxxx");
    }
}
