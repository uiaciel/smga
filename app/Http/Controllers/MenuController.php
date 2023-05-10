<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();

        return view('admincp.menu.index', [
            'menus' => $menu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Menu;
        $item->title = $request->title;
        if (!$request->link) {
            $item->link = Str::slug($request->title);
        } else {
            $item->link = $request->link;
        }

        $item->order = 0;
        $item->save();

        return redirect()->route('menus.index')
            ->with('success', 'Menu Item Add successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
    }

    public function updates(Request $request)
    {
        $order = $request->order;
        $ids = $request->id;

        foreach ($ids as $key => $n) {
            $menu = Menu::find('id', $n);
            $menu->order = $order[$key];
            $menu->save();
        }

        return redirect()->route('menus.index')
            ->with('success', 'Menu Item Add successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
