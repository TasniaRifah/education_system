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
        <form method="POST" action="{{ route('students.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

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
                <x-input-label for="class" :value="__('Class')" />
                <x-text-input id="class" class="block mt-1 w-full" type="text" name="class" :value="old('class')"
                    required />
                <x-input-error :messages="$errors->get('class')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="gender" :value="__('Gender')" />
                <x-input-select name="gender" placeholder=" Select Gender">
                    <option value="defult">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </x-input-select>
            </div>


            <div class="mt-4">
                <x-input-label for="mobile_number" :value="__('Guardian Mobile Number')" />
                <x-text-input id="mobile_number" class="block mt-1 w-full" type="number" name="mobile_number"
                    :value="old('mobile_number')" />
                <x-input-error :messages="$errors->get('mobile_number')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="present_address" :value="__('Present Address')" />
                <x-text-input id="present_address" class="block mt-1 w-full" type="text" name="present_address"
                    :value="old('present_address')" />
                <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="permanent_address" :value="__('Permanent Address')" />
                <x-text-input id="permanent_address" class="block mt-1 w-full" type="text" name="permanent_address"
                    :value="old('permanent_address')" />
                <x-input-error :messages="$errors->get('permanent_address')" class="mt-2" />
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
