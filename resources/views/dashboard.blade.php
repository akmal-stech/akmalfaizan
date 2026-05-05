<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold">{{ __('Your Profile Details') }}</h3>
                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            {{ __('Edit Profile') }}
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Name') }}</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ Auth::user()->name }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Email') }}</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ Auth::user()->email }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Phone') }}</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ Auth::user()->phone ?? 'Not set' }}</dd>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Address') }}</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ Auth::user()->address ?? 'Not set' }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Zipcode') }}</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ Auth::user()->zipcode ?? 'Not set' }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Bike Brand') }}</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-gray-100">{{ Auth::user()->bike_brand ?? 'Not set' }}</dd>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            {{ __('Member since') }}: {{ Auth::user()->created_at->format('F j, Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
