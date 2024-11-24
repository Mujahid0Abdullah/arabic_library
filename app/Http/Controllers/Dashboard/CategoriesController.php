<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {
        $request =request();
        $query = Category::query(); // all data()
        $name = $request->query('name');
        $status = $request->query('status');
        $startDate = $request->query('start_date');
        $endDate= $request->query('end_date');
        if($name){
            //book2
            $query->where('name','LIKE',"%{$name}%");

        }
        if ($status) {
            //book2
           // $query->where('status', '=', $status);
           $query->whereStatus($status);
        }
        if($startDate)
        {
            $query->whereDate('created_at','>=',$startDate);
        }
        if ($endDate) {
            $query->whereDate('created_at', '<=', $endDate);
        }
        $categories = $query

        ->withCount('books') // books_count
        ->paginate(2); // 15

        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        // // ---------------------------- single data request
        // /////// input
        // $request->input('name'); // clothes  // get post
        // $request->input('desc'); // no desc

        // /////// post
        // $request->post('name'); // post
        // $request->post('desc');

        // //////  query
        // $request->query('name'); // get // post  // put
        // $request->query('desc');
        // // object
        // $request['name']; // array
        // $request['desc'];

        // $request->name;
        // $request->desc;
        // // get
        // $request->get('name'); // get post put
        // //

        // $data = $request->validate([
        //     'name' => 'required',
        //     'desc' => 'required',
        // ]);

        // // ---------------- collection data -------------------

        // $request->all();
        // $request->only(['name']);  // name
        // $request->except(['name']); // desc

        // //-------------------------- add data ----------------------

        // $category = new Category;   // Category Model
        // $category->name = $request->name;
        // $category->desc = $request->desc;
        // $category->save();

        // // --------------------------

        // $category = new Category($request->all());
        // $category->save();

        // // ----------------------
        $request->validate(Category::rules());
        $category = Category::create($request->all());
        return redirect()->route('categories.index')
        ->with('success' , 'category created successfuly');
    }
    public function edit($id)
    {
        // $id = 1
        $category = Category::find($id);
        return view('dashboard.categories.edit',compact('category'));


    }
    public function update(Request $request , $id)
    {
        $request->validate(Category::rules());
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('categories.index')
        ->with('info' , 'category Updated successfuly');
    }
    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->with('danger','category deleted successfuly');

    }

    public function show(Category $category){ // 7

        return view('dashboard.categories.show',[
            'category' => $category
        ]);
    }
}
