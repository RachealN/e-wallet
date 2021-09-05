@extends('clients.layout')
@section('content')

<dashboard 
    :transactions="{{json_encode($transactions)}}"
    :acc_balance="{{json_encode($acc_balance)}}">
</dashboard>

@endsection