<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel">
	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="modalInfoLabel">Modal Title</h4>
	      </div>
	      <div class="modal-body">
	        Modal Body
	      </div>
	      <div class="modal-footer">
	        <button class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
</div>

@push('scripts')

<script type="text/javascript">
	$('#infowindow-content').click(function() {
	  $('#modalInfo').modal({backdrop: 'static'});
	});
</script>

@endpush