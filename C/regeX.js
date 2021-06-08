function validate()
{
  var name = document.getElementById('name').value;
  var nameRGEX = /^[a-zA-Z0-9]+$/;
  var nameResult = nameRGEX.test(name);
  alert("name : "+nameResult );
}
