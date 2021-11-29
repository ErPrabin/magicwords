<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\WorkingProcess;
use Illuminate\Http\Request;

class WorkingProcessController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'working-process';
        $this->c = app()->make(WorkingProcess::class);
    }
}
