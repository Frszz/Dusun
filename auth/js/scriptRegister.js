function tampilkanGambar(event) {
  var input = event.target;
  var reader = new FileReader();
  reader.onload = function() {
      var output = document.getElementById('preview');
      output.src = reader.result;
  };
  reader.readAsDataURL(input.files[0]);
}