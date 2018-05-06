<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    <!-- Document Title -->
    @yield('title')

    <!-- Favicon -->
    <link rel="shortcut icon" href="/client_inc/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/client_inc/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="/client_inc/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="/client_inc/rs-plugin/css/settings.css" media="screen" />

    <!-- StyleSheets -->
    <link rel="stylesheet" href="/client_inc/css/ionicons.min.css">
    <link rel="stylesheet" href="/client_inc/css/bootstrap.min.css">
    <link rel="stylesheet" href="/client_inc/css/jquerysctipttop.min.css">
    <link rel="stylesheet" href="/client_inc/css/font-awesome.min.css">
    <link rel="stylesheet" href="/client_inc/css/main.css">
    <link rel="stylesheet" href="/client_inc/css/style.css">
    <link rel="stylesheet" href="/client_inc/css/responsive.css">
    <link rel="stylesheet" href="/dist/imageuploadify.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <!-- Fonts Online -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


    <!-- JavaScripts -->
    <script src="/client_inc/js/vendors/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Page Wrapper -->
<div id="wrap" class="layout-1">

@include('user.header')
@yield('content')
@include('layouts.footer')

    <!-- GO TO TOP  -->
    <a href="index.html#" class="cd-top"><i class="fa fa-angle-up"></i></a>
    <!-- GO TO TOP End -->
</div>
<!-- End Page Wrapper -->

<!-- JavaScripts -->
<script>
    $('div.alerts').not('.alert-important').delay(5000).fadeOut(1500);
</script>
<script src="/client_inc/js/vendors/jquery/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="/js/starrr.js"></script>
<script src="/client_inc/js/vendors/wow.min.js"></script>
<script src="/client_inc/js/vendors/bootstrap.min.js"></script>
<script src="/client_inc/js/vendors/own-menu.js"></script>
<script src="/client_inc/js/vendors/jquery.sticky.js"></script>
<script src="/client_inc/js/vendors/owl.carousel.min.js"></script>
<script type="text/javascript" src="/dist/imageuploadify.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('input[type="file"]').imageuploadify();
    })
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="/client_inc/rs-plugin/js/jquery.tp.t.min.js"></script>
<script type="text/javascript" src="/client_inc/rs-plugin/js/jquery.tp.min.js"></script>
<script src="/client_inc/js/main.js"></script>


<script language="javascript" type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/client_inc/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>


<script type="text/javascript">
    $(document).ready(function(){

        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');

                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
        });

        if ($(".filter-button").removeClass("active")) {
            //$(this).removeClass("active");
        }
        //$(this).addClass("active");
        $('.filter').filter('.hdpe').show('3000');

    });

    $(document).ready(function(){
        //FANCYBOX
        //https://github.com/fancyapps/fancyBox
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });

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

    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
</script>
<script type="text/javascript">
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
</body>
</html>
