<?php
namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function getCitiesByCountryId($countryId)
    {
        $cities = DB::table('cities')->select('city_name')->where('cnt_id',$countryId)->get();
        
        return response()->json($cities);
    }

    public function getCitiesByCountryIdtest(Request $request) {
        var_dump('ttt');
        $cnt_id = $request->countryId;
        var_dump($cnt_id);
        $cities = DB::table('cities')->select('city_name')->where('cnt_id',$cnt_id)->get();
        var_dump(response()->json($cities));
    }
}


