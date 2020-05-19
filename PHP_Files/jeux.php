
<style>
    /*.images table td{
       width:150px;
       height: 250px;
    }
    */
    body{

        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
    }
    .images img{
        width:150px;
        height: 250px;
    }
    table{
        position: centered;
    }
</style>
<script type="text/javascript">

    $(document).ready(function () { // NE PAS MODIFIER CETTE LIGNE

        //filtrage PS4
        $("#button_ps4").click(function () {
            // cacher ce qu'il faut
            $(".xbox").hide();
            $(".nintendo").hide();
            $(".wii").hide();
            // afficher ce qu'il faut
            $(".ps4").show();
        });

        // filtrage xbox
        $("#button_xbox").click(function () {
            $(".nintendo").hide();
            $(".ps4").hide();
            $(".wii").hide();
            $(".xbox").show();
        });

        // filtrage nintendo
        $("#button_nintendo").click(function () {
            $(".wii").hide();
            $(".xbox").hide();
            $(".ps4").hide();
            $(".nintendo").show();
        });

        //filtrage Wii
        $("#button_wii").click(function () {
            $(".nintendo").hide();
            $(".xbox").hide();
            $(".ps4").hide();
            $(".wii").show();
        });
        $("#button_tous").click(function () {
            $(".nintendo").show();
            $(".xbox").show();
            $(".ps4").show();
            $(".wii").show();
        });

    }); // NE PAS MODIFIER CETTE LIGNE
</script>
<br>
<center>
<button id="button_ps4" class="btn btn-success">Jeux PS4</button>
<button id="button_nintendo" class="btn btn-success">Jeux Nintendo</button>
<button id="button_wii" class="btn btn-success">Jeux Wii</button>
<button id="button_xbox" class="btn btn-success">Jeux Xbox</button>
<button id="button_tous" class="btn btn-success">Tous les Jeux </button>

<br/><br/>
<div class="images">
    <table border="none">
<?php
for ($i = 0; $i < 4; $i++) {
    echo('<tr>
            <td><div class="xbox"><img src="images/jeuxXBOXANTHEM.jpg" class="img-fluid" ></div></td>
            <td><div class="xbox"><img src="images/jeuxXBOXexodus.jpg" class="img-fluid" ></div></td>
            <td><div class="wii"><img src="images/poképarkwii.jpg" class="img-fluid" ></div></td>
            <td><div class="nintendo"><img src="images/jeuxBazBlueCentralfiction.jpg" class="img-fluid" ></div></td>

            <td><div class="xbox"><img src="images/jeuxXBOXANTHEM.jpg" class="img-fluid" ></div></td>
            <td><div class="wii"><img src="images/jeuxFarCryNewDawn.jpg" class="img-fluid" ></div></td>
            <td><div class="xbox"><img src="images/jeuxXBOXlego.jpg" class="img-fluid" ></div></td>
            <td><div class="wii"><img src="images/ninjaturtlewii.jpg" class="img-fluid" ></div></td>
        </tr>
         <tr>
            <td><div class="ps4"><img src="images/jeuxLEGO.jpg"></div></td>
            <td><div class="ps4"><img src="images/jeuxDeadoralive.jpg"></div></td>
            <td><div class="ps4"><img src="images/jeuxFarCryNewDawn.jpg"></div></td>
            <td><div class="ps4"><img src="images/jeuxRally.jpg"></div></td>

            <td><div class="wii"><img src="images/justdancewii.jpg"></div></td>
            <td><div class="xbox"><img src="images/jeuxXBOXexodus.jpg"></div></td>
            <td><div class="xbox"><img src="images/jeuxXBOXlego.jpg"></div></td>
            <td><div class="nintendo"><img src="images/jeuxBazBlueCentralfiction.jpg"></div></td>
        </tr>
     <tr>
            <td><div class="ps4"><img src="images/jeuxTrialsrising.jpg"></div></td>
            <td><div class="ps4"><img src="images/finalfantasy2.jpg"></div></td>
            <td><div class="nintendo"><img src="images/wolrd-of-final-fantasy.jpg"></div></td>
            <td><div class="ps4"><img src="images/jeuxRally.jpg"></div></td>

            <td><div class="wii"><img src="images/justdancewii.jpg"></div></td>
            <td><div class="xbox"><img src="images/jeuxXBOXexodus.jpg"></div></td>
            <td><div class="xbox"><img src="images/jeuxXBOXlego.jpg"></div></td>
            <td><div class="nintendo"><img src="images/jeuxBazBlueCentralfiction.jpg"></div></td>
        </tr>
            ');
}
?>
    </table>
</center>
</div>
