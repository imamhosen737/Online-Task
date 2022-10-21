<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Item;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Itemfile;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result()
    {
        // $itemm = Item::get();
        // $i = $itemm->location()->code;
        // $pr = Product::get();
        // $p = $pr->category()->type;

        $result = Item::get();
        $pro = SubCategory::get();
        $user = User::get();
        $subcategory = SubCategory::get();
        $category = Category::get();
        $itemfile = Itemfile::get();
        $file = File::get();

        return Response(array(
            'result' => $result,
            'product' => $pro,
            'user' => $user,
            'subcategory' => $subcategory,
            'category' => $category,
            'itemfile' => $itemfile,
            'file' => $file,


        ));
    }
}
