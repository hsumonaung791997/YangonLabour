<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Factory;
use DB;

class ShopInspectionListController extends Controller
{
    public function lists(){
        $array = explode(',', Auth::user()->accessibletwonship);     
        $shop=DB::table('shop_inspection_informs')
                ->join('shops','shops.ShopId','shop_inspection_informs.ShopId')
                ->join('users','users.id','shop_inspection_informs.inspectionid')
                ->leftJoin('shop_inspection_safeties','shop_inspection_safeties.check_id','shop_inspection_informs.id')
                ->leftJoin('shop_labour_inspection_laws','shop_labour_inspection_laws.check_id','shop_inspection_informs.id')
                ->select('shop_inspection_informs.*','shop_inspection_informs.id as sid','shops.*','users.*','shop_inspection_safeties.id as safety_id','shop_labour_inspection_laws.id as law_id')
                ->whereIN('shops.township_id',$array)
                ->orderBy('shop_inspection_informs.id', 'DESC')
                ->paginate(10);
                // dd($shop);
        return view('shop.inspection_lists',compact('shop'));     

    }
}
