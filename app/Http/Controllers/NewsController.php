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
            $filter = $request->filter;
            if($request->filter)
                $news = News::join('category_news as cn', 'news.id', '=', 'cn.news_id')
                        ->join('categories as c', 'cn.category_id', '=', 'c.id')
                        ->where('news.title', 'like', '%' . $filter . '%')
                        ->orWhere('c.name', 'like', '%' . $filter . '%')
                        ->orWhere('news.content', 'like', '%' . $filter . '%')
                        ->select('news.*')
                        ->distinct() 
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
            $categories = Category::orderBy('name')->get();
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
