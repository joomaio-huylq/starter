<div class="container">
	<h2 class="text-center mt-4 mb-2">Solutions</h2>
	<div class="row justify-content-center">
		<div class="col-lg-10 col-12">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="solutions-tab" data-bs-toggle="tab" data-bs-target="#solutions" type="button" role="tab" aria-controls="solutions" aria-selected="true">Solutions</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="themes-tab" data-bs-toggle="tab" data-bs-target="#themes" type="button" role="tab" aria-controls="themes" aria-selected="false">Themes</button>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="solutions" role="tabpanel" aria-labelledby="solutions-tab">
					<div class="mb-4">
						<?php echo $this->renderWidget('core::notification'); ?>
					</div>
					<?php echo $this->render('starter.list.filter', []); ?>

					<div class="solution-list row">
						<?php while ($this->list->hasRow()) echo $this->render('starter.list.row'); ?>
					</div>
				</div>
				<div class="tab-pane fade" id="themes" role="tabpanel" aria-labelledby="themes-tab"></div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title" id="staticBackdropLabel"></h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div id="modal-text"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
	</div>
</div>
<form class="hidden" method="POST"  id="form_install">
    <input type="hidden" value="<?php echo $this->token ?>" name="token">
</form>
<form class="hidden" method="POST"  id="form_uninstall">
    <input type="hidden" value="<?php echo $this->token ?>" name="token">
</form>
<?php echo $this->render('starter.list.javascript', []); ?>
