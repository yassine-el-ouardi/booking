@extends('layouts.main-layout')

@section('body')
    @foreach (App\Http\Controllers\CartController::index() as $room)
{{        $room->associatedModel->hotel->name}}
    @endforeach
{{-- {{ App\Http\Controllers\CartController::index() }} --}}


@endsection

