@extends('layouts.app')

@section('assets')

@endsection

@section('content')
<div class="qr-code">
    {{ QrCode::generate('https://www.glitchmedia.nl') }}

</div>

@endsection