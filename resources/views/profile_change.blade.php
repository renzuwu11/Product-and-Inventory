<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        // Set the profile picture source
        $('#profile-picture').attr('src', e.target.result);
        $('#profile-picture-dropdown').attr('src', e.target.result);

        // Store the image URL in localStorage
        localStorage.setItem('profilePicture', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  // Retrieve the stored image URL on page load
  $(document).ready(function () {
    var storedProfilePicture = localStorage.getItem('profilePicture');
    if (storedProfilePicture) {
      $('#profile-picture').attr('src', storedProfilePicture);
      $('#profile-picture-dropdown').attr('src', storedProfilePicture);
    }
  });

</script>