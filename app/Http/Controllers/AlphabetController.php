<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AlphabetStoreRequest;
use App\Providers\AlphabetCreated;
use App\Models\Alphabet;

class AlphabetController extends Controller
{
    public function store(AlphabetStoreRequest $request)
    {
        $data = $request->validated();
        $alphabet = new Alphabet($data);
        AlphabetCreated::dispatch($alphabet);
        return "Success";
    }
}
