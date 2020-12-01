<?php
// mysql hostname
$db_host = "localhost";

// database name
$db_name = "larrcom_reptulum";

// database user name
$db_user = "larrcom_reptulum";

// database password
$db_pass = "ASDfghjkl1@9";

// admin username
$admin_user = "larrcom";

// admin password
$admin_pass = "ASDfghjkl1@9";


// StartupGenome.com integration (optional)
//
// We recommend integrating your map with the StartupGenome project.
// It's easy to setup, it will allow people to keep their profiles update
// over time, and it can help you show the world how your startup community
// is growing. StartupGenome also has a great interface for curating your
// map data.
//
// To use this feature, you need to be a curator for your city.
// If you're not yet a curator, learn more here:
// http://www.startupgenome.com/curators/
//
// If you are already a curator, find your API key on your
// Startup Genome profile and enter it below. You can manage the markers
// on your map from the Startup Genome website, rather than using the
// built-in admin panel.
//
// You can turn on Startup Genome integration by changing
// $sg_enabled to "true".
$sg_enabled = false;

  // Put your SG API code here
  $sg_auth_code = '';

  // Choose your map's location here. If you're not sure
  // about this, check the URL on the Startup Genome website.
  $sg_location = '';
  // Examples:
  // $sg_location = '/city/los-angeles-ca';
  // $sg_location = '/state/ca-us';
  // $sg_location = '/country/chile';

  // We only check for new data from SG when people visit your map,
  // or when you run "startupgenome_get.php?override=true" manually.
  // You can limit how often this happens to avoid slow page loads.
  // Set the frequency below (in seconds).
  $sg_frequency = "3600";



// EventBrite.com integration (optional)
//
// Show events on the map? If set to "true", an event
// category will appear in the marker list, and you can
// run events_get.php in your browser (or a chron) to populate
// it with data from eventbrite.
$show_events = true;

    // put your eventbrite api key here
    $eb_app_key = "";

    // search eventbrite for these keywords
    // use "+" for spaces
    // e.g. 'startup', 'startups', 'demo+day'
    $eb_keywords = join("%20OR%20", array('startup', 'startups'));

    // specify city to search in and around
    // example: Santa+Monica
    $eb_city = "Santa+Monica";

    // specify search radius (in miles)
    $eb_within_radius = 50;


// set timezone
// date_default_timezone_set("America/Los_Angeles");

// HTML that goes just before </head>
$head_html = "";

// The <title></title> tag
$title_tag = "Rep.Tulum - map of Tulum Digital Nomad community";

// google maps api
$google_maps_api = "AIzaSyBKvUjE0NefWDmk8t2yJ9S1VnkG57kUfVE";

// map zoom
$map_zoom = '14';

// The latitude & longitude to center the initial map
$lat_lng = "20.207538,-87.4639957";

// Domain to use for various links
$domain = "http://reptulum.dhowardlakers.com/";

// Twitter username and default share text
$twitter = array(
  "share_text" => "Let's put Los Angeles startups on the map:",
  "username" => "eloquentgrammar"
);

// Short blurb about this site (visible to visitors)
$blurb = "This map was made to connect and promote the Los Angeles tech startup community.  Let's put LA on the map!";

// attribution (must leave link intact, per our license)
$attribution = "
  <span>
    Based on <a href='http://www.represent.la' target='_blank'>RepresentLA</a>
  </span>
";

// add startup genome to attribution if integration enabled
if($sg_enabled) {
  $attribution .= "
    <br /><br />
    Data from <a target='_blank' href='http://www.startupgenome.com'>StartupGenome</a>
  ";
}

// functions
function mysql_query($query) {
    global $conn;
    return mysqli_query($conn, $query);
}
function mysql_num_rows($result) {
    return mysqli_num_rows($result);
}
function mysql_fetch_assoc($result) {
    return mysqli_fetch_assoc($result);
}
function mysql_real_escape_string($string) {
    global $conn;
    return mysqli_real_escape_string($conn, $string);
}
function mysql_error() {
    global $conn;
    return mysqli_error($conn);
}