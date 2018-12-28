
<!DOCTYPE html>
<html lang="en">
@include('items.head')

  <body>

    
    @include('indexUser')
    @include('items.header')

    <!-- Main Section -->



    <section class="main-section">
        @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
          
            <div class="content">
            <!-- Remove This Before You Start -->
             
            
            <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            
            @foreach ($data as $data)
            {{ $data->file }}
            <img class="card-img-top" src="{{ url('uploads/profil/'.$data->file) }}" alt="">
             @endforeach
            <div class="card-body">
                 <h4 class="card-title">{{Session::get('name')}}</h4>
              <h4 class="card-title">{{Session::get('email')}}</h4>
              <p class="card-text">{{ $data->fullname}}</p>
            
            <div class="card-footer">
              
              <a href="/item_create" class="btn btn-primary btn-lg">Adakan Lelang</a>
             
            </div>
            <div class="card-footer">
              
               {{ csrf_field() }}
              <a href="/lelangku" class="btn btn-primary btn-lg">Lelangku</a>
              <a href="/profilku" class="btn btn-primary btn-lg">Edit Profil</a>
            </div>
          </div>
        </div>
        
            
            
            

        </div>
        <!-- /.content -->
        
    </section>
    <!-- /.main-section -->
</body>
@include('items.footer')
</html>