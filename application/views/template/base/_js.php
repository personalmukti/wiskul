<!-- jQuery -->
<script src="<?= base_url(); ?>assets/lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>assets/lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url(); ?>assets/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>assets/lte/plugins/chart.js/Chart.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url(); ?>assets/lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>assets/lte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>assets/lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>assets/lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>assets/lte/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>assets/lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assets/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/lte/dist/js/adminlte.js"></script>
<!-- Ekko Lightbox -->
<script src="<?= base_url(); ?>assets/lte/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });

  //bsCustomFileInput
  $(function() {
    bsCustomFileInput.init();
  });

  $(document).ready(function() {
    // Untuk sunting
    $('#edit-banner').on('show.bs.modal', function(event) {
      var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
      var modal = $(this)

      // Isi nilai pada field
      modal.find('#id').attr("value", div.data('id'));
      modal.find('#mastertag').attr("value", div.data('mastertag'));
      modal.find('#tagline').attr("value", div.data('tagline'));
      modal.find('#img').html(div.data('img'));
    });
  });

  $(document).ready(function() {
    // Untuk sunting
    $('#edit-data').on('show.bs.modal', function(event) {
      var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
      var modal = $(this)

      // Isi nilai pada field
      modal.find('#id').attr("value", div.data('id'));
      modal.find('#nama_slot').attr("value", div.data('nama_slot'));
      modal.find('#pemilik').attr("value", div.data('pemilik'));
      modal.find('#slogan').html(div.data('slogan'));
    });
  });
  $(document).ready(function() {
    // Untuk sunting
    $('#edit-menu').on('show.bs.modal', function(event) {
      var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
      var modal = $(this)

      // Isi nilai pada field
      modal.find('#id').attr("value", div.data('id'));
      modal.find('#nama_slot').attr("value", div.data('nama_slot'));
      modal.find('#nama_menu').attr("value", div.data('nama_menu'));
      modal.find('#gbr_menu').attr("value", div.data('gbr_menu'));
      modal.find('#harga_menu').attr("value", div.data('harga_menu'));
      modal.find('#deskripsi_menu').html(div.data('deskripsi_menu'));
    });
  });
  $(function() {
    // Summernote
    $('#deskripsi_menu').summernote({
      height: 150
    })
  })
</script>

<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#fotobaru')
          .attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  $(window).on('load', function() {
    $('#changelogmodal').modal('show');
  });
</script>

<script>
  $('.carousel').carousel({
    interval: 20
  })
</script>

<script type="text/javascript">
  Dropzone.autoDiscover = false;

  var foto_upload = new Dropzone(".dropzone", {
    url: "<?php echo base_url('index.php/upload/proses_upload') ?>",
    maxFilesize: 10,
    method: "post",
    acceptedFiles: "image/*",
    paramName: "userfile",
    dictInvalidFileType: "Type file ini tidak dizinkan",
    addRemoveLinks: true,
  });


  //Event ketika Memulai mengupload
  foto_upload.on("sending", function(a, b, c) {
    a.token = Math.random();
    c.append("token_foto", a.token); //Menmpersiapkan token untuk masing masing foto
  });


  //Event ketika foto dihapus
  foto_upload.on("removedfile", function(a) {
    var token = a.token;
    $.ajax({
      type: "post",
      data: {
        token: token
      },
      url: "<?php echo base_url('upload/remove_foto') ?>",
      cache: false,
      dataType: 'json',
      success: function() {
        console.log("Foto terhapus");
      },
      error: function() {
        console.log("Error");

      }
    });
  });
</script>

<script>
  $(function() {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({
      gutterPixels: 3
    });
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>