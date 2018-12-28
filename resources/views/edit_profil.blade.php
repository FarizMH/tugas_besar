<!DOCTYPE html>
<html lang="en">
@include('items.head')

  <body>

    
    @include('indexUser')
    @include('items.header')

<!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Upload File</h1>
            <hr>
           <form action="{{ route('edit_profil.update', $data->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="nama">Judul:</label>
                    <input type="text" class="form-control" id="usr" name="name" value="{{ $data->name }}">
                </div>
                <div class="form-group">
                    <label for="nama">Judul:</label>
                    <input type="text" class="form-control" id="usr" name="email" value="{{ $data->email }}">
                </div><div class="form-group">
                    <label for="nama">Judul:</label>
                    <input type="password" class="form-control" id="usr" name="password" value="{{ $data->password }}">
                </div>
                 <div class="form-group">
                    <label for="email">File:</label>
                    <input type="file" class="form-control" id="email" name="file">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="usr" name="fullname">
                </div>
                <div class="form-group">
                    <label for="openBid">Alamat Bidder:</label>
                    <input type="text" class="form-control" id="usr" name="bidAdress">
                </div>
                
                
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
</body>
@include('items.footer')
</html>