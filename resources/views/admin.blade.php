@extends('layouts.app')
@section('content')
            <a href="{{url('/addUser')}}"><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Admin</button></a>
<br>
<div class="container">
                     <div class="col-md-9 col-xs-12">
                      <h3>Admin Table!!</h3>
                   <table class="table table-responsive table-hover">
                            <thead class="thead-inverse">
                                <th>Name</th>
                                <th>Email</th>
                                <th colspan= "2">Edit/Delete</th>
                            </thead>
                            <tbody>
                                  @foreach($users as $user)
                               
                                <tr>
                                  
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a href="/editUser/{{$user->id}}"><i class="fa fa-pencil-square-o" ></i></a></td>
                                    <td>{!! Form::open(['method' => 'DELETE', 'url'=>['admin', $user->id]]) !!}
                                    {!! Form::button('<i class="fa fa-trash-o"></i>', ['role' => 'button', 'type' => 'submit']) !!}
                                    {!! Form::close() !!}</td>
                                        
                                    </tr>
                                  @endforeach
                                </tbody>

                            </table>

                  </div>
                    
                
              <!-- end of main content -->
</div>
@endsection 