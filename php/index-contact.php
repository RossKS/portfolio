<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?= include('thunderbird.php'); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Ross Kendall-Selwyn">
  <meta name="description" content="Contact Firstview Lettings Ltd for homes and apartments to rent in Nottingham and Derby. Register for property updates today!">
  <meta name="keywords" content="Homes to rent, flats to rent,rental properties, Homes to let, letting management, Landlord Services, Firstview Lettings Ltd,  Nottingham, Derby,">

  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Raleway:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="../stylesheets/keyframes.css">
  <link rel="stylesheet" href="../stylesheets/firstview-lettings.min.css">
  <title>Contact Firstview Lettings</title>
  <link rel="shortcut icon" type="image/png" href="../images/keys-logo.png">
</head>

<body>
  <div class="wrap">
    <header >
      <div><a href="../firstview-lettings-home.html"><img src="../images/main-logo.jpg" id="main-logo"></a></div>
      <nav class="nav flex-row flex-sm-row">
        <a id="home" class="flex-sm-fill text-sm-center nav-link active" href="../firstview-lettings-home.html">Home</a>
        <a id="properties" class="flex-sm-fill text-sm-center nav-link" href="../properties.html">Properties</a>

        <div class="btn-group" id="tenants">
          <a role="button" class="btn" href="../tenant-services.html">Tenants</a>
          <!-- <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../tenancy_application.html">Tenancy Applications</a>
            <a class="dropdown-item" href="../tenant-enquiries.html">Tenant Enquiries</a>
          </div> -->
        </div>
        <div class="btn-group" id="landlords">
          <a role="button" class="btn" href="../landlord-services.html">Landlords</a>
          <!-- <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../tenancy_application.html">Tenancy Applications</a>
            <a class="dropdown-item" href="../tenant-introduction-service.html">Tenant Introduction Service</a>
            <a class="dropdown-item" href="../inventory-preparation-services.html">Tenant Introduction & Inventory Preparation Service</a>
            <a class="dropdown-item" href="../letting-management.html">Letting Management Service</a>
          </div> -->
        </div>
        <div class="dropdown">
          <button class="btn dropdown-toggle hide" type="button" id="services-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu &#9776;
          </button>
          <div class="dropdown-menu" aria-labelledby="services-tab">
            <a class="dropdown-item" href="../firstview-lettings-home.html">Home</a>
            <a class="dropdown-item" href="../landlord-services.html">Landlord Services</a>
            <a class="dropdown-item" href="../tenant-services.html">Tenant Services</a>
            <a class="dropdown-item" href="../properties.html">Properties</a>
            <a class="dropdown-item" href="../about-firstview-lettings.html">About</a>
            <a class="dropdown-item current" href="#">Contact</a>
          </div>
        </div>
        <a id="about" class="flex-sm-fill text-sm-center nav-link" href="../about-firstview-lettings.html">About</a>
        <a id="contact" class="hide-sm flex-sm-fill text-sm-center nav-link current" href="#">Contact</a>
      </nav>
    </header>
    <div class="cookie-container">
      <p>
        We use cookies in this website for tracking and performance purposes. To find out more, read our
        <a href="legal.html">Legal Notice</a>. By continuing to use this site, you consent to our use of cookies.
      </p>

      <button class="cookie-btn">
        I accept
      </button>
    </div>
    <main>
      <h2 class="subp-title">How can we help today?</h2>
      <div class="cstandard">
        <container class="contact-flex">
          <div class="contact-form">
            <h3 class="contact-title">Contact form</h3>
            <form class="contact-form" action="<?= test_input($_SERVER['PHP_SELF']); ?>" method="post" id="form">
              <div class="success" value="<?= $success ?> "><?= $success ?></div>
              <span>All fields are required.</span>
              <p>
                <label for="name">Full Name</label><br>
                <input type="text" id="name" name="name" placeholder="Please enter your name" value="<?= $name ?>" tabindex="1" required autofocus pattern="^[a-zA-Z -]*$" title="Full name field must only contain letters a-z and hyphens">
                <span class="error"><?= $nameError ?></span>
              </p>
              <p>
                <label for="email">Email Address</label><br>
                <input type="email" id="email" name="email" placeholder="Please enter your email address (johnsmith@example.com)" value="<?= $address ?>" tabindex="2" required title="Please enter a valid email address">

                <span class="error"><br><?= $mailFromError?></span>
              </p>
              <p>
                <label for="phone">Phone Number</label><br>
                <input type="tel" id="phone" name="phone" placeholder="00000-000000" maxlength="13" minlength="11" value="<?= $phone ?>" tabindex="3" required title="Please enter a UK phone number">
                <span class="error"><?= $phoneError?></span>
              </p>
              <p>
                <label for="address">Postcode</label><br>
                <input type="text" name="address" id="address" placeholder="Please enter your postcode (XXXX XXX)" value="<?= $address ?>" tabindex="4" required pattern="^[a-zA-Z - 0-9]*$" title="Only letters numbers and whitespace allowed"><br>
                <span class="error"><?= $addressError?></span>
              </p>
              <p>
                <label for="class">I am a</label>
                <select type="text" name="class" id="class" tabindex="5" required>
                  <option value="Landlord">Landlord</option>
                  <option value="Tenant">Tenant</option>
                </select>
              <p>
                <label for="body">Comments</label><br>
                <textarea name="body" id="body" placeholder="Please enter your message" value="<?= $messageBody ?>" tabindex="6" required></textarea>
                <span class="error"><?= $messageBodyError ?></span>
              </p>
              <p>
                <input type="radio" id="morning" name="time" value="morning" tabindex="7">Morning
                <input type="radio" id="afternoon" name="time" value="afternoon" tabindex="8">Afternoon
                <input type="radio" id="anytime" name="time" value="anytime" tabindex="9">Anytime
              </p>
              <button type="submit" id="submit" name="submit" tabindex="10">Send Message</button>

            </form>
          </div>

          <div class="details cstandard">
            <h2 class="details-heading">Company Details</h2>
            <p>Phone:<br> 07834 342897 </p>
            <p>Email:<br> firstview.let@btinternet.com</p>
            <p>Registration No:<br> 5098005</p>
            <p>Registered Office:<br>
              367B Church Rd, Frampton Cotterell, Bristol, BS36 2AQ</p>
            <span><a href="../legal.html" tabindex="11">Legal Notices</a></span>
          </div>
        </container>
      </div>
    </main>
  </div>
  <footer class="main-footer">
    <div>
      <span>Enquiries</span><br>
      <a href="tel:07834 342897" tabindex="11">07834 342897</a><br>
      <a href="mailto:firstview.let@btinternet.com" tabindex="12">firstview.let@btinternet.com</a>
    </div>
    <span>
      Firstview Lettings Ltd.<br>
      Registration No: 5098005<br>
      Registered Office:<br>
      367B Church Rd, Frampton Cotterell,<br>
      Bristol, BS36 2AQ
    </span>
    <span id="copy">&copy Firstview Lettings Ltd 2004-<span id="year"></span></span>
    <div>
      <a href="../legal.html" id="legal" tabindex="13">Legal Notices</a><br>
      <a href="../sitemap.html">Sitemap</a>
    </div>

    <p class="webdev">Created by Firstview Lettings Ltd</p>
  </footer>
  <script>
    var d = new Date();
    document.getElementById("year").innerHTML = d.getFullYear();
  </script>
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../javascript/cookiescript.js"></script>
</body>

</html>
