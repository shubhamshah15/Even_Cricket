<?php
include 'db.php';

if (isset($_GET['player_id'])) {
    $player_id = $_GET['player_id'];
    $sql = "SELECT `flag`,`player_name`, `country_name`, `player_age`, `player_type`, `matches_played`, `total_runs`, `50`, `100`, `highest_score`, `average`, `wickets`, `best_figures`, `economy`, `strike_rate`, `debut_year`, `images`
				FROM player_details , teams
				WHERE teams.id = player_country and player_id = $player_id";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    header('Content-Type:application/json');
    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $arr[] = $row;
        }
        echo json_encode(['status' => true, 'data' => $arr, 'result' => true]);
    } else {
        echo json_encode([
            'status' => true,
            'msg' => 'No Data',
            'result' => false,
        ]);
    }
}
if (isset($_GET['all_players'])) {
    $sql = "SELECT `player_name`, `country_name`, `player_age`, `player_type`, `matches_played`, `total_runs`, `50`, `100`, `highest_score`, `average`, `wickets`, `best_figures`, `economy`, `strike_rate`, `debut_year`,`images`
				FROM player_details , teams
					WHERE teams.id = player_country";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    header('Content-Type:application/json');
    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $arr[] = $row;
        }
        echo json_encode(['status' => true, 'data' => $arr, 'result' => true]);
    } else {
        echo json_encode([
            'status' => true,
            'msg' => 'No Data',
            'result' => false,
        ]);
    }
}

if (isset($_GET['team_id'])) {
    $team_id = $_GET['team_id'];
    $sql = "SELECT `player_id`,`player_name`, `country_name`, `player_age`, `player_type`, `matches_played`, `total_runs`, `50`, `100`, `highest_score`, `average`, `wickets`, `best_figures`, `economy`, `strike_rate`, `debut_year`,`images`
				FROM player_details , teams
				WHERE teams.id = player_country and player_country = $team_id";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    header('Content-Type:application/json');
    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $country = $row['country_name'];
            $arr[] = $row;
        }
        echo json_encode([
            'status' => true,
            'data' => $arr,
            'result' => true,
            'country' => $country,
        ]);
    } else {
        echo json_encode([
            'status' => true,
            'msg' => 'No Data',
            'result' => false,
        ]);
    }
}

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $sql =
        "SELECT `player_id`,`player_name`, `country_name`, `player_age`, `player_type`, `matches_played`, `total_runs`, `50`, `100`, `highest_score`, `average`, `wickets`, `best_figures`, `economy`, `strike_rate`, `debut_year`,`images`
		FROM player_details , teams 
        WHERE teams.id = player_country and (`player_name` LIKE '%" .
        $query .
        "%')";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    header('Content-Type:application/json');
    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $arr[] = $row;
        }
        echo json_encode([
            'status' => true,
            'data' => $arr,
            'result' => true,
        ]);
    } else {
        echo json_encode([
            'status' => true,
            'msg' => 'No Data',
            'result' => false,
        ]);
    }
}
