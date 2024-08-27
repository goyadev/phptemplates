<?php ?>

<!DOCTYPE html>
<html lang="en">
<title>PHP Template Assignment 2 - <?php print $pageTitle; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">

<body>
  <section>
    <h1>hound - <?php print $pageTitle; ?></h1>
    <?php include "./nav.php"; ?>
  </section>
  <section>
    <?php
    if ($sectionOneHeader !== '') {
      print "<h2>$sectionOneHeader</h2>";
      print "<div>$sectionOneContent</div>";
    }

    if ($sectionTwoHeader !== '') {
      print "<h2>$sectionTwoHeader</h2>";
      print "<p>$sectionTwoContent</p>";
    }
    ?>
  </section>
  <?php include "./footer.php"; ?>
</body>

</html>