<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <form method="POST" action="/login" class="bg-white p-6 rounded shadow w-96">
        @csrf
        <h2 class="text-2xl font-bold mb-4">Login</h2>

        @if (session('error'))
            <div class="mb-4 text-red-600 text-sm">
                {{ session('error') }}
            </div>
        @endif

        <div class="mb-4">
            <label class="block mb-1">Email</label>
            <input type="email" name="email" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Password</label>
            <input type="password" name="password" class="w-full border p-2 rounded" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full">
            Login
        </button>
    </form>
</body>
</html>
