<?php

namespace App\Http\Controllers;

use App\Language;
use App\Snippet;

class SnippetsController extends Controller
{
    public function index()
    {
        $snippets = Snippet::latest()->get();
        return view('snippets.index', compact('snippets'));
    }

    public function create(Snippet $snippet)
    {
        $languageOptions = [
            Language::HTML => 'HTML',
            Language::CSS => 'CSS',
            Language::PHP => 'PHP',
            Language::JAVASCRIPT => 'Javascript',
            Language::RUBY => 'Ruby',
            Language::BASH => 'Bash / Shell',
        ];
        return view('snippets.create', compact('snippet', 'languageOptions'));
    }

    public function show(Snippet $snippet)
    {
        return view('snippets.show', compact('snippet'));
    }

    public function store()
    {
        $user_id = empty(Auth::id()) ? 1 : Auth::id();

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'language_id' => 'required'
        ]);

        Snippet::create([
            'title' => request('title'),
            'body' => request('body'),
            'forked_id' => request('forked_id'),
            'language_id' => request('language_id'),
            'user_id' => $user_id
        ]);

        return redirect()->home();
    }
}
