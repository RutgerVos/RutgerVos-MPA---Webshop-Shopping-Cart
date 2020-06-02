<?php
namespace app\Http\Controllers;
class PostsController extends Controller
{
    public function show($post){
        //$post=.\DB::table('posts')->where('slug',$slug)->first();

            $posts=[
                'first' => 'hello for the first time',
                'second'=> 'hello again for the second time',
            ];
            if (! array_key_exists($post,$posts)) {
               abort(404,'sorry post not found.');
                }
                return view('post',[
                'post' => $posts[$post]
                ]);    
    }
    
}
