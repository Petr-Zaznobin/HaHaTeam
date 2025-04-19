<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'СтудМаркет' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --bg: #f3f4f6;
            --card: #fff;
            --text: #1f2937;
            --muted: #6b7280;
            --radius: 1rem;
            --shadow: 0 8px 24px rgba(0,0,0,.06);
            --transition: .25s ease;
        }

        .card {
            background: var(--card);
            border-radius: var(--radius);
            padding: 2rem 1.75rem;
            box-shadow: var(--shadow);
            transition: transform var(--transition);
        }

        .card:hover {
            transform: translateY(-6px);
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
            padding: 1rem 2rem;
            border-radius: var(--radius);
            transition: background var(--transition);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }
    </style>
</head>
<body class="font-[Poppins]">
@yield('content')
</body>
</html>
