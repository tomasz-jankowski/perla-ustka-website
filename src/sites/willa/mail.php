<?php
    session_start();
    $allOK = true;

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dateStart = $_POST['dateStart'];
    $dateEnd = $_POST['dateEnd'];
    $apartment = $_POST['apartment'];
    $number = $_POST['number'];
    if(isset($_POST['message']))
        $message = $_POST['message'];

    $emailOK = filter_var($email, FILTER_SANITIZE_EMAIL);
    if ((filter_var($emailOK, FILTER_VALIDATE_EMAIL) == false) || ($emailOK != $email))
    {
      $allOK = false;
      $_SESSION['e_email'] = '<p class="error">Podaj poprawny adres mailowy.</p>';
    }

    $dateStartP = strtotime($dateStart);
    $dateEndP = strtotime($dateEnd);
    $today = strtotime('today');

    if ($dateStartP < $today)
    {
        $allOK = false;
        $_SESSION['e_dateStart'] = '<p class="error">Data wcześniejsza niż dzisiaj!</p>';
    }

    if ($dateEndP < $today && $dateEndP <= $dateStartP)
    {
        $allOK = false;
        $_SESSION['e_date2'] = '<p class="error">Data wcześniejsza niż dzisiaj!<br />Niepoprawny zakres dat!</p>';
    }
        else if ($dateEndP < $today)
        {
            $allOK = false;
            $_SESSION['e_dateEnd'] = '<p class="error">Data wcześniejsza niż dzisiaj!</p>';
        }

        else if ($dateEndP <= $dateStartP)
        {
            $allOK = false;
            $_SESSION['e_dates'] = '<p class="error font-weight-normal">Niepoprawny zakres dat!</p>';
        }

    if($allOK == true)
    {
        $to = "perla@pensjonat.ustka.pl";
        $subject = "Rezerwacja od: " . $fullname . " (" . $email . ")";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: " . "Willa Perła" . " <pensjonat@perla.ustka.pl>\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        $data = '<html><body>';
        $data .= "<h2>Willa Perła</h2>";
        $data .= "<h3>Dane rezerwacji:</h3>";
        $data .= "<p><b>Imię i nazwisko: </b>" . $fullname . "<br />\r\n";
        $data .= "<b>Adres mailowy: </b>" . $email . "<br />\r\n";
        $data .= "<b>Numer telefonu: </b>" . $phone . "</p>\r\n";
            $dateStart2 = date("d.m.Y", strtotime($dateStart));
            $dateEnd2 = date("d.m.Y", strtotime($dateEnd));
        $data .= "<p><b>Termin: </b>" . $dateStart2 . " - " . $dateEnd2 . "<br />\r\n";
        $data .= "<b>Apartament: </b>" . $apartment . "<br />\r\n";
        $data .= "<b>Ilość osób: </b>" . $number . "</p>\r\n";
        if ($message != "")
        {
            $data .= "<p><b>Wiadomość: </b><br />\r\n";
            $data .= "" . $message . "</p>\r\n";
        }
        $data .= "</body></html>";

        ob_start();
        $sendmail = mail($to, $subject, $data, $headers);
        if($sendmail)
        {
            session_unset();
            $_SESSION['mailSent'] = '<p class="error text-success" id="successMessage"><br />Wiadomość wysłana, dziękujemy!</p>';
        }
            else
            {
                $_SESSION['mailSent'] = '<p class="error" id="successMessage"><br />Błąd serwera, prosimy o bezpośredni kontakt.</p>';
            }
        header('Location: rezerwacja?#message');
    }    

    else
    {
        $_SESSION['fullname'] = $fullname; 
        $_SESSION['email'] = $email; 
        $_SESSION['phone'] = $phone; 
        $_SESSION['dateStart'] = $dateStart;
        $_SESSION['dateEnd'] = $dateEnd;
        $_SESSION['apartment'] = $apartment;
        $_SESSION['number'] = $number;
        if(isset($message))
            $_SESSION['message'] = $message;
        header('Location: rezerwacja?#formRedir');
    }
?>