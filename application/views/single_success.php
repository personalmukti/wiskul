<?php if ($this->session->has_userdata('single-success')) { ?>
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="icon fas fa-check"></i><?= $this->session->flashdata('single-success'); ?>
</div>
<?php } ?>