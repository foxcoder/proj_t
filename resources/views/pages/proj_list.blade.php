
@extends('layout.layout_fluid')
@section('title', 'Page Title')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Project List
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title="">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="reload" data-original-title="" title="">
                        </a>
                        <a href="javascript:;" class="remove" data-original-title="" title="">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button id="sample_editable_1_new" class="btn green">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#">
                                                Print </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Save as PDF </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Export to Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- START Project list  -->
                    <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">


                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
                                <thead>
                                <tr role="row">
                                   
                                    <th class="table-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="
" style="width: 25px;">
                                        <div class="checker"><span><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"></span></div>
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
										 Project Name
									: activate to sort column ascending" style="width: 160px;">
                                        Project Name
                                    </th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
										Project Description
									" style="width: 275px;">
                                        Project Description
                                    </th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
										Start Date
									" style="width: 99px;">
                                        Start Date
                                    </th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
										 Due Date
									: activate to sort column ascending" style="width: 144px;">
                                         Due Date
                                    </th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
										 Status
									" style="width: 157px;">
                                        Status
                                    </th></tr>
                                </thead>
                                <tbody>
                                <!-- START project list -->
                                @foreach ($proj_list as $proj)
                                <tr class="gradeX odd" role="row">
                                    <td>
                                        <div class="checker"><span><input type="checkbox" class="checkboxes" value="1"></span></div>
                                    </td>
                                    <td class="sorting_1">
                                        iOS - project track  project track project track  project track
                                    </td>
                                    <td> <!--
                                        <a href="mailto:userwow@gmail.com">
                                            good@gmail.com </a>
                                            -->
                                          PHP: Hypertext Preprocessor. PHP is a popular general-purpose scripting language PHP: Hypertext Preprocessor. PHP is a popular general-purpose scripting language that is especially suited to web development. Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.
                                          that is especially suited to web development. Fast, flexible and pragmatic, 
                                          PHP powers everything from your blog to the most popular websites in the world. 
                                    </td>
                                    <td>
                                        20
                                    </td>
                                    <td class="center">
                                        19.11.2010
                                    </td>
                                    <td>
										<span class="label label-sm label-success">
										Approved </span>
                                    </td>
                                </tr>
                                @endforeach
                                <!--End project list -->
                            </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-12">
                               <div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing 1 to 5 of 25 entries</div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                 <!--
                                 <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                                      <ul class="pagination" style="visibility: visible;">
                                         <li class="prev disabled">
                                             <a href="#" title="First">
                                               <i class="fa fa-angle-double-left"></i>
                                               </a>
                                        </li>
                                        <li class="prev disabled">
                                            <a href="#" title="Prev"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li><li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li>
                                        <li class="next"><a href="#" title="Last"><i class="fa fa-angle-double-right"></i></a></li>
                                        
                                    </ul>
                                  </div>
                                  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@stop