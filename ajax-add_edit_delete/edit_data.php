<div class="form-group">
 <label>name</label>
 <input type="text" name="name" id="name" class="form-control" />
</div>
<div class="form-group">
 <label>idf</label>
 <textarea name="idf" id="idf" class="form-control"></textarea>
</div>
<script>
$(document).ready(function (){
	var name = localStorage.getitem('name');
	
	$('#name').val(name);
	

});
</script>
