<script>
	$(function () {
		$("#table_registered").DataTable({
			"responsive": true, 
			"lengthChange": true, 
			"autoWidth": false,
			"searching": true,
			"ordering": false,
			"info": true,
			"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			//"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
    
  	});
</script>
