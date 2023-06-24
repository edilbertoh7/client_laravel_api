@extends('layouts.app')

@section('title')
    Clientes
@endsection

@section('content')
    <div class="container">
<h1>cliente</h1>
<table class="table-auto">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Dirección</th>
            <th>Aciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $client)
            <tr>
                <td>{{ $client['id'] }}</td>
                <td>{{ $client['name'] }}</td>
                <td>{{ $client['email'] }}</td>
                <td>{{ $client['phone'] }}</td>
                <td>{{ $client['address'] }}</td>
                <td>
                    <a href="{{ route('client.delete',$client['id']) }} " class="bg-blue-400 rounded-lg" >borrar</a>
                    <a href="{{ route('client.view',$client['id']) }} " class="bg-blue-400 rounded-lg" >ver</a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
        <div class="p-5">
        <a class=" bg-blue-400 text-white w-32 rounded " href="/client">crear</a>

        </div>

</div>

@endsection
