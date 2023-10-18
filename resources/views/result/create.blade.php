<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Student List') }}
            </h2>
            <a href="{{ route('students.create') }}"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 px-4 mx-6">+
                New Student</a>

        </div>

    </x-slot>
    <x-guest-layout>
        <form method="POST" action="{{ route('results.store') }}">
            @csrf

            <!-- Name -->


            <!-- Email Address -->

            <div class="mt-4">
                <x-input-label for="roll" :value="__('Roll')" />
                <x-text-input id="roll" class="block mt-1 w-full" type="number" name="roll" :value="old('roll')"
                    required />
                <x-input-error :messages="$errors->get('roll')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="reg" :value="__('Registration')" />
                <x-text-input id="reg" class="block mt-1 w-full" type="number" name="reg" :value="old('reg')"
                    required />
                <x-input-error :messages="$errors->get('reg')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="mark" :value="__('Mark')" />
                <x-text-input id="mark" class="block mt-1 w-full" type="number" name="mark" :value="old('mark')"
                    required />
                <x-input-error :messages="$errors->get('mark')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="subject" :value="__('Subject')" />
                <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" required
                    :value="old('subject')" />
                <x-input-error :messages="$errors->get('subject')" class="mt-2" />
            </div>

            <!-- Password -->



            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('students.index') }}">
                    {{ __('Back') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Save') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
</x-app-layout>
