<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Student Profile') }}
            </h2>
            <a href="{{ route('students.create') }}"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 px-4 mx-6">+
                New Student</a>

        </div>

    </x-slot>

    <div class="container mx-auto mt-5">
        <div class="flex flex-col md:flex-row gap-6 justify-center">
            <div
                class="basis-4/12 shadow border border-slate-400 bg-white text-black text-center p-4 rounded justify-center">
                <h4 class="text-xl">Name: {{ $student->name }}</h4>
                <h2>Roll: {{ $student->roll }}</h2>
                <h2>Registration: {{ $student->reg }}</h2>
                <h2>Class: {{ $student->class }}</h2>
                <h2>Gender: {{ $student->gender }}</h2>
                <h2>Guardian Mobile Number : {{ $student->mobile_number }}</h2>
                <h2>Present Address: {{ $student->present_address }}</h2>
                <h2>Parmanent Address: {{ $student->permanent_address }}</h2>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-6 justify-center mt-5">
            <div
                class="basis-4/12 shadow border border-slate-400 bg-white text-black text-center p-4 rounded justify-center">
                <h4 class="text-xl">Mark Sheet</h4>
                <div class=" container mx-auto mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                  
                                    Subjects
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Marks
                                </th>
                                {{-- <th scope="col" class="px-6 py-3">
                                    Action
                                </th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($results as $result)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                  
                                    <td class="px-6 py-4">
                                        {{ $result->mark }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $result->subject }}
                                    </td>
                                
                                    
            
                                </tr>
                            @endforeach --}}

                            @for ($i = 0; $i < count($marks); $i++)
                                @for ($i = 0; $i < count($subjects); $i++)
                                 <tr>
                                    <td class="px-6 py-4">
                                      
                                        {{ $subjects[$i] }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $marks[$i] }}
                                    </td>
                                 </tr>
                                @endfor
                            @endfor



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




</x-app-layout>
