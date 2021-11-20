<?php
$query = $_POST['query'];
$link = $_POST['link'];

if (
    strpos($link, 'playerone') === false &&
    strpos($link, 'playertwo') === false
) {
    $link .= '?';
}

$url = "http://localhost/evencricket/apitest/index.php?query=$query";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);

if (isset($result['status']) || isset($result['result'])) {
    if ($result['status']) {
        if ($result['result']) {
            echo '<div class="list-group">';
            foreach ($result['data'] as $data) {

                $newlink = $link;

                //http://localhost/evencricket/player%20comparison/playercomparison.php?playerone=1&playertwo=2

                if ($_POST['player'] == 1) {
                    if (strpos($link, 'playerone') !== false) {
                        $firsthalf = substr($link, 0, strpos($link, '=') + 1);

                        if (strpos($link, 'playertwo') !== false) {
                            $secondhalf = substr($link, strpos($link, '&'));
                        } else {
                            $secondhalf = '';
                        }

                        $newlink =
                            $firsthalf . $data['player_id'] . $secondhalf;
                    } else {
                        $firsthalf =
                            substr($link, 0, strpos($link, '?') + 1) .
                            'playerone=';

                        if (strpos($link, 'playertwo') !== false) {
                            $secondhalf =
                                '&' .
                                substr($link, strpos($link, 'playertwo') + 1);
                        } else {
                            $secondhalf = '';
                        }

                        $newlink =
                            $firsthalf . $data['player_id'] . $secondhalf;
                    }
                } else {
                    if (strpos($link, 'playertwo') !== false) {
                        if (strpos($link, 'playerone') !== false) {
                            $newlink = substr(
                                $link,
                                0,
                                strripos($link, '=') + 1
                            );
                        }
                        $newlink = $newlink . $data['player_id'];
                    } else {
                        if (strpos($link, 'playerone') !== false) {
                            $newlink = $newlink . '&playertwo=';
                        } else {
                            $newlink = $newlink . 'playertwo=';
                        }
                        $newlink = $newlink . $data['player_id'];
                    }
                }
                ?>
                <a href="<?php echo $newlink; ?>" class="list-group-item list-group-item-action text-center"><?php echo $data[
    'player_name'
]; ?><a>
                <?php
            }
            echo '</div>';
        } else {
            echo '<ul class="list-group"><li class="list-group-item">No players found</li></ul>';
        }
    } else {
        echo '<ul class="list-group"><li class="list-group-item">Error occured</li></ul>';
    }
} else {
    echo '<ul class="list-group"><li class="list-group-item">API not working</li></ul>';
}
?>
