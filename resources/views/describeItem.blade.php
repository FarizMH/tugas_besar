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
            <form action="{{ route('deskripsi.update', $data->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <h4 class="card-title" >Judul: {{ $data->name }}</label>
                   
                
                <div class="form-group">
                   
                    <img src="{{ url('uploads/file/'.$data->file) }}" style="width: 150px; height: 150px;">
                </div>
                <div class="form-group">
                    <label for="open_bid" >No  :{{ $data->id }} </label>
                    <input type="text" class="form-control" id="usr" name="id_item" value="{{ $data->idItem }}" placeholder="No: " >
                    
                    
                </div>

                <div class="form-group">
                    <label for="open_bid">Open Bid:</label>
                    
                    <p href="" class="text" >{{ $data->open_bid }}</p>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi: {{ $data->deskripsi }}</label>
                     
                </div>
                <div class="form-group">
                    <label for="id_user"  >ID User: {{Session::get('login')}}</label>
                    <input type="text" class="form-control" id="usr" name="id_user" value="{{ $data->idUser }}" placeholder="ID User: ">
                </div>
                <div class="form-group">
                    <label for="open_bid">masukkan nilai BID:</label>
                    <input type="text" class="form-control" id="usr" name="nilaiBid" value="{{ $data->nominal_bid }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button href="{{ route('deskripsi.index', $data->id) }}" type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>

</div>


  


</body>
    
@include('items.footer')
</html>w