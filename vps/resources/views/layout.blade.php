<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
	<title>Layout_Name</title>
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
	

	@include('main.sidebar')

	</div>
	</div>

	@include('main.topnav')
	<div class="right_col" role="main">
	@yield('content')
	</div>
	@include('scripts')

	@include('main.footer')

</div>
</div>
</body>
</html>