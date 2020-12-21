<?php

include "include/header.php";
?>
    <div class="container">
    <div class="interestInfo">
        <h3 style="text-align: center;padding-top: 20px;">Bio Data</h3>
        <hr>
        <p>Name             : Bayazid Talukder</p>
        <p> Father's Name   : MD A Satter</p>
        <p>Mother's Name    : Rokeya Begum</p>
        <p>Present Address  : Khilkhet, Dhaka-1229</p>
        <p>Permanent Address: Sarail, Brahmanbaria</p>
        <p>Hobby            : Travelling & Writing </p>
        <hr>
        
        <h4>Educational Qualification</h4>
        <hr>
        <?php
        $education = array(
          array("SSC","Kamaura SSB High School", "2013", "4.69"),
          array("HSC", "Milestone College", "2015", "2.00"),
          array("BSc", "North South University", "2021", "3.99")
        );


?>
        <table class="educationalQualification">
          <tr>
            <th>Degree</th>
            <th>Institute</th>
            <th>Passing Year</th>
            <th>GPA</th>
          </tr>
          <?php
          for($r=0;$r<3;$r++){
          ?>
          <tr>
          <?php
          for($c=0;$c<4;$c++){

          ?>
            <td><?php echo $education[$r][$c]; ?></td>
           <?php
          }

           ?>
          </tr>
          <?php
          }

           ?>
        </table>
        <p>Email: bayazid.talukder@northsouth.edu</p>
    </div>

</div>
<?php

include "include/footer.php";
?>