<!doctype html>

<html>

<head>
	   
	@include('includes.head')

</head>

<body>

<div class="container">

   <header >

       @include('includes.header')
	   
   </header>

	@include('includes.nav')
    @include('includes.messages')       

           @yield('content')

  

	


   <footer >

       @include('includes.footer')

   </footer>

</div>
 	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    
</body>

</html>