@extends('layouts.app')

@section('title', 'Уведомление')

@section('content')
<body>
<section class="note">
    <h2>Новый потенциальный студент ✨</h2>
    <p class="details"><strong>Запрос:</strong> «нужен репетитор по матану срочно»<br><strong>Дедлайн:</strong> начать в течение 24 часов<br><strong>Курс:</strong> 2 курс, подготовка к экзамену<br><strong>Ожидание:</strong> 3×2‑часовых занятия + практика</p>
    <button>Ответить студенту</button>
    <p class="meta">Отправлено: 19 апреля 2025, 14:06</p>
</section>
</body>

@section('style')
<style>
    :root{--primary:#6366f1;--bg:#eef0f4;--radius:1rem;--shadow:0 8px 20px rgba(0,0,0,.05)}
    body{font-family:Poppins,sans-serif;background:var(--bg);display:flex;justify-content:center;align-items:center;height:100vh;color:#1f2937;padding:1rem}
    .note{background:#fff;border-left:6px solid var(--primary);padding:2rem 2.25rem;border-radius:var(--radius);box-shadow:var(--shadow);max-width:620px;width:100%}
    h2{font-size:1.5rem;font-weight:600;margin-bottom:1rem}
    .details{line-height:1.6;font-size:.95rem;margin-bottom:1.5rem;color:#374151}
    button{background:var(--primary);color:#fff;border:none;padding:1rem 2rem;border-radius:var(--radius);font-weight:500;cursor:pointer;transition:.25s}
    button:hover{background:#4f46e5}
    .meta{margin-top:1rem;font-size:.8rem;color:#6b7280}
</style>
