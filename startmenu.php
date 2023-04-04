<?php

include("includes/login_tracker.php");

include("includes/header.php"); ?>

<p>Welcome, <?php echo $_SESSION["username"]; ?>!</p>

<h3>Har du tidigare erfarenhet av utveckling med PHP?</h3>
    - Nej! Det här var min första gång
<h3>Hur har du valt att strukturera upp dina filer och kataloger? </h3>
    - Jag har valt att dela upp mina filer på ett vis som minskar upprepning av kod
<h3>Har du följt guiden, eller skapat på egen hand? </h3>
    - Först följde jag guiden, men jag fann den att vara väldigt förvirrande, därav valde
    jag att göra allt på egen hand. I guiden fanns det många grammatiska fel och udda formulering.
    Det var frustrerande att utgå ifrån.
<h3> Vilken utvecklingsmiljö har du använt för uppgiften (Editor, webbserver etcetera)?</h3>
    -Visual Studio Code och XAMMP
<h3>Har något varit svårt med denna uppgift?</h3>
    - Uppgiften i sig är inte svår, det är hjälpmedlet som känns bristande.
    Efter lab 2 var denna uppgift inte något svårt alls, men jag hade
    egentligen föredragit att göra Lab 3 före lab 2, då det känns mycket lämpligare att
    lära sig hur man gör server calls innan man ska arbeta med ett API när man har aldrig gjort
    det förr. Vidare hade det varit bra om vi hade föreläsningar som gick genom vad Promise Objects är,
    då det var något som jag fastnade på i lab 2 och kunde absolut inte vara redo för om jag utgick bara
    från kursmaterial.

<?php
include("includes/footer.php");