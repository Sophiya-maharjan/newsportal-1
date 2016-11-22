@extends('layouts.default')

@section('content')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

  <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>

  <script type="text/javascript" >  

    /* edit Images using aviray */

    var featherEditor = new Aviary.Feather({

        apiKey: '', // your api key , you can get one from http://developers.aviary.com/

        apiVersion: 3, // the api version . 3 is the last one so far

        theme: 'dark', // there are 'light' and 'dark' themes

        tools: 'all', // you can specify the tools from here, you can include/exclude what ever you want

        appendTo: '',

        onSave: function(imageID, newURL) {

            var img = document.getElementById(imageID);

            img.src = newURL; // after save, replacs the image with the new one from aviary.com

            featherEditor.close();

        },

        onError: function(errorObj) { 

            alert(errorObj.message);

        }

    });

    /* after upload call read image function*/

    $(document).on('change', '#Image', function() {

       // readImage(this);

       if (this.files && this.files[0]) {

            var reader = new FileReader();    

            reader.onload = function (e) {

                launchEditor('ImagePreview', e.target.result)

                $('#ImagePreview').attr('src', e.target.result);

            }

            reader.readAsDataURL(this.files[0]);                           

        }

    });                   

    function launchEditor(id, src) {

        featherEditor.launch({

            image: id,

            url: src

        });

       return false;

    }

    $(document).on('click', '#editImagePreview', function() {

         var url =$('#ImagePreview').attr("src");

         return launchEditor('ImagePreview', url);

    });       

  </script>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addUser') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Your Profile Picture</label>

                            <div class="col-md-6">
                                <fieldset>


        <div class="widget">

           <div class="well">

              <div class="controls controls-width span12"  >

                 <label class="control-label"><b>Upload your image:</b></label>

                 <input type="file" id="Image" name="userImage">

                 <div class="imageupload">

                    <div id="photo">

                       <img width="300px;" id="ImagePreview" src="http://asara.me/Aviary-Example/preview.jpg" alt="your image"/>

                    </div>

                    <button  type="button" class="black-add-button" id="editImagePreview" class="btn btn-large"> Edit!

                    </button> 

                 </div>

              </div>

           </div>

        </div>     


  </fieldset>
                                
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
