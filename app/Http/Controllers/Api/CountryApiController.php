<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Country;
use App\State;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CountryApiController extends Controller
{
    public function country()
    {

        $coutry = [
            'country' => [Country::all()->pluck('name')]
        ];
        return response()->json($coutry);
    }

    public function state($name)
    {
        $getCountryId = Country::where('name',$name)->first();
        $state = [
            'state' => [State::where('country_id',$getCountryId->id)->pluck('name')]
        ];
        return response()->json($state);
    }

    public function city($name)
    {
        $getCityId = State::where('name',$name)->first();
        $city = [
            'state' => [City::where('state_id',$getCityId->id)->pluck('name')]
        ];
        return response()->json($city);
    }

    //this is responsible for the sub category controller
    public function category()
    {

        $category = [
            'category' => [Category::all()]
        ];
        return response()->json($category);
    }
    public function subCategory($name = '')
    {

        if($subCat = Subcategory::where('category_id',$name)->get()){
            return response()->json($subCat);
        }else{
            return response()->json('error');
        }
    }
}
