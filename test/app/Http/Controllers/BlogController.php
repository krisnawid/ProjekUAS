<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Blog;

class BlogController extends Controller
{
   public function index(){
       $blogs = Blog::all();
       //dd($blogs); nampilkan isi melalui text

       return view('blog/home', ['blogs' => $blogs]);
   }

   public function show($id){
       //DB::table('users')->insert([['username' => 'ahaha', 'password' => 'ahaha']]);
       //masukan tabel secara manual

       //DB::table('users')->where('username', 'ahaha')->update(['username' => 'palsu']);
       //update tabel

       //DB::table('users')->where('id', '>', 5)->delete();
       //delete tabel

       //$users = DB::table('users')->get();
       //tampilkan tabel

       $blog = Blog::find($id);

       if(!$blog)
        abort(404);
       
       //$unescaped = '<script> alert("Selamat datang!") </script>';
       //pop up alert

       return view('blog/single', ['blog' => $blog]);
   }

   public function create(){
       return view('blog/create');
   }

   public function store(Request $request){
       $this->validate($request, [
           'title' => 'required|min:5',
           'description' => 'required|min:5'
       ]);

       $blog = new Blog;
       $blog->title = $request->title;
       $blog->description = $request->description;
       $blog->save();

       return redirect('blog');
       //penggunaan Insert Mass Assignment
       //Blog::create(['title' => '...', 'description' => '...']);
   }

   public function edit($id){
       $blog = Blog::find($id);

       if(!$blog)
        abort(404);

       return view('blog/edit', ['blog' => $blog]);
   }

   public function update(Request $request, $id){
       $blog = Blog::find($id);
       $blog->title = $request->title;
       $blog->description = $request->description;
       $blog->save();
       
       return redirect('blog/' . $id);
       //Update mass arrangment
       //Blog::where('...', '...')->update([...]);
   }

   public function delete($id){
       $blog = Blog::find($id);
       $blog->delete();
       
       return redirect('blog');
       //Destroy (delete satu baris)
       //Blog::destroy([5, 6]);
   }

   public function restore(){
       Blog::withTrashed()->restore();

       return redirect('blog');
   }
}
