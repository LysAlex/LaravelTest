<?php


namespace App\Http\Controllers;


use App\Notes;

use App\Http\Requests\NoteRequest;
use App\Http\Controllers\Controller;


class NoteController extends Controller

{

    public function index()
    {
            $notes = Notes::select('nom','matiere','notes')->get();
            return View('notes')->with('notes', $notes);

    }


}