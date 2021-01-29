@extends('layouts.main')
@section('content')
<table class="table">
  <thead>
    <tr>
    @foreach($columns as $column)
      <th scope="col">{{ $column }}</th>
      @endforeach

    </tr>
  </thead>
  <tbody>
  @foreach($bookings as $booking)
    <tr>
      <th scope="row">{{ $booking->id }}</th>
      <td>{{ $booking->guest_full_name }}</td>
      <td>{{ $booking->room }}</td>
      <td>{{ $booking->from_date }}</td>
      <td>{{ $booking->to_date }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection