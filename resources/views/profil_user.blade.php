
<!DOCTYPE html>
<html lang="en">
@include('items.head')

  <body>

    
    @include('indexUser')
    @include('items.header')

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Tutorial Login, Register, Validasi dengan Laravel 5.4</h1>
            <p>Hallo, {{Session::get('name')}}. Apakabar?</p>

            <h2>* Email kamu : {{Session::get('email')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>
            <a href="/logout" class="btn btn-primary btn-lg">Logout</a>
            <a href="/item_create" class="btn btn-primary btn-lg">Adakan Lelang</a>
            <a href="/lelangku" class="btn btn-primary btn-lg">Lelangku</a>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
</body>
@include('items.footer')
</html>