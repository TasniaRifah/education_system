<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
  
    <div class="container mx-auto mt-5">
        <div class="flex flex-col md:flex-row gap-6 ">
      
            <div class="basis-4/12 shadow border border-slate-400 bg-white text-black text-center p-4 rounded">
                <h2 class="text-xl md:text-4xl font-bold">{{ $teachers->count() }}</h2>
                <h2>Total Teacher</h2>
            </div>

            <div class="basis-4/12 shadow border border-slate-400 bg-white text-black text-center p-4 rounded">
                <h2 class="text-xl md:text-4xl font-bold">{{ $students->count() }}</h2>
                <h2>Total Student</h2>
            </div>

        </div>
    </div>
    {{-- <div class="shadow-md ">
        <label for="">Teacher</label>
        <p>count:</p>
    </div> --}}
</x-app-layout>
