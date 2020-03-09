<?php

namespace App\Http\Controllers;

use App\Command\Menu\CreateMenuCommand;
use App\Command\Menu\DeleteMenuCommand;
use App\Command\Menu\UpdateMenuCommand;
use App\Dto\Menu\MenuDto;
use App\Http\Requests\Menu\CreateMenuRequest;
use App\Http\Requests\Menu\UpdateMenuRequest;
use App\Jobs\Menu\Command\CreateMenu;
use App\Jobs\Menu\Command\DeleteMenu;
use App\Jobs\Menu\Command\UpdateMenu;
use App\Jobs\Menu\Query\Menu;
use App\Query\Menu\MenuQuery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param CreateMenuRequest $request
     * @return JsonResponse
     */
    public function store(CreateMenuRequest $request): JsonResponse
    {
        $menuDto = MenuDto::fromArray($request->all());
        CreateMenu::dispatchNow(
            new CreateMenuCommand($menuDto)
        );

        return response()->json($menuDto, JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  mixed  $menu
     * @return JsonResponse
     */
    public function show(string $menu): JsonResponse
    {
        $menuDto = Menu::dispatchNow(
            new MenuQuery($menu)
        );

        return response()->json($menuDto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMenuRequest $request
     * @param  mixed  $menu
     * @return JsonResponse
     */
    public function update(UpdateMenuRequest $request, $menu): JsonResponse
    {
        $menuDto = MenuDto::fromArray($request->all());
        UpdateMenu::dispatchNow(
            new UpdateMenuCommand($menu, $menuDto)
        );

        return response()->json($menuDto, JsonResponse::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  mixed  $menu
     * @return Response
     */
    public function destroy(string $menu): Response
    {
        DeleteMenu::dispatchNow(
            new DeleteMenuCommand($menu)
        );

        return response()->noContent();
    }
}
