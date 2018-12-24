<!DOCTYPE html>
<html lang="en">

  @include('items.head')

  <body>
@include('items.head')
@include('items.nav')
@include('items.header')
<table>
<thead>
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Email</th>
    <th>password</th>
  </tr>
</thead>
<tbody>
  @php
    $no = 1;
  @endphp
  @foreach($data as $items)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $items->username }}</td>
    <td>{{ $items->email_bidder }}</td>
    <td>{{ $items->password_bidder }}</td>
  </tr>
  @endforeach
</tbody>
</table>
@include('items.footer')

<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>