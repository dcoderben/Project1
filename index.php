<!-- A Responsive News Website by Benny Abhishikth Mamuduri 
#DCODER
Computer Science Student -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <style>
        body
        {
            background-color: rgba(24, 34, 30, 0.575);
            
        }
        #main-div
        {
            position: absolute;
            width: 50%;
            
            left: 25%;
            top:  100px;
            background-color: rgba(215, 249, 250, 0.181);
        }
        #nav
        {
            width: 50%;
            left: 25%;
            position: fixed;
            height: 100px;
            
            top: 0%;
            background-color: black;
        }
        h1
        {
            color: white;
            font-size: 50px;
            font-weight: bolder;
            margin-left:-10%;
        }
        span
        {
            color: rgb(0, 255, 229);
        }
        #news
        {
            position: relative;
            width: 90%;
            
            background-color: black;
            margin: 5%;
            
            border-radius: 1vmax;
        }
        #img
        {
            margin: 3%;
            margin-bottom: 0%;
            border-top-right-radius:1vmax ;
            border-top-left-radius: 1vmax ;

        }
        h2
        {
            color: white;
            font-weight: 900;
            position: relative;
            padding: 5%;
            font-size: 3vmin;
            margin-top: 0%;
        }
        h3
        {
            position:relative;
            color: white;
            font-weight: 900;
            font-size: 2vmin;
            padding: 5%;
            margin-top: -10%;
            
        }
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            opacity: 0.8;
          }
        button
        {
            position: relative;
            width: 50%;
            height: 4vmax;
            border-radius: 1vmax;
            background-color: aqua;
            color:solid black;
            font-size: 2.5vmin;
            font-weight: 900;
            margin-bottom: 5%;
        }
        #img2
        {
            position:relative;
            float:left;
            margin-top:-1vmin;
            margin-left:15%;
            margin-right:-15%;
            border-radius:50%;
            border:aqua;
        }
        @media (max-width : 1100px )
        {
            #main-div
            {
                position: absolute;
                width: 70%;
                
                left: 15%;
                top: 100px;
               
            }
            #nav
            {
                position: fixed;
                height: 100px;
                width: 70%;
                left: 15%;
                top: 0%;
                background-color: black;
            }
            h1
            {
                color: white;
                font-size: 55px;
                font-weight: bolder;
                margin-left:-10%;
            }
        }
        @media (max-width : 900px )
        {
            #main-div
            {
                position: absolute;
                width: 70%;
                
                left: 15%;
                top: 100px;
               
            }
            #nav
            {
                position: fixed;
                height: 100px;
                width: 70%;
                left: 15%;
                top: 0%;
                background-color: black;
            }
            h1
            {
                color: white;
                font-size: 45px;
                font-weight: bolder;
                margin-left:-10%;
            }
        }
        @media (max-width : 770px )
        {
            #main-div
            {
                position: absolute;
                width: 70%;
                
                left: 15%;
                top: 100px;
               
            }
            #nav
            {
                position: fixed;
                height: 100px;
                width: 70%;
                left: 15%;
                top: 0%;
                background-color: black;
            }
            h1
            {
                color: white;
                font-size: 40px;
                font-weight: bolder;
                margin-left:-10%;
            }
        }
        @media (max-width : 650px )
        {
            #main-div
            {
                position: absolute;
                width: 70%;
                
                left: 15%;
                top: 100px;
               
            }
            #nav
            {
                position: fixed;
                height: 100px;
                width: 70%;
                left: 15%;
                top: 0%;
                background-color: black;
            }
            h1
            {
                color: white;
                font-size: 35px;
                font-weight: bolder;
                margin-left:25%;
                margin-left:0%
            }
            #img2
            {
                position:relative;
                float:left;
                margin-top:-1vmin;
                margin-left:8%;
                margin-right:-15%;
                border-radius:50%;
            }
        }
        @media (max-width : 500px )
        {
            #main-div
            {
                position: absolute;
                width: 100%;
                
                left: 0%;
                top: 100px;
            }
            #nav
            {
                position: fixed;
                height: 100px;
                width: 100%;
                left: 0%;
                top: 0%;
                background-color: black;
            }
            h1
            {
                color: white;
                font-size: 39px;
                font-weight: bolder;
                margin-left:5%;
                margin-top:5%;
               
            }
        }
        @media (max-width : 400px )
        {
            #main-div
            {
                position: absolute;
                width: 100%;
                
                left: 0%;
                top: 100px;
            }
            #nav
            {
                position: fixed;
                height: 100px;
                width: 100%;
                left: 0%;
                top: 0%;
                background-color: black;
            }
            h1
            {
                color: white;
                font-size: 37px;
                font-weight: bolder;
                margin-left:-5%;
                margin-top:5%;
                margin-right:5%;
               
            }
            #img2
            {
                position:relative;
                float:left;
                margin-top:-1vmin;
                margin-left:5%;
                margin-right:0%;
                border-radius:50%;
            }
        }
    </style>
</head>
<body>

        <?php
            $api_url = "https://newsapi.org/v2/everything?domains=wsj.com&apiKey=5b006337a71e49edb2bc8799b7563f69";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $api_url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'User-Agent: News/1.0',  
            ));
            $result = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($result);
            print_r ( $response);
            echo '<video autoplay muted loop id="myVideo">
             <source src="back.mp4" type="video/mp4">
             </video>'; 
            

            echo '<div id="main-div">';
            if (!empty($response->articles)) 
            {
                foreach ($response->articles as $article) 
                {
                    echo '<div id="news">';
                    echo "<img id = 'img' src =". $article->urlToImage . "  width='94%'  alt='' /img>";
                    echo "<h2>" . $article->title . "</h2>";
                    echo "<center><h3 style='color: rgb(255, 0, 119);' >" . $article->description . "</h3></center>";
                    echo "<a target='_blank' href='".$article->url."' ><center><button>CONTINUE ARTICLE</button></center></a>";
                    echo '</div>';
                }
            } 
            else 
            {
                echo "No current matches found.";
            }
            echo '</div>';
            echo '<div id="nav">';
            echo '<center> <span><img src="ab.png" id="img2" alt="Image Description" width="70px" ></span> <h1 style="position:relative;"><span>HASH</span> NEWS</h1></center>'; 
            echo '</div>';
        ?>
    
    
</body>
</html>