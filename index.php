<?php require_once 'events.php'; ?>

<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DT @ Waimea College - The History of Computing</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>

        <main>

            <h1>The History of Computing</h1>

<?php

    foreach( $events as $time => $details ) {
        echo '<section class="topic">
                <div class="wrapper">
                    <input type="checkbox" class="toggle" name="toggles" id="topic-'.$time.'">
                    <label for="topic-'.$time.'">'.$details['title'].'</label>
                    <div class="content">
                        <h2>'.$details['title'].'</h2>';

        foreach( $details['events'] as $event ) {

            if( $event['image'] ) {
                echo '<a href="#'.$event['image'].'">
                        <figure class="thumbnail right">
                            <img src="images/'.$event['image'].'.jpg">';

                if( $event['caption'] ) echo '<figcaption>'.$event['caption'].'</figcaption>';

                echo '  </figure>
                      </a>
                      <a id="'.$event['image'].'" href="#_" class="lightbox">
                        <figure>
                            <img src="images/'.$event['image'].'.jpg">';

                if( $event['caption'] ) echo '<figcaption>'.$event['caption'].'</figcaption>';

                echo '  </figure>
                      </a>';
            }

            if( strpos( $event['text'], '<h' ) !== false ) {
                echo $event['text'];
            }
            else {
                echo '<p>'.$event['text'].'</p>';
            }
        }

        echo '      </div>
                </div>
              </section>';
    }



?>

        </main>

    </body>

</html>
