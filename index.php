<?php
$token = "6289920267:AAE3cnq9rLbS5vqi9KfZ3JaFz6du8kj7mZA";    
$link1 = "https://api.telegram.org/bot".$token;

$updates = file_get_contents('php://input');
$updates = json_decode($updates, TRUE);

$messageID = $updates ['message']['from']['id'];
$name = $updates ['message']['from']['first_name'];
$username = $updates ['message']['from']['username'];
$UserID = $updates['message']['from']['id'];
$text = $updates['message']['text'];

if($text == "/start")
{
    sendbotmessage($messageID, 
"Hi Welcome $name to 🔴BFSTV: PUBG BOT");
    sendbotmessage($messageID, 
"What can i do?
/start
/register
/checkevents");
}
elseif ($text == "/register")
{
    sendbotmessage($messageID,
"Hi Commander this is the beginning of your battle :");
    sendbotmessage($messageID,"
🪖");
    sendbotmessage($messageID,
"Check the Upcoming Battleground📡
here Commander! ➡ /checkevents
");
    sendbotmessage($messageID,
"I can help you about your info Commander:)
🔫 /checkyourname
🔫 /checkyourusername
🔫 /checkyouruserID
🔫 /checksponsortoken");
}
elseif($text == "/checkevents" )
{
   sendbotmessage($messageID,
"🔴BFSTV: PUBG Upcoming Battlegrounds List 2023📡

🔫#1
Event Name: Solo Battle Royale S3
Prizepool: ".'$888.88'."
Sponsor: ".'$TON'."
Registered Teams: 8/88 Players
Date: Once the slots filled.

🔫#2
Event Name: TEAM Battle Royale S3
Prizepool: ".'$888.88'."
Sponsor: ".'$KLAY'."
Registered Teams: 8/32 TEAMS
Date: To be Announce.

🔫#3
Event Name: All Girls Battle Royale S3
Prizepool: ".'$888.88'."
Sponsor: ".'$SAND'."
Registered Teams: 8/32 TEAMS
Date: To be Announce.

🔫#4
Event Name: Solo Battle Royale S4
Prizepool: ".'$888.88'."
Sponsor: ".'$ALGO'."
Registered Teams: 8/32 TEAMS
Date: To be Announce.

   
");
}
function sendbotmessage($messageID, $text)
{
$url = $GLOBALS[link1].'/sendMessage?chat_id='.$messageID.'&text='.urlencode($text);
    file_get_contents($url);
}
?>
