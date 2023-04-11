<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return ResponseFormatter::success($educations, 'Data edukasi berhasil diambil');
    }
}
