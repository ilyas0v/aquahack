<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProduct;

class ProductController extends Controller
{
    
    public function index()
    {
        $user_products = UserProduct::where('user_id', \Auth::id())->get();
        #return $user_products[0]->product_object;
        return view('admin.products.index', compact('user_products'));
    }



    public function create()
    {
        return view('admin.products.create');
    }




    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|integer',
        ]);

        $data = $request->all();
        $data['user_id'] = \Auth::id();

        $user_product = UserProduct::create($data);

        return redirect()->route('products.index');
    }


    public function get_products(Request $request)
    {
        $cat_id = $request->cat_id;

        $products = config('aquametrics.PRODUCTS');

        $products_to_return = [];

        foreach($products as $product)
            if($product['category'] == $cat_id)
                $products_to_return[] = $product;

        return json_encode($products_to_return);
    }
}
