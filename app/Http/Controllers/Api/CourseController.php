<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $data = Course::with(['user', 'category', 'lessons'])
                ->when(isset($request->category_id) && $request->category_id != 0, function($query) use ($request){
                    $query->where('category_id', $request->category_id);
                })
                ->orderBy('end_date', 'desc')
                ->get();
            return response()->json([
                'status' => true,
                'message'=> 'Success load all course',
                'data'   => $data
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message'=> $e->getMessage(),
                'data'   => null
            ]);
        }
    }

    public function latest()
    {
        try {
            $data = Course::with(['user', 'category', 'lessons'])
                ->where('end_date', '>=', now())
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->get();
            return response()->json([
                'status' => true,
                'message'=> 'Success load latest course',
                'data'   => $data
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message'=> $e->getMessage(),
                'data'   => null
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Course::where('id', $id)->with(['user', 'category'])->first();
        try {
            return response()->json([
                'status' => true,
                'message'=> 'Success load course with id',
                'data'   => $data
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message'=> $e->getMessage(),
                'data'   => null
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
