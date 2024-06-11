<?php

    namespace App\Http\Controllers;

    use App\Models\News;
    use App\Models\Category;
    use Illuminate\Http\Request;
    use Illuminate\Database\Eloquent\ModelNotFoundException;

    class NewsController extends Controller
    {
        public function index(Request $request)
        {
            if($request->filter)
                $news = News::with('categories')
                            ->whereRaw("title LIKE '%".$request->filter."%'")
                            ->orWhereRaw("content LIKE '%".$request->filter."%'")
                            ->get();
            else
                $news = News::with('categories')->get();

            return view('news.index', compact('news'));
        }

        public function show($id)
        {
            try {
                $news = News::with('categories')->findOrFail($id);
            } catch (ModelNotFoundException $e) {
                return redirect()->route('news.index')->with('error', 'Notícia não encontrada.');
            }

            return view('news.show', compact('news'));
        }

        public function create()
        {
            $categories = Category::all();
            return view('news.create', compact('categories'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
                'categories' => 'required|array',
            ]);

            $news = News::create($request->only(['title', 'content']));
            $news->categories()->attach($request->categories);

            return redirect()->route('news.index');
        }
    }
?>
