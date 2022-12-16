<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
   public function index(){

      $search = '';
      if (request()->search) {
         $category = Category::select('id','name', 'created_at')->where('name', 'LIKE', '%' . request()->search . '%')->latest()->paginate(5);
         $search = request()->search;

         if (count($category) == 0) {
            request()->session()->flash('search', '
                    <div class="alert alert-success mt-4" role="alert">
                        Data yang anda cari tidak ada
                    </div>
                ');
         }
      } else {
         $count_artikel = DB::table('categories')
            ->select('categories.id',DB::raw('count(posts.id) as total_artikel'))
            ->rightJoin('posts', 'posts.category_id', '=', 'categories.id')
            ->whereColumn('categories.id', 'posts.category_id')
            ->groupBy('categories.id')
            ->get();
            
         $category = Category::select('id', 'name','created_at')->latest()->paginate(5);
      }
    return view('admin/category/index', compact('category','search','count_artikel','category'));
   }

   public function create(){
    return view('admin/category/create');
   }

   public function store(Request $request){
      $request->validate([
         'name' => 'required|unique:categories',
         'description' => 'required',
      ]);

      Category::create([
            'name'=>Str::title($request->name),
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description
      ]);
      Alert::success('success', 'Data Berhasil Ditambahkan');
      return redirect('/category');
   }

   public function edit($id)
   {

      $category = Category::find($id);
      return view('admin/category/edit', compact('category'));
   }

   public function update(Request $request, $id)
   {
      $request->validate([
         'name' => 'required|unique:categories',
         'description' => 'required',
      ]);

      Category::whereId($id)->update([
         'name' => Str::title($request->name),
         'slug' => Str::slug($request->name, '-'),
         'description' => $request->description
   ]);

      Alert::success('success', 'Data Berhasil Diupdate');
      return redirect('/category');
   }

   public function konfirmasi($id)
   {
      alert()->question('Peringatan !', 'Anda yakin akan menghapus data ?')
      ->showConfirmButton('<a href="/category/' . $id . '/delete" class="text-white" style="text-decoration: none"> Hapus</a>', '#3085d6')->toHtml()
         ->showCancelButton('Batal', '#aaa')->reverseButtons();

      return redirect('/category');
   }

   public function delete($id)
   {
      Category::whereId($id)->delete();

      Alert::success('success', 'Data Berhasil Dihapus');
      return redirect('/category');
   }
}
