<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>

    <div class="mt-8 md:mt-0 flex">
        @auth
            {{-- Authenticated user session --}}
            <span class="text-xs font-bold uppercase mt-4">Welcome, {{ auth()->user()->name }}!</span>
            <form action="/logout" method="POST" class="text-xs font-semibold text-blue-500 ml-6 mt-4">
                @csrf
                <button type="submit">Log Out</button>
            </form>
        @else
            {{-- Guest session --}}
            <a href="/register" class="text-xs font-bold uppercase mt-4">Register</a>
            <a href="/login" class="text-xs font-bold uppercase mt-4 ml-6">Login</a>
        @endauth

        <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Subscribe for Updates
        </a>
    </div>
</nav>