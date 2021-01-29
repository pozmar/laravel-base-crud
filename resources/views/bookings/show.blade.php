@extends('layouts.main')
@section('content')
<div class="card border-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Numero Prenotazione: {{ $booking->id}}</div>
  <div class="card-body text-dark">
    <h5 class="card-title">{{ $booking->guest_full_name}}</h5>
    <p class="card-text">Stanza: {{ $booking->room}}</p>
    <p class="card-text">Da: {{ $booking->from_date}}</p>
    <p class="card-text">A: {{ $booking->to_date}}</p>
  </div>
</div>
@endsection