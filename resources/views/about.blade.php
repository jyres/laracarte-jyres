@extends('layouts.default')

@section('content')
	<div class="container">
    	<h2>what is laracarte?</h2>
    	<p>
    		Laracarte is a clone of <a href="https://laramap.com" target="_blank">laramap.com</a>
    	</p>
    	<div class="row">
    		<div class="col-md-6">
    			<p class="alert-warning alert">
    				<strong>
    					<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
    					This app is built by @jyres for learning purposes
    				</strong>
    			</p>
    		</div>
    		
    	</div>
    	<p>
    		Fell free to help to improve the <a href="#">source code</a>
    	</p>
    	<hr>
    	<h2>what is laramap?</h2>
    	<p>laramap is a website by wich laracarte was inspired :)</p>
    	<p>more infos <a href="https://laramap/p/about">here</a> </p>

    	<hr>

    	<p>wich tools and services are used in laracarte?</p>
    	<p>Basically it's built on laravel & bootstrap. But there's a bunch of services used for email and order sections.</p>

    	<ul>
    		<li>Laravel</li>
    		<li>bootstrap</li>
    		<li>amazon s3</li>
    		<li>mandrill</li>
    		<li>Google Maps</li>
    		<li>Gravatar</li>
    		<li>Antony martin's geolocation package</li>
    		<li>Michel fortin's Markdown parser package</li>
    		<li>Heroku</li>
    	</ul>
    </div>
@stop