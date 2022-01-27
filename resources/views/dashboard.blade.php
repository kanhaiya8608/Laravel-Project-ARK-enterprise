<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="pl-20 pt-5">
            <h2 class="font-semibold text-4xl text-pink-800 leading-tight">
           
            Hii, {{ Auth::user()->name }}</h2>
            <h2 class="pt-5 pb-8 px-6 font-semibold text-2xl text-purple-900 leading-tight">
           
            Hey, it’s great to have you onboard! You are now part of an esteemed team who raise the benchmark every time. We’ll have a great time working together.</h2>
            </div></div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
