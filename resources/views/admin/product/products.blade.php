@extends('adminlayout.master')
@section('title', 'dashboard')
@section('admin-content')
<div class="page-content">


<livewire:product.products>


<!-- Footer Start -->
<footer class="footer h-16 flex items-center px-6 bg-white shadow dark:bg-gray-800">
    <div class="flex justify-center w-full gap-4">
        <div>
            <script>document.write(new Date().getFullYear())</script><a href="https://coderthemes.com/" target="_blank">powerd by z market</a> <br>
            <script></script><a href="https://coderthemes.com/" target="_blank" >تم التطوير بواسطة nexoria </a>
        </div>
    </div>
</footer>
<!-- Footer End -->

</div>


@endsection