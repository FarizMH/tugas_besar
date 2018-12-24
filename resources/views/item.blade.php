<!DOCTYPE html>
<html lang="en">
@include('items.head')
 @include('indexUser')
    
    @include('items.header')
<thead>
  <div class="container">
  <div class="row text-center">
    @foreach($data as $datas)
        <div class="col-lg-3 col-md-6 mb-4">
          
                
          <div class="card">
           
            <img class="card-img-top" src="{{ url('uploads/file/'.$datas->file) }}" alt="">
            <div class="card-body">
              <h4 class="card-title">{{ $datas->name }}</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
           
          </div>

        </div>   
 @endforeach 
</div>
    </div>
</thead>
</body>
    
@include('items.footer')
</html>
    