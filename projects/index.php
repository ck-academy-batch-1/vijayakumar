<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | JSON - Dynamic Dependent Dropdown List using Jquery and Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <h2 align="center">JSON - Dynamic Dependent Dropdown List using Jquery and Ajax</h2><br /><br />
   <select name="country" id="District" class="form-control input-lg">
    <option value="">Select District</option>
   </select>
   <br />
   <select name="state" id="taluk" class="form-control input-lg">
    <option value="">Select taluk</option>
   </select>
   <br />
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 load_json_data('District');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('country_state_city.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   $.each(data, function(key, value){
    if(id == 'District')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#District', function(){
  var country_id = $(this).val();
  if(country_id != '')
  {
   load_json_data('taluk', country_id);
  }
  else
  {
   $('#state').html('<option value="">Select state</option>');
   $('#city').html('<option value="">Select city</option>');
  }
 });
 $(document).on('change', '#taluk', function(){
  var state_id = $(this).val();
  if(state_id != '')
  {
   load_json_data('city', state_id);
  }
  else
  {
   $('#city').html('<option value="">Select city</option>');
  }
 });
});
</script>
