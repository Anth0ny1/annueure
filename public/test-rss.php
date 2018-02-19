<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    function getFeed($feed_url, $limit=5) {

        $content = file_get_contents($feed_url);
        $x = new SimpleXmlElement($content);
        $compteur = 0;
        echo'<pre>';
            print_r($x);
        echo'</pre>';

        foreach($x->channel->item as $entry) {

              echo '<div style="float:left; width:50px; height:auto; margin-right:10px;">
                      <a href="'.$entry->link.'" title="'.$entry->title.'">
                        <img style="width:100%; height:auto;" src="'.$entry->enclosure->attributes()->url.'" alt="'.$entry->enclosure->attributes()->type.'" />
                      </a>
                    </div>
                    <div style="margin-top:-12px;">
                      <p>
                        <a href="'.$entry->link.'" title="'.$entry->title.'">'.$entry->title.'</a><br />
                        <i>('.$entry->pubDate.')</i>
                      </p>
                    </div>';

              echo '<hr noshade style="border-width:1px; clear:both; overflow: auto; ">';

              $compteur++;
              if ($compteur == $limit) {
                break;
              }
        }
    }

    getFeed('http://www.batiweb.com/rss.html',5);
    ?>
  </body>
</html>
