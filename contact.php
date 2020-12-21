<?php
include "include/header.php";


?>
    <div class="container">
    <div class="interestInfo">
        <h3 style="text-align: center;padding-top: 20px;">Contact Form</h3>
        <hr>
        <div class="contactForm">
          <form action="/action_page.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">
        
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email..">
        
            <label for="comments">Comments</label>
            <textarea name="comments" placeholder="Write your comments..."></textarea>
          
            <input type="submit" value="Submit">
          </form>
        </div>
    </div>

</div>
<?php
include "include/footer.php";


?>