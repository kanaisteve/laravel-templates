<!doctype html>
<head>
    @include('partials._head')
</head>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        @include('partials._nav')

        {{ $slot }}

        @include('partials._footer')
    </section>
    @if (session()->has('success'))
        <div x-data="{ show:true }"
            x-init="setTimeout(() => show = false, 4000)"
            x-show="show" 
            class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    @include('partials._scripts')
</body>