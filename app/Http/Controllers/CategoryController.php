<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories =[
        [
            'photo'=>'https://media.istockphoto.com/vectors/mandala-art-line-vector-id1142327279',
            'name'=>'categiry1',
            'articles'=>'20',
            'status'=>'active',
        ],
        [
            'photo'=>'https://media.istockphoto.com/vectors/mandala-art-line-vector-id1142327279',
            'name'=>'categiry2',
            'articles'=>'30',
            'status'=>'hidden',
        ]
    ];

    public function showCategories(){
        return view('backend.categories',['categories'=>$this->categories]);
    }

    public function showCategory($id){
        return view('backend.category');
    }

    public function addCategory(Request $request){
        dd($request) ;
    }

    public function editCategory($id){
        dd('edit category controller' . $id);
    }

    public function deleteCategory($id){
        dd('delete category controller' . $id);
    }
}
