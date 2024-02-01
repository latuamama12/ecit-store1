<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assicurati di importare il model corretto

class UtenteController extends Controller
{
    /**
     * Mostra la lista degli utenti.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utenti = User::all();
        return view('utenti.index', compact('utenti'));
    }

    /**
     * Mostra il modulo per creare un nuovo utente.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utenti.create');
    }

    /**
     * Salva un nuovo utente nel database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6',
        ]);

        User::create($request->all());

        return redirect()->route('utenti.index')
            ->with('success', 'Utente creato con successo!');
    }

    /**
     * Mostra l'utente specificato.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('utenti.show', compact('user'));
    }

    /**
     * Mostra il modulo per modificare l'utente specificato.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('utenti.edit', compact('user'));
    }

    /**
     * Aggiorna l'utente nel database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6',
        ]);

        $user->update($request->all());

        return redirect()->route('utenti.index')
            ->with('success', 'Utente aggiornato con successo!');
    }

    /**
     * Rimuovi l'utente specificato dal database.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('utenti.index')
            ->with('success', 'Utente eliminato con successo!');
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Processa la registrazione dell'utente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Autentica l'utente dopo la registrazione (opzionale)
        auth()->login($user);

        return redirect('/dashboard'); // Redirect alla dashboard o alla pagina di login
    }
}

