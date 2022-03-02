<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\Specification;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'specification';
        $this->c = app()->make(Specification::class);
    }
}
