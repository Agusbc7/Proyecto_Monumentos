<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear monumento') }}
        </h2>
    </x-slot>
    
    <div class="mt-4 flex justify-center items-center">
    <form action="{{ route('monumentos.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 space-y-4">
        @csrf
        <div>
            <label for="nombre" class="block text-blue-500">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="w-full sm:w-64 border-gray-300 rounded-md px-2 py-1">
            @error('nombre')
                <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="provincia_id" class="block text-blue-500">Provincia</label>
            <select name="provincia_id" id="provincia_id" class="w-full sm:w-64 border-gray-300 rounded-md px-2 py-1">
                <option value="" disabled selected>Selecciona una provincia</option>
                <option value="1">Almería</option>
                <option value="2">Cádiz</option>
                <option value="3">Córdoba</option>
                <option value="4">Granada</option>
                <option value="5">Huelva</option>
                <option value="6">Jaén</option>
                <option value="7">Málaga</option>
                <option value="8">Sevilla</option>
            </select>
            @error('provincia_id')
                <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="aforo" class="block text-blue-500">Aforo</label>
            <input type="text" name="aforo" id="aforo" class="w-full sm:w-64 border-gray-300 rounded-md px-2 py-1">
            @error('aforo')
                <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Añadir</button>
    </form>
</div>

    <div class="mt-4 flex justify-center items-center">
        <a href="{{ route('dashboard') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver al dashboard</a>
    </div>

</x-app-layout>