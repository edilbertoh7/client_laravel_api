<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientsController extends Controller
{
    public function index()
    {
        $url = env('URL_REST_API', 'http://localhost');
        $response = Http::get($url . '/clients');
        $data = $response->json();
        return view('clients', compact('data'));

    }
    public function create()
    {
        return view('client');
    }

    public function store(Request $request)
    {
        $url = env('URL_REST_API', 'http://localhost');
        $response = Http::post($url . '/clients', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect('/');
    }


    public function delete($id)
    {
        $url = env('URL_REST_API', 'http://localhost');
        $response = Http::delete($url . '/clients/' . $id);
        return redirect('/');
    }


    public function view($id)
    {
        $url = env('URL_REST_API', 'http://localhost');
        $response = Http::get($url . '/clients/' . $id);
        $client = $response->json();

        return view('clientView', compact('client'));
    }

    public function update(Request $request)
    {

        $url = env('URL_REST_API', 'http://localhost');
        $response = Http::put($url . '/clients/' . $request->id, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect('/');
    }

}
