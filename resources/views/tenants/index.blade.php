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

                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Contacts</th>
                            <th class="px-4 py-2">Domain</th>
                            <th class="px-4 py-2">Actions</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($tenants as $tenant)
                            <tr>
                                <td class="border px-4 py-2">{{$tenant -> name}}</td>
                                <td class="border px-4 py-2">{{$tenant -> email}}</td>
                                <td class="border px-4 py-2">{{$tenant -> contacts}}</td>
                                <td class="border px-4 py-2">
                                    @foreach($tenant->domains as $domain)
                                        {{$domain -> domain}}{{$loop->last ? '' : ','}}
                                    @endforeach
                                </td>
                                <td class="border px-4 py-2">Actions</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-app-layout>
