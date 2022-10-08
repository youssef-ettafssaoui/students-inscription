@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<div class="main-content">    
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
@include('admin.layouts.footer')