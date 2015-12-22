<?php

/**
* Edit the value of $mytlds to include all of the TLDs you want the script to recognize, separated
* by pipe characters (|). You can also use other regex patterns if you need to. You can also
* override any value written here by appending "&tlds=[your value here]" to the URL of this script
* (N.B. pipe characters should be encoded as %7c).
*/
$mytlds = "local|dev";

/**
* Change the value of $mysearchengine to your preferred search engine's URL, with %s in the place
* of the search query (the default value is the URL for Google.
*/
$mysearchengine = "https://www.google.com/search?q=%s";







if (isset($_GET['tlds'])) {
    $mytlds = $_GET['tlds'];
}

if (!isset($_GET['q'])) {
    die("<h1>No query received!</h1><p>Append <kbd>?q=[your query here]</kbd> to this page's URL.</p>");
}
$query = $_GET['q'];

$urlpattern = '/^(https?:\/\/)?([\da-zA-Z\.-]+)(\.[\da-zA-Z\.]*)*\.(' . $mytlds . ')(:[0-9]{1,5})?([\/\w \.-]*)*\/?$/';

$res = preg_match($urlpattern, $query);

if ($res === 1) {
    
    $targeturl = $query;
    
    if (preg_match('/^https?:\/\//', $query) === 0) {
        $targeturl = "http://" . $query;
    }
    
} else if ($res === 0) {
    $targeturl = "";
    $engineexp = explode("%s", $mysearchengine);
    for ($i = 0; $i < count($engineexp)-1; $i++) {
        $targeturl .= $engineexp[$i] . rawurlencode($query);
    }
    $targeturl .= $engineexp[count($engineexp)-1];
    
} else {
    die("The local DNS workaround script has encountered an error.");
}

header("Location: $targeturl");
die($targeturl);

?>