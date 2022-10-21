<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
class UserController extends Controller
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
        $user = User::find($id);

        echo "<h1>Dados do usuário</h1><br>";
        echo "<p>Nome do usuário: {$user->name}</p>";
        echo "<p>Email: {$user->email}</p>";

        $userAddress = $user->AddressDelivery->get()->first();
        if($userAddress){
            echo "<h1>Endereço de entrega</h1><br>";
            echo "<p>Endereço: {$userAddress->address}</p>";
            echo "<p>Número: {$userAddress->number}</p>";
            echo "<p>Complemento: {$userAddress->complement}</p>";
            echo "<p>Zip code: {$userAddress->zipcode}</p>";
            echo "<p>City, State: {$userAddress->city}, {$userAddress->state}</p>";
        }

        //  $addressTest = new Address([
        //      'address' => 'Rua dos bobos', 
        //     'number' => '0', 
        //     'complement' => 'adaada',
        //     'zipcode' => '123', 
        //      'city' => 'floripa',
        //       'state'=> 'sc'
        //  ]); 
     
        // $address = new Address();
        // $address->address = 'Rua dos bobos, 1';
        // $address->number = '123';
        // $address->complement = 'casa2';
        // $address->zipcode = '12312';
        // $address->city = 'zxczxcxzczx';
        // $address->state = 'sc';

       // $user->AddressDelivery()->save($address);

       // $user->AddressDelivery()->saveMany([$addressTest, $address]);

    //    $user->AddressDelivery()->create([
    //     'address' => 'Rua dos bobos', 
    //     'number' => '0', 
    //     'complement' => 'adaada',
    //     'zipcode' => '123', 
    //      'city' => 'floripa',
    //       'state'=> 'sc'
    //     ]);


        // $users = User::with('addressDelivery')->get();

        // dd($users);




        $posts = $user->posts()->get();
        if($posts){
            echo "<h1>Artigos</h1><br>";
            foreach($posts as $post){
            echo "<p>#{$post->id} Titulo: {$post->title}</p>";
            echo "<p>Subtitulo: {$post->subtitle}</p>";
            echo "<p>Conteudo: {$post->description}</p>";
            echo '<hr>';
            }
        }


        // $comments = $user->commentsOnMyPost()->get();


        // if($comments){
        //     echo "<h1>Comentarios nos Artigos</h1><br>";
        //     foreach($comments as $comment){
        //         echo "<h1>Post#{$comment->post} User:#{$comment->user}</h1>";
        //         echo "<p>$comment->content}</p>";
        //     }
        // }

        
        //  $user->comments()->create([
        //     'content' => 'teste de comentário 123'
        // ]);


        $comments = $user->comments()->get();
        
        if($comments){
            echo "<h1>Coemntários</h1>";
            foreach($comments as $comment){
                
                echo "<h1>Comentario#{$comment->id}, {$comment->content}</h1>";

            }
        }

        $students = User::students()->get();

        if($students){
            echo "<h1>Estudantes</h1>";
            foreach($students as $student){
                
        echo "<p>Nome do usuário: {$student->name}</p>";
        echo "<p>Email: {$student->email}</p>";

            }
        }
      
        
        $admin = User::admins()->get();

        if($admin){
            echo "<h1>Admins</h1>";
            foreach($admin as $adm){
                
        echo "<p>Nome do usuário: {$adm->name}</p>";
        echo "<p>Email: {$adm->email}</p>";

            }
        }

        $users = User::all();

        var_dump($users->toArray());
        var_dump($users->toJSON(JSON_PRETTY_PRINT));
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
