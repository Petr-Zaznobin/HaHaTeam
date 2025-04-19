@extends('layouts.app')

@section('title', 'Кабинет исполнителя')

@section('content')
    <header class="bg-gradient-to-r from-primary to-primary-dark text-white py-6 shadow-lg">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-semibold">Кабинет исполнителя</h1>
        </div>
    </header>

    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 flex gap-4 justify-center py-3">
            <a href="#requests" class="text-primary font-medium hover:text-primary-dark transition-colors">Запросы</a>
            <a href="#schedule" class="text-primary font-medium hover:text-primary-dark transition-colors">Расписание</a>
            <a href="#reviews" class="text-primary font-medium hover:text-primary-dark transition-colors">Отзывы</a>
            <a href="#profile" class="text-primary font-medium hover:text-primary-dark transition-colors">Профиль</a>
        </div>
    </nav>

    <main class="container mx-auto px-4 my-8">

    </main>
@endsection
