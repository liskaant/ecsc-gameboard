<?php
    require_once("common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo TITLE . (isset($_SESSION["guest"]) && $_SESSION["guest"] ? " (guest)" : ""); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
        <meta name="description" content="<?php echo TITLE; ?> - European Cyber Security Challenge">
        <meta name="keywords" content="CTF,Capture the Flag,Challenge,Competition,Puzzles,Security,Cybersecurity,ENISA,EU">
        <link rel="shortcut icon" href="<?php echo joinPaths(PATHDIR, '/favicon.ico');?>">
        <link rel="preload" href="<?php echo joinPaths(PATHDIR, '/resources/agency-fb.woff');?>" as="font" crossorigin="anonymous"/>
        <link rel="preload" href="<?php echo joinPaths(PATHDIR, '/resources/logo.jpg');?>" as="image" crossorigin="anonymous"/>
        <link rel="stylesheet" href="<?php echo joinPaths(PATHDIR, '/resources/external/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo joinPaths(PATHDIR, '/resources/external/jquery.dataTables.min.css');?>">
        <link rel="stylesheet" href="<?php echo joinPaths(PATHDIR, '/resources/external/all.min.css');?>">
        <link rel="stylesheet" href="<?php echo joinPaths(PATHDIR, '/resources/external/flag-icon.min.css');?>">
        <link rel="stylesheet" href="<?php echo joinPaths(PATHDIR, '/resources/external/jquery.datetimepicker.min.css');?>">
        <link rel="stylesheet" href="<?php echo joinPaths(PATHDIR, '/resources/main.css');?>">
        <script src="<?php echo joinPaths(PATHDIR, '/resources/external/jquery.min.js');?>"></script>
        <script src="<?php echo joinPaths(PATHDIR, '/resources/external/jquery-ui.min.js');?>"></script>
        <script src="<?php echo joinPaths(PATHDIR, '/resources/external/canvasjs.min.js');?>"></script>
        <script src="<?php echo joinPaths(PATHDIR, '/resources/external/popper.min.js');?>"></script>
        <script src="<?php echo joinPaths(PATHDIR, '/resources/external/bootstrap.min.js');?>"></script>
        <script src="<?php echo joinPaths(PATHDIR, '/resources/external/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo joinPaths(PATHDIR, '/resources/external/jquery.datetimepicker.full.min.js');?>"></script>
        <script src="<?php echo joinPaths(PATHDIR, '/resources/external/jquery.sparkline.min.js');?>"></script>
        <script src="<?php echo joinPaths(PATHDIR, '/resources/jquery.sortElements.js');?>"></script>
        <script src="<?php echo joinPaths(PATHDIR, '/resources/main.js');?>"></script>
        <noscript>
            <style>
                #main_container { display: none; }
                noscript {
                    position: absolute;
                    margin: auto;
                    top: 50%;
                    width: 100%;
                    text-align: center;
                    transform: perspective(1px) translateY(-50%);
                    color: red;
                }
            </style>
        </noscript>
<?php
        $style = "";

        if (!parseBool(getSetting(Setting::USE_AWARENESS)))
            $style .= "            .awareness {display: none}\n";
        if (getSetting(Setting::CTF_STYLE) === "ad")
            $style .= "            .jeopardy {display: none}\n";
        else
            $style .= "            .ad {display: none}\n";
        if (!checkStartEndTime())
            $style .= "            .ad {display: none}\n";

        if ($style)
            echo "        <style>\n" . $style . "        </style>";
?>
