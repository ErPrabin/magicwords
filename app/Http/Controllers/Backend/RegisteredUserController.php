<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Traits\Crud;
use App\Http\Controllers\Controller;
use App\Models\RegisteredUser;

class RegisteredUserController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'registered-user';
        $this->c = app()->make(RegisteredUser::class);
    }
    public function index()
    {
        $data = $this->c->with('event')->orderBy('created_at', 'desc')->get();
        return view('backend.pages.' . $this->module . '.index', compact('data'))->withPage($this->module);
    }
}
