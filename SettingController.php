<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() {
        $checked = session('afterInsert', 'show movies');
        $checkedList='checked';
        $checkedCreate='';
        
        if($checked != 'show movies'){
            $checkedCreate='checked';
            $checkedList='';
        }
        
        $afterEditMovie = [
            "showAllMovies" => '',
            "showMovie" => '',
            "showEditForm" => ''
        ];
        
        $afterEditMovie[session('afterEdit')] = 'selected';
        
        
        
        return view('setting.index',['checkedList' => $checkedList, 'checkedCreate' => $checkedCreate, 'afterEditMovie' => $afterEditMovie]);
    }
    
    public function update(Request $request) {
        session(['afterInsert'=> $request->afterInsert]);
        session(['afterEdit' => $request->editMovie]);
        return  back();
    }
}
