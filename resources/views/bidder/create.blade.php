<!DOCTYPE html>
<html lang="en">

  @include('items.head')

  <body>
@include('items.head')
@include('items.nav')
@include('items.header')

<form action="{{ route('bidder.store') }}" method="post">
  {{ csrf_field() }}
  <label>Nama:</label>
  <input type="text" name="nama">
  <label>email:</label>
  <input type="text" name="email">
  <label>Password:</label>
  <input type="text" name="password">
  <button type="submit">Submit</button>
  <button type="reset">Cancel</button>
</form>

@include('items.footer')

<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>