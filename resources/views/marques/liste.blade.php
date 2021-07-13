@extends("layouts.master")

@section("styles")

@endsection

@section("content")
    <!-- Title -->
    <div class="row heading-bg  bg-red">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Gestion des marques</h5>
        </div>
        <!-- Breadcrumb -->
        {{-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#"><span>dashboard</span></a></li>
                <li class="active"><span>analytical</span></li>
            </ol>
        </div> --}}
        <!-- /Breadcrumb -->
    </div>
    <!-- /Title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">data Table</h6>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('marques.create') }}" class="btn btn-default btn-rounded">Nouvelle marque</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">

                        <div class="table-wrap">
                            <div class="table-responsive">
                                <div id="datable_1_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="datable_1_length"><label>Show <select name="datable_1_length" aria-controls="datable_1" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="datable_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="datable_1"></label></div><table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 210px;">Name</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 325px;">Position</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 165px;">Office</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 61px;">Age</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 137px;">Start date</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 133px;">Salary</th></tr>
                                    </thead>
                                    <tfoot>
                                        <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                    </tfoot>
                                    <tbody>

                                    <tr role="row" class="odd">
                                            <td class="sorting_1">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr></tbody>
                                </table><div class="dataTables_info" id="datable_1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="datable_1_paginate"><a class="paginate_button previous disabled" aria-controls="datable_1" data-dt-idx="0" tabindex="0" id="datable_1_previous">Previous</a><span><a class="paginate_button current" aria-controls="datable_1" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="datable_1" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="datable_1" data-dt-idx="7" tabindex="0" id="datable_1_next">Next</a></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
