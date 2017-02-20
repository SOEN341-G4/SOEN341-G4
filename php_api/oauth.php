<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <script>

            function getRepoId(){

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("repoId").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getrepoid.php?user=abhandal&repo=SOEN341-G4", true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>


        <?php require_once '../../vendor/autoload.php';

        $code = $_GET['code'];


        // Initialize Guzzle client
        $c = new GuzzleHttp\Client();

        // Create a POST request
        $response = $c->request(
            'POST',
            'https://github.com/login/oauth/access_token',
            [
                'form_params' => [
                    'client_id' => '0abab00f9539752f1578',
                    'client_secret' => '4aaec98ffc90eba7cbb99314b1e6d8a373ef3b72',
                    'code' => $code
                ]
            ]
        );

        // Parse the response object, e.g. read the headers, body, etc.
       // $headers = $response->getHeaders();
        $body = $response->getBody();
        //echo $headers;
       $start =  strpos($body,"=") + 1;
       $length = strpos($body,'&') - $start;
       $token = substr($body, $start, $length);


       $client = new \Github\Client();

       $user = $client->authenticate($token, null, Github\Client::AUTH_HTTP_TOKEN);


       $_SESSION['token'] = $token;


    ?>
        <input id="clickMe" type="button" value="clickme" onclick="getRepoId()"/>

        <p>Id: <span id="repoId"></span></p>
    </body>
</html>
