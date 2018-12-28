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
            <h1>Anak IT -  Table Kontak</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>File</th>
                    <th>Open Bid</th>
                    <th>Deskripsi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->name }}</td>
                     
                        <td><img src="{{ url('uploads/file/'.$datas->file) }}" style="width: 150px; height: 150px;"> </td>
                        <td>{{ $datas->open_bid }}</td>
                        <td>{{ $datas->deskripsi }}</td>
                        <td>
                            <form action="{{ route('edit_profil.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('edit_profil.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
  </body>
@include('items.footer')
</html>
