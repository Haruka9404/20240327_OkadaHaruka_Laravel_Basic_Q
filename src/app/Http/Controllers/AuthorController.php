<?php

// namespace App\Http\Controllers;

// use App\Models\Author;
// use Illuminate\Http\Request;

// class AuthorController extends Controller
// {
// public function index()
// {
// $authors = Author::all();
// return view('index', ['authors' => $authors]);
// }
// public function add()
// {
// return view('add');
// }
// public function create(Request $request)
// {
// $form = $request->all();
// Author::create($form);
// return redirect('/');
// }

// public function index()
// {
// $authors = Author::all();
// return view('index', ['authors' => $authors]);
// }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Requests\AuthorRequest;

class AuthorController extends Controller
{
    public function add()
    {
        return view('add');
    }

    public function create(request $request)
    {
        $form = $request->all();
        // dd($form);
        Author::create($form);
        return redirect('/');
    }

    public function index()
    {
        $authors = Author::simplePaginate(2);
        return view('index', ['authors' => $authors]);
        // $authors = Author::all();
        // dd($authors); //
        // return view('index', ['authors' => $authors]);
    }

    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        // $item = Author::where('name', 'LIKE',"%{$request->input}%")->first();
        $item = Author::where('name', $request->input)->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }

    public function bind(Author $author)
    {
        $data = [
            'item' => $author
        ];
        return view('binds', $data);
    }

    public function edit(Request $request)
    {
        $author = Author::find($request->id);
        // dd($author);
        return view('edit', ['form' => $author]);
    }

    public function update(AuthorRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        // dd($form);
        Author::find($request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $author = Author::find($request->id);
        // dd($author);
        return view('delete', ['author' => $author]);
    }

    public function remove(Request $request)
    {
        // dd($request->all());
        Author::find($request->id)->delete();
        return redirect('/');
    }

    public function verror()
    {
        return view('verror');
    }

    public function relate(Request $request) //追記
    {
        $hasItems = Author::has('book')->get();
        $noItems = Author::doesntHave('book')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('author.index', $param);
    }
}
