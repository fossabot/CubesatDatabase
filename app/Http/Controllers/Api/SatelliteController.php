<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SatelliteController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $column = "";
       switch ($request->input("column")) {
            case "name":
                $column = "name";
            break;
            case "orbit":
                $column = "orbit";
            break;
            case "tle":
                $column = "tle";
            break;
            default:
                $column = "name";
            break;
       }

       return \App\Satellite::select('updated_at','created_at','id','name','COSPAR','status','tle','orbit')->where(function($query) use ($request , $column)
        {
            if($request->has("search"))
            {
                $query->where($column,"LIKE","%".$request->input("search")."%");
            }
            if($request->has("status") && $request->input("status") != "all")
            {
                 $query->where("status",$request->input("status"));
            }
        })->paginate($request->input("count",15))->appends(["column" => $column , "search"=> $request->input("search"), "status" => $request->input("status")]);
        
        return $response;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return \App\Satellite::where("id","=",$id)->firstOrFail();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    
}
