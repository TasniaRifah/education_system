<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
    
        <div class="mt-4">
            <x-input-label for="designation" :value="__('Designation')" />
            <x-text-input id="designation" class="block mt-1 w-full" type="text" name="designation" :value="old('designation')"
             />
            <x-input-error :messages="$errors->get('designation')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <x-input-select  name="gender" placeholder=" Select Gender">
                <option value="defult">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </x-input-select>
        </div>

        <div class="mt-4">
            <x-input-label for="dob" :value="__('Date of Birth')" />
            <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" />
            <x-input-error :messages="$errors->get('dob')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="educational_qualification" :value="__('Educational Qualification')" />
            <x-text-input id="educational_qualification" class="block mt-1 w-full" type="text"
                name="educational_qualification" :value="old('educational_qualification')" />
            <x-input-error :messages="$errors->get('educational_qualification')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="joining_date" :value="__('Joining Date')" />
            <x-text-input id="joining_date" class="block mt-1 w-full" type="date" name="joining_date"
                :value="old('joining_date')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('joining_date')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="mobile_number" :value="__('Mobile Number')" />
            <x-text-input id="mobile_number" class="block mt-1 w-full" type="number" name="mobile_number"
                :value="old('mobile_number')" />
            <x-input-error :messages="$errors->get('mobile_number')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="present_address" :value="__('Present Address')" />
            <x-text-input id="present_address" class="block mt-1 w-full" type="text" name="present_address"
                :value="old('present_address')"  />
            <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="permanent_address" :value="__('Permanent Address')" />
            <x-text-input id="permanent_address" class="block mt-1 w-full" type="text" name="permanent_address"
                :value="old('permanent_address')"  />
            <x-input-error :messages="$errors->get('permanent_address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
