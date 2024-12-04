<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('category.index', compact('category'));
    }
    public function tambah()
    {
        return view('category.tambah');
    }
    public function aksi_tambah(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);
        $data = [
            'title' => $request->title,
        ];
        Category::insert($data);
        return redirect()->route('category');
    }
}
