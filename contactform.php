<?php

if (isset ($POST ['submit'])){
  $name = $POST['name'];
  $address = $POST['address'];
  $mailFrom = $POST['mail'];
  $birthdate =$POST['birthdate'];

  $mailTo = "example@domain.com"
  $headers = "From: ".$mailFrom;
  $txt = "A new member has joined SBP ".$name. ".\n\n".$address;

  mail($mailTo, $birthdate, $txt, $headers);
  header("Location: wordeenlid.html?mailsend")
}

/*om de berichten daadwerkelijk naar een e-mail te sturen, heb ik ook server-language nodig. helaas weet ik niet hoe en kan ik ook geen domeinen kopen haha. maar ik begreep alles wat ik in dit project heb gebruikt en het was erg leuk om met php te werken. ik wou dat ik het had kunnen zien werken.*/