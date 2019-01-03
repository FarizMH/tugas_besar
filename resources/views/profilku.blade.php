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
                    <th>Username</th>
                    <th>foto</th>
                    <th>Fuser ID</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        
                        <td>{{ $datas->name }}</td>
                     
                        <td><img src="{{ url('uploads/file/'.$datas->file) }}" style="width: 150px; height: 150px;"> </td>
                        @endforeach
                        <td>{{ $datas->id }}</td>
                        <td>
                            <form action="{{ route('edit_profil.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('edit_profil.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus akun? data tidak dapat dikembalikan!')">Delete</button>
                            </form>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
  </body>
@include('items.footer')
</html>
