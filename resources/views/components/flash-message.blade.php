@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => false, 2300)" x-show="show"
    class="fixed top-0 left-1/2 transform -trasnlate-x-1/2 bg-laravel text-white px-48 py-3">
    <p>
        {{session('message')}}
    </p>
</div>
@endif