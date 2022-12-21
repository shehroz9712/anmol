<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use Auth;
use Illuminate\Http\Response;
use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;

class CategoriesController extends Controller
{
    private $categoriesRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:categories');
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $records = Categories::all();
        return view('categories.categories.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('categories.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategoriesRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoriesRequest $request)
    {
        dd($request);

        $data = $request->except(
            [
                '_token',
                '_method'
            ]
        );

        $user = Categories::create($data);

        /*
         * Trigger CategoriesCreatedEvent
         */
        // event(new \App\Events\CategoriesCreatedEvent($user));

        return redirect()
            ->route('categories.categories.index')
            ->with('success', 'Category added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {

        $data = Categories::find($id);

        return view('categories.categories.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = Categories::find($id);
        return view('categories.categories.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $exceptFields = [
            '_token',
            '_method',
            'email'
        ];

        // 1 = super categories user id, and is_active status cannot be set for it
        if ($id == 1) {
            $exceptFields[] = 'is_active';
        }

        $data = $request->except($exceptFields);

        //        $user = $this->categoriesRepository->find($id);

        Categories::where('id', $id)->update($data);

        return redirect()
            ->route('categories.categories.index')
            ->with('success', 'Category updated successfully.');
    }

    /**
     * Removes the resource from database.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        // 1 = super categories user id, and it cannot be removed
        if ($id == 1) {
            return redirect()
                ->route('categories.categories.index')
                ->with('error', 'This categories user cannot be deleted!');
        }

        Categories::delete($id);

        return redirect()
            ->route('categories.categories.index')
            ->with('success', 'Category was removed successfully!');
    }
}
