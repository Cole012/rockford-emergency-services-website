<?php
    $guild_id = "357623064298651648";
    $headers = array(
        'Content-type: application/json',
        'Authorization: Bot NDI3MTY3NDI0NzE0ODk5NDU5.DZgmMQ.3MVt4tQkHJ-Ozg1obdnyW91AN9g',
    );
    $host_url = "https://ptb.discordapp.com/api/guilds/" . $guild_id . "/roles";

	$c = curl_init();
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($c, CURLOPT_URL, $host_url);
    
    $html = curl_exec($c);
    $ar_html = json_decode($html,true);

    if (curl_error($c)){die(curl_error($c));}
    $status = curl_getinfo($c, CURLINFO_HTTP_CODE);
    curl_close($c);

    echo $html;

?>