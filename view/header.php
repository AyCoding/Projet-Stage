<header>
    <div class="logo">
        <!--<a href="/"">
            Gestion des projets
        </a>-->
    </div>
    <nav>
        <ul>
            <?php if (est_connecte()): ?>
                <a href="/controller/logout.php">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24"><path fill="none"  d="M0 0h24v24H0z"/><path d="M4 22a8 8 0 1 1 16 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"/></svg>-->
                    Se déconnecter
                </a>
            <?php else: ?>
                <a href="/login.php">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 22a8 8 0 1 1 16 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"/></svg>-->
                    Se connecter
                </a>
            <?php endif ?>
        </ul>
    </nav>
</header>

<div class="hero">
    <h1>Gestionnaire des projets</h1>
</div>