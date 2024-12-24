<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $squadname = htmlspecialchars($_POST['squad-name']);
    $teammember1 = htmlspecialchars($_POST['team-member1']);
    $teammember2 = htmlspecialchars($_POST['team-member2']);
    $teammember3 = htmlspecialchars($_POST['team-member3']);
    $teammember4 = htmlspecialchars($_POST['team-member4']);
    $captainname = htmlspecialchars($_POST['captain-name']);
    $captaincontact = htmlspecialchars($_POST['captain-contact'])
    
    $message = htmlspecialchars($_POST['message']);

    // Save data to a file
    $file = 'data.txt';
    $data = "Squad-Name: $squadname, Team-member1: $teammember1, Team-member2: $teammember2, Team-member3: $teammember3, team-member4: $teammember4, Captain-contact: $captaincontact";
    file_put_contents($file, $data, FILE_APPEND);

    echo "Thank you, $captainname! Your data has been saved.";
} else {
    echo "Invalid request.";
}
?>
