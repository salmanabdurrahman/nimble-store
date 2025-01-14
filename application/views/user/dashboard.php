<!-- ======= CONTENT SECTION START ======= -->
<div class="w-full lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">

    </div>
</div>
<!-- ======= CONTENT SECTION END ======= -->


<!-- ======= SWEETALERT START ======= -->
<?php if ($this->session->flashdata('success')): ?>
    <script>
        Swal.fire({
            title: "Success!",
            text: "<?= $this->session->flashdata('success'); ?>",
            icon: "success",
            confirmButtonText: "OK"
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <script>
        Swal.fire({
            title: "Error!",
            html: "<ul><?= $this->session->flashdata('error'); ?></ul>",
            icon: "error",
            confirmButtonText: "OK"
        });
    </script>
<?php endif; ?>
<!-- ======= SWEETALERT END ======= -->