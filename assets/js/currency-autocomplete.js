$(function(){
  var countries = [
    { value: 'Mumbai', data: 'Mumbai' },
    { value: 'Chennai', data: 'Chennai' },
    { value: 'Kolkata', data: 'Kolkata' },
    { value: 'Jaipur', data: 'Jaipur' },
    { value: 'Agra', data: 'Agra' },
    { value: 'Delhi', data: 'Delhi' },
    { value: 'Kanpur', data: 'Kanpur' },
    { value: 'Lucknow', data: 'Lucknow' },
    { value: 'Rajkot', data: 'Rajkot' },
    { value: 'Chandigarh', data: 'Chandigarh' },
    { value: 'Kota', data: 'Kota' },
    { value: 'Bhopal', data: 'Bhopal' },
    { value: 'Howrah', data: 'Howrah' },
    { value: 'Alagappa', data: 'Alagappa' },
  ];
  
  // setup autocomplete function pulling from countries[] array
  $('#autocomplete').autocomplete({
    lookup: countries,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
      $('#outputcontent').html(thehtml);
    }
  });
  

});