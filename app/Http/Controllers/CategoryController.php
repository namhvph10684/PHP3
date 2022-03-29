<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Eloquent
        // all: lay ra toan bo cac ban ghi
        $categories = Category::all();
        // get: lay ra toan bo cac ban ghi, ket hop dc cac dieu kien #
        // get se nam cuoi cung cua doan truy van
        $categoriesGet = Category::select('id', 'name', 'description')
            // ->where('id', '>', 3)
            // ->get();
            ->orderBy('id','desc')
            ->paginate(10);

        return view('category.index', ['categories' => $categoriesGet]);
        // dd('Danh sach category', $categories, $categoriesGet);
    }

    public function create()
    {
        return view('category.create');
    }
    
    public function update(Request $request,Category $id){
        // $cateUpdate chính là đôi tượng Category có id = $id
        $cateUpdate = $id;
        //gán giá trị mới cho đối tuowjnh $cateUpdate
        $cateUpdate->name = $request->name;
        $cateUpdate->description = $request->description;
        $cateUpdate->slug = Str::slug($request->name) . uniqid();
        $cateUpdate->status = $request->status;
        //Thực thi lưu dữ liệu mưới vào DB
        $cateUpdate->update();
        //Hiển thị ra ngoài
        return redirect()->route('categories.index');

    }

    public function store(Request $request)
    {
        //vallidate 
        // có thể kế thừa request bằng câu lệnh php artisan make:request tên+Request bên controller cần use Illuminate\Http\Request
        // sau request đổi từ Request -> tên+Request
        $request->validate([
            //name nào vallidate điều kiện gì
            'name' => 'required|min:6|max:12',
            'description' => 'min:8'
        ]);

        //nếu có lỗi trong điều kiện truyền vào tự động kết thưc mảng 
        //hàm quay về form kèm biến $errors 

        $categoryRequest = $request->all();
        $category = new Category();
        $category->name = $categoryRequest['name'];
        $category->description = $categoryRequest['description'];
        $category->status = $categoryRequest['status'];
        $category->slug = Str::slug($categoryRequest['name']) . uniqid();
        // use Illuminate\Support\Str;

        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit(Category $id)
    {
        //$id bây giờ k phải 1 số mà là đối tượng category có id trên param
            return view('category.create',['category' => $id]);
    }

    public function delete(Category $cate) {
        // Neu muon su dung model binding
        // 1. Dinh nghia kieu tham so truyen vao la model tuong ung
        // 2. Tham so o route === ten tham so truyen vao ham
        if ($cate->delete()) {
            return redirect()->route('categories.index');
        }

        // Cach 1: destroy, tra ve id cua thang duoc xoa
        // Chi ap dung khi nhan vao tham so la gia tri
        // Neu k xoa duoc thi tra ve 0
        $categoryDelete = Category::destroy($id);
        if ($categoryDelete !== 0) {
            return redirect()->route('categories.index');
        }
        // dd($categoryDelete);

        // Cach 2: delete, tra ve true hoac false
        // $category = Category::find($id);
        // $category->delete();
    }
}