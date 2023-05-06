<?php
  $dateTime = new DateTime();
  $dateTime->setDate(1998, 1, 28);
  $dateTime->setTime(10, 10, 10, 0);
  $dateTime->add(new DateInterval("P1Y"));
  $minusOneMonth = new DateInterval("P1M");
  $minusOneMonth->invert = true;
  $dateTime->add($minusOneMonth);
  var_dump($dateTime);

  $now = new DateTime();
  var_dump($now);
  $now->setTimeZone(new DateTimeZone("Asia/Jakarta"));
  var_dump($now);

  $string = $now->format("Y-m-d H:i:s");
  echo "Waktu Saat ini : $string" . PHP_EOL;
