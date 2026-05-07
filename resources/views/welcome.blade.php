<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gray-100">
        <div class="min-h-screen flex flex-col items-center justify-start pt-10 pb-10">

            <!-- Welcome Heading -->
            <h1 class="text-3xl font-bold text-gray-800 mb-10">Welcome to the test landing page</h1>

            <!-- Login Form -->
            <div class="w-full sm:max-w-md px-6 py-6 bg-white shadow-md sm:rounded-lg mb-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4 text-center">Log in</h2>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="login_email" :value="__('Email')" />
                        <x-text-input id="login_email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->login->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="login_password" :value="__('Password')" />
                        <x-text-input id="login_password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->login->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

            <!-- Registration Form -->
            <div class="w-full sm:max-w-md px-6 py-6 bg-white shadow-md sm:rounded-lg">
                <h2 class="text-xl font-semibold text-gray-700 mb-4 text-center">Register</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="reg_name" :value="__('Name')" />
                        <x-text-input id="reg_name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autocomplete="name" />
                        <x-input-error :messages="$errors->register->get('name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="mt-4">
                        <x-input-label for="reg_email" :value="__('Email')" />
                        <x-text-input id="reg_email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->register->get('email')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div class="mt-4">
                        <x-input-label for="reg_phone" :value="__('Phone')" />
                        <x-text-input id="reg_phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="tel" />
                        <x-input-error :messages="$errors->register->get('phone')" class="mt-2" />
                    </div>

                    <!-- Address -->
                    <div class="mt-4">
                        <x-input-label for="reg_address" :value="__('Address')" />
                        <x-text-input id="reg_address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="street-address" />
                        <x-input-error :messages="$errors->register->get('address')" class="mt-2" />
                    </div>

                    <!-- Zipcode -->
                    <div class="mt-4">
                        <x-input-label for="reg_zipcode" :value="__('Zipcode')" />
                        <x-text-input id="reg_zipcode" class="block mt-1 w-full" type="text" name="zipcode" :value="old('zipcode')" required autocomplete="postal-code" />
                        <x-input-error :messages="$errors->register->get('zipcode')" class="mt-2" />
                    </div>

                    <!-- Bike Brand -->
                    <div class="mt-4">
                        <x-input-label for="reg_bike_brand" :value="__('Bike Brand')" />
                        <x-text-input id="reg_bike_brand" class="block mt-1 w-full" type="text" name="bike_brand" :value="old('bike_brand')" required />
                        <x-input-error :messages="$errors->register->get('bike_brand')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="reg_password" :value="__('Password')" />
                        <x-text-input id="reg_password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->register->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="reg_password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="reg_password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->register->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>
