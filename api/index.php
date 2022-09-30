<html>
<head>
    <?php
        $request = $_SERVER['REQUEST_URI'];
        $length = count(explode("/", $request));
        switch($length){
            case 3:
                $name = explode('/', $request)[2];
                $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://user.vanijya.biz/WebService.asmx/getItemSEO',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{"itemPerma": "'.$name.'"}',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
                ));
                $response = curl_exec($curl);
                $response = json_decode($response, true);
                echo "<title>".$response['d'][0]['Name'] ."- Mystique Zone</title>\n";
                echo "<meta name=\"description\" content=\"".$response['d'][0]['Description']."\" />\n";
                echo "<meta property=\"og:description\" content=\"".$response['d'][0]['Description']."\" />\n";
                echo "<meta property=\"og:url\" content=\"".$_SERVER['HTTP_HOST']."\" />\n";
                echo "<meta name=\"twitter:description\" content=\"".$response['d'][0]['Description']."\" />\n";
                echo "<meta name=\"twitter:title\" content=\"".$response['d'][0]['Name']." - Mystique Zone\" />\n";
                echo "<meta name=\"og:title\" content=\"".$response['d'][0]['Name']." - Mystique Zone\" />\n";
                echo "<meta name=\"twitter:image\" content=\"https://business.vanijya.biz/".$response['d'][0]['Image']."\" />\n";
                echo "<meta name=\"og:image\" content=\"https://business.vanijya.biz/".$response['d'][0]['Image']."\" />\n";
                break;
            case 2:
                $name = explode('/', $request)[1];
                switch($name){
                    case "privacy-policy":
                        $name = "Privacy Policy -";
                        break;
                    case "terms-of-use":
                        $name = "Terms Of Use -";
                        break;
                    case "shipping-policy":
                        $name = "Shipping Policy -";
                        break;
                    case "payments":
                        $name = "Payments -";
                        break;
                    case "refund-returns":
                        $name = "Refund & Returns -";
                        break;
                    case "faq":
                        $name = "FAQ -";
                        break;
                    case "cart":
                        $name = "Cart -";
                        break;
                    case "contact":
                        $name = "Contact Us -";
                        break;
                    case "about":
                        $name = "About -";
                        break;
                    case "login":
                        $name = "Login -";
                        break;
                    case "account":
                        $name = "Account -";
                        break;
                }
                echo "<title>$name Mystique Zone</title>";
                echo "<meta name=\"description\" content=\"Mystique zone provides unique collection of apparel and other products\" />\n";
                echo "<meta property=\"og:description\" content=\"Mystique zone provides unique collection of apparel and other products\" />\n";
                echo "<meta property=\"og:url\" content=\"".$_SERVER['HTTP_HOST']."\" />\n";
                echo "<meta name=\"twitter:description\" content=\"Mystique zone provides unique collection of apparel and other products\" />\n";
                break;
            default:
                echo "<title>Mystique Zone</title>\n";
                echo "<meta name=\"description\" content=\"Mystique zone provides unique collection of apparel and other products\" />\n";
                echo "<meta property=\"og:description\" content=\"Mystique zone provides unique collection of apparel and other products\" />\n";
                echo "<meta property=\"og:url\" content=\"".$_SERVER['HTTP_HOST']."\" />\n";
                echo "<meta name=\"twitter:description\" content=\"Mystique zone provides unique collection of apparel and other products\" />\n";
        }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="nighty, nightsuit, cots wool frock, cotton frock, ladies pants" />
    <meta name="VanijyaStoreUrl" content="mystiquezone" />
    <link rel="SHORTCUT ICON" href="https://business.vanijya.biz/uploads/482/VanijyaUploads/Logo/mzone.ico" /> 
    <script type='text/javascript'> !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n; n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js'); </script>  
    <meta name="google-site-verification" content="ACP-ErB9m9x4FvWa7M_e1EAChXlqemsWGrNb3eEgEG8">
</head>
<body style="margin: 0;">
    <?php
        $request = $_SERVER['REQUEST_URI'];
        echo "<iframe src=\"https://quic.biz/mystiquezone$request\" style=\"border: none;height: 100%;width: 100%;\" frameborder=\"0\"></iframe>"
    ?>
</body>
</html>
