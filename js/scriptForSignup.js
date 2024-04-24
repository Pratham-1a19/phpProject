document.addEventListener('DOMContentLoaded', function() {
    const profilePhotoInput = document.getElementById('profile-photo');
    const profilePreview = document.getElementById('profile-preview');
    const uploadLabel = document.getElementById('upload-label');
  
    profilePhotoInput.addEventListener('change', function() {
      const file = this.files[0];
  
      // Check if a file is selected
      if (file) {
        // Check if the file is an image
        if (!file.type.match('image.*')) {
          alert("Please select an image file (jpg, png, etc.)");
          return;  // Exit the function if not an image
        }
  
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.alt = "Profile Preview";
          img.style.borderRadius = '50%';
          img.style.width = '100px';
          img.style.height = '100px';
          profilePreview.innerHTML = '';
          profilePreview.appendChild(img);
          profilePreview.style.display = 'block'; // Show the preview container
          uploadLabel.textContent = 'Image uploaded'; // Set upload label
        };
        reader.readAsDataURL(file);
      } else {
        profilePreview.innerHTML = ''; // Clear the preview if no file selected
        profilePreview.style.display = 'none'; // Hide the preview container
        uploadLabel.textContent = ''; // Clear upload label
      }
    });
  });
  