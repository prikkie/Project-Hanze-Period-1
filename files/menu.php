<script type="text/javascript">
    function handleSelect(elm) {
        window.location = elm.value;
    }
</script>

<ul class="menu"><li><a href="/home" target="_self"><span>Home</span></a></li>
    <li><a href="/product" target="_self"><span>Producten</span></a></li>
    <li><a href="/winkelmandje" target="_self"><span>Winkelmandje</span></a></li>

    <?php
    if ($_SESSION['logged_in'] == true) {
        //laat persoonlijke pagina's zien
        echo ">Logout</option>
</select>

\"";


    } else {
        //laat login knop zien
        echo ">Logout</option>
</select>



\"";
    }
    ?>
</ul>
