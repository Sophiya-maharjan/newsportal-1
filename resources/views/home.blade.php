@extends('layouts.app')
  @section('content')
    

              <div class ="container-fluid">
             <div class="col-md-9 col-xs-12">
              <!-- main content -->
                
                  <div class="container">
                    
                      <h3>Welcome {{Auth::user()->name}}</h3>
                      <h4>New At the Block !!</h4>
                     <!-- <div>Upload your image: <input type='file' name='userImage'></div>-->
                        
                        @foreach($users as $user)

                          {{$user->name}}
                          <!-- {{$user->email}} -->
                          @endforeach
                      

                  </div>
                    
                
              <!-- end of main content -->

          </div>
        </div>

  @endsection
