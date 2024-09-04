 <link rel="stylesheet" href="assets/js/select2/select2.css">
        <link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
        <script src="assets/js/select2/select2.min.js"></script>
        <script src="assets/js/datepicker/bootstrap-datepicker.js"></script>

        <script type = "text/javascript" >
            jQuery(document).ready(function ($)
            {
                $(".s2example-1").select2({
                    placeholder: 'Select your category...',
                    allowClear: true
                }).on('select2-open', function ()
                {
                    $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
                });
            });
        </script>
        
        
    </body>
</html>

