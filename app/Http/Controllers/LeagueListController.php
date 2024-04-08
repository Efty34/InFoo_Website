<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeagueListController extends Controller
{
    public function leagueListPage()
    {
        return view('index.league-list-page');
    }

    public function leagueListPagePrev()
    {
        return view('index.league-list-page-prev');
    }
}
