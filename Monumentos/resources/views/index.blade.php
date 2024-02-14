<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Monumentos') }}
        </h2>
    </x-slot>

    <h1 class="text-2xl font-bold mt-4 text-blue-200 ml-8 text-center">Monumentos</h1>

    <div class="flex justify-center">
        <table class="w-3/4 border border-gray-200 shadow-lg rounded-lg">
            <thead class="bg-purple-100">
                <tr>
                    <th class="px-4 py-2 text-center border border-gray-300">Nombre</th>
                    <th class="px-4 py-2 text-center border border-gray-300">Provincia</th>
                    <th class="px-4 py-2 text-center border border-gray-300">Aforo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monumentos as $monu)
                <tr class="border-t border-gray-200">
                    <td class="px-4 py-2 bg-purple-50 text-center border border-gray-300">{{$monu->nombre}}</td>
                    <td class="px-4 py-2 bg-purple-50 text-center border border-gray-300">{{$monu->provincia->nombre}}</td>
                    <td class="px-4 py-2 bg-purple-50 text-center border border-gray-300">{{$monu->aforo}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4 bg-purple-100 rounded-lg p-6 shadow-lg bg-blue-200">
        <p>JSON:</p>
        <p>{{$json}}</p>
    </div>

    <div class="mt-4 flex justify-center items-center">
        <a href="{{ route('dashboard') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver al dashboard</a>
    </div>
    
</x-app-layout>