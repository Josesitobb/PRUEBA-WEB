<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./formulario.css">
    <title>Document</title>
</head>
<body>
    <div class='signup-container'>
        <div class='left-container'>
          <h1>
            <i class='fas fa-paw'></i>
            PUPASSURE
          </h1>
          <div class='puppy'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png'>
          </div>
        </div>
        <div class='right-container'>
          <header>
            <h1>Yay, puppies! Ensure your pup gets the best care!</h1>
            <div class='set'>
              <div class='pets-name'>
                <label for='pets-name'>Name</label>
                <input id='pets-name' placeholder="Pet's name" type='text'>
              </div>
              <div class='pets-photo'>
                <button id='pets-upload'>
                  <i class='fas fa-camera-retro'></i>
                </button>
                <label for='pets-upload'>Upload a photo</label>
              </div>
            </div>
            <div class='set'>
              <div class='pets-breed'>
                <label for='pets-breed'>Breed</label>
                <input id='pets-breed' placeholder="Pet's breed" type='text'>
              </div>
              <div class='pets-birthday'>
                <label for='pets-birthday'>Birthday</label>
                <input id='pets-birthday' placeholder='MM/DD/YYYY' type='text'>
              </div>
            </div>
            <div class='set'>
              <div class='pets-gender'>
                <label for='pet-gender-female'>Gender</label>
                <div class='radio-container'>
                  <input checked='' id='pet-gender-female' name='pet-gender' type='radio' value='female'>
                  <label for='pet-gender-female'>Female</label>
                  <input id='pet-gender-male' name='pet-gender' type='radio' value='male'>
                  <label for='pet-gender-male'>Male</label>
                </div>
              </div>
              <div class='pets-spayed-neutered'>
                <label for='pet-spayed'>Spayed or Neutered</label>
                <div class='radio-container'>
                  <input checked='' id='pet-spayed' name='spayed-neutered' type='radio' value='spayed'>
                  <label for='pet-spayed'>Spayed</label>
                  <input id='pet-neutered' name='spayed-neutered' type='radio' value='neutered'>
                  <label for='pet-neutered'>Neutered</label>
                </div>
              </div>
            </div>
            <div class='pets-weight'>
              <label for='pet-weight-0-25'>Weight</label>
              <div class='radio-container'>
                <input checked='' id='pet-weight-0-25' name='pet-weight' type='radio' value='0-25'>
                <label for='pet-weight-0-25'>0-25 lbs</label>
                <input id='pet-weight-25-50' name='pet-weight' type='radio' value='25-50'>
                <label for='pet-weight-25-50'>25-50 lbs</label>
                <input id='pet-weight-50-100' name='pet-weight' type='radio' value='50-100'>
                <label for='pet-weight-50-100'>50-100 lbs</label>
                <input id='pet-weight-100-plus' name='pet-weight' type='radio' value='100+'>
                <label for='pet-weight-100-plus'>100+ lbs</label>
              </div>
            </div>
          </header>
          <footer>
            <div class='set'>
              <button id='back'>Back</button>
              <button id='next'>Next</button>
            </div>
          </footer>
        </div>
      </div>
      
    
</body>
</html>