<?php

namespace App\Http\Controllers\Backend;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\Traits\Crud;

class FaqController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'faq';
        $this->c = app()->make(Faq::class);
    }
}
