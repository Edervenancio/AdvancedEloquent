<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        echo "<p>#{$post->id} Titulo: {$post->title}</p>";
        echo "<p>Subtitulo: {$post->subtitle}</p>";
        echo "<p>Conteudo: {$post->description}</p>";
        echo "<p>Data de criação: {$post->createdFmt}</p>";
        echo '<hr>';

        // $post->title = 'Titulo de teste do meu artigo!';
        // $post->save();

        $postAuthor = $post->author()->get()->first();

        if($postAuthor){
            echo "<h1>Dados do usuário</h1><br>";
            echo "<p>Nome do usuário: {$postAuthor->name}</p>";
            echo "<p>Email: {$postAuthor->email}</p>";
        }


        $postCategories = $post->categories()->get();

        if($postCategories)
        {
            echo "<h1>categorias</h1>";
            foreach($postCategories as $Category){
                
                echo "<h1>Categoria#{$Category->id}, {$Category->name}</h1>";

            }
        }

     //    $post->categories()->attach([3]);
      //  $post->categories()->detach([3]);
        //$post->categories()->sync([5, 10]);
        //$post->categories()->syncWithoutDetaching([5, 4, 3]);

        // $post->comments()->create([
        //     'content' => 'teste de comentário'
        // ]);


        $comments = $post->comments()->get();
        
        if($comments){
            echo "<h1>Coemntários</h1>";
            foreach($comments as $comment){
                
                echo "<h1>Comentario#{$comment->id}, {$comment->content}</h1>";

            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
