<section class="contact-section">

<div class="box">
 <div class="box1">
 <div class="paralle-image-second">
  <div class="parallex-content-second">
  <form id="contactForm">

  <div>
    <h5>Get In Touch</h5>
  </div><br>
  <div class="mb-3">
    <input class="form-control" id="name" type="text" placeholder="Name &amp; Surname" data-sb-validations="required">
    <div class="invalid-feedback" data-sb-feedback="name:required">Name &amp; Surname is required.</div>
  </div>
  
  <div class="mb-3">
    <input class="form-control" id="name" type="text" placeholder="Contact Number" data-sb-validations="required">
    <div class="invalid-feedback" data-sb-feedback="contact:required">Contact Number is required.</div>
  </div>
  
  <div class="mb-3">
    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email">
    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
  </div>
  
  <div class="mb-3">
    <textarea class="form-control" id="message" type="text" placeholder="Enquiry" style="height: 10rem;" data-sb-validations="required"></textarea>
    <div class="invalid-feedback" data-sb-feedback="message:required">Enquiry is required.</div>
  </div>
  
  <div class="d-none" id="submitSuccessMessage">
    <div class="text-center mb-3">Form submission successful!</div>
  </div>
  
  <div class="d-none" id="submitErrorMessage">
    <div class="text-center text-danger mb-3">Error sending message!</div>
  </div>
  
  <div class="d-grid">
    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
  </div>
  
  </form>
  </div>
</div>
</div>
</div>
</section>