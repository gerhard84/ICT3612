<?php $pageTitle = "Task 8";?>

<?php include './includes/header.php';?>

<body>
  <div class="container">
    <!--////////////////////////////// Task 8 (a)  //////////////////////////-->
    <div class="row">
      <div class="col-md-9 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Task 8 (a) -  Data Model - Describe the Entities</h3>
          </div>
          <div class="panel-body">
            <p>
              <strong>Definition: </strong></br>
              An Entity is a person, place, thing or concept about which data can be collected.
            </p>
            <p>
              <strong>Entities in the Data Model: </strong></br>
              <ul>
                <li><strong>Categories: </strong>This entity describes the categories that is available in the video store.</li>
                <li><strong>Certification: </strong>This entity describes the certification of a film that is in the video store.</li>
                <li><strong>Film: </strong>This entity describes the films that is available in the video store.</li>
                <li><strong>Film Copy: </strong>This entity describes the amount copys of films that is available in the video store.</li>
                <li><strong>Rental Code: </strong>This entity describes the rental code of the film that was rented by a member of the video store.</li>
                <li><strong>Members: </strong>This entity describes the members that can rent films at the video store.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--//////////////////////////////Task 8 ( b ) //////////////////////////-->
    <div class="row">
      <div class="col-md-9 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Task 8 (b) -  Data Model - Describe the entities relations to PK and FK</h3>
          </div>
          <div class="panel-body">
            <p>
              <strong>Relationships between Entities</strong>
            </p>
            <p>
              <ul>
                <li>A <strong>Catagory</strong> can have many <strong>films</strong>.</li>
                <li>Each <strong>Film</strong> can only have one <strong>Catagory</strong>.</li>
                <li>A <strong>Certification</strong> can have many <strong>Films</strong>.</li>
                <li>Each <strong>Film</strong> can only have one <strong>Certifications</strong>.</li>
                <li>A <strong>Film</strong> can have many <strong>Copies</strong>.</li>
                <li>Each <strong>Copy</strong> can only have one <strong>Film</strong>.</li>
                <li>A <strong>Copy</strong> can have many <strong>Rental Codes</strong>.</li>
                <li>Each <strong>Rental Code</strong> can only have one <strong>Copy</strong>.</li>
                <li>A <strong>Member</strong> can have many <strong>Rental Codes</strong>.</li>
                <li>Each <strong>Rental Code</strong> can only have one <strong>Member</strong>.</li>
            </ul>


            <p>
              <strong>How are the entities related in terms of primary and foreign keys?</strong>
            </p>
            <p>
              <ul>
                <li>The <strong>tblFilmCatagory </strong>table has a PK named <strong>ingCatagoryID</strong> that is a FK in the <strong>tblFilmTitles</strong> table.</li>
                <li>The <strong>tblFilmCertification </strong>table has a PK named <strong>ingCertificationID</strong> that is a FK in the <strong>tblFilmTitles</strong> table.</li>
                <li>The <strong>tblFilmTitles </strong>table has a PK named <strong>ingFilmID</strong> that is a FK in the <strong>tblFilmCopies</strong> table and two FK named <strong>ingFilmCategoryID</strong> and <strong>ingCertificationID</strong>.</li>
                <li>The <strong>tblFilmCopies </strong>table has a PK named <strong>ingFilmCopyID</strong> that is a FK in the <strong>tblRentals</strong> table and two FK named <strong>ingFilmID</strong> and <strong>ingCopyID</strong>.</li>
                <li>The <strong>tblRentals </strong>table has a PK named <strong>strRentalCode</strong> and a FK named <strong>ingMemberID</strong>.</li>
                <li>The <strong>tblMembers </strong>table has a PK named <strong>ingMemberID</strong> that is a FK in the <strong>tblRentals</strong> table.</li>
            </ul>







          </div>
        </div>
      </div>
    </div>


    <iframe src="txt/task8.txt" height="400" scrolling="yes" width="1200px">
      <p>Your browser does not support iframes.</p></iframe>

    </div>
  </body>
  </html>
