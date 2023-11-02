@include('admin.layout.sidebar')
<div id="content-wrapper" class="d-flex flec-column">

<!-- main content -->
<div id="content">

@include('admin.layout.top')
<div class="container-fluid">

@yield('content')

</div>
</div>
@include('admin.layout.footer')