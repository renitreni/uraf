<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Admin - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-stone-100 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-lg border border-stone-200 p-8">
            <h1 class="text-xl font-semibold text-stone-800 mb-2">Admin login</h1>
            <p class="text-stone-500 text-sm mb-6">Sign in to access the admin area.</p>

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-50 text-red-700 rounded-lg text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-stone-700 mb-1">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        class="w-full rounded-lg border border-stone-300 px-3 py-2 text-sm focus:border-stone-500 focus:ring-1 focus:ring-stone-500"
                        placeholder="admin@example.com"
                    />
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-stone-700 mb-1">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        required
                        autocomplete="current-password"
                        class="w-full rounded-lg border border-stone-300 px-3 py-2 text-sm focus:border-stone-500 focus:ring-1 focus:ring-stone-500"
                    />
                </div>
                <div class="flex items-center">
                    <input
                        type="checkbox"
                        name="remember"
                        id="remember"
                        class="rounded border-stone-300 text-stone-600 focus:ring-stone-500"
                    />
                    <label for="remember" class="ml-2 text-sm text-stone-600">Remember me</label>
                </div>
                <button
                    type="submit"
                    class="w-full rounded-lg bg-stone-800 text-white py-2.5 text-sm font-medium hover:bg-stone-700 focus:ring-2 focus:ring-stone-500 focus:ring-offset-2"
                >
                    Sign in
                </button>
            </form>
        </div>
    </div>
</body>
</html>
