<div class="">
    Flights
    {{-- {{ dd($flights) }} --}}
    @foreach ($flights as $flight)
        <div class="">{{ $flight->name }} <span>{{ $flight->status }}</span></div>
    @endforeach
</div>
