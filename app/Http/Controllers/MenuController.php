<?php

namespace App\Http\Controllers;

use App\Jobs\CreateMenu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        //$this->dispatchNow();
        CreateMenu::dispatchNow(['bar']);

        return response()->json([
            'field' => 'value',
            'max_depth' => 5,
            'max_children' => 5
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  mixed  $menu
     * @return Response
     */
    public function show($menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  mixed  $menu
     * @return Response
     */
    public function update(Request $request, $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  mixed  $menu
     * @return Response
     */
    public function destroy($menu)
    {
        //
    }
}
