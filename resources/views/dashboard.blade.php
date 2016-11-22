
  @extends('layouts.template')
  @section('content')
              <div class ="container-fluid">
             <div class="col-md-9 col-xs-12">
              <!-- main content -->
                
                  <div class="container">
                    
                      <h3>Welcome {{ Auth::user()->name }}</h3>
                      <h4>
                         <p ng-controller= "CategoryController"></p>
                      </h4>
                  </div>
                    
                
              <!-- end of main content -->

          </div>
        </div>

  @endsection
