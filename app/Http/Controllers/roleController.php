<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;

class roleController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}