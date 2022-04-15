<!DOCTYPE html>
<html lang="en" class="semi-dark">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- loader->
        <link href="assets/css/pace.min.css" rel="stylesheet" />
        <script src="assets/js/pace.min.js"></script-->
        
        <link rel="shortcut icon" href="https://flid.org/img/favicon.ico" type="image/x-icon" />
 
        <!--plugins-->
        <link href="https://flid.org/rd/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
        <link href="https://flid.org/rd/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
        <link href="https://flid.org/rd/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
        <link href="https://flid.org/rd/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

        <!-- CSS Files -->
        <link href="https://flid.org/rd/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://flid.org/rd/assets/css/bootstrap-extended.css" rel="stylesheet" />
        <link href="https://flid.org/rd/assets/css/style.css" rel="stylesheet" />
        <link href="https://flid.org/rd/assets/css/icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />

        <!-- CSS RichtextEditor -->
        <link href="https://flid.org/rd/assets/plugins/richtexteditor/rte_theme_default.css" rel="stylesheet"  />

        <!--Theme Styles-->
        <link href="https://flid.org/rd/assets/css/semi-dark.css" rel="stylesheet" />

        <title>FLID - মৎস্য ও প্রাণিসম্পদ তথ্য ভাণ্ডার </title>
    </head>

    <body>
        <!--start wrapper-->
        <div class="wrapper">
            <!--start sidebar -->
                @include('admin.includes.sidebar')
            <!--end sidebar -->

            <!--start top header-->
            @include('admin.includes.header')
            <!--end top header-->

                        
            @yield('content')
            
            
            @include('admin.includes.footer')
        </div>
        <!--end wrapper-->

        <!-- JS Files-->
        <script src="https://flid.org/rd/assets/js/jquery.min.js"></script>
        <script src="https://flid.org/rd/assets/plugins/simplebar/js/simplebar.min.js"></script>
        <!-- sidbarmenuscrool-->
        <script src="https://flid.org/rd/assets/plugins/metismenu/js/metisMenu.min.js"></script>
        <!-- sidbarmenuscrool-->
        <script src="https://flid.org/rd/assets/js/bootstrap.bundle.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <!--plugins-->
        <script src="https://flid.org/rd/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="https://flid.org/rd/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="https://flid.org/rd/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://flid.org/rd/assets/js/table-datatable.js"></script>
        <script>
            $(document).ready(function() {
                var table = $('#example').DataTable( {
                    fixedHeader: true
                } );
            } );
            $(document).ready(function() {
                var table = $('#post-all').DataTable( {
                    fixedHeader: true
                } );
            } );
            $(document).ready(function() {
                var table = $('#post-published').DataTable( {
                    fixedHeader: true
                } );
            } );
            $(document).ready(function() {
                var table = $('#post-draft').DataTable( {
                    fixedHeader: true
                } );
            } );
            $(document).ready(function() {
                var table = $('#post-pending').DataTable( {
                    fixedHeader: true
                } );
            } );
        </script>

        <!-- RichtextEditor -->
        <script src="https://flid.org/rd/assets/plugins/richtexteditor/rte.js"></script>
        <script>
			var editor1 = new RichTextEditor("#div_editor1");
			
			function btngetHTMLCode() {
				alert(editor1.getHTMLCode())
			}

			function btnsetHTMLCode() {
				editor1.setHTMLCode("<h1>editor1.setHTMLCode() sample</h1><p>You clicked the setHTMLCode button at " + new Date() + "</p>")
			}
			function btngetPlainText() {
				alert(editor1.getPlainText())
			}

		</script> 

        <!-- Display Uploaded Image-->
        <script>
            function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah')
                                .attr('src', e.target.result)
                                .width("100%")
                                .height("100%");
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
        </script>
        
        <!-- Notificationmenuscrool-->
        <!-- <script src="https://flid.org/rd/assets/js/index.js"></script> -->
        <!-- Main JS-->
        <script src="https://flid.org/rd/assets/js/main.js"></script>
    </body>
</html>
