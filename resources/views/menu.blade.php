<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenidos a la Tienda Online') }}
        </h2>
    </x-slot>
    @include('index')
    @yield('contenido')


</x-app-layout>




