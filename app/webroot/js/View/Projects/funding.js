$(document).ready(function(){
	$('#fbody').change(function(){ alert('FD');
	
	
	    if($(this).val().length != 0) {
	      $.getJSON('/projects/getprograms',
	                  {fbody_id: $(this).val()},
	                  function(programs) {
	                    if(programs !== null) {
	                      populateCoBodiesandSubprograms(programs);
	                    }
	        });
	      }
	    });
	});

	function populateCoBodiesandSubprograms(programs) {
	  var options = '';

	  $.each(programs, function(index, programs) {
	    options += '<option value=&quot;' + index + '&quot;>' + programs + '</option>';
	  });
	  $('#principalProgram').html(options);
	  

	}