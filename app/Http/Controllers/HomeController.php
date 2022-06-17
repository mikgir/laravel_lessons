<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $news = $this->getNews();

        return view('home', [
            'newsList' => $news
        ]);
    }

    /**
     * @return Factory|View|Application
     */
    public function showAll(): Factory|View|Application
    {
        $news = $this->getNews();

        return view('news.news', [
            'newsList' => $news
        ]);

    }

    /**
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id)
    {
        return view('news.show', [
            'news' => $this->getNews($id)
        ]);
    }
}
