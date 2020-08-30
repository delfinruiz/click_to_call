<?php

    $nombre     = $_POST['nombre'];
    $pais       = $_POST['pais'];
    $telefono   = $_POST['telefono'];
    $email      = $_POST['email'];

    if ($pais == 'CH'){

      $codigo_pais = "+56";

    }elseif ($codigo_pais == 'PE') {

      $codigo_pais = "+51";

    }else {

      $codigo_pais = "+57";
    }


    $vox_nombre     = $nombre;
    $vox_telefono   = $telefono;
    $vox_phone      = $codigo_pais.$vox_telefono;

    // Nombre usuario Voximplant Kit
    define('KIT_DOMAIN', "");

    // API Token
    define('KIT_ACCESS_TOKEN', "");

    // Id numero contratado de salida
    define('KIT_CALLERID_PHONE_ID', "");

    // Id del Escenario a llamar
    define('KIT_SCENARIO_ID', "");

    // Voximplant Kit API url
    define('KIT_API_URL', "https://kit.voximplant.com/api/v3/");

    // Client data for using in scenario
    $client_data = [
        'phone' => $vox_phone,
        'client_name' => $vox_nombre
    ];

    // API Request parameters
    $run_scenario_data = [
        'domain' => KIT_DOMAIN,
        'access_token' => KIT_ACCESS_TOKEN,
        'scenario_id' => KIT_SCENARIO_ID,
        'phone_number_id' => KIT_CALLERID_PHONE_ID,
        'phone' => $client_data['phone'],
        'variables' => json_encode([
            'client_name' => $client_data['client_name']
        ])
    ];

    // HTTP Request to run the scenario
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, KIT_API_URL . "scenario/runScenario");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $run_scenario_data);
    $returned = curl_exec($ch);
    curl_close ($ch);

    echo "1";

?>
