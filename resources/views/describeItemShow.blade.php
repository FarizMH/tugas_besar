<!DOCTYPE html>
<html lang="en">
@include('items.head')
 @include('indexUser')
    
   

<body>
 


  
  

    
   
        
          <form action="#" method="post" enctype="multipart/form-data">
                
           
           
           <p>jika nominal bid di bawah nominal open bid atau bernilai di bawah nominal bid pertama kali. </p>
           <p>maka, nominal bid tidak berlaku,</p>
            
             
          
                 @foreach($dataBid as $datas)
                   <div class="form-group">
                    <label for="">ID User : {{Session::get('name')}}</label>
                    
                    
                    </div>
                        
            
              <br for="usr" >Melakukan Bid : {{ $datas->nominal_bid }} </br>
          
            
             <br for="usr" >Total Bid saat ini = {{ $datas->nominal_bid }} </br>
             <br></br>
            
             @endforeach 
           </form>

        
           
          


</body>


  



    

</html>