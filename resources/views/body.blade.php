@extends ('layouts.app')
@section ('css')
<link rel="stylesheet" href="style.css">
@endsection
@section ('content')
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <header>
        <h1>Поиск рейсов на междугородние автобусы</h1>
        <nav>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <form method="get" action="{{ route('search') }}">
        <label for="from">Откуда:</label>
        <input type="text" id="from" name="from">

        <label for="to">Куда:</label>
        <input type="text" id="to" name="to">

        <label for="date">Дата:</label>
        <input type="date" id="date" name="date">

        <button type="submit">Найти рейсы</button>
    </form>
        
    </main>
    <footer>
        <p>Copyright © 2023 
        </p>
    </footer>
@endsection 