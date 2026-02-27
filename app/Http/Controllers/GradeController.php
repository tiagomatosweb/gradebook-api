<?php

namespace App\Http\Controllers;

use App\Http\Requests\GradeStoreRequest;
use App\Http\Resources\GradeResource;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {   
        $grades = Grade::all();
        return GradeResource::collection($grades);
    }

    public function store(GradeStoreRequest $request)
    {
        $inputs = $request->validated();
        Grade::query()->delete();

        foreach($inputs['grades'] as $item) {
            Grade::create($item);
        }

        $grades = Grade::all();
        return GradeResource::collection($grades);
    }
}
