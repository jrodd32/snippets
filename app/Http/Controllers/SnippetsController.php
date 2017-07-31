<?php

namespace App\Http\Controllers;

use App\Language;
use App\Snippet;
use App\Tag;

class SnippetsController extends Controller
{
    public function index()
    {
        $snippets = Snippet::with(['tags', 'language'])->latest()->get();
        return view('snippets.index', compact('snippets'));
    }

    public function create(Snippet $snippet)
    {
        $languageOptions = Language::all()->pluck('name', 'id');
        $tagOptions = Tag::all()->pluck('name', 'id');
        return view('snippets.create', compact('snippet', 'languageOptions', 'tagOptions'));
    }

    public function show(Snippet $snippet)
    {
        return view('snippets.show', compact('snippet'));
    }

    public function store()
    {
        $user_id = empty(auth()->user()->id) ? 1 : auth()->user()->id;

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'language_id' => 'required'
        ]);

        $snippet = Snippet::create([
            'title' => request('title'),
            'body' => request('body'),
            'forked_id' => request('forked_id'),
            'language_id' => request('language_id'),
            'user_id' => $user_id
        ]);

        if (count(request('tags'))) {
            foreach (request('tags') as $tag) {
                $snippet->tags()->attach($tag);
            };
        }

        return redirect()->home();
    }
}
