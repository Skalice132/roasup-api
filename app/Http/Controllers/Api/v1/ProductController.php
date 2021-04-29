<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ProductResource::collection(Product::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductStoreRequest $request
     * @return ProductResource
     */
    public function store(ProductStoreRequest $request)
    {
        $created_product = Product::create($request->validated());

        return new ProductResource($created_product);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $articul
     * @return ProductResource
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return ProductResource
     */
    public function update(ProductStoreRequest $request, Product $product)
    {
        $product->update($request->validated());

        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function productByCategory($category, $id=null)
    {
        $category_id = Category::where('name', $category)->first()->id;
        $products = Category::find($category_id)->products()->get();

        if ($id){
            return $products->where('id', $id);
        }

        return $products;
    }
}
