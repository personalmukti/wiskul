<?php if ($this->session->has_userdata('single-error')) { ?>
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="icon fas fa-ban"></i><?= $this->session->flashdata('single-error'); ?>
</div>
<?php } ?>