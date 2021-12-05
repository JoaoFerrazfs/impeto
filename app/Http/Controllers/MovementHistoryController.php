<?php

namespace App\Http\Controllers;
use App\Models\MovementHistory;

use Illuminate\Http\Request;

class MovementHistoryController extends Controller
{
    public function productHistory($data){

        $history= new MovementHistory();
     
        $history->cod=$data->cod;
        $history->name = $data->name;
        $history->supplier = $data->supplier;
        $history->description=$data->description;
        $history->price=$data->price;
        $history->inventory=$data->inventory;
        $history->user=$data->user;

        $history->save();
    }
}
