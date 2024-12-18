<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFS - Dashboard</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <section class="container-dashboard">
        <aside class="container-aside" id="container-aside">

            <section class="container-aside-logo">
                <i data-feather="x-circle" id="closeMenu"></i>
                <img src="../assets/images/logo_dashboard.png" alt="Clube Full-Stack">
            </section>

            <section class="container-aside-menu">
                <h1>Menu</h1>
                <nav class="container-aside-menu-nav">
                    <ul>
                        <li><a href="#" class="active"><i data-feather="home"></i> Início</a></li>
                    </ul>
                </nav>
            </section>

            <section class="container-aside-logout">
                <article class="container-aside-logout-btn">
                    <i data-feather="log-out"></i>
                    <a href="/logout">Sair</a>
                </article>
            </section>
        </aside>


        <section class="container-section-principal">
            <i data-feather="menu" id="menuMobile"></i>
            <article class="container-section-principal-header">
                <h1>Olá <?= $firstName.' '.$lastName; ?></h1>
                <h3>Bem-vindo novamente!</h3>
                <h3><?= $id; ?></h3>
                <h3><?= $email; ?></h3>

            </article>

            <main class="container-section-principal-content">

            </main>

        </section>
    </section>

    <script src="../assets/scripts/scriptPrincipal.js"></script>
</body>

</html>