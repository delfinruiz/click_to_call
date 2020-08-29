<?

$vox_nombre     = "piero gallegos";
$vox_telefono   = "988352651";

$vox_phone = "+56".$vox_telefono;

// Your Voximplant Kit account name
define('KIT_DOMAIN', "Piero");

// API Token
define('KIT_ACCESS_TOKEN', "be5880fb72d7285513701113755089c1");

// ID of your CallerID number ID
define('KIT_CALLERID_PHONE_ID', "1684");

// Voximplant Kit scenario id
define('KIT_SCENARIO_ID', "15109");

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

echo $returned;

?>
