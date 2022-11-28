<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Post;
use App\Models\Tema;

class PostController extends Controller
{
    public function index()
    {
        return view('post.posts')->with(['posts' => Post::all()]);
    }

    public function insert()
    {
        $usuarios = Usuario::all();
        $temas = Tema::all();
        return view('post.insert-post')->with(['usuarios' => $usuarios, 'temas' => $temas]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'usuario_id' => 'required',
            'title' => 'required',
            'text' => 'required',
            'tema[]' => 'required'
        ]);

        $usuario_id = $request->usuario_id;
        $title = $request->title;
        $text = $request->text;
        $tema = $request->input('tema[]');

        $post = Post::create(['usuario_id' => $usuario_id, 'title' => $title, 'text' => $text]);
        $usuario = Usuario::findOrFail($usuario_id);
        $usuario->posts()->save($post);

        return redirect()->route('home');
    }
}
