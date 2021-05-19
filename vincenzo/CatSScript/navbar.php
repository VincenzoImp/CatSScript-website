<?php
session_start(); 
if (isset($_SESSION['username'])) {
?>
  <script>var navbarType = 'outsession_navbar.html';</script>
<?php
}
else {
?>
 <script>var navbarType = 'outsession_navbar.html';</script>
<?php
}
?>