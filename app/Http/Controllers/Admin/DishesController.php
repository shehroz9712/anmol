<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dishes;
use Auth;
use Illuminate\Http\Response;
use App\Http\Requests\Dishes\StoreDisheRequest;
use App\Http\Requests\Dishes\UpdateDisheRequest;

class DishesController extends Controller
{
    private $dishesRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:dishes');
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $records = Dishes::all();
        return view('dishes.dishes.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('dishes.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDishesRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreDishesRequest $request)
    {
        dd($request);

        $data = $request->except(
            [
                '_token',
                '_method'
            ]
        );

        $user = Dishes::create($data);

        /*
         * Trigger DishesCreatedEvent
         */
        // event(new \App\Events\DishesCreatedEvent($user));

        return redirect()
            ->route('dishes.dishes.index')
            ->with('success', 'Dishe added successfully.');
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

        $data = Dishes::find($id);

        return view('dishes.dishes.show', compact('data'));
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
        $data = Dishes::find($id);
        return view('dishes.dishes.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDisheRequest $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateDisheRequest $request, $id)
    {
        $exceptFields = [
            '_token',
            '_method',
            'email'
        ];

        // 1 = super dishes user id, and is_active status cannot be set for it
        if ($id == 1) {
            $exceptFields[] = 'is_active';
        }

        $data = $request->except($exceptFields);

        //        $user = $this->dishesRepository->find($id);

        Dishes::where('id', $id)->update($data);

        return redirect()
            ->route('dishes.dishes.index')
            ->with('success', 'Dishe updated successfully.');
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
        // 1 = super dishes user id, and it cannot be removed
        if ($id == 1) {
            return redirect()
                ->route('dishes.dishes.index')
                ->with('error', 'This dishes user cannot be deleted!');
        }

        Dishes::delete($id);

        return redirect()
            ->route('dishes.dishes.index')
            ->with('success', 'Dishe was removed successfully!');
    }
}
