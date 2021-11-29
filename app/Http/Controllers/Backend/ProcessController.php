<?php

namespace App\Http\Controllers\Backend;

use App\Models\Process;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\Traits\Crud;

class ProcessController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'process';
        $this->c = app()->make(Process::class);
    }
}
