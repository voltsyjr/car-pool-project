<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap-datepicker.css"> -->
    <!-- <script src="bootstrap-datepicker.js"></script>
    <script src="bootstrap-datepicker.de.min.js"></script> -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <!-- //for date picker  -->
    <link rel="stylesheet" href="date/jquery.datepicker2.css">
    <script src="date/jquery.datepicker2.js"></script>
    <!-- //for date picker end -->

    <!-- for slect  -->
    <!-- <link rel="stylesheet" href="select/tom-select.css">
    <script src="select/tom-select.complete.min.js"></script> -->
    <link rel="stylesheet" href="css/select2.min.css">
    <script src="js/select2.min.js"></script>
    <!-- for slect end -->

    <!-- for fontawesome  -->
    <script src="all.js"></script>
</head>

<body style="margin-bottom: 100px;">
    <div class="container">
        <a href="new.html">new</a>
        <a href="new1.html">new1</a>
        <a href="new2.html">new2</a>
        <a href="routin.html">routin</a>
        <a href="routin1.html">routin1</a>
        <a href="atenal.html">antenal</a>
        <a href="antenal1.html">antenal1</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 style="margin-top: 50px;"></h5>
            </div>
        </div>
        <style>
            .danger-star {
                color: red;
            }
            
            label,
            .col-form-label {
                color: rgb(110, 109, 109);
                font-size: 14px;
            }
            
            .select2-search__field {
                outline: none;
                /* border: none; */
            }
            
            .select2-search__field:focus {
                box-shadow: 0 0 2px 2px rgb(208, 224, 247);
            }
            
            .floatheading {
                font-size: smaller;
                position: absolute;
                top: -12px;
                left: 10px;
                background-color: rgb(255 247 231);
                padding-left: 5px;
                padding-right: 5px;
                font-weight: bold;
                color: rgb(235, 154, 3);
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                border: 2px solid rgb(235, 154, 3);
                border-bottom: transparent;
                border-left: transparent;
                border-right: transparent;
                cursor: pointer;
            }
            
            label {
                margin-bottom: 5px;
                color: rgb(46, 45, 45);
                font-size: 13px;
                font-weight: bold;
            }
            
            .mgr {
                margin-bottom: 10px;
            }
            
            .form-control:focus {
                color: #212529;
                background-color: #fff;
                border-color: rgb(235, 154, 3);
                outline: 0;
                box-shadow: 0 0 0 .25rem rgb(248, 222, 174);
            }
            
            .form-control {
                border: 1px solid #e8a542;
            }
            
            .form-check-input:focus {
                border-color: #f2620efa;
                outline: 0;
                box-shadow: 0 0 0 .25rem rgb(248, 222, 174)
            }
            
            .form-check-input:checked {
                background-color: #f2620efa;
                border-color: #f2620efa;
            }
            /* select css  */
            
            .select2-container--default .select2-selection--single {
                border: 1px solid #e8a542;
            }
            
            .select2-container--default .select2-selection--single .select2-selection__arrow {
                background-color: #f6ae4380;
            }
            
            .select2-container--default .select2-selection--single .select2-selection__arrow b {
                /* border-color: #888 transparent transparent transparent; */
                border-color: #f2620efa transparent transparent transparent;
            }
            
            .select2-container--default .select2-results__option--highlighted[aria-selected] {
                /* background-color: #5897fb;
                color: white; */
                background-color: #fff4e4;
                color: rgb(37, 37, 37)
            }
            
            .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
                /* border-color: transparent transparent #888 transparent; */
                border-color: transparent transparent #f2620efa transparent;
                border-width: 0 4px 5px 4px
            }
            
            .select2-container--default .select2-selection--single .select2-selection__arrow {
                top: 0px;
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
            }
        </style>
        <div class="row" style="display: flex;flex-direction: column;">
            <div class="col-8">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col" style="border: 1px solid rgb(235, 154, 3);border-top-left-radius: 5px;cursor: pointer;background-color: rgb(255 247 231);color:rgb(235, 154, 3);font-weight:bold;">
                        Glycogen Storage Disorders (GSD)
                    </div>
                    <div class="col" style="border: 1px solid rgb(235, 154, 3);cursor: pointer;color:rgb(235, 154, 3);">
                        Antenatal / Perinatal History
                    </div>
                    <div class="col" style="border: 1px solid rgb(235, 154, 3);border-top-right-radius: 5px;cursor: pointer;color:rgb(235, 154, 3);">
                        Investigations (As applicable) Routine
                    </div>
                </div>
            </div>
            <div class="col-8" style="border: 1.5px solid rgb(197, 196, 196);border-radius: 3px;padding-bottom: 40px;">
                <div class="row">
                    <div class="col report-date">
                        <div class="col-100">
                            <label for="lname">Report date <span class="danger-star">*</span></label>
                        </div>
                        <div class="col-100">
                            <input type="text" id="report-date" name="lastname" placeholder="mm/dd/yyyy" class="form-control" data-select="datepicker">

                            <label for="report-date" style="float: right;margin-top:-28px;margin-right: 14px;font-size: 18px;cursor: pointer;"> <i class="far fa-calendar"></i></label>
                            <!-- <input type="date" id="report-date1" name="lastname" placeholder="mm/dd/yyyy" class="form-control"> -->
                            <!-- <input type="text" id="report-date" name="lastname" placeholder="dd/mm/yyyy" class="form-control"> -->
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col" style="border:1px solid grey;margin-left: 13px;margin-right: 13px;position: relative;background-color: rgb(255 247 231);">
                        <span class="floatheading Socio-head">Socio Demographic Details <span style="margin-left: 10px;margin-right: 4px;"><i class="fas fa-caret-square-up"></i></span></span>
                        <br>
                        <div class="row Socio">
                            <div class="row mgr">
                                <div class="col-3">
                                    <label for="inputEmail3" class="col-sm-12" style="height: 38px;">Final Diagnosis</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail3" class="col-sm-12" style="height: 38px;">Date of Record</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="report-date2" name="record date" placeholder="mm/dd/yyyy" class="form-control" data-select="datepicker">
                                        <label for="report-date2" style="float: right;margin-top:-28px;margin-right: 14px;font-size: 18px;cursor: pointer;    color: #f4a46b;"> <i class="far fa-calendar"></i></label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail3" class="col-sm-12" style="height: 42px;">Date of Clinical examination</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="report-date3" name="record date" placeholder="mm/dd/yyyy" class="form-control" data-select="datepicker">
                                        <label for="report-date3" style="float: right;margin-top:-28px;margin-right: 14px;font-size: 18px;cursor: pointer;    color: #f4a46b;"> <i class="far fa-calendar"></i></label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail3" class="col-sm-12" style="height: 38px;">Date (DOB)</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="report-date4" name="record date" placeholder="mm/dd/yyyy" class="form-control" data-select="datepicker">
                                        <label for="report-date4" style="float: right;margin-top:-28px;margin-right: 14px;font-size: 18px;cursor: pointer;    color: #f4a46b;"> <i class="far fa-calendar"></i></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mgr">
                                <div class="col-6">
                                    <div class="col-12">
                                        <label for="">Education Status of Patient (If applicable)</label>
                                    </div>
                                    <div class="col-12" style="position:relative;">

                                        <select id="e1" style="width:100%;" class="operator"> 
                                        <option value="">Select or search from the list</option> 
                                        <option value="illiterate">1. Illiterate</option> 
                                        <option value="primary">2. Primary</option>
                                        <option value="high school">3. High School</option>
                                        <option value="secondary level">4. Secondary level</option>
                                        <option value="college and above">5. College and above</option>
                                 </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-12">
                                        <label for="">Occupation of patient ( if applicable)</label>
                                    </div>
                                    <div class="col-12" style="position:relative;">

                                        <select id="e2" style="width:100%;" class="operator"> 
                                        <option value="">Select or search from the list</option> 
                                        <option value="Employed (organised sector)">1. Employed (organised sector)</option> 
                                        <option value="Employed (Unorganised sector)">2. Employed (Unorganised sector)</option>
                                        <option value="Others">	
                                            3. Others</option>
                                 </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mgr">
                                <div class="col-12">
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 ">Others</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mgr">
                                <div class="col-6">
                                    <div class="col-12 ">
                                        <label for="">Education Status of Father</label>
                                    </div>
                                    <div class="col-12 " style="position:relative;">

                                        <select id="e3" style="width:100%;" class="operator"> 
                                        <option value="">Select or search from the list</option> 
                                        <option value="">Select or search from the list</option> 
                                        <option value="illiterate">1. Illiterate</option> 
                                        <option value="primary">2. Primary</option>
                                        <option value="high school">3. High School</option>
                                        <option value="secondary level">4. Secondary level</option>
                                        <option value="college and above">5. College and above</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-12">
                                        <label for="">Occupation of father</label>
                                    </div>
                                    <div class="col-12" style="position:relative;">

                                        <select id="e4" style="width:100%;" class="operator"> 
                                        <option value="">Select or search from the list</option> 
                                        <option value="Employed (organised sector)">1. Employed (organised sector)</option> 
                                        <option value="Employed (Unorganised sector)">2. Employed (Unorganised sector)</option>
                                        <option value="Others">	
                                            3. Others</option>
                                 </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mgr">
                                <div class="col-12">
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 ">Others</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mgr">
                                <div class="col-6">
                                    <div class="col-12 ">
                                        <label for="">Education Status of Mother</label>
                                    </div>
                                    <div class="col-12 " style="position:relative;">

                                        <select id="e5" style="width:100%;" class="operator"> 
                                        <option value="">Select or search from the list</option> 
                                        <option value="">Select or search from the list</option> 
                                        <option value="illiterate">1. Illiterate</option> 
                                        <option value="primary">2. Primary</option>
                                        <option value="high school">3. High School</option>
                                        <option value="secondary level">4. Secondary level</option>
                                        <option value="college and above">5. College and above</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-12">
                                        <label for="">Occupation of mother</label>
                                    </div>
                                    <div class="col-12" style="position:relative;">

                                        <select id="e6" style="width:100%;" class="operator"> 
                                        <option value="">Select or search from the list</option> 
                                        <option value="Employed (organised sector)">1. Employed (organised sector)</option> 
                                        <option value="Employed (Unorganised sector)">2. Employed (Unorganised sector)</option>
                                        <option value="Others">	
                                            3. Others</option>
                                 </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mgr">
                                <div class="col-12">
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 ">Others</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mgr">
                                <div class="col-12">
                                    <label for="">Monthly Family Income (INR)</label>
                                </div>
                                <div class="col-12" style="position:relative;">

                                    <select id="e7" style="width:100%;" class="operator"> 
                                    <option value="">Select or search from the list</option> 
                                    <option value="> 126,360">> 126,360</option> 
                                    <option value="63,182 – 126,356">63,182 – 126,356</option>
                                    <option value="47,266 – 63,178">	47,266 – 63,178</option>
                                    <option value="31,591 - 47,262">31,591 - 47,262</option>
                                    <option value="18,953 - 31,589">18,953 - 31,589</option>
                                    <option value="6,327 - 18,949">6,327 - 18,949</option>
                                    <option value="< 6,323">< 6,323</option>
                             </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <br><br>
                <div class="row">
                    <div class="col" style="border:1px solid grey;margin-left: 13px;margin-right: 13px;position: relative;background-color: rgb(255 247 231);">
                        <span class="floatheading Anthropometry-head">Anthropometry <span style="margin-left: 10px;margin-right: 4px;"><i class="fas fa-caret-square-up"></i></span></span>
                        <br>
                        <div class="row Anthropometry">
                            <div class="row mgr">
                                <div class="col-12">
                                    <label for="inputEmail3" class="col-sm-12 ">Date</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="report-date5" name="record date" placeholder="mm/dd/yyyy" class="form-control" data-select="datepicker">
                                        <label for="report-date5" style="float: right;margin-top:-28px;margin-right: 14px;font-size: 18px;cursor: pointer;    color: #f4a46b;"> <i class="far fa-calendar"></i></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mgr">
                                <div class="col-4">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4 ">
                                                <label for="">Weight <span class="danger-star">*</span></label>
                                            </div>
                                            <div class="col-6 " style="position:relative;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 ">Patient</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 " style="margin-top: 8px;">Percentile (WHO growth charts till 5 years and IAP charts for > 5 years)</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 ">SD/Z Score</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4 ">
                                                <label for="">Height <span class="danger-star">*</span></label>
                                            </div>
                                            <div class="col-6 " style="position:relative;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 ">Patient</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 " style="margin-top: 8px;">Percentile (WHO growth charts till 5 years and IAP charts for > 5 years)</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 ">SD/Z Score</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-8 ">
                                                <label for="">Head circumference <span class="danger-star">*</span></label>
                                            </div>
                                            <div class="col-2 " style="position:relative;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 ">Patient</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 " style="margin-top: 8px;">Percentile (WHO growth charts till 5 years and IAP charts for > 5 years)</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail3" class="col-sm-12 ">SD/Z Score</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="inputEmail3" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br>
                <div class="row">
                    <div class="col" style="border:1px solid grey;margin-left: 13px;margin-right: 13px;position: relative;background-color: rgb(255 247 231);">
                        <span class="floatheading Presenting-head">Presenting Complaints <span style="margin-left: 10px;margin-right: 4px;"><i class="fas fa-caret-square-up"></i></span></span>
                        <br>
                        <div class="row Presenting">
                            <div class="row mgr">
                                <div class="col-6">
                                    <div class="col-12">
                                        <label for="">Age at onset of symptoms <span class="danger-star">*</span></label>
                                    </div>
                                    <div class="col-12" style="position:relative;">

                                        <select id="e8" style="width:100%;" class="operator"> 
                                        <option value="">Select or search from the list</option> 
                                        <option value="<1 year">< 1 year</option> 
                                        <option value="1-2 year">1-2 year</option>
                                        <option value="2-5 year">2-5 year</option>
                                        <option value="5-12 year">5-12 year</option>
                                        <option value=">12 year">>12 year</option>
                                 </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail3" class="col-sm-12 ">Age at presentation</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputEmail3" autocomplete="off">

                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail3" class="col-sm-12 ">Age at diagnosis</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputEmail3" autocomplete="off">

                                    </div>
                                </div>
                            </div>
                            <div class="row mgr">
                                <div class="col-6">
                                    <label for="inputEmail3" class="col-sm-12 ">Pedigree (3 generation) <span class="danger-star">*</span> </label>
                                    <div class="col-sm-12">
                                        <input class="form-control" id="fileinp1" autocomplete="off" readonly style="background:white ;" placeholder="Choose File..">
                                        <label for="fileinp" style="float:right;margin-top:-29px;margin-right:1px;cursor:pointer;width:50px;border-left: 1px solid #b4b5b5;background:#f6ae4380;height:91%;display:flex;justify-content: center;align-items: center;padding-left: 15px;padding-bottom: 2px;padding-top: 1px;color: #f2620efa;"
                                            id="fileinp2"> <i class="fas fa-cloud-upload-alt"></i>  <input class="" id="fileinp" type="file" placeholder="" style="position:relative;z-index: -229;width: 100%;"></label>


                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="col-12 ">
                                        <label for="">Positive Family History</label>
                                    </div>
                                    <div class="col-12 " style="position:relative;">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="col-12 ">
                                        <label for="">Consanguinity <span class="danger-star"> *</span></label>
                                    </div>
                                    <div class="col-12 " style="position:relative;">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script>
        $(document).ready(function() {



        });
        $(document).ready(function() {
            //change selectboxes to selectize mode to be searchable
            $("select").select2({
                allowClear: true,
                placeholder: "Select or search from the list"
            });
            $('.Socio-head').click(function() {
                $('.Socio').slideToggle();
                $('.Socio-head span svg').toggleClass("fa-caret-square-down");
                $('.Socio-head span svg').toggleClass("fa-caret-square-up");
            });
            $('.Anthropometry-head').click(function() {
                $('.Anthropometry').slideToggle();
                $('.Anthropometry-head span svg').toggleClass("fa-caret-square-down");
                $('.Anthropometry-head span svg').toggleClass("fa-caret-square-up");
            });
            $('.Presenting-head').click(function() {
                $('.Presenting').slideToggle();
                $('.Presenting-head span svg').toggleClass("fa-caret-square-down");
                $('.Presenting-head span svg').toggleClass("fa-caret-square-up");
            });
        });
        // upload file js
        $(document).ready(function() {
            // formFileSm1   text field input
            // formFileSm2      label      
            // formFileSm3      delete button
            // formFileSm      main input
            $("#formFileSm").on('change', function() {
                //do whatever you want
                // alert("hello");
                let a = $('#formFileSm').val();
                var filename = a.replace(/^.*[\\\/]/, '')
                $('#formFileSm1').val(filename);
                console.log(filename)
                $('#formFileSm1 ~ label svg').addClass("fa-trash");
                $('#formFileSm2 svg').removeClass("fa-cloud-upload-alt");
                $('#formFileSm2').attr("for", "");
                $('#formFileSm2').addClass("formFileSm3");

            });
            $("body label#formFileSm2").click(function() {
                if ($(this).hasClass('formFileSm3')) {
                    console.log("clicked");
                    $('#formFileSm2').removeClass("formFileSm3");
                    $('#formFileSm1').val("");
                    $('#formFileSm').val("");
                    $('#formFileSm1 ~ label svg').addClass("fa-cloud-upload-alt");
                    $('#formFileSm2 svg').removeClass("fa-trash");
                    $('#formFileSm2').attr("for", "formFileSm");
                }
            })
        });




        // upload file js
        $(document).ready(function() {
            // fileinp1   text field input
            // fileinp2      label      
            // fileinp3      delete button
            // fileinp      main input
            $("#fileinp").on('change', function() {
                //do whatever you want
                // alert("hello");
                let a = $('#fileinp').val();
                var filename = a.replace(/^.*[\\\/]/, '')
                $('#fileinp1').val(filename);
                console.log(filename)
                $('#fileinp1 ~ label svg').addClass("fa-trash");
                $('#fileinp2 svg').removeClass("fa-cloud-upload-alt");
                $('#fileinp2').attr("for", "");
                $('#fileinp2').addClass("fileinp3");

            });
            $("body label#fileinp2").click(function() {
                if ($(this).hasClass('fileinp3')) {
                    console.log("clicked");
                    $('#fileinp2').removeClass("fileinp3");
                    $('#fileinp1').val("");
                    $('#fileinp').val("");
                    $('#fileinp1 ~ label svg').addClass("fa-cloud-upload-alt");
                    $('#fileinp2 svg').removeClass("fa-trash");
                    $('#fileinp2').attr("for", "fileinp");
                }
            })
        });
    </script>
</body>

</html>
</div>
</div>
</body>

</html>

</html>