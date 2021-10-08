<?php

namespace App\Http\Controllers;

use App\Models\userrole;
use Illuminate\Http\Request;

class user_roleController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}