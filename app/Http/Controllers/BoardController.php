<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BoardController extends Controller
{
    public function show(Board $id)
    {
        $id->load('lists.cards');

        return Inertia::render("Board", [
            'board' => $id
        ]);
    }

    public function update(Board $id)
    {
        $id->update(['name' => request('name')]);
        return redirect('/dashboard');
    }
}
