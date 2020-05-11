<p class="font-weight-bold">
    لقد تم اختيار يوم
    {{ App\AppoinmetSchduale::WORKINGDAYAR[$dayNumber]}}
    الموافق
    {{ $date->format('d/m/Y') }}
     ميعاد كشفك الطبي من فضلك اختار وقت الزيارة
</p>
<ul class="mt-4 my-model px-4 py-4">
    <li>
        المواعيد المتاحة
    </li>
    @foreach($freeTime as $time)
    <li>
        {{$time}}
    </li>
   @endforeach
</ul>
