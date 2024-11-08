<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use LdapRecord\Container;

class AdUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Container::getConnection()->query();
        dd($users);
        // $LoggedUser = auth()->user()->username;
        // // dd($LoggedUser);

        // $users = Container::getConnection()
        //     ->query()
        //     ->whereContains('samaccountname', $LoggedUser)
        //     ->get(); // Retorna uma coleção de objetos LdapRecord\Models\Model

        // $Userdn = $users[0]["distinguishedname"][0];

        // $userName = Auth()->user()->name;
        // $string = $Userdn;

        // $pattern = '/CN=' . preg_quote($userName, '/') . ',/';

        // // Remover a parte correspondente da string
        // $modifiedString = preg_replace($pattern, '', $string);

        // // Criar a expressão regular para encontrar a parte "CN=NomeDoUsuario"
        // $pattern = '/CN=' . preg_quote($userName, '/') . ',/';

        // // Remover a parte que corresponde à expressão regular
        // $dn = preg_replace($pattern, '', $string);

        // dd($dn);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
