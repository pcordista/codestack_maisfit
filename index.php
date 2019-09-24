<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<!-- SLIDER PRINCIPAL -->
<?php include 'components/slider-principal.php'; ?>

<!-- GRID PRINCIPAL -->
<?php include 'components/grid-principal.php'; ?>

<section class="destaque margin_1_top colorPurple bold">
    <div class="container">
        <div class="row">
            <div class="destaque-item col s12 m12 l6 center-align">
                Preço especial acima de 10 und
            </div>
            <div class="destaque-item col s12 m12 l6 center-align">
                Entrega para todo o Brasil
            </div>
        </div>
    </div>
</section>

<section class="sectionStart">
    <img src="assets/img/bg-newsletter.png" class="widthfull hide-on-small-only">
    <img src="assets/img/bg-newsletter-mobile.png" class="widthfull hide-on-med-and-up">
    <div class="newsletter colorPurple center-align">
        Cadastre-se e fique por dentro de nossas novidades!
    </div>

    <div class="container sectionStart">
        <div class="row">
            <div class="col s12 m6">
                <input type="text" class="newsletter-input" placeholder="Nome">
            </div>
            <div class="col s12 m6">
                <input type="text" class="newsletter-input" placeholder="E-mail">
            </div>
        </div>
        <div class="flex justifycenter">

            <div class="grid-button center-align bold bgCiano white-text textUpper">
                enviar
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<?php include 'assets/js/JS_includes.php'; ?>

</body>

</html>