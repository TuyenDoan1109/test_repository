<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subcategory\CreateSubcategoryRequest;
use App\Http\Requests\Subcategory\UpdateSubcategoryRequest;
use App\Repositories\Subcategory\SubcategoryRepositoryInterface;

class SubcategoryController extends Controller
{
    protected $subcategoryRepository;
    public function __construct(SubcategoryRepositoryInterface $subcategoryRepository) {
        $this->middleware('auth:admin');
        $this->subcategoryRepository = $subcategoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = $this->subcategoryRepository->getAll();
        return view('admin.subcategories.index', compact('subcategories'));
    }

    public function indexWithDeleted() {
        $subcategories = $this->subcategoryRepository->getAllWithDeleted();
        return view('admin.subcategories.indexWithDeleted', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSubcategoryRequest $request)
    {
        $subcategory = $this->subcategoryRepository->create($request->all());
        if($subcategory) {
            return redirect(route('admin.subcategories.index'))->with('alert-success', 'Thêm mới thành công');
        } else {
            return redirect()->back()->with('alert-error', 'Thêm mới thát bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = $this->subcategoryRepository->getById($id);
        return view('admin.subcategories.edit', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateSubcategoryRequest $request)
    {
        $subcategory = $this->subcategoryRepository->update($id, $request->all());
        if($subcategory) {
            return redirect(route('admin.subcategories.index'))->with('alert-success', 'Update thành công');
        } else {
            return redirect()->back()->with('alert-error', 'Update thát bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = $this->subcategoryRepository->delete($id);
        if($subcategory) {
            return redirect(route('admin.subcategories.index'))->with('alert-success', 'Delete thành công');
        } else {
            return redirect()->back()->with('alert-error', 'Delete thất bại');
        }
    }

    public function forceDelete($id) {
        $subcategory = $this->subcategoryRepository->deleteForever($id);
        if($subcategory) {
            return redirect(route('admin.subcategories.index'))->with('alert-success', 'Forever Delete thành công');
        } else {
            return redirect()->back()->with('alert-error', 'Forever Delete thất bại');
        }
    }

    public function restore($id) {
        $subcategory = $this->subcategoryRepository->restoreDeleted($id);
        if($subcategory) {
            return redirect(route('admin.subcategories.index'))->with('alert-success', 'Delete thành công');
        } else {
            return redirect()->back()->with('alert-error', 'Delete thất bại');
        }
    }

}
