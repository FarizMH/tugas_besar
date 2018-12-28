<!DOCTYPE html>
<html lang="en">
@include('items.head')
 @include('indexUser')
    
    <body>
<section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Edit File</h1>
            <hr>
            <form action="{{ route('file.update', $data->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Judul:</label>
                    <input type="text" class="form-control" id="usr" name="name" value="{{ $data->name }}">
                </div>
                
                <div class="form-group">
                    <label for="email">Foto Lama:</label>
                    <img src="{{ url('uploads/file/'.$data->file) }}" style="width: 150px; height: 150px;">
                </div>
                <div class="form-group">
                    <label for="open_bid">Open Bid:</label>
                    <input type="text" class="form-control" id="usr" name="openBid" value="{{ $data->open_bid }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <input type="text" class="form-control" id="usr" name="deskripsi" value="{{ $data->deskripsi }}">
                </div>
                <div class="form-group">
                    <label for="id_user">ID User:</label>
                    <input type="text" class="form-control" id="usr" name="idUser" value="{{ $data->id_user }}">
                </div>
                <div class="form-group">
                    <label for="email">File:</label>
                    <input type="file" class="form-control" id="email" name="file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button href="{{ route('file.update', $data->id) }}" type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>

</div>


  


</body>
    
@include('items.footer')
</html>