<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Welcome to Shit</title>

    <link rel="Stylesheet" type="text/css" href="../style.css" />

    <link href='https://fonts.googleapis.com/css?family=Inconsolata&subset=latin-ext,latin' rel='stylesheet' type='text/css'>

    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="../img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../img/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="../img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../img/favicons/manifest.json">
    <link rel="mask-icon" href="../img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="../img/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script>
        var canvas = document.body.appendChild(document.createElement('canvas')),
            context = canvas.getContext('2d');
        context.globalCompositeOperation = 'lighter';
        canvas.width = 1280;
        canvas.height = 800;
        draw();

        var textStrip = ['诶', '比', '西', '迪', '伊', '吉', '艾', '杰', '开', '哦', '屁', '提', '维'];

        var stripCount = 60,
            stripX = new Array(),
            stripY = new Array(),
            dY = new Array(),
            stripFontSize = new Array();

        for (var i = 0; i < stripCount; i++) {
            stripX[i] = Math.floor(Math.random() * 1265);
            stripY[i] = -100;
            dY[i] = Math.floor(Math.random() * 7) + 3;
            stripFontSize[i] = Math.floor(Math.random() * 16) + 8;
        }

        var theColors = ['#cefbe4', '#81ec72', '#5cd646', '#54d13c', '#4ccc32', '#43c728'];

        var elem, context, timer;

        function drawStrip(x, y) {
            for (var k = 0; k <= 20; k++) {
                var randChar = textStrip[Math.floor(Math.random() * textStrip.length)];
                if (context.fillText) {
                    switch (k) {
                    case 0:
                        context.fillStyle = theColors[0];
                        break;
                    case 1:
                        context.fillStyle = theColors[1];
                        break;
                    case 3:
                        context.fillStyle = theColors[2];
                        break;
                    case 7:
                        context.fillStyle = theColors[3];
                        break;
                    case 13:
                        context.fillStyle = theColors[4];
                        break;
                    case 17:
                        context.fillStyle = theColors[5];
                        break;
                    }
                    context.fillText(randChar, x, y);
                }
                y -= stripFontSize[k];
            }
        }

        function draw() {
            // clear the canvas and set the properties
            context.clearRect(0, 0, canvas.width, canvas.height);
            context.shadowOffsetX = context.shadowOffsetY = 0;
            context.shadowBlur = 8;
            context.shadowColor = '#94f475';

            for (var j = 0; j < stripCount; j++) {
                context.font = stripFontSize[j] + 'px MatrixCode';
                context.textBaseline = 'top';
                context.textAlign = 'center';

                if (stripY[j] > 1358) {
                    stripX[j] = Math.floor(Math.random() * canvas.width);
                    stripY[j] = -100;
                    dY[j] = Math.floor(Math.random() * 7) + 3;
                    stripFontSize[j] = Math.floor(Math.random() * 16) + 8;
                    drawStrip(stripX[j], stripY[j]);
                } else drawStrip(stripX[j], stripY[j]);

                stripY[j] += dY[j];
            }
            setTimeout(draw, 70);
        }
    </script>
</head>

<body style="overflow: auto !important;">
    <div id="calosc2">
        <div id="sub_site1">

        </div>
        <!--powody do dołączenia-->
        <div id="sub_site2">
            <div class="absolute">
                <div id="puste">
                </div>
                <div id="DLACZEGO">
                    <ul>
                        <li>Lorem ipsum dolor sit amet enim.</li>
                        <li>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis</li>
                        <li>Maecenas malesuada elit lectus felis, malesuada ultricies.</li>
                        <li>Curabitur et ligula. Ut molestie a, ultricies porta urna.</li>
                    </ul>
                </div>
            </div>
            <canvas id="canvas" width="100%" height="100%"></canvas>
        </div>
        <!--galeria-->
        <div id="sub_site3">
            <!--START JUICEBOX EMBED-->
            <script src="../img/galeria/jbcore/juicebox.js"></script>
            <script>
                new juicebox({
                    containerId: "juicebox-container",
                    galleryWidth: "100%",
                    galleryHeight: "100%",
                    backgroundColor: "#222222"
                });
            </script>
            <div id="juicebox-container"></div>
            <!--END JUICEBOX EMBED-->
        </div>
        <!--rejestracja-->
        <div id="sub_site4">
            <?php 
    // zmienne pomocnicz
	$mindlnicka = 3;      // <- minimalna dlugosc nicka
	$maxdlnicka = 20;   // <- maksymalna dlugosc nicka
	$mindlpass = 5;      // <- minimalna dlugosc hasla
	$maxdlpass = 20;   // <- maksymalna dlugosc hasla
	
	session_start();
	
	if( isset($_POST['nick']))
	{
		$reg = true;
		$nick = $_POST['nick'];
		$email = $_POST['email'];
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		$secretkey = "6LdNBRgTAAAAAI5bKl8ZG7DvI3T33aSh7Y8FwEsd";
		
		//sprawdzanie poprawnosci danych
		
		//nick
		if( ctype_alnum($nick) == false)
		{
			$reg = false;
			$_SESSION['nick_error'] = "Nick nie może zawierać polskich znaków.";
		}
		
		if( (strlen($nick) < $mindlnicka) || (strlen($nick) > $maxdlnicka))
		{
			$reg = false;
			$_SESSION['nick_error'] = "Nick musi zawierać od ".$mindlnicka." do ".$maxdlnicka." znaków";
		}
		
		//email
		
		$emailpomoc = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if((filter_var($emailpomoc, FILTER_SANITIZE_EMAIL) == false) || ($emailpomoc != $email))
		{
			$reg = false;
			$_SESSION['email_error'] = "Podałeś błędny adres e-mail.";
		}
		
		//password
		
		if((strlen($haslo1) < $mindlpass) || (strlen($haslo2) > $maxdlpass))
		{
			$reg = false;
			$_SESSION['haslo_error'] = "Hasło musi zawierać od ".$mindlpass." do ".$maxdlpass." znaków";
		}
		
		if( $haslo1 != $haslo2)
		{
			$reg = false;
			$_SESSION['haslo_error'] = "Hasła nie są identyczne.";
		}
		
		$hasz = password_hash($haslo1, PASSWORD_DEFAULT);
	
		//checkbox
	
		if (!isset($_POST['checkbox']))
		{
			$wszystko_OK=false;
			$_SESSION['checkbox_error']="Musisz zaakceptować regulamin.";
		}		
	/*z tego co czytałem catchpa opłaca się robić, tylko wedy kiedy ktoś cię DDosuje,
	// captcha  
	
	 $captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'&response='.$_POST['g-recaptcha-response']);
	 $odpcaptcha = json_decode($captcha);
	
	if ($odpcaptcha->success==false)
		{
			$reg=false;
			$_SESSION['bot_error']="Potwierdź, że jesteś człowiekiem.";
		}
	*/
	
	// dodawanie nowego uzytkownika
	
	require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{

				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM logowanie WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$reg=false;
					$_SESSION['email_error']="Istnieje już konto przypisane do tego adresu e-mail!";
				}
				
				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id FROM logowanie WHERE nick='$nick'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$reg=false;
					$_SESSION['nick_error']="Istnieje już gracz o takim nicku! Wybierz inny.";
				}
				
				if($reg == true)
				{
					
					if ($polaczenie->query("INSERT INTO logowanie VALUES (NULL, '$email', '$hasz', '$nick', 0)"))
					{
						echo "udana rejestracja";
						exit();
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
					
				}
				$polaczenie->close();
			}
		
		}
		catch( Exception $e)
				{
				echo '<div style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</div>';
				echo '<br />Informacja developerska: '.$e;
			}
	
	
        
	}
?>
                <div id="registration">
                    <div id="formInReg">
                        <form method="post">
                            <div class="formInput">
                                Twoja nazwa w grze:
                            </div>
                            <div>
                                <input name="nick" type="text" class="formInput">
                                <?php 
                                if( isset($_SESSION['nick_error']))
                                {
                                    echo '<div class = "error">'.$_SESSION['nick_error'].'</div>';
                                    unset($_SESSION['nick_error']);
                                }
                                ?>
                            </div>
                            <div class="formInput">
                                Adres email:
                            </div>
                            <div>
                                <input name="email" type="text" class="formInput">
                                <?php 
                                if( isset($_SESSION['email_error']))
                                {
                                    echo '<div class = "error">'.$_SESSION['email_error'].'</div>';
                                    unset($_SESSION['email_error']);
                                }
                                ?>
                            </div>
                            <div class="formInput">
                                Hasło:
                            </div>
                            <div>
                                <div>
                                    <input name="haslo1" type="password" class="formInput">
                                </div>
                                <div class="formInput">
                                    Powtórz hasło:
                                </div>
                                <div>
                                    <input name="haslo2" type="password" class="formInput">
                                </div>
                                <?php 
                                if( isset($_SESSION['haslo_error']))
                                {
                                    echo '<div class = "error">'.$_SESSION['haslo_error'].'</div>';
                                    unset($_SESSION['haslo_error']);
                                }
                                ?>
                            </div>
                            <div class="formInput">
                                <input type="checkbox" name="checkbox">Akceptuję regulamin
                                <?php 
                                if( isset($_SESSION['checkbox_error']))
                                {
                                    echo '<div class = "error">'.$_SESSION['checkbox_error'].'</div>';
                                    unset($_SESSION['checkbox_error']);
                                }
                                ?>
                            </div>
                            <div class="center">
                                <input type="image" name="submit" src="../img/reg1.png">
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</body>

</html>