<!DOCTYPE html>
<html>
<head>
<style>
.day {
  padding: 20px;
  background-color: lightgray;
  border-radius: 10px;
  text-align: center;
  cursor: pointer;
}

.selected {
  background-color: green;
  box-shadow: 0px 0px 10px white;
  outline: 1px solid white;
}
</style>
<script>
function selectDay(event) {
  var days = document.querySelectorAll('.day');
  for (var i = 0; i < days.length; i++) {
    days[i].classList.remove('selected');
  }

  event.target.classList.add('selected');

  document.querySelector('#selected-day').innerHTML = "Selected day is: " + event.target.innerHTML;
}
</script>
</head>
<body>

<?php
  $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
  $today = date("l");

  foreach ($days as $day) {
    if ($day == $today) {
      echo "<div class='day selected' onclick='selectDay(event)'>" . $day . "</div>";
    } else {
      echo "<div class='day' onclick='selectDay(event)'>" . $day . "</div>";
    }
  }
?>

<br><br>
<div id="selected-day"></div>

</body>
</html>