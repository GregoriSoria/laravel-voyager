<?php

namespace App\Http\Controllers\Api;


use App\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;

class ProductsController extends VoyagerBreadController
{
    public function list(Request $request) {
        return new JsonResponse(Product::all());
    }

    public function find(Request $request, $id) {
        return new JsonResponse(Product::find($id));
    }
}