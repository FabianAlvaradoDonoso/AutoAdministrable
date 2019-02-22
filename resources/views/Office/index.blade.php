@extends('layouts.app2')

{{-- --------------------------------------------------------------------- --}}

@section('name')
    <title>Office | AutoAdmin</title>
@endsection

{{-- --------------------------------------------------------------------- --}}


{{-- --------------------------------------------------------------------- --}}

@section('css')

@endsection

{{-- --------------------------------------------------------------------- --}}

@section('body')

    @foreach($offices as $office)
    <p>{{$office->phone}}</p>
    <p>{{$office->adress}}</p>
    <p>{{$office->fblink}}</p>
        
    @endforeach

@endsection