<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certification;

class CertificationController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
    }
    public function index($type = '')
    {
        //$page_data['certifications'] = Certification::all();
        return view('admin.certifications.index');
    }
}
