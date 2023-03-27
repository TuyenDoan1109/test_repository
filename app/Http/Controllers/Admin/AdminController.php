<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CreateAdminRequest;
use App\Http\Requests\Admin\UpdateAdminRequest;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    protected $adminRepository;
    public function __construct(AdminRepositoryInterface $adminRepository) {
        $this->middleware('auth:admin');
        $this->adminRepository = $adminRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = $this->adminRepository->getAll();
        return view('admin.admins.index', compact('admins'));
    }

    public function indexWithDeleted() {
        $admins = $this->adminRepository->getAllWithDeleted();
        return view('admin.admins.indexWithDeleted', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdminRequest $request)
    {
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ];
        $admin = $this->adminRepository->create($data);
        if($admin) {
            return redirect(route('admin.admins.index'))->with('alert-success', 'Thêm mới thành công');
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
        $admin = $this->adminRepository->getById($id);
        return view('admin.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateAdminRequest $request)
    {
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ];
        $admin = $this->adminRepository->update($id, $data);
        if($admin) {
            return redirect(route('admin.admins.index'))->with('alert-success', 'Update thành công');
        } else {
            return redirect()->back()->with('alert-error', 'Update thất bại');
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
        $admin = $this->adminRepository->delete($id);
        if($admin) {
            return redirect(route('admin.admins.index'))->with('alert-success', 'Delete thành công');
        } else {
            return redirect()->back()->with('alert-error', 'Delete thất bại');
        }
    }

    public function forceDelete($id) {
        $admin = $this->adminRepository->deleteForever($id);
        if($admin) {
            return redirect(route('admin.admins.index'))->with('alert-success', 'Forever Delete thành công');
        } else {
            return redirect()->back()->with('alert-error', 'Forever Delete thất bại');
        }
    }

    public function restore($id) {
        $admin = $this->adminRepository->restoreDeleted($id);
        if($admin) {
            return redirect(route('admin.admins.index'))->with('alert-success', 'Delete thành công');
        } else {
            return redirect()->back()->with('alert-error', 'Delete thất bại');
        }
    }
}
