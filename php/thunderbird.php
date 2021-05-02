

 <?php

date_default_timezone_set('Europe/London');

$name = $mailFrom = $class = $messageBody = $phone = $address = $radio = $success = '';
$nameError = $mailFromError = $classError = $messageBodyError = $phoneError = $addressError = $radioError =  '';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (empty($_POST["name"])) {
            $nameError = "Name is required.";
          } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z -]*$/",$name)) {
              $nameError = "Only letters and white space allowed.";
            }
          }

        if (empty($_POST["email"])) {
            $mailFromError = "Email is required.";
          } else {
            $mailFrom = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
              $mailFromError = "Invalid email format";
            }
          }

          if (empty($_POST["class"])) {
            $classError = "Please select an option";
          } else {
            $class = test_input($_POST["class"]);

          }

          if (empty($_POST["body"])) {
            $messageBodyError = "Message body is required.";
          } else {
            $messageBody = test_input($_POST["body"]);
            }

            if(empty($_POST['phone'])) {
                $phoneError = "Contact number is required.";
            } else {
                $phone = test_input($_POST['phone']);
            }


            if (empty($_POST["address"])) {
                $addressError = "Address is required.";
            } else {
                $address = test_input($_POST["address"]);
            //    Check if address is well-formed
                if (!preg_match("/^[0-9a-zA-Z -]*$/",$address)) {
                    $addressError = "Only letters, numbers and white space allowed.";
                  }
                }

            if(isset($_POST['time']))$radio = $_POST['time'];


            $txt = "Hello, you have recieved a web enquiry from: ".$name.
            "\n\n".$today = date("F j, Y, g:i a").
            "\n\n Phone Number: ".$phone.
            "\n\n Postcode: ".$address.
            "\n\n Type: ".$class.
            "\n\n Message: ".$messageBody.
            "\n\n Best time to call: ".$radio;


                $subject = ('Firstview Lettings Web Enquiry');
                $mailTo = "rk.selwyn@gmail.com";
                $headers = 'From:  ' . $name . ' <' . $mailFrom .'>';

                  if(mail($mailTo, $subject, $txt, $headers)){
                      $success = "Message sent, thank you for your enquiry";
                      $name = $mailFrom = $messageBody = $phone = $address = $radio = '';
                  }

            }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }



?>
