<!DOCTYPE html>
<html lang="en">
@include('items.head')
 @include('indexUser')
    
    <body>
<div class="section">
  <div class="card-panel purple darken-3 white-text">Tutorial Pencarian Laravel 5.2 dengan Materializecss</div>
</div>

<div class="section">
@if (count($hasil))
<div class="card-panel green white-text">Hasil pencarian : <b>{{$query}}</b></div>
    @foreach($hasil as $data)
   <div class="col-lg-3 col-md-6 mb-4">
          
                
          <div class="card">
           <div class="card-panel green white-text">Hasil pencarian : <b>{{$query}}</b></div>
            <img class="card-img-top" src="{{ url('uploads/file/'.$data->file) }}" alt="">
            <div class="card-body">
  
              <h4 class="card-title">{{ $data->name }}</h4>
              <p class="card-text">{{$data->deskripsi}}</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
           
          </div>

        </div>   



  
  @endforeach

</div>

{{ $hasil->render() }}
  
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</div>
@endif

</body>
    
@include('items.footer')
</html>