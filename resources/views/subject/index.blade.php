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

    <div class=" container mx-auto mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Subject Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Code
                    </th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach ($students as $student)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $student->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->roll }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->reg }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->class }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->gender?? null}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->mobile_number??null }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->present_address??null }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->permanent_address??null }}
                        </td>

                        <td class="px-6 py-4">
                            <a href="{{ route('students.show',$student->id) }}" class="underline"> View </a>
                        </td>
                        

                    </tr>
                @endforeach



            </tbody> --}}
        </table>
    </div>



</x-app-layout>
