<?php

namespace App\Http\Controllers\Index;

use App\Http\Helpers;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Fertilizer;
use App\Models\News;
use App\Models\NewsRubric;
use App\Models\Page;

use App\Models\Rubric;

use App\Models\Tour;
use App\Models\Venue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Auth;

class IndexController extends Controller
{
    public $lang = 'ru';

    public function __construct()
    {
        $this->lang = App::getLocale();
    }
    
    public function index(Request $request)
    {
        return  view('index.index.index',
            [
                'menu' => 'main',
            ]);
    }

    public function contact(Request $request)
    {
        return  view('index.index.contact',
            [
                'menu' => 'contact',
            ]);
    }

    public function about(Request $request)
    {
        return  view('index.index.about',
            [
                'menu' => 'about',
            ]);
    }

    public function products(Request $request)
    {
        return  view('index.index.services',
            [
                'menu' => 'product',
            ]);
    }

    public function service1(Request $request)
    {
        return  view('index.service.service1',
            [
                'menu' => 'product',
            ]);
    }

    public function service2(Request $request)
    {
        return  view('index.service.service2',
            [
                'menu' => 'product',
            ]);
    }

    public function service3(Request $request)
    {
        return  view('index.service.service3',
            [
                'menu' => 'product',
            ]);
    }

    public function service4(Request $request)
    {
        return  view('index.service.service4',
            [
                'menu' => 'product',
            ]);
    }
}
