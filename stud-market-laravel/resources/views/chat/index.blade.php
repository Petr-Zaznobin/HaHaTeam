@extends('layouts.app')

@section('title', 'Чат с AI‑ассистентом')

@section('content')
    <header class="bg-[#6366f1] text-white py-4 shadow-md">
        <div class="container max-w-4xl mx-auto px-4">
            <h2 class="text-xl font-semibold">AI‑ассистент</h2>
        </div>
    </header>

    <section class="flex-1 overflow-y-auto p-6 bg-gray-50">
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="bg-[#6366f1] text-white p-4 rounded-lg ml-auto max-w-[70%]">
                Нужен репетитор по матану срочно!
            </div>

            <div class="bg-white p-4 rounded-lg max-w-[70%] shadow-md">
                Понял! Какой курс матанализа вы проходите и когда нужно начать занятия?
            </div>
        </div>
    </section>

    <div class="bg-white p-4 shadow-inner">
        <div class="max-w-4xl mx-auto flex gap-4">
            <input type="text"
                   placeholder="Введите сообщение..."
                   class="flex-1 p-4 border-2 border-gray-200 rounded-lg">
            <button class="btn-primary">
                Отправить
            </button>
        </div>
    </div>
@endsection
