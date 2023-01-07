<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer-copy">
                    © 2022 All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</section>
<!--  FOOTER AREA END  -->

<!-- Main jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
    integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap 4.3.1 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- Woow animtaion -->
<script src="<?= base_url('assets/plugins/counterup/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/counterup/jquery.easing.1.3.js') ?>"></script>
<!-- Counterup -->
<script src="<?= base_url('assets/plugins/counterup/jquery.waypoints.js') ?>"></script>
<script src="<?= base_url('assets/plugins/counterup/jquery.counterup.min.js') ?>"></script>

<!-- Contact Form -->
<script src="<?= base_url('assets/js/custom.js') ?>"></script>

<!-- Alertify JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="<?= base_url('assets/js/auth/login.js') ?>"></script>

<!-- home js -->
<script src="<?= base_url('assets/js/home.js') ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
		$('.select2').select2({
			minimumResultsForSearch: -1,
			placeholder: function(){
				$(this).data('placeholder');
			}
		});
	});
</script>
<script>
	var base = "<?= base_url() ?>";
</script>
</body>

</html>
