<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog;
class CatalogController extends Controller
{
    public function index(){
        $catalog_list = Catalog::latest()->whereStatus(1)->paginate(9);
        return view('web.catalog.catalog', compact('catalog_list'));
    }
}
