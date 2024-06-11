<?php

    namespace App\Http\Controllers;

    use App\Models\Category;
    use Illuminate\Http\Request;

    class CategoryController extends Controller
    {
        public function index()
        {
            $categories = Category::all();
            return view('categories.index', compact('categories'));
        }

        public function create()
        {
            return view('categories.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|max:255',
            ]);

            Category::create($request->only(['name']));

            return redirect()->route('categories.index');
        }
    }
?>
