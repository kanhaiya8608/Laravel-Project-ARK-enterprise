<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ArticleController extends Controller
{
    public function index(Request $request): Response
    {
        $articles = Article::query();

        $keyword = $request->input('search');

        if ($keyword) {
            $articles->where('name', 'like', '%'.$keyword.'%');
        }

        return Inertia::render('articles/index', [
            'search' => $keyword,
            'collection' => ArticleResource::collection(
                $articles->orderBy('id', 'desc')->paginate(2)
            ),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('articles/form', [
            'article' => new Article,
        ]);
    }

    public function store(FormArticleRequest $request): RedirectResponse
    {
        Article::create($request->validated());

        return redirect()
            ->route('articles.index')
            ->with('message', 'Article created successfully.');
    }

    public function edit(Article $article): Response
    {
        return Inertia::render('articles/form', [
            'article' => new ArticleResource($article),
        ]);
    }

    public function update(FormArticleRequest $request, Article $article): RedirectResponse
    {
        $article->update($request->validated());

        return to_route('articles.index')
            ->with('message', 'Article updated successfully.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return to_route('articles.index')
            ->with('message', 'Article deleted successfully.');
    }
}
