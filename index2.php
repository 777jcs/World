<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>

<?php
require_once 'inc/manager-db.php';
if (isset($_GET['name']) && !empty($_GET['name']) ){
$continent = ($_GET['name']);
$desPays = getCountriesByContinent($continent);
}
else{
$continent = "Monde";
$desPays = getAllCountries();
}
?>

<main role="main" class="flex-shrink-0">

    <div class="container">
        <h1>Les pays <?= $continent; ?></h1>
        <div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                    <th>Drapeau</th>
                        <th>Nom</th>
                        <th>Population</th>
                        <th>Président</th>
                        <th>surface</th>
                        <th>capitale</th>

                    </tr>
                </thead>
                <tbody>
                <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach($desPays as $pays) : ?>
                <tr>
                <td> <?php $source= "images/flag/" .strtolower($pays->Code2).".png"?>
                <img src=<?= $source; ?> height="45" width="60" ></td>
                
                    <td> <?php echo $pays->Name ?></td>
                    <td> <?php echo $pays->Population ?></td>
                    <td> <?php echo $pays->HeadOfState ?></td>
                    <td> <?php echo $pays->SurfaceArea ?></td>
                    <td> <?php $capitale = getCapital($pays->Capital);
                    if($capitale){
                        echo $capitale->Name;
                    } else{
                        echo '-----';
                    } 
                    ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                
            </table>
        </div>


    </div>
    </section>
    </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>