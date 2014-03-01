

<!-- JavaScript -->
<script src="<?= base_url() ?>assets/libs/jQuery-1.11.0/jQuery.min.js"></script>
<script src="<?= base_url() ?>assets/libs/bootstrap-3.1.1/js/bootstrap.min.js"></script>
<!-- YOUR GOOGLE MAPS KEY -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiUHrtP7COzKY2azegkJZzps3J7pQ4Qs4&sensor=false">
</script>  
<script src = "<?= base_url() ?>assets/js/global.js" ></script>
<?php if (isset($js)) foreach ($js as $row) { ?>
        <script src="<?= base_url() ?>assets/<?= $row ?>.js"></script>
    <?php } ?>
</body>
</html>
