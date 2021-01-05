<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RouteSearchRequest;
use App\Http\Requests\StoreRouteRequest;
use App\Models\Route;
use App\Models\City;
use App\Models\Stop;
use Carbon\Carbon;
use URL;
class RouteController extends Controller
{
    public function search(RouteSearchRequest $request)
    {
        $request = $request->validated();

        $date = $this->getChoosedTime($request['date']);
        
        $routes = $this->getRoutesByCities($request['from'],$request['to']);
        
        $routes = $this->getRoutesByTime($routes,$date);
        
        $routes = $this->getRoutesWithRelation($routes);

        return $routes;
    }

    protected function getChoosedTime($old_date)
    {
        $mytime = Carbon::now()->format('H:i:s');
       
        $date = collect();
       
        $date->date_at = $old_date.' '.$mytime;
        
        $date->date_end = $old_date.' '.'23:59:59';
        
        return $date;
    }

    protected function getRoutesByCities($from,$to)
    {
        return City::find($from)->routes()->where('to_place',$to);
    }

    protected function getRoutesByTime($routes,$date)
    {

        return $routes->withAndWhereHas('times',function($query) use($date){
            
          
            return $query->where('from_time','>=',$date->date_at)
                        ->where('from_time','<=',$date->date_end);

        });
    }

    protected function getRoutesWithRelation($routes)
    {
        return $routes->with('bus','bus.user','privileges:id,name','stops','bus.images')->get();
    }
    
    public function store(StoreRouteRequest $request)
    {
        
        $request = $request->validated();
        
        $request['status_id'] = 2;
        $route = Route::create($request);

        return $this->storeStops($route,$request['stops']);

    }

    private function storeStops(Route $route,$stops)
    {
        foreach($stops as $stop)
        {
            $route->stops()->create(['name'=>$stop['name'],'time'=>$stop['time']]);
        }
        
        return $route;
    }

}
