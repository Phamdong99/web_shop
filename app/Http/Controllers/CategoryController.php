<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
/*    protected $categoryService;

    public function __construct(\CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }*/

    public function index()
    {
        return view('admin.categories.list',[
           'title'=>'Danh sách danh mục'
        ]);
    }
    public function create()
    {
        return view('admin.categories.add',[
            'title'=>'Thêm danh mục'
        ]);
    }
}
