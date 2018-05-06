<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp;
    modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat
    admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">

    @yield('title')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/admin_inc/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/admin_inc/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,
    400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/html5-editor/bootstrap-wysihtml5.css" />
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/css/app.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/client_inc/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/admin_inc/app-assets/css/pages/timeline.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/admin_inc/assets/css/style.css">
    <!-- END Custom CSS-->

    <style>
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 55px;
            height: 27px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            display: none;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns
    menu-expanded fixed-navbar">

    @include('admin.top_nav')
    @include('admin.left_menu')

    @yield('content')

    @include('admin.footer')

<!-- BEGIN VENDOR JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/admin_inc/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript" src="/js/starrr.js"></script>
    <script src="/js/feature_company.js"></script>
    <script src="/js/show_in_banner.js"></script>
    <script src="/js/top_viewed.js"></script>
    <script>
        $('div.alert').not('.alert-important').delay(5000).fadeOut(1500);
    </script>
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="/html5-editor/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="/client_inc/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
    <script>
        $(function(){
            $('.textarea_editor').wysihtml5();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="input-group">'+
                        '<input type="text" name="feature[]" placeholder="Enter another Feature" class="form-control">'+
                        '<span class="remove_field input-group-btn">'+
                        '<button class="btn-sm btn-danger" type="button"><i class="fa fa-remove"></i></button>'+
                        '</span></div>'); //add input box
                }
            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });

        $(document).ready(function() {
            //get subcateogries according to sector selection
            $("#property-type").change(function () {
                $.get("/submission/getSubCategories/" + $(this).val(), function (data) {

                    $element = $("#subcategory_id");
                    $element.removeAttr('disabled');

                    $(data).each(function () {
                        $element.append("<option value='" + this.id + "'>" + this.name + "</option>");
                    });

                });

            })
        })
    </script>

    <script type='text/javascript'>
        $(function () {
            $("#fileupload").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $("#dvPreview");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");
                                img.attr("style", "height:100px;width: 100px");
                                img.attr("src", e.target.result);
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
    </script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
    <script src="/admin_inc/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/tables/jszip.min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/tables/pdfmake.min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/tables/vfs_fonts.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/tables/buttons.html5.min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/tables/buttons.print.min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/tables/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
    <script src="/admin_inc/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
    <script src="/admin_inc/app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/js/scripts/tables/datatables/datatable-api.js" type="text/javascript"></script>

<!-- END PAGE LEVEL JS-->
</body>
</html>
