@extends('layouts.app')

@section('content')
    <header class="bg-gradient-to-r from-[#6366f1] to-[#4f46e5] text-white py-6 shadow-lg">
        <div class="container max-w-6xl mx-auto px-4">
            <h1 class="text-2xl font-semibold">СтудМаркет</h1>
        </div>
    </header>

    <main class="container max-w-6xl mx-auto px-4">
        <section class="text-center py-16">
            <h2 class="text-4xl font-bold mb-4">Найди эксперта за минуты</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Репетиторы, дизайнеры, переводчики и многое другое — просто напиши запрос.
            </p>

            <div class="mt-8 max-w-3xl mx-auto flex gap-4">
                <input type="text"
                       placeholder="Например: нужен репетитор по матану"
                       class="flex-1 p-4 rounded-lg shadow-md">
                <button class="btn-primary">
                    Найти
                </button>
            </div>
        </section>

        <section class="grid md:grid-cols-3 gap-6 py-12">
            <div class="card">
                <h3 class="text-xl font-semibold mb-3">Лучшие совпадения</h3>
                <p class="text-gray-600">Top‑3 предложений с объяснением выбора.</p>
            </div>

            <div class="card">
                <h3 class="text-xl font-semibold mb-3">AI‑Ассистент</h3>
                <p class="text-gray-600">Поможет составить ТЗ и задать уточняющие вопросы.</p>
            </div>

            <div class="card">
                <h3 class="text-xl font-semibold mb-3">Советы сообщества</h3>
                <p class="text-gray-600">Подборка стратегий поиска от студентов.</p>
            </div>
        </section>
    </main>
@endsection
