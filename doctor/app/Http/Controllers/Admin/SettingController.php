<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppoinmentRequest;
use App\Http\Requests\SettingsRequest;
use Illuminate\Http\Request;
use App\AppoinmetSchduale;
use DB;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings.index', [
            'settings' => AppoinmetSchduale::all()
        ]);
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(SettingsRequest $request)
    {
        DB::table('appoinmet_schduales')->delete();

        $holiday = $request->holiday;
        for ($i=0; $i<=6; $i++)
        {
            AppoinmetSchduale::create([
                 'day_number' => $i ,
                 'time_to' => $request->time_to ,
                 'time_from' => $request->time_from ,
                 'duration' => $request->duration ,
                'is_weekend' => (in_array($i,$holiday )) ? 1 :0,
            ]);
        }

        return redirect('/admin/settings')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $settings = AppoinmetSchduale::find($id);

        return view('admin.settings.edit', [
            'settings' => $settings
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token','_method');
        $data['is_weekend'] = ($request->is_weekend) ? 1 : 0;
        AppoinmetSchduale::where('id', $request->id)->update($data);
        return redirect('/admin/settings')->with('success', 'updated Successfully!');

    }
}
