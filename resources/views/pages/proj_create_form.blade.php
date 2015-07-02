@extends('layout.layout_fluid')

<!-- START page_links SECTION -->
@section ('page_links')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
@stop
<!-- START end_scripts SECTION -->
    




<!-- BEGIN  content SECTION -->
@section ('content') 


<div class="row">
                <div class="col-md-12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Advance Validation
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse">
                                </a>
                                <a href="#portlet-config" data-toggle="modal" class="config">
                                </a>
                                <a href="javascript:;" class="reload">
                                </a>
                                <a href="javascript:;" class="remove">
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" id="form_sample_3" class="form-horizontal">
                                <div class="form-body">
                                    <h3 class="form-section">Advance validation. <small>Custom radio buttons, checkboxes and Select2 dropdowns</small></h3>
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" name="name" data-required="1" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email Address <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                                </span>
                                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Occupation&nbsp;&nbsp;</label>
                                        <div class="col-md-4">
                                            <input name="occupation" type="text" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Select2 Dropdown <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <select class="form-control select2me" name="options2">
                                                <option value="">Select...</option>
                                                <option value="Option 1">Option 1</option>
                                                <option value="Option 2">Option 2</option>
                                                <option value="Option 3">Option 3</option>
                                                <option value="Option 4">Option 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Select2 Tags <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="hidden" class="form-control" id="select2_tags" value="" name="select2tags">
                                            <span class="help-block">
                                            select tags </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Datepicker</label>
                                        <div class="col-md-4">
                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                <input type="text" class="form-control" readonly name="datepicker">
                                                <span class="input-group-btn">
                                                <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                                </span>
                                            </div>
                                            <!-- /input-group -->
                                            <span class="help-block">
                                            select a date </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Membership <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="radio-list" data-error-container="#form_2_membership_error">
                                                <label>
                                                <input type="radio" name="membership" value="1"/>
                                                Fee </label>
                                                <label>
                                                <input type="radio" name="membership" value="2"/>
                                                Professional </label>
                                            </div>
                                            <div id="form_2_membership_error">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Services <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="checkbox-list" data-error-container="#form_2_services_error">
                                                <label>
                                                <input type="checkbox" value="1" name="service"/> Service 1 </label>
                                                <label>
                                                <input type="checkbox" value="2" name="service"/> Service 2 </label>
                                                <label>
                                                <input type="checkbox" value="3" name="service"/> Service 3 </label>
                                            </div>
                                            <span class="help-block">
                                            (select at least two) </span>
                                            <div id="form_2_services_error">
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Markdown</label>
                                        <div class="col-md-9">
                                            <textarea name="markdown" data-provide="markdown" rows="10" data-error-container="#editor_error"></textarea>
                                            <div id="editor_error">
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3">WYSIHTML5 Editor <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="wysihtml5 form-control" rows="6" name="editor1" data-error-container="#editor1_error"></textarea>
                                            <div id="editor1_error">
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="form-group last">
                                        <label class="control-label col-md-3">CKEditor <span class="required">
                                        * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
                                            <div id="editor2_error">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                -->
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>

@stop
<!-- END content SECTION -->


<!-- START page_scripts SECTION -->
@section('page_scripts')

<script type="text/javascript" src="../../assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
@stop
<!-- END page_script SECTION -->