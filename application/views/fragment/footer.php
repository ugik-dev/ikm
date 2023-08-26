</div>
</div>
</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/form-step.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/switch.js"></script>
<script>
    $("#customFile").change(function() {
        filename = this.files[0].name
    });
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
    });
</script>
</body>


<!-- Mirrored from jthemes.net/themes/html/BeWizard/JobApplication/JobV.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 18:20:58 GMT -->

</html>