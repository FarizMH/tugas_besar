<!DOCTYPE html>
<html lang="en">
@include('items.head')
 @include('indexUser')
    
   

<body>
 
@include('items.header')

<thead>
  <div class="container">
  <div class="row text-center">

    <p for="usr" > ID User : {{Session::get('name')}}  </p> 
    @foreach($data as $datas)
        <div class="col-lg-3 col-md-6 mb-4">
          
                
          <div class="card">
           
           
            <div class="card-body">
              <p for="usr" > ID User : {{ $datas->id_user }}  </p> 
              
            </div>
            <div class="card-body">
                <p for="usr" > {{ $datas->nominal_bid }} </p>
            </div>
           
          </div>

        </div>   
 @endforeach 
</div>
    </div>
</thead>
</body>


  


</body>
    
@include('items.footer')
</html>w