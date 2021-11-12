<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="{{asset('back_end/admin/sidebar.css')}}" rel="stylesheet">
</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Admin</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="{{route('index')}}">Dashboard</a>
      <a class="p-2 text-dark" href="{{route('home')}}">Profile</a>
    </nav>
  </div>
  <div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Overview</div>
      <div class="list-group list-group-flush">
        <a href="{{route('index')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="{{url('/admin/product')}}" class="list-group-item list-group-item-action bg-light">Prpoduct</a>
        <a href="{{url('/admin/category')}}" class="list-group-item list-group-item-action bg-light">Catrgory</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">User</a>
      </div>
    </div>
    <div id="page-content-wrapper">
      <div class="container-fluid">
        @yield('body')
    </div>
  </div>
</body>
</html>
