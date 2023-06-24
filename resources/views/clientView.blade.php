
@extends('layouts.app')

@section('title')
    Cliente
@endsection


@section('content')
    <h1>Editar Cliente</h1>

<form action="{{ route('client.update') }}" method="POST">
    @csrf

    <form class="w-full max-w-lg">
        <input type="text" id="id" name="id" value="{{ $client['client']['id'] }}">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Nombre
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                       id="name" name="name" type="text" value="{{ $client['client']['name'] }}" >
            </div>

            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                   Email
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       id="email" name="email" type="text" value="{{ $client['client']['email'] }}">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Dirección
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       id="address" name="address" value="{{ $client['client']['address'] }}"  >

            </div>

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Telefono
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                       id="phone" name="phone" type="text" value="{{ $client['client']['phone'] }}" >
            </div>

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <button class="mt-5 ml-6 bg-blue-600 h-10 text-white w-24 hover:bg-blue-400
                hover:text-gray-600 rounded" type="submit">Guardar</button>
            </div>

        </div>



    </form>

@endsection
