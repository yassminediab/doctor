<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
   public function index()
   {
       return view('admin.appointments.index', [
          'appointments' => Appointment::where('approved' , false)->where('status', '!=',3)->get(),
           'status' => 'in progress'
       ]);
   }

   public function CanceledAppointment()
   {
       return view('admin.appointments.index', [
           'appointments' => Appointment::where('status' , 3)->get(),
           'status' => 'cancel'

       ]);
   }

   public function DoCancelAppointments($id)
   {
       Appointment::where('id', $id)->update(['status' => 3]);
       return redirect('/admin/appointments')->with('success', 'canceled Successfully!');
   }

    public function DoneAppointment()
    {
        return view('admin.appointments.index', [
            'appointments' => Appointment::where(['status' => 1, 'approved' => true])->get(),
            'status' => 'done'

        ]);
    }

    public function DoApproveppointments($id)
    {
        Appointment::where('id', $id)->update(['status' => 1, 'approved' => true]);
        return redirect('/admin/appointments')->with('success', 'approved Successfully!');
    }

    public function edit($id)
    {
        return view('admin.appointments.edit',[
           'appointment' => Appointment::find($id)
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

}
