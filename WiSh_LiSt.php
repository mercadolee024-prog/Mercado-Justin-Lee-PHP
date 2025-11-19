<?php
// Song Title, Artist, Mood
$title = "Wi\$h Li\$t";  
$artist = "Taylor Swift"; 
$mood = "romantic"; 

// Numeric variables (for operators and array usage)
$verseCount = 3; 
$repeatChorus = "2"; 

// Word arrays for nouns, verbs, and adjectives (these are from the lyrics)
$nouns = ["life", "blades", "lights", "kids", "block", "driveway", "hoop", "friend", "stars", "wish"];
$verbs = ["want", "have", "dream", "tell", "settle", "bring", "think", "caught"];
$adjectives = ["bright", "good", "complex", "critical", "hot", "amazing"];

// Song sections (verses, chorus, etc.)
$verse1 = [
    "They dream of yachts and high life",
    "Under chopper blades above",
    "They chase bright lights and fancy shades",
    "And stacks of cash with youthful faces",
    "They want it all",
    "They want complex characters",
    "They aim for critical praise",
    "An award waiting on the floor",
    "They want it all",
    "They should get what they wish",
    "They deserve it",
    "Hope it comes their way",
];

$chorus = [
    "I just want you",
    "Maybe a couple of kids",
    "Whole block looking like you",
    "We tell the world to leave us alone… and they do",
    "Wow",
    "Dreaming about a driveway",
    "With a basketball hoop",
    "Boss up, settle down",
    "Got a wish list",
];

$verse2 = [
    "They long for freedom",
    "Living off the grid",
    "Three dogs they call their own",
    "Surfing waves without hypocrites",
    "They want it all",
    "A deal with a big team",
    "Spring break with clubs on fire",
    "Videos taken down online",
    "They want it all",
    "They should get what they wish",
    "They deserve it",
    "Hope it comes their way",
];

$bridge = [
    "Made wishes on every star",
    "Hoping for a best friend",
    "Who feels just right",
    "Sometimes wrong, sometimes caught off guard",
    "I hope I get what I want",
    "Cause I know what I want",
];

$finalChorus = [
    "(I just, I just) I just want you, huh (Baby)",
    "Have a couple kids, got the whole block looking like (Got 'em lookin' like you) you",
    "We tell the world to leave us the fuck alone, and they do, wow",
    "Got me dreaming 'bout a driveway with a basketball hoop",
    "Boss up, settle down, got a wish (Wish) list (List)",
    "I just want you (Ooh)",
    "And we could have a couple kids, got the whole block looking like (You) you",
    "We tell the world to leave us the fuck alone, and they do (Yeah), wow",
    "And now you got me dreaming 'bout a driveway with a basketball hoop",
    "Boss up, settle down, got a wish (Wish) list (List)",
    "I just want you",
];

$song = [
    "Verse 1" => $verse1,
    "Chorus" => $chorus,
    "Verse 2" => $verse2,
    "Chorus 2" => $chorus, 
    "Bridge" => $bridge,
    "Final Chorus" => $finalChorus
];

$totalChorus = $repeatChorus + 1; 
$doubleVerses = "4" * 2; 

$header = "<h1>" . $title . "</h1>";
$header .= "<p>Artist: " . $artist . " — Mood: " . $mood . "</p>";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<style>
body {
    font-family: 'Arial', sans-serif;
    max-width: 700px;
    margin: 30px auto;
    line-height: 1.6;
    background: #b8f1e0; 
    color: #333;
}

h1 {
    text-align: center;
    color: #ff7f32; 
}

h2 {
    margin-top: 30px;
    color: #ff7f32; 
    border-bottom: 2px solid #ccc;
    padding-bottom: 5px;
}

.line {
    margin: 5px 0;
    padding-left: 10px;
}

.info {
    padding: 10px;
    background: #fce8d9; 
    border-left: 4px solid #ff7f32; 
    margin-bottom: 20px;
    color: #ff7f32; 
    font-weight: bold;
}

h2:nth-child(odd) {
    color: #ff7f32; 
}

h2 {
    text-transform: uppercase;
}
</style>
</head>
<body>

<?php echo $header; ?>


<h2>Verse 1</h2>
<?php echo $verse1[0]; ?><br>
<?php echo $verse1[1]; ?><br>
<?php echo $verse1[2]; ?><br>
<?php echo $verse1[3]; ?><br>
<?php echo $verse1[4]; ?><br>
<?php echo $verse1[5]; ?><br>
<?php echo $verse1[6]; ?><br>
<?php echo $verse1[7]; ?><br>
<?php echo $verse1[8]; ?><br>
<?php echo $verse1[9]; ?><br>
<?php echo $verse1[10]; ?><br>
<?php echo $verse1[11]; ?><br>

<h2>Chorus</h2>
<?php echo $chorus[0]; ?><br>
<?php echo $chorus[1]; ?><br>
<?php echo $chorus[2]; ?><br>
<?php echo $chorus[3]; ?><br>
<?php echo $chorus[4]; ?><br>
<?php echo $chorus[5]; ?><br>
<?php echo $chorus[6]; ?><br>
<?php echo $chorus[7]; ?><br>
<?php echo $chorus[8]; ?><br>

<h2>Verse 2</h2>
<?php echo $verse2[0]; ?><br>
<?php echo $verse2[1]; ?><br>
<?php echo $verse2[2]; ?><br>
<?php echo $verse2[3]; ?><br>
<?php echo $verse2[4]; ?><br>
<?php echo $verse2[5]; ?><br>
<?php echo $verse2[6]; ?><br>
<?php echo $verse2[7]; ?><br>
<?php echo $verse2[8]; ?><br>
<?php echo $verse2[9]; ?><br>
<?php echo $verse2[10]; ?><br>
<?php echo $verse2[11]; ?><br>

<h2>Chorus 2</h2>
<?php echo $chorus[0]; ?><br>
<?php echo $chorus[1]; ?><br>
<?php echo $chorus[2]; ?><br>
<?php echo $chorus[3]; ?><br>
<?php echo $chorus[4]; ?><br>
<?php echo $chorus[5]; ?><br>
<?php echo $chorus[6]; ?><br>
<?php echo $chorus[7]; ?><br>
<?php echo $chorus[8]; ?><br>

<h2>Bridge</h2>
<?php echo $bridge[0]; ?><br>
<?php echo $bridge[1]; ?><br>
<?php echo $bridge[2]; ?><br>
<?php echo $bridge[3]; ?><br>
<?php echo $bridge[4]; ?><br>
<?php echo $bridge[5]; ?><br>

<h2>Final Chorus</h2>
<?php echo $finalChorus[0]; ?><br>
<?php echo $finalChorus[1]; ?><br>
<?php echo $finalChorus[2]; ?><br>
<?php echo $finalChorus[3]; ?><br>
<?php echo $finalChorus[4]; ?><br>
<?php echo $finalChorus[5]; ?><br>
<?php echo $finalChorus[6]; ?><br>
<?php echo $finalChorus[7]; ?><br>
<?php echo $finalChorus[8]; ?><br>
<?php echo $finalChorus[9]; ?><br>
<?php echo $finalChorus[10]; ?><br>

</body>
</html>
