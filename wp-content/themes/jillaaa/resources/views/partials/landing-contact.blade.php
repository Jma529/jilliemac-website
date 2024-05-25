
<?php   

// Variables
$address = get_post_meta( get_the_ID(), 'contact_address', true );
$email = get_post_meta( get_the_ID(), 'contact_email', true );
$phone = get_post_meta( get_the_ID(), 'contact_phone', true );


?>
<section class="section-contact">
  <h2>Contact us</h2>
<div class="grid">
  
  <div class="col-1 flex-col">
    <h3>Visit Us</h3>
    <p> <?php echo $address; ?>
  <!-- Embedded google map -->
  <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/view?zoom=16&center=-27.4858%2C153.0381&key=AIzaSyBy9ZXYZqtFl5JhbDowG_wgtWMQXJy4ZvE"></iframe>

  </div>
  <div class="col-2 flex-col">
    <h3>Get in touch</h3>
    <div>
      <p><?php echo $email; ?></p>
      <p><?php echo $phone; ?></p>
    </div>
  </div>

</div>
</section>


<!-- Contact section -->

