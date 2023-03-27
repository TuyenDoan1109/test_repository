@extends('admin.layouts.adminapp')

@section('content')

{{--Start Table--}}
<div class="row">
    <div class="col">
        <!-- DATA TABLE -->
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 style="color:#EE877C">Product</h4>
                <div>
                    <a class="btn btn-sm btn-primary" href="{{route('admin.products.create')}}">
                        Create
                    </a>
                    <a class="btn btn-sm btn-success dropdown-toggle" type="button" id="excel" data-bs-toggle="dropdown"
                       data-bs-auto-close="true" aria-expanded="false">
                        <i class="ri-file-excel-2-line"></i>
                        Excel
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="excel">
                        <li><a class="dropdown-item" href="#">Nhập Excel</a></li>
                        <li><a class="dropdown-item" href="#">Xuất Excel</a></li>
                    </ul>
                    <a class="btn btn-sm btn-info" href="{{route('admin.products.indexWithDeleted')}}">
                        All With Deleted
                    </a>

                </div>
            </div>

            <div class="card-body row">
                <form class="d-flex" action="#" method="post">
                    @csrf
                    <div class="col-sm-auto">
                        <div class="input-group">
                            <button class="btn btn-primary" type="button">Keyword</button>
                            <input type="text" name="search_name" class="form-control" placeholder="Find by name,code..."
                                   value="">
                        </div>
                    </div>

                    <div class="col-sm-auto">
                        <input type="hidden" name="confirm_search" value="1">
                        <button class="btn btn-warning">Search</button>
                    </div>
                </form>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table class="table table-sm table-bordered align-middle table-fit">
                            <thead class="table-light text-muted">
                            <tr>
                                <th class="text-center px-3" scope="col">S\N:</th>
                                <th class="text-center px-3" scope="col">Name</th>
                                <th class="text-center px-3" scope="col">Category</th>
                                <th class="text-center px-3" scope="col">Subcategory</th>
                                <th class="text-center px-3" scope="col">Colors</th>
                                <th class="text-center px-3" scope="col">Status</th>
                                <th class="text-center px-3" scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @isset($products)
                                @foreach($products as $key => $item)
                                    <tr>
                                        <th class="text-center px-3" scope="row">{{++$key}}</th>
                                        <td class="text-center px-3" style="white-space: nowrap;">{{$item->name}}</td>
                                        <td class="text-center px-3" style="white-space: nowrap;">{{$item->category->name}}</td>
                                        <td class="text-center px-3" style="white-space: nowrap;">{{$item->subcategory->name}}</td>
                                        <td class="text-center px-3" style="white-space: nowrap;">
                                            @foreach($item->colors as $color)
                                                {{$color->name}}
                                                <br>
                                            @endforeach
                                        </td>
                                        <td class="text-center px-3">
                                            @if($item->status == 1)
                                                <i class="fa fa-2x fa-toggle-on text-success"></i>
                                            @else
                                                <i class="fa fa-2x fa-toggle-off text-danger"></i>
                                            @endif
                                        </td>
                                        <td class="text-center px-3">
                                            <div class="d-flex px-2">
                                                <a href="{{route('admin.products.edit', $item->id)}}" class="btn btn-sm btn-outline-primary" title="Edit" style="margin-right: 5px">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="#" title="Delete" class="btn btn-sm btn-outline-danger"
                                                   onclick="
                                                        if(confirm('Are you sure?')) {
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{$item->id}}').submit();
                                                        } else {
                                                            event.preventDefault();
                                                        }
                                                    ">
                                                    <icon class="fa fa-times"></icon>
                                                </a>
                                                <form id="delete-form-{{$item->id}}" action="{{route('admin.products.destroy', $item->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
{{--End Table--}}

@endsection

