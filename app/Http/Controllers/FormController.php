<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $fullname = $request->input('fullname',null);
        $phone = $request->input('phone',null);
        $UF = $request->input('UF',null);
        $city = $request->input('city',null);
        $bus_father = $request->input('city','example');
//        $data = $request->validate([
//            'fullname' => 'required|max:255',
//            'phone' => 'required|unique|min:11|numeric|regex:/(01)[0-9]{9}/',
//            'UF' => 'required',
//            'city' => 'required',
//        ]);

        if (isset($fullname)){
            $response = DB::table('forms')->insert([
                'fullname' => $fullname,
                'phone' => $phone,
                'UF' => $UF,
                'city' => $city,
                'bus_father' => $bus_father,
                'created_at' =>  Carbon::now(),
                'updated_at' => Carbon::now()

            ]);
            return view('/form')->with(compact('response','data'));
        } else {
            return view('/form');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        $validatedData = $request->validate([
//            'fullname' => 'required|max:255',
//            'phone' => 'required|unique|min:11|numeric|regex:/(01)[0-9]{9}/',
//            'UF' => 'required',
//            'city' => 'required',
//        ]);
//
//        $response = DB::table('forms')->insert([
//            'fullname' => $data['fullname'],
//            'phone' => $data['phone'],
//            'UF' => $data['UF'],
//            'city' => $data['city'],
//            'bus_gather' => $data['bus_father'],
//            'created_at' =>  Carbon::now(), # new \Datetime() or date('Y-m-d H:i:s'),
//            'updated_at' => Carbon::now(), # new \Datetime() or date('Y-m-d H:i:s'),
//            ]);
//
//        return view('/form')->with(compact('response'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Form $form)
    {
        //
    }

    public function edit(Form $form)
    {
        //
    }

    public function update(Request $request, Form $form)
    {
        //
    }

    public function destroy(Form $form)
    {
        //
    }
}
