
@extends('layouts.app')

@section('content')
<div class="">
       <a href="{{route('category.create')}}" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Categories</button></a></div>
<br>

         <div class="container">
                     <div class="col-md-9 col-xs-12">
                      <h3>Welcome to Categories Dashboard.</h3>
                                              <br>

                        <table class="table table-responsive table-hover">
                            <thead class="thead-inverse">
                                
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th colspan="2">Action</th>
                            </thead>
                            <tbody>

                                <tr>
                                  @foreach($data as $category)  
                                    <td>{{$category->categoryName}}</td>
                                    <td>{{$category->categorySlug}}</td>
                                    <td><a href="/categoryEdit/{{$category->categorySlug}}"><i class="fa fa-pencil-square-o" ></i>edit</a>&nbsp;&nbsp;</td>
                                        <!-- <a href="{{route('category.destroy',$category->category_id)}}"><i class="fa fa-trash-o" ></i>Delete</a> -->
                                    <td>
                                       <form method="post" action="{{route('category.destroy',$category->id)}}">
                                        <input name="_method" type="hidden" value="DELETE">

                                         {{csrf_field()}}
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                        </form>
                                    </td>
                                    </tr>
                                  @endforeach 
                                </tbody>

                            </table>
                  </div>
                    
                
              <!-- end of main content -->

            </div>


@endsection