<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contacts;

class ContactController extends Controller
{
    public function index()
    {
        //Recupero os registros do BD

        $contacts = Contacts::orderByDesc('id')->get();

        return view('contacts.index', ['contacts' => $contacts]);
    }
    public function show(Contacts $contact)
    {
        return view('contacts.show', ['contact' => $contact]);
    }
    public function create()
    {
        //Carregamento da VIEW
        return view('contacts.create');
    }
    public function store(ContactRequest $request)
    {
        //Validação do Formulário
        $request->validated();

        //Cadastro contato
        Contacts::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
        ]);
        //Redireciono após contato cadastrado com mensagem de sucesso
        return redirect()->route('contact.index')->with('success', 'Contact successfully registered');
    }
    public function edit(Contacts $contact)
    {
        return view('contacts.edit', ['contact' => $contact]);
    }
    public function update(ContactRequest $request, Contacts $contact)
    {
        
        $request->validated();
        $contact->update([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
        ]);
        return redirect()->route('contact.show', ['contact'=>$contact->id])->with('success', 'Contact changed successfully');
    }
    public function destroy(Contacts $contact){
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Contact successfully deleted');
    }
}
