{{-- if and else --}}

@include('Title')



Id = {{ $age= 2000 }}


@if($age >= 1)
    <h2>Hello Merradou</h2>
    
@else
<h2>null</h2>
@endif



{{-- isset and empty --}}

{{-- 
@isset($age)

<h2>age is {{$age}}</h2>
@endisset
 
@empty($age)
    <h2>age is empty</h2>
@endempty --}}


{{-- loop Foreach --}}

@php
$fruit = array("apple","banana","kiwi")   



@endphp





@foreach ($fruit  as $value)
    <p>fruit    : {{ strtoupper( $value) }}</p>
@endforeach
 