@extends('layouts.app')
@section('content')
<div class="">
        <a href="{{route('category.create')}}" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Categories</button></a></div>
<br>

         <div class="container">
                     <div class="col-md-9 col-xs-12">
                      <h3>Welcome to Categories Dashboard.</h3><br>
                @foreach($data as $category)
              <form method="post" class="form-signin" action="{{route('category.update',$category->id)}}">
                <h2 class="form-signin-heading">Add Category</h2>
                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
                
                
                <label for="inputPassword" class="sr-only">Category Name</label>
                <input type="categoryName" id="inputCategory" name="categoryName" class="form-control" placeholder="Category Name" value="{{$category->categoryName}}" required autofocus><br> 

                  @endforeach                      
                
                <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit"/>
              </form>

                  </div>
                    
                
              <!-- end of main content -->

            </div>


@endsection