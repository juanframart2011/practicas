<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/payu-php-sdk/lib/PayU.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__,
));

/*
PayU::$apiKey = "6mBz635A919po12BtVaY591S9t"; //apiKey de prueba.
PayU::$apiLogin = "cYhVr7POCRRt154"; //apiLogin de prueba.
PayU::$merchantId = "725071"; //Id de Comercio de prueba.*/

PayU::$apiKey = "4Vj8eK4rloUd272L48hsrarnUA"; //apiKey de prueba.
PayU::$apiLogin = "pRRXKOl8ikMmt9u"; //apiLogin de prueba.
PayU::$merchantId = "508029"; //Id de Comercio de prueba.
PayU::$language = SupportedLanguages::ES; //Seleccione el idioma.
PayU::$isTest = true; //Dejarlo True cuando sean pruebas.
//URL de Pagos
#Environment::setPaymentsCustomUrl("https://stg.api.payulatam.com/payments-api/4.0/service.cgi");
//URL de Consultas
#Environment::setReportsCustomUrl("https://stg.api.payulatam.com/reports-api/4.0/service.cgi");
Environment::setPaymentsCustomUrl("https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi");

//Renderizamos nuestro template donde va a contar con los formularios de los metodos de pagos
$app->get('/', function() use($app) {
    return $app['twig']->render('template.html');
});

$parameters = array(
    //Ingrese aquí el número de cuotas.
    PayUParameters::INSTALLMENTS_NUMBER => "1",
    //Ingrese aquí el nombre del pais.
    PayUParameters::COUNTRY => PayUCountries::MX,
    //Ingrese aquí el identificador de la cuenta.
    PayUParameters::ACCOUNT_ID => "512324",
    //Cookie de la sesión actual.
    PayUParameters::PAYER_COOKIE => "cookie_" . time(),
    //Ingrese aquí la moneda.
    PayUParameters::CURRENCY => "MXN",
    //Se ingresa el id de usuario, una referencia del sistema
    PayUParameters::PAYER_ID => "125",
    //Ingrese aquí el código de referencia.
    PayUParameters::REFERENCE_CODE => "100",
    //Ingrese aquí la descripción.
    PayUParameters::DESCRIPTION => "Test de pago",
    //Ingrese aquí el valor o monto a pagar.
    PayUParameters::VALUE => 300,
    //Ingrese aquí su firma. “{APIKEY}~{MERCHANTID}~{REFERENCE_CODE}~{VALUE}~{CURRENCY}�?
    PayUParameters::SIGNATURE => md5(PayU::$apiKey . "~" . PayU::$merchantId . "~" . "100" . "~" . "300" . "~MXN"),
);


$app->post('/creditcard-payment', function() use($app, $parameters) {
    /* Recibimos por POST los datos de la tarjeta de credito */
    $parameters[PayUParameters::PAYER_NAME] = $app['request']->get('payer_name');
    $parameters[PayUParameters::CREDIT_CARD_NUMBER] = $app['request']->get('credit_card_number');
    $parameters[PayUParameters::CREDIT_CARD_EXPIRATION_DATE] = $app['request']->get('year_exp') . "/" . $app['request']->get('month_exp');
    $parameters[PayUParameters::CREDIT_CARD_SECURITY_CODE] = $app['request']->get('cvv');
    $parameters[PayUParameters::PROCESS_WITHOUT_CVV2] = false;
    //VISA,MASTERCARD,ETC
    $parameters[PayUParameters::PAYMENT_METHOD] = $app['request']->get('payment_method');
    $response = array("status" => "ok");
    $statusCode = 200;

    try{
        
        $payu_response = PayUPayments::doAuthorizationAndCapture( $parameters );
        if( $payu_response->code == "SUCCESS" ){
            
            if( $payu_response->transactionResponse->state == "APPROVED" ){

                 //TODO: Realizar una accion en el caso de que el estado de la transaccion este aprobado.
            }
            else{

                $response["status"] = "error";
                $response["message"] = "NOT APPROVED";
            }

            $response['transactionResponse'] = $payu_response->transactionResponse;
        }
        else{
            //TODO
            $response["status"] = "error";
            $response["message"] = $payu_response->code;
            $statusCode = 500;
        }
    }
    catch( Exception $exc ){
        
        $response["status"] = "error";
        $response["message"] = "AA " . $exc->getMessage();
        $statusCode = 500;
    }
    return $app->json($response, $statusCode);
});

/*$app->post('/cash-payment', function() use($app, $parameters) {
    $parameters[PayUParameters::PAYER_NAME] = $app['request']->get('payer_name');
    $parameters[PayUParameters::PAYER_COOKIE] = "cookie_ed_" . time();
    $parameters[PayUParameters::PAYER_DNI] = $app['request']->get('payer_dni');
    $parameters[PayUParameters::PAYMENT_METHOD] = $app['request']->get('payment_method');
    $response = array("status" => "ok");
    $statusCode = 200;
    try {
        $payu_response = PayUPayments::doAuthorizationAndCapture($parameters);
        if ($payu_response->code == "SUCCESS") {
            if ($payu_response->transactionResponse->state == "APPROVED") {
                //TODO: Realizar una accion en el caso de que el estado de la transaccion este aprobado.
            } else {
                $response["status"] = "error";
                $response["message"] = "ERROR";
            }
            $response['transactionResponse'] = $payu_response->transactionResponse;
        } else {
            //TODO
            $response["status"] = "error";
            $response["message"] = $payu_response->code;
            $statusCode = 500;
        }
    } catch (Exception $exc) {
        $response["status"] = "error";
        $response["message"] = $exc->getMessage();
        $statusCode = 500;
    }
    return $app->json($response, $statusCode);
});*/

$app->run();