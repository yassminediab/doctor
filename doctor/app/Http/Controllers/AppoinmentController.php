<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Http\Requests\AppoinmentRequest;
use App\Mail\AppointmentMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\AppoinmetSchduale;
use Mail;

class AppoinmentController extends Controller
{
    public function store(Request $request)
    {
        $date = Carbon::create($request->year, $request->month, $request->day);

        $date->addMonth(1);

        $appointment = Appointment::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $date->toDateString(),
            'time_to' => explode("-", $request->time)[1],
            'time_from' => explode("-", $request->time)[0],
        ]);

        Mail::to("naguibclinic@gmail.com")->queue(new AppointmentMail($appointment));

        return view('success',[
            'appointment' => $appointment
            ]);
    }


    public function getTime(Request $request)
    {
        $date = Carbon::create($request->year, $request->month, $request->day);
        $date->addMonth(1);
        $dayNumber = $date->dayOfWeek;

        $appoinmentSchdule = Appointment::where(['date' => $date->toDateString(), 'approved' => true])->get(); // kol eel 7ogozat bta3t el date dh
        $seetings = AppoinmetSchduale::where('day_number',$dayNumber)->first();

        $freeAppointment = [];

        $time_from = Carbon::parse($seetings->time_from); // 8
        $time_to = Carbon::parse($seetings->time_to);

        while ($time_to->gt($time_from))
        {
            $freeAppointment[] =  $time_from->toTimeString(). '-'. $time_from->addMinutes( $seetings->duration)->toTimeString(); // 8-8:30
        }

        $appointmented = [];
        foreach ($appoinmentSchdule as $appointment)
        {
            $appointmented[] = $appointment->time_from . '-' . $appointment->time_to ;
        }

        $freeTime = array_diff($freeAppointment ,$appointmented);

        return view('times',[
            'freeTime' => $freeTime,
            'dayNumber' => $dayNumber,
            'date' => $date
        ]);
    }
}
