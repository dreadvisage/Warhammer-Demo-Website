<?php
// https://stackoverflow.com/questions/2672642/php-echo-a-large-block-of-text
// https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
echo <<< END
<div id="navbar">
            <div id="inner1">
                <a href="index.php"><img id="warhammer-logo" src="images/warhammer-logo-black.png" alt="Warhammer Logo"></a>
            </div>
            <div id="inner2">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Factions</button>
                            <div class="dropdown-content">
                              <a href="factions/space-marine.php">Space Marines</a>
                              <a href="factions/necrons.php">Necrons</a>
                              <a href="factions/adepta-sororitas.php">Adepta Sororitas</a>
                              <a href="factions/adeptus-custodes.php">Adeptus Custodes</a>
                              <a href="factions/adeptus-mechanicus.php">Adeptus Mechanicus</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Points</button>
                            <div class="dropdown-content">
                              <a href="points/votann-points.php">Leagues of Votann</a>
                              <a href="points/sororitas-points.php">Adepta Sororitas</a>
                              <a href="points/custodes-points.php">Adeptus Custodes</a>
                              <a href="points/mechanicus-points.php">Adeptus Mechanicus</a>
                              <a href="points/titanicus-points.php">Adeptus Titanicus</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            
            <div id="inner3">
                <input type="text" placeholder="Search...">
            </div>
            <div id="inner4">
                <a href="search-sample.php"><img id="search-icon" src="images/search-bar-icon.png" alt="Search Icon"></a>
            </div>
            <div id="inner5">
                <a href="account/login.php"><img id="account-icon" src="images/account-logo-skull.svg" alt="Account Logo"></a>
            </div>
        </div>
END;
?>

