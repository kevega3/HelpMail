<div class="ContenedorFiltros">
    <div class="Title-Filters">
        <h3 class="Titles">Genera Filtros</h3>
    </div>
    <form class="" id="multi-filters">
        <section>
            <?php include 'Accions/TipoEntidad.php'?>
        </section>    

        <section class="ContenedorSubFilters">
            <div class="EPS">
                <?php include 'Accions/ActividadEPS.php'?>
            </div>
            <div class="IPS">
                <?php include 'Accions/ActividadIPS.php'?>
            </div>
            <div class="CAC">
                <?php include 'Accions/ActividadCAC.php'?>
            </div>
        </section>


        <section class="ContenedorSubFilters">
                <?php //include 'Accions/InfoOrg.php'?>
        </section>

    </form>
</div>