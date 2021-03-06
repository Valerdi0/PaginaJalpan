<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Comment;
use App\Archivo;
use Input;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['postSavepost', 'getEditpost','getDeletepost'] ]);
    }

    public function getList() {

        //return "POST";

        $data['posts'] = Post::where('status', 1)->get();

        return view('plantilla.transparencia', $data);
    }

    public function getListpost() {

        //return "POST";

        $data['posts'] = Post::where('status', 1)->get();

        return view('plantilla.lista_post', $data);
    }
 
    public function getPost($id) {
        
        $post = Post::find($id);
        $archivos = Archivo::where('id_post', $id)->get();
        //return var_dump($archivos);

        if($post == null)
            return 'No existe el post';
        else {
            $data['post'] = $post;
            $data['archivos'] = $archivos;
            $data['comments'] = Comment::where('post_id', $id)->get();
            return view('plantilla.post', $data);
        }

    }
 
    public function postSavepost(Request $request) {

        $input = Input::all();

        if(isset($input['post_id'])) {
            $post = Post::find($input['post_id']);
        } else {
            $post = new Post();
        }

        $post->title = $input['title'];
        $post->resume = $input['resume'];
        $post->description = $input['description'];
        $post->publish_date = $input['publish_date'];
        $post->status = $input['status'];
        $post->save(); // Guarda el objeto en la BD
        //obtenemos el campo file definido en el formulario
        $files = $request->file('archivo');
        if($files){
            $destinationPath = public_path().'/files';
            $posts = Post::All();
            $post = $posts->last();            
            // recorremos cada archivo y lo subimos individualmente
            foreach($files as $file) {
                $archivo = new Archivo();
                $filename = $file->getClientOriginalName();
                $upload_success = $file->move($destinationPath, $filename);
                $archivo->nombre = $filename;
                $archivo->id_post = $post->id;
                $archivo->save();
            }
        }
        return redirect('/lista-post')->with('message', 'store');
    }
 
    public function getEditpost($id = null) {
        
        if ($id == null)
            return view('plantilla.edit-post');
        else {
            $data['post'] = Post::find($id);
            if($data['post'] == null)
                return 'El post no existe';

            return view('plantilla.edit-post', $data);
        }

    }
 
    public function getDeletepost($id) {
        $post = Post::find($id);

        if($post == null)
            return "No existe este post";
        else{
            $post->delete();
            return redirect('/lista-post')->with('message', 'store');
        }
    }

}
