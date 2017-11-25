@extends('layouts.default')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <p><h2>Get In Touch</h2></p>   
                <p>If you having trouble with this service, please <a href="#">Ask for help</a> </p>
                    
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" rows="6" name="message">
                                
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary form-control" type="submit" value="submit Enquiry &raquo">
                        </div>
                    </form>
            </div>
        </div>    
    </div>
@stop