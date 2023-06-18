<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return News::latest()->with(['category', 'translate'])->paginate(10);
    }

    public function show($id)
    {
        return News::with(['category', 'translate'])->find($id);
    }
}
