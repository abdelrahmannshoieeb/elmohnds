@extends('adminlayout.master')
@section('title', 'dashboard')
@section('admin-content')


<div class="page-content">

<livewire:contact.contacts>


<!-- Footer Start -->
<footer class="footer h-16 flex items-center px-6 bg-white shadow dark:bg-gray-800">
    <div class="flex justify-center w-full gap-4">
        <div>
            <script>document.write(new Date().getFullYear())</script><a href="https://coderthemes.com/" target="_blank"> Nexoria   تم التطوير بواسطة </a>
        </div>
    </div>
</footer>
<!-- Footer End -->

</div>


@endsection