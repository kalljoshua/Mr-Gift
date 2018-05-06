<?php

namespace App\Http\Controllers\User;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        
        $category = $request->input('category_id');
        $occasion = $request->input('occassion_id');
        $keyword = $request->input('keyword');

        //$product = $product->newQuery();
        // Search for a product based on the subcategory.
        if ($category && !$occasion && !$keyword) {
            $product = Product::where('category_id', $category)
                ->where('active', 1)
                ->paginate(5);
            if ($product->count() > 0) {
                return view('user.search_results', ['products' => $product]);
            } else {
                flash('No results found for this search')->error();
                return view('user.search_results', ['products' => $product]);
            }

        }
        // Search for a product based on the town.
        if (!$category && $occasion && !$keyword) {
            $product=Product::where('occassion_id', 7)
                ->where('active', 1)->paginate(5);
            if ($product->count() > 0) {
                return view('user.search_results', ['products' => $product]);
            } else {
                flash('No results found for this search')->error();
                return view('user.search_results', ['products' => $product]);
            }
        }
        // Search for a product based on the keyword.
        if (!$category && !$occasion && $keyword) {
            $product=Product::where('name', 'LIKE', '%' . $request->input('keyword') . '%')
                ->where('active', 1)->paginate(5);
            if ($product->count() > 0) {
                return view('user.search_results', ['products' => $product]);
            } else {
                flash('No results found for this search')->error();
                return view('user.search_results', ['products' => $product]);
            }
        }

        if ($category && $occasion && !$keyword) {
            $product=Product::where('occassion_id', $occasion)
                ->where('category_id', $category)
                ->where('active', 1)->paginate(5);
            if ($product->count() > 0) {
                return view('user.search_results', ['products' => $product]);
            } else {
                flash('No results found for this search')->error();
                return view('user.search_results', ['products' => $product]);
            }
        }

        if ($category && $occasion && $keyword) {
            $product=Product::where('occassion_id', $occasion)
                ->where('category_id', $category)
                ->where('name', 'LIKE', '%' . $request->input('keyword') . '%')
                ->where('active', 1)->paginate(5);
            if ($product->count() > 0) {
                return view('user.search_results', ['products' => $product]);
            } else {
                flash('No results found for this search')->error();
                return view('user.search_results', ['products' => $product]);
            }
        }

        if (!$category && !$occasion && !$keyword) {
            flash('Search fields you provided are empty')->warning();
            return redirect()->back();
        }

        

    }
}
