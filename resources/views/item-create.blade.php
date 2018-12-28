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
            <h1>Anak IT -  Upload File</h1>
            <hr>
            <form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Judul:</label>
                    <input type="text" class="form-control" id="usr" name="name">
                </div>
                 <div class="form-group">
                    <label for="id_user">ID User:</label>
                    <input type="text" class="form-control" id="usr" name="id_user">
                </div>
                <div class="form-group">
                    <label for="openBid">Open Bid:</label>
                    <input type="text" class="form-control" id="usr" name="openBid">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <input type="text" class="form-control" id="usr" name="deskripsi">
                </div>
                <div class="form-group">
                    <label for="email">File:</label>
                    <input type="file" class="form-control" id="email" name="file">
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