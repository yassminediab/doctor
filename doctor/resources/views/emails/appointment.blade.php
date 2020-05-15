@component('mail::message')
    Name: {{ $data->name }}
    Phone: {{ $data->phone }}
    Email: {{ $data->email }}
    Time From: {{ $data->time_from }}
    Time To: {{ $data->time_to }}
    Date : {{ $data->date }}
@endcomponent
