<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-btn-link href="{{route('tenants.create')}}">Create Tenant</x-btn-link>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Header 1</th>
                            <th class="px-4 py-2">Header 2</th>
                            <th class="px-4 py-2">Header 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Data 1</td>
                            <td class="border px-4 py-2">Data 2</td>
                            <td class="border px-4 py-2">Data 3</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Data 4</td>
                            <td class="border px-4 py-2">Data 5</td>
                            <td class="border px-4 py-2">Data 6</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
