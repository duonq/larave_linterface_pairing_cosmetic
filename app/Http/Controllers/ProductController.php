<?php

namespace App\Http\Controllers;
// use Psy\Util\Str;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Http\Requests\ProductCreateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::search()->paginate(5);
        return view('siteAdmin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('name', 'ASC')->get();
        return view('siteAdmin.product.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        //upload img
        $data = $request->all('name', 'price', 'sale_price', 'category_id', 'status');
        $file_name = $request->upload->getClientOriginalName();
        $pathInfo = pathinfo($file_name);
        $ext = $pathInfo['extension'];
        $base_name = $pathInfo['filename'];
        $final_name = Str::slug($base_name).'-'.$ext;
        // dd($pathInfo);
        // dd($base_name);
        // dd(Str::slug($base_name).'-'.$ext);
        $check_upload = $request->upload->move(public_path('upload/'), $final_name);
        if ($check_upload) {
            $data['image'] = $final_name;
        } 
        if (Product::create($data)) {
            return redirect()->route('product.index')->with('yes', 'Thêm mới thành công');
        }else return redirect()->back()->with('no');
        dd($data);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
