
<?php
include('connection.php');
?>
<html>
    <head>
        <title>Testing</title>
        <link rel="stylesheet" type="text/css" href="custom.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="site.js"></script>
    </head>
    <body>
        <section class="header">
            <div class="header-nav">
                <div class="upper-menu">
                    <div class="left-text">
                        <a href="#" class="logo"><img src="images/imgg.jpg"></a>
                    </div>
                    <select class="right-text" name="dog-names" id="dog-names">
                        <option value="rigatoni"> Italiano</option>
                    </select>
                    <div class="dropdown-content">
                        <a href="#" class="italia-img">
                            <img src="images/ita.png" width="30" height="20">
                        </a>
                    </div>
                </div>
            </div>
            <button class="vector-button">
                <li class="fa-arrow"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></li>
            </button>
        </section>
        <section class="body-menu">
            <div class="menu">
                <div class="title-body">
                    <h2 class="title-store">Prenota servizion store</h2>
                    <p>All’interno delle strutture e dei mezzi ParkinGO è necessario indossare la mascherina e rispettare la distanza di sicurezza interpersonale.</p>
                </div>
                <form action="insertUsers.php" method="post">
                    <div class="menu-01">
                        <h3 class="title-menu">01. Prenota ora i tamponi in Drive-in</h3>
                        <div class="parking-location">
                            <ul class="list-name">
                                <li class="left"><i class="fa fa-map-marker" aria-hidden="true"></i></li>
                                <select name="location" class="left"><a href="#" class="parginggo"></a>
                                <option value="Skenderbeg Square" >Skenderbeg Square</option>
                                <option value="Don Bosco Street" >Don Bosco Street</option>
                                <option value="Nene Teresa Square" >Nene Teresa Square</option>
                                </select>
                        
                                <li class="center"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Mar 23 Feb 2021</a></li>
                                <li class="right"><a href="#" class="modifica">Modifica negozio</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-02">
                        <h3 class="title-menu">02. Prenota ora i tamponi in Drive-in </h3>
                        <div class="group-59">
                            <div class="rectange1">
                                <p class="text-59">Tampone Rapido Antigenico <i class="fa fa-info-circle" aria-hidden="true"></i></p>
                                <div class="price-quantity">
                                    <div class="price">50$</div>
                                    <div class="quantity">
                                        <div class="qta">Qta</div>
                                        <select name="tampon_nr_Antigenico" class="quantity-number1">
                                            <option value="Antigenico-0" >0</option>
                                            <option value="Antigenico-1" >1</option>
                                            <option value="Antigenico-2" >2</option>
                                            <option value="Antigenico-3" >3</option>
                                            <option value="Antigenico-4" >4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="rectange2">
                                <p class="text-59">Tampone Molecolare PCR <i class="fa fa-info-circle" aria-hidden="true"></i></p>
                                <div class="price-quantity">
                                    <div class="price">95$</div>
                                    <div class="quantity">
                                        <div class="qta">Qta</div>
                                        <select name="tampon_nr_PCR" class="quantity-number2">
                                            <option value="PCR-0" >0</option>
                                            <option value="PCR-1" >1</option>
                                            <option value="PCR-2" >2</option>
                                            <option value="PCR-3" >3</option>
                                            <option value="PCR-4" >4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-03">
                        <h3 class="title-menu">03. Scegli fra le date e orari disponibili</h3>
                        <div class="date">
                            <h3 class="date">Date</h3>
                            <div class="button-date">
                                <?php 
                                    $array = [];
                                    $hours = ['9:30', '10:30', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00'];
                                    
                                    for($i=0; $i<10; $i++) {
                                        $date = Date('ymd', strtotime('+'.$i.' days'));
                                        $date_value = Date('Y-m-d', strtotime('+'.$i.' days'));

                                        //get time from databaze
                                        $result = $conn->query("select Time from date_time where Date = '" . $date_value . "'");

                                        $array[$date_value] = [];

                                        while($row = $result->fetch_assoc()) {
                                            array_push($array[$date_value], $row['Time']);
                                        }

                                        echo "<input id='" . $date . "' type='button' name='dataa' ";
                                        if ($result->num_rows == 12) {
                                            echo "disabled";
                                        }
                                        echo " onclick='addClassByClick(".$date.")' class='";
                                        if ($result->num_rows == 12) {
                                            echo "disabled";
                                        }
                                        echo " single-date lunedi27' value='" . $date_value . "' />";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="orari">
                            <h3 class="orari">Orari</h3>
                            <?php
                                for($i=0; $i<10; $i++) {
                                    $date = Date('ymd', strtotime('+'.$i.' days'));
                                    $date_value = Date('Y-m-d', strtotime('+'.$i.' days'));

                                    echo "<div class='button-orari " . $date . "' id='" . $date . "'>";

                                        foreach ($hours as $key => $value) {
                                            $the_time = str_replace(":", "", $value);
                                            
                                            if (in_array($value, $array[$date_value])) {
                                                echo "<input type='button' disabled id='".$the_time."' class='single-time time disabled' name='timee' value='".$value."' onclick='addClassTime(".$the_time.")'>";
                                            } else {
                                                echo "<input type='button' id='".$the_time."' class='single-time time' name='timee' value='".$value."' onclick='addClassTime(".$the_time.")'>";
                                            }
                                        }

                                    echo "</div>";
                                }
                            ?>
                        </div>
                    </div>
                    <div class="menu-04">
                        <h3 class="title-menu">04. Dati anagrafici</h3>
                            <div class="form-group">
                                <div class="col-md">
                                    <label for="name">Name</label>
                                    <input type="name" class="name" name="name">
                                </div>
                                <div class="col-md">
                                    <label for="cogname">Cogname</label>
                                    <input type="cogname" class="cogname" name="form1_cogname">
                                </div>
                                <div class="col-md email-class">
                                    <label for="email">Email</label>
                                    <input type="email" class="email" name="form1_email">
                                </div>
                                <div class="col-md">
                                    <label for="cellulare" class="dropdown-cel">Cellulare</label>
                                    <div class="cel">
                                        <input type="text" class="cellulare" placeholder=" + 39">
                                        <input type="text" class="number-cellulare" name="form1_cellulare">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <label for="nazionalita">Nazionalita</label>
                                    <input type="text" class="nazionalita" name="form1_nazionalita">
                                </div>
                                <div class="col-md">
                                    <label for="code">Code di fiscale</label>
                                    <input type="text" class="code" name="form1_code">
                                </div>
                                <div class="col-md">
                                    <label for="data">Data di nascita</label>
                                    <input type="text" class="data-di-nascita" name="form1_data">
                                </div>
                                <div class="col-md-radio">
                                    <label>Sesso</label>
                                    <div class="radio-form">
                                        <label for="m" class="checkcontainer">
                                            <input type="radio" checked="checked" value="M"  name="form1_gender">
                                            <span class="radiobtn"></span>M
                                        </label>
                                        <label for="f"  class="checkcontainer">
                                            <input type="radio" checked="checked" value="F"  name="form1_gender">
                                            <span class="radiobtn"></span>F
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <label for="Comune-residenca">Comune residenca</label>
                                    <input type="text" class="comune-residenca" name="form1_comune">
                                </div>
                                <div class="col-md">
                                    <label for="Cap">Cap</label>
                                    <input type="text" class="cap" name="form1_cap">
                                </div>
                                <div class="col-md">
                                    <label for="Indirizzo">Indirizzo</label>
                                    <input type="text" class="indirizzo" name="form1_indirizzo">
                                </div>
                            </div>
                            <div class="checkbox-form">
                                <label class="container">Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi)
                                    <input type="checkbox" checked="checked" value="Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi)" name="form1_check">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Ho preso visione dell’informativa sul trattamento dei miei dati personali e do il consenso al loro trattamento da parte di Medispa S.r.l. quale unico Responsabile Esterno del trattamento dei dati sanitari. * (leggi)
                                    <input type="checkbox" name="form1_check" value="Ho preso visione dell’informativa sul trattamento dei miei dati personali e do il consenso al loro trattamento da parte di Medispa S.r.l. quale unico Responsabile Esterno del trattamento dei dati sanitari. * (leggi)">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="avantibtn">
                                <input type="submit" name="avanti" class="avanti">
                            </div>
                    </div>
                </form>
                <div class="menu-05">
                    <h3 class="title-menu">05. Tipo di ricevuta</h3>
                    <p class="bill">A chi dovrà essere intestata la fattura?</p>
                    <div class="bill-form">
                        <button class="agency-bill"><i class="fa fa-users" aria-hidden="true"></i> Azienda</button>
                        <button class="private-bill"><i class="fa fa-user" aria-hidden="true"></i> Privato</button>
                    </div>
                    <div class="form-group">
                        <form action="insert.php" method="POST">
                            <div class="col-md">
                                <label for="name">Name</label>
                                <input type="text" class="name" name="name">
                            </div>
                            <div class="col-md">
                                <label for="cogname">Cogname</label>
                                <input type="text" class="cogname" name="cogname">
                            </div>
                            <div class="col-md">
                                <label for="codice Fiscale">Codice Fiscale</label>
                                <input type="text" class="codice Fiscale" name="codiceFiscale">
                            </div>
                            <div class="col-md">
                                <label for="email invio fattura">Email invio fattura</label>
                                <input type="text" class="email invio fattura" name="email">
                            </div>
                            <div class="col-md">
                                <label for="indirizzo">Indirizzo</label>
                                <input type="text" class="indirizzo" name="indirizzo">
                            </div>
                            <div class="col-md">
                                <label for="citta">Citta</label>
                                <input type="text" class="citta" name="citta">
                            </div>
                            <div class="col-md">
                                <label for="cap">Cap</label>
                                <input type="text" class="cap" name="cap">
                            </div>
                            <div class="col-md">
                                <label for="provinzia">Provinzia</label>
                                <input type="text" class="provinzia" name="provinzia">
                            </div>
                            <div class="col-md">
                                <label for="nazione">Nazione</label>
                                <input type="text" class="nazione" name="nazione">
                            </div>
                            <div class="avantibtn">
                                <input type="submit" name="VERIFICA" class="avanti" placeholder="VERIFICA">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="menu-05">
                    <h3 class="title-menu">06. Metodo di pagamento</h3>
                    <div class="credit-card">
                        <div class="radio-pay">
                            <label class="paycard">Carta di credito
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkradio"></span>
                            </label>
                        </div>
                        <div class="card-img">
                            <div class="master-card">
                                <img src="images/master-card.png" width="40" height="35">
                            </div>
                            <div class="visa-card">
                                <img src="images/visa.png" width="40" height="35">
                            </div>
                            <div class="american-card">
                                <img src="images/american.png" width="40" height="35">
                            </div>
                        </div>
                    </div>
                    <div class="form-card">
                        <div class="col-md-card">
                            <label for="provinzia">Provinzia</label>
                            <input type="text" class="provinzia">
                        </div>
                        <div class="col-md-card-center">
                            <div class="left-form">
                                <label for="data">Data di scandeza</label>
                                <input type="text" class="data-scandeza">
                            </div>
                            <div class="right-form">
                                <label for="cvc" class="cvc-label">CVC/CVV</label>
                                <input type="text" class="cvc">
                            </div>
                        </div>
                        <div class="col-md-card">
                            <label for="carta">Nome sualla carta</label>
                            <input type="text" class="carta">
                        </div>
                    </div>
                    <div class="radio-pay bottom">
                        <label class="paycard">PayPal
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkradio"></span>
                        </label>
                    </div>
                    <div class="radio-pay bottom">
                        <label class="paycard">GooglePay
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkradio"></span>
                        </label>
                    </div>
                    <div class="checkbox-form">
                        <label class="container">Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi)
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Ho preso visione dell’informativa sul trattamento dei miei dati personali e do il consenso al loro trattamento da parte di Medispa S.r.l. quale unico Responsabile Esterno del trattamento dei dati sanitari. * (leggi)
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Ho preso visione dell’informativa sul trattamento dei miei dati personali e do il consenso al loro trattamento da parte di Medispa S.r.l. quale unico Responsabile Esterno del trattamento dei dati sanitari. * (leggi)
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="confirm-bill">
                        <button class="conferma">CONFERMA E PAGA</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <div class="footer-menu">
                <ul class="list">
                    <li class="logo-footer"><a href="#" class="logo"><img src="images/imgg.jpg"></a></li>
                    <li><a href="#">Adress, Tirana, Albania</a></li>
                    <li>Email: <a href="mailto:online@example.com">online@example.com</a></li>
                    <li>Phone: <a href="tel:xxx xxx xxx xxx">xxx xxx xxx xxx</a></li>
                </ul>
                <ul class="list">
                    <li class="name">Supporto</li>
                    <ul class="row-list">
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Termini e condizicioni</a></li>
                    </ul>
                </ul>
            </div>
            <div class="created-name">
                <p>2021 © Created by New Media Communications</p>
            </div>
        </section>
    </body>
</html>



