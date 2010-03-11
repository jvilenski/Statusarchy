<?php
//checks for existance of xml "database file"
if(file_exists("database.xml")){
   $db = file_get_contents('database.xml');
    }
else
    {
    die("<h1>Intial Install</h1><p><a href='#'>Click to Start</a>");
    }


    echo XMLparser(status, 'id', $x, $db);
    
/*function twitterCapture() {
        // Set your username and password here
        $user = '';
        $password = '';

        $ch = curl_init("https://twitter.com/statuses/user_timeline.xml");
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch,CURLOPT_TIMEOUT, 30);
        curl_setopt($ch,CURLOPT_USERPWD,$user . ":" . $password);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $result=curl_exec ($ch);
        $data = strstr($result, '<?');

        echo '<pre>';
        //print_r(new SimpleXMLElement($data));
        echo '</pre>';



}*/

function XMLparser($node, $attribue, $value, $xml)
                {
    $string = '';
    foreach ($xml AS $element)
        {

        if ($element[$attribute] == $value)
        {
            $string .= (string)$element->$node;
        }
        
}
        return $string;
}
//twitterCapture();

?>
