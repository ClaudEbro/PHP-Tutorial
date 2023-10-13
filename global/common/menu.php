<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="../../global/home/index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Beginner
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php for($i=1;$i <= 20;$i++) : ?>
                    <a class="dropdown-item" href="../../1-beginner/exo<?=$i?>/index.php">exo<?=$i?></a>
                <?php endfor; ?>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Intermediate
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php for($i=1;$i <= 7;$i++) : ?>
                    <a class="dropdown-item" href="../../2-intermediate/exo<?=$i?>/index.php">exo<?=$i?></a>
                <?php endfor; ?>
            </div>
        </li>
        <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Advanced
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../3-advanced/exo1.php">exo1</a>
            </div>
        </li> -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pratical Case
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../3-use_cases/1-Weapons/step1.php">step1</a>
                <a class="dropdown-item" href="../../3-use_cases/1-Weapons/step2.php">step2</a>
                <a class="dropdown-item" href="../../3-use_cases/1-Weapons/step3.php">step3</a>
                <a class="dropdown-item" href="../../3-use_cases/1-Weapons/step4.php">step4</a>
                <a class="dropdown-item" href="../../3-use_cases/1-Weapons/step5.php">step5</a>
                <a class="dropdown-item" href="../../3-use_cases/1-Weapons/step6.php">step6</a>
                <a class="dropdown-item" href="../../3-use_cases/1-Weapons/step7.php">step7</a>
                <a class="dropdown-item" href="../../3-use_cases/1-Weapons/step8.php">step8</a>
            </div>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="../../3-use_cases/2-Catalog/index.php">Catalogs</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="../../3-use_cases/3-Animals/index.php">Animals</a>
        </li>
    </ul>
    </div>
</nav>