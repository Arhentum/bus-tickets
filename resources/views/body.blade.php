@extends ('layouts.app')
@section ('css')
<link rel="stylesheet" href="style.css">
@endsection
@section ('content')

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
        <form>
            <label for="from">Откуда:</label>
            <input type="text" id="from" name="from">

            <label for="to">Куда:</label>
            <input type="text" id="to" name="to">

            <label for="date">Дата:</label>
            <input type="date" id="date" name="date">

            <button type="submit">Найти рейсы</button>
        </form>
        <section>
            <h2>Результаты поиска</h2>
            <ul>
                <li>
                    <h3>Рейс №123</h3>
                    <p>Отправление: <span>10:00</span></p>
                    <p>Прибытие: <span>14:00</span></p>
                    <p>Продолжительность: <span>4 часа</span></p>
                    <p>Цена: <span>1000 рублей</span></p>
                    <button>Забронировать билет</button>
                </li>
                <li>
                    <h3>Рейс №456</h3>
                    <p>Отправление: <span>12:00</span></p>
                    <p>Прибытие: <span>16:00</span></p>
                    <p>Продолжительность: <span>4 часа</span></p>
                    <p>Цена: <span>900 рублей</span></p>
                    <button>Забронировать билет</button>
                </li>
            </ul>
        </section>
    </main>
    <footer>
        <p>Copyright © 2023 
        </p>
    </footer>
@endsection 