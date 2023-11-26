@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="assets/img/icons/filter.svg" alt="img">
                                <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label> <input type="search"
                                                                                                         class="form-control form-control-sm"
                                                                                                         placeholder="Search..."
                                                                                                         aria-controls="DataTables_Table_0"></label>
                            </div>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                   data-bs-original-title="pdf" aria-label="pdf"><img src="assets/img/icons/pdf.svg"
                                                                                      alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                   data-bs-original-title="excel" aria-label="excel"><img
                                        src="assets/img/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                   data-bs-original-title="print" aria-label="print"><img
                                        src="assets/img/icons/printer.svg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-0" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select select2-hidden-accessible" data-select2-id="1"
                                                    tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="3">Choose Product</option>
                                                <option>Macbook pro</option>
                                                <option>Orange</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="2" style="width: 100%;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-k441-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-k441-container" role="textbox"
                                                            aria-readonly="true"
                                                            title="Choose Product">Choose Product</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select select2-hidden-accessible" data-select2-id="4"
                                                    tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="6">Choose Category</option>
                                                <option>Computers</option>
                                                <option>Fruits</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="5" style="width: 100%;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-2gs0-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-2gs0-container" role="textbox"
                                                            aria-readonly="true"
                                                            title="Choose Category">Choose Category</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select select2-hidden-accessible" data-select2-id="7"
                                                    tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="9">Choose Sub Category</option>
                                                <option>Computer</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="8" style="width: 100%;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-b5oa-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-b5oa-container" role="textbox"
                                                            aria-readonly="true" title="Choose Sub Category">Choose Sub Category</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select select2-hidden-accessible" data-select2-id="10"
                                                    tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="12">Brand</option>
                                                <option>N/D</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="11" style="width: 100%;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-xwp2-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-xwp2-container" role="textbox"
                                                            aria-readonly="true" title="Brand">Brand</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12 ">
                                        <div class="form-group">
                                            <select class="select select2-hidden-accessible" data-select2-id="13"
                                                    tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="15">Price</option>
                                                <option>150.00</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="14" style="width: 100%;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-p0q6-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-p0q6-container" role="textbox"
                                                            aria-readonly="true" title="Price">Price</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img
                                                    src="assets/img/icons/search-whites.svg" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <table class="table datanew dataTable no-footer" id="DataTables_Table_0" role="grid"
                               aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-sort="ascending" aria-label="




: activate to sort column descending" style="width: 97.5234px;">
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
{{--                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"--}}
{{--                                    colspan="1" aria-label="Product Name: activate to sort column ascending"--}}
{{--                                    style="width: 256.766px;">CV--}}
{{--                                </th>--}}
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Product Name: activate to sort column ascending"
                                    style="width: 256.766px;">Matricule
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="SKU: activate to sort column ascending"
                                    style="width: 87.5547px;">Prénom
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Category : activate to sort column ascending"
                                    style="width: 144.625px;">Nom
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Brand: activate to sort column ascending"
                                    style="width: 107.523px;">Sexe
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="price: activate to sort column ascending"
                                    style="width: 94.7109px;">Grade
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Unit: activate to sort column ascending"
                                    style="width: 83.25px;">Corps
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Qty: activate to sort column ascending"
                                    style="width: 76.1484px;">Services
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="Action: activate to sort column ascending"
                                    style="width: 187.008px;">Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($employees as $employee)
                                <tr class="odd">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
{{--                                    <td class="productimgname">--}}
{{--                                        <iframe src="{{Storage::url($employee->cv->first()->path)}}" width="100" height="100" ></iframe>--}}
{{--                                    </td>--}}
                                    <td >
                                        <a href="javascript:void(0);">{{$employee->matricule}}</a>
                                    </td>
                                    <td>{{$employee->first_name}}</td>
                                    <td>{{$employee->last_name}}</td>
                                    <td>{{$employee->sexe}}</td>
                                    <td>{{$employee->grade}}</td>
                                    <td>{{$employee->corps}}</td>
                                    <td>{{$employee->service}}</td>
                                    <td>
                                        <a class="me-3" href="{{route('employee-detail', ['id'=>$employee->employee_id])}}">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select></label></div>
                        <div class="dataTables_paginate paging_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item active"><a href="#"
                                                                                aria-controls="DataTables_Table_0"
                                                                                data-dt-idx="0" tabindex="0"
                                                                                class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"
                                                                          data-dt-idx="1" tabindex="0"
                                                                          class="page-link">2</a></li>
                            </ul>
                        </div>
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1 -
                            10 of 11 items
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
