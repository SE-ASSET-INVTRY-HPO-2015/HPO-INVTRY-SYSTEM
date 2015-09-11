<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acctype;
use App\User;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Flash;
use App\Brand;
use App\Category;
use App\Physicalstatus;
use App\Warranty;
use App\Asset;

class DashboardController extends Controller
{
    public function getNavigation()
    {
        $datas=User::all();
        return view('layout.partials.navigation', compact('datas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Show create form in the resource.
     *
     * @return Response
     */

    public function create()
    {
        // $datas=Asset::all();
        $brands=Brand::all();
        $categories=Category::all();
        $physicalstatuses=Physicalstatus::all();
        $warranties=Warranty::all();
        return view('dashboard.create', compact('brands', 'categories', 'physicalstatuses', 'warranties'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $datas=User::find($id)->acctypes()->get();
        $infos=User::find($id);
        return view('dashboard.show', compact('infos'))->with('name', $datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function editUsername($id)
    {
        $datas=User::find($id);
        return view('dashboard.edit-username', compact('datas'));
    }

    public function editPassword($id)
    {
        $datas=User::find($id);
        return view('dashboard.edit-password', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function updateUsername(Request $request, $id)
    {
        $datas=User::findOrFail($id);
        $datas->username=$request->Input('username');
        $datas->save();
        flash()->success('Username Updated!');
        return view('dashboard.index');
    }

    public function updatePassword(Request $request, $id)
    {
        $datas=User::findOrFail($id);
      
        // return $datas->password;
        
        // dd($datas);
        // return view('dashboard.index')->withMessage('success');
        
        $password = Hash::make(Input::get('password'));
        $datas->password=$password;
        $datas->save();
        flash()->success('Password Updated!');
        return view('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
