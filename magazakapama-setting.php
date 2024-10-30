<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo __( 'Magaza Kapama Wordpress Plugin Sayfasına Hoş Geldiniz.', 'magaza-kapama' ) ?></title>
</head>
<body>
<form method="post" action="options.php">
<h2><?php echo __( 'Magaza Kapama', 'magaza-kapama' ) ?><div style="float:right; padding-right:50px;"></h2>
<hr />
<p><?php echo __( 'Woocommerce online satış mağazanızı istediğiniz gün ve saatlerde kapatın.', 'magaza-kapama' ); ?></p>
<hr />
<div id="col-left" class='magazakapama_admin'>
	<?php settings_fields ( 'magazakapama-hub' ); ?>
    <?php do_settings_sections ( 'magazakapama-hub' ); ?>
	<?php	
	$magazakapama_options = get_option( 'magazakapama_options' );	
	$timezones = array ('Africa/Abidjan'=>'Africa/Abidjan', 'Africa/Accra'=>'Africa/Accra', 'Africa/Addis_Ababa'=>'Africa/Addis_Ababa', 'Africa/Algiers'=>'Africa/Algiers', 'Africa/Asmara'=>'Africa/Asmara', 'Africa/Bamako'=>'Africa/Bamako', 'Africa/Bangui'=>'Africa/Bangui', 'Africa/Banjul'=>'Africa/Banjul', 'Africa/Bissau'=>'Africa/Bissau', 'Africa/Blantyre'=>'Africa/Blantyre', 'Africa/Brazzaville'=>'Africa/Brazzaville', 'Africa/Bujumbura'=>'Africa/Bujumbura', 'Africa/Cairo'=>'Africa/Cairo', 'Africa/Casablanca'=>'Africa/Casablanca', 'Africa/Ceuta'=>'Africa/Ceuta', 'Africa/Conakry'=>'Africa/Conakry', 'Africa/Dakar'=>'Africa/Dakar', 'Africa/Dar_es_Salaam'=>'Africa/Dar_es_Salaam', 'Africa/Djibouti'=>'Africa/Djibouti', 'Africa/Douala'=>'Africa/Douala', 'Africa/El_Aaiun'=>'Africa/El_Aaiun', 'Africa/Freetown'=>'Africa/Freetown', 'Africa/Gaborone'=>'Africa/Gaborone', 'Africa/Harare'=>'Africa/Harare', 'Africa/Johannesburg'=>'Africa/Johannesburg', 'Africa/Juba'=>'Africa/Juba', 'Africa/Kampala'=>'Africa/Kampala', 'Africa/Khartoum'=>'Africa/Khartoum', 'Africa/Kigali'=>'Africa/Kigali', 'Africa/Kinshasa'=>'Africa/Kinshasa', 'Africa/Lagos'=>'Africa/Lagos', 'Africa/Libreville'=>'Africa/Libreville', 'Africa/Lome'=>'Africa/Lome', 'Africa/Luanda'=>'Africa/Luanda', 'Africa/Lubumbashi'=>'Africa/Lubumbashi', 'Africa/Lusaka'=>'Africa/Lusaka', 'Africa/Malabo'=>'Africa/Malabo', 'Africa/Maputo'=>'Africa/Maputo', 'Africa/Maseru'=>'Africa/Maseru', 'Africa/Mbabane'=>'Africa/Mbabane', 'Africa/Mogadishu'=>'Africa/Mogadishu', 'Africa/Monrovia'=>'Africa/Monrovia', 'Africa/Nairobi'=>'Africa/Nairobi', 'Africa/Ndjamena'=>'Africa/Ndjamena', 'Africa/Niamey'=>'Africa/Niamey', 'Africa/Nouakchott'=>'Africa/Nouakchott', 'Africa/Ouagadougou'=>'Africa/Ouagadougou', 'Africa/Porto-Novo'=>'Africa/Porto-Novo', 'Africa/Sao_Tome'=>'Africa/Sao_Tome', 'Africa/Tripoli'=>'Africa/Tripoli', 'Africa/Tunis'=>'Africa/Tunis', 'Africa/Windhoek'=>'Africa/Windhoek', 'America/Adak'=>'America/Adak', 'America/Anchorage'=>'America/Anchorage', 'America/Anguilla'=>'America/Anguilla', 'America/Antigua'=>'America/Antigua', 'America/Araguaina'=>'America/Araguaina', 'America/Argentina/Buenos_Aires'=>'America/Argentina/Buenos_Aires', 'America/Argentina/Catamarca'=>'America/Argentina/Catamarca', 'America/Argentina/Cordoba'=>'America/Argentina/Cordoba', 'America/Argentina/Jujuy'=>'America/Argentina/Jujuy', 'America/Argentina/La_Rioja'=>'America/Argentina/La_Rioja', 'America/Argentina/Mendoza'=>'America/Argentina/Mendoza', 'America/Argentina/Rio_Gallegos'=>'America/Argentina/Rio_Gallegos', 'America/Argentina/Salta'=>'America/Argentina/Salta', 'America/Argentina/San_Juan'=>'America/Argentina/San_Juan', 'America/Argentina/San_Luis'=>'America/Argentina/San_Luis', 'America/Argentina/Tucuman'=>'America/Argentina/Tucuman', 'America/Argentina/Ushuaia'=>'America/Argentina/Ushuaia', 'America/Aruba'=>'America/Aruba', 'America/Asuncion'=>'America/Asuncion', 'America/Atikokan'=>'America/Atikokan', 'America/Bahia'=>'America/Bahia', 'America/Bahia_Banderas'=>'America/Bahia_Banderas', 'America/Barbados'=>'America/Barbados', 'America/Belem'=>'America/Belem', 'America/Belize'=>'America/Belize', 'America/Blanc-Sablon'=>'America/Blanc-Sablon', 'America/Boa_Vista'=>'America/Boa_Vista', 'America/Bogota'=>'America/Bogota', 'America/Boise'=>'America/Boise', 'America/Cambridge_Bay'=>'America/Cambridge_Bay', 'America/Campo_Grande'=>'America/Campo_Grande', 'America/Cancun'=>'America/Cancun', 'America/Caracas'=>'America/Caracas', 'America/Cayenne'=>'America/Cayenne', 'America/Cayman'=>'America/Cayman', 'America/Chicago'=>'America/Chicago', 'America/Chihuahua'=>'America/Chihuahua', 'America/Costa_Rica'=>'America/Costa_Rica', 'America/Creston'=>'America/Creston', 'America/Cuiaba'=>'America/Cuiaba', 'America/Curacao'=>'America/Curacao', 'America/Danmarkshavn'=>'America/Danmarkshavn', 'America/Dawson'=>'America/Dawson', 'America/Dawson_Creek'=>'America/Dawson_Creek', 'America/Denver'=>'America/Denver', 'America/Detroit'=>'America/Detroit', 'America/Dominica'=>'America/Dominica', 'America/Edmonton'=>'America/Edmonton', 'America/Eirunepe'=>'America/Eirunepe', 'America/El_Salvador'=>'America/El_Salvador', 'America/Fort_Nelson'=>'America/Fort_Nelson', 'America/Fortaleza'=>'America/Fortaleza', 'America/Glace_Bay'=>'America/Glace_Bay', 'America/Godthab'=>'America/Godthab', 'America/Goose_Bay'=>'America/Goose_Bay', 'America/Grand_Turk'=>'America/Grand_Turk', 'America/Grenada'=>'America/Grenada', 'America/Guadeloupe'=>'America/Guadeloupe', 'America/Guatemala'=>'America/Guatemala', 'America/Guayaquil'=>'America/Guayaquil', 'America/Guyana'=>'America/Guyana', 'America/Halifax'=>'America/Halifax', 'America/Havana'=>'America/Havana', 'America/Hermosillo'=>'America/Hermosillo', 'America/Indiana/Indianapolis'=>'America/Indiana/Indianapolis', 'America/Indiana/Knox'=>'America/Indiana/Knox', 'America/Indiana/Marengo'=>'America/Indiana/Marengo', 'America/Indiana/Petersburg'=>'America/Indiana/Petersburg', 'America/Indiana/Tell_City'=>'America/Indiana/Tell_City', 'America/Indiana/Vevay'=>'America/Indiana/Vevay', 'America/Indiana/Vincennes'=>'America/Indiana/Vincennes', 'America/Indiana/Winamac'=>'America/Indiana/Winamac', 'America/Inuvik'=>'America/Inuvik', 'America/Iqaluit'=>'America/Iqaluit', 'America/Jamaica'=>'America/Jamaica', 'America/Juneau'=>'America/Juneau', 'America/Kentucky/Louisville'=>'America/Kentucky/Louisville', 'America/Kentucky/Monticello'=>'America/Kentucky/Monticello', 'America/Kralendijk'=>'America/Kralendijk', 'America/La_Paz'=>'America/La_Paz', 'America/Lima'=>'America/Lima', 'America/Los_Angeles'=>'America/Los_Angeles', 'America/Lower_Princes'=>'America/Lower_Princes', 'America/Maceio'=>'America/Maceio', 'America/Managua'=>'America/Managua', 'America/Manaus'=>'America/Manaus', 'America/Marigot'=>'America/Marigot', 'America/Martinique'=>'America/Martinique', 'America/Matamoros'=>'America/Matamoros', 'America/Mazatlan'=>'America/Mazatlan', 'America/Menominee'=>'America/Menominee', 'America/Merida'=>'America/Merida', 'America/Metlakatla'=>'America/Metlakatla', 'America/Mexico_City'=>'America/Mexico_City', 'America/Miquelon'=>'America/Miquelon', 'America/Moncton'=>'America/Moncton', 'America/Monterrey'=>'America/Monterrey', 'America/Montevideo'=>'America/Montevideo', 'America/Montserrat'=>'America/Montserrat', 'America/Nassau'=>'America/Nassau', 'America/New_York'=>'America/New_York', 'America/Nipigon'=>'America/Nipigon', 'America/Nome'=>'America/Nome', 'America/Noronha'=>'America/Noronha', 'America/North_Dakota/Beulah'=>'America/North_Dakota/Beulah', 'America/North_Dakota/Center'=>'America/North_Dakota/Center', 'America/North_Dakota/New_Salem'=>'America/North_Dakota/New_Salem', 'America/Ojinaga'=>'America/Ojinaga', 'America/Panama'=>'America/Panama', 'America/Pangnirtung'=>'America/Pangnirtung', 'America/Paramaribo'=>'America/Paramaribo', 'America/Phoenix'=>'America/Phoenix', 'America/Port-au-Prince'=>'America/Port-au-Prince', 'America/Port_of_Spain'=>'America/Port_of_Spain', 'America/Porto_Velho'=>'America/Porto_Velho', 'America/Puerto_Rico'=>'America/Puerto_Rico', 'America/Rainy_River'=>'America/Rainy_River', 'America/Rankin_Inlet'=>'America/Rankin_Inlet', 'America/Recife'=>'America/Recife', 'America/Regina'=>'America/Regina', 'America/Resolute'=>'America/Resolute', 'America/Rio_Branco'=>'America/Rio_Branco', 'America/Santarem'=>'America/Santarem', 'America/Santiago'=>'America/Santiago', 'America/Santo_Domingo'=>'America/Santo_Domingo', 'America/Sao_Paulo'=>'America/Sao_Paulo', 'America/Scoresbysund'=>'America/Scoresbysund', 'America/Sitka'=>'America/Sitka', 'America/St_Barthelemy'=>'America/St_Barthelemy', 'America/St_Johns'=>'America/St_Johns', 'America/St_Kitts'=>'America/St_Kitts', 'America/St_Lucia'=>'America/St_Lucia', 'America/St_Thomas'=>'America/St_Thomas', 'America/St_Vincent'=>'America/St_Vincent', 'America/Swift_Current'=>'America/Swift_Current', 'America/Tegucigalpa'=>'America/Tegucigalpa', 'America/Thule'=>'America/Thule', 'America/Thunder_Bay'=>'America/Thunder_Bay', 'America/Tijuana'=>'America/Tijuana', 'America/Toronto'=>'America/Toronto', 'America/Tortola'=>'America/Tortola', 'America/Vancouver'=>'America/Vancouver', 'America/Whitehorse'=>'America/Whitehorse', 'America/Winnipeg'=>'America/Winnipeg', 'America/Yakutat'=>'America/Yakutat', 'America/Yellowknife'=>'America/Yellowknife', 'Antarctica/Casey'=>'Antarctica/Casey', 'Antarctica/Davis'=>'Antarctica/Davis', 'Antarctica/DumontDUrville'=>'Antarctica/DumontDUrville', 'Antarctica/Macquarie'=>'Antarctica/Macquarie', 'Antarctica/Mawson'=>'Antarctica/Mawson', 'Antarctica/McMurdo'=>'Antarctica/McMurdo', 'Antarctica/Palmer'=>'Antarctica/Palmer', 'Antarctica/Rothera'=>'Antarctica/Rothera', 'Antarctica/Syowa'=>'Antarctica/Syowa', 'Antarctica/Troll'=>'Antarctica/Troll', 'Antarctica/Vostok'=>'Antarctica/Vostok', 'Arctic/Longyearbyen'=>'Arctic/Longyearbyen', 'Asia/Aden'=>'Asia/Aden', 'Asia/Almaty'=>'Asia/Almaty', 'Asia/Amman'=>'Asia/Amman', 'Asia/Anadyr'=>'Asia/Anadyr', 'Asia/Aqtau'=>'Asia/Aqtau', 'Asia/Aqtobe'=>'Asia/Aqtobe', 'Asia/Ashgabat'=>'Asia/Ashgabat', 'Asia/Baghdad'=>'Asia/Baghdad', 'Asia/Bahrain'=>'Asia/Bahrain', 'Asia/Baku'=>'Asia/Baku', 'Asia/Bangkok'=>'Asia/Bangkok', 'Asia/Barnaul'=>'Asia/Barnaul', 'Asia/Beirut'=>'Asia/Beirut', 'Asia/Bishkek'=>'Asia/Bishkek', 'Asia/Brunei'=>'Asia/Brunei', 'Asia/Chita'=>'Asia/Chita', 'Asia/Choibalsan'=>'Asia/Choibalsan', 'Asia/Colombo'=>'Asia/Colombo', 'Asia/Damascus'=>'Asia/Damascus', 'Asia/Dhaka'=>'Asia/Dhaka', 'Asia/Dili'=>'Asia/Dili', 'Asia/Dubai'=>'Asia/Dubai', 'Asia/Dushanbe'=>'Asia/Dushanbe', 'Asia/Gaza'=>'Asia/Gaza', 'Asia/Hebron'=>'Asia/Hebron', 'Asia/Ho_Chi_Minh'=>'Asia/Ho_Chi_Minh', 'Asia/Hong_Kong'=>'Asia/Hong_Kong', 'Asia/Hovd'=>'Asia/Hovd', 'Asia/Irkutsk'=>'Asia/Irkutsk', 'Asia/Jakarta'=>'Asia/Jakarta', 'Asia/Jayapura'=>'Asia/Jayapura', 'Asia/Jerusalem'=>'Asia/Jerusalem', 'Asia/Kabul'=>'Asia/Kabul', 'Asia/Kamchatka'=>'Asia/Kamchatka', 'Asia/Karachi'=>'Asia/Karachi', 'Asia/Kathmandu'=>'Asia/Kathmandu', 'Asia/Khandyga'=>'Asia/Khandyga', 'Asia/Kolkata'=>'Asia/Kolkata', 'Asia/Krasnoyarsk'=>'Asia/Krasnoyarsk', 'Asia/Kuala_Lumpur'=>'Asia/Kuala_Lumpur', 'Asia/Kuching'=>'Asia/Kuching', 'Asia/Kuwait'=>'Asia/Kuwait', 'Asia/Macau'=>'Asia/Macau', 'Asia/Magadan'=>'Asia/Magadan', 'Asia/Makassar'=>'Asia/Makassar', 'Asia/Manila'=>'Asia/Manila', 'Asia/Muscat'=>'Asia/Muscat', 'Asia/Nicosia'=>'Asia/Nicosia', 'Asia/Novokuznetsk'=>'Asia/Novokuznetsk', 'Asia/Novosibirsk'=>'Asia/Novosibirsk', 'Asia/Omsk'=>'Asia/Omsk', 'Asia/Oral'=>'Asia/Oral', 'Asia/Phnom_Penh'=>'Asia/Phnom_Penh', 'Asia/Pontianak'=>'Asia/Pontianak', 'Asia/Pyongyang'=>'Asia/Pyongyang', 'Asia/Qatar'=>'Asia/Qatar', 'Asia/Qyzylorda'=>'Asia/Qyzylorda', 'Asia/Riyadh'=>'Asia/Riyadh', 'Asia/Sakhalin'=>'Asia/Sakhalin', 'Asia/Samarkand'=>'Asia/Samarkand', 'Asia/Seoul'=>'Asia/Seoul', 'Asia/Shanghai'=>'Asia/Shanghai', 'Asia/Singapore'=>'Asia/Singapore', 'Asia/Srednekolymsk'=>'Asia/Srednekolymsk', 'Asia/Taipei'=>'Asia/Taipei', 'Asia/Tashkent'=>'Asia/Tashkent', 'Asia/Tbilisi'=>'Asia/Tbilisi', 'Asia/Tehran'=>'Asia/Tehran', 'Asia/Thimphu'=>'Asia/Thimphu', 'Asia/Tokyo'=>'Asia/Tokyo', 'Asia/Tomsk'=>'Asia/Tomsk', 'Asia/Ulaanbaatar'=>'Asia/Ulaanbaatar', 'Asia/Urumqi'=>'Asia/Urumqi', 'Asia/Ust-Nera'=>'Asia/Ust-Nera', 'Asia/Vientiane'=>'Asia/Vientiane', 'Asia/Vladivostok'=>'Asia/Vladivostok', 'Asia/Yakutsk'=>'Asia/Yakutsk', 'Asia/Yangon'=>'Asia/Yangon', 'Asia/Yekaterinburg'=>'Asia/Yekaterinburg', 'Asia/Yerevan'=>'Asia/Yerevan', 'Atlantic/Azores'=>'Atlantic/Azores', 'Atlantic/Bermuda'=>'Atlantic/Bermuda', 'Atlantic/Canary'=>'Atlantic/Canary', 'Atlantic/Cape_Verde'=>'Atlantic/Cape_Verde', 'Atlantic/Faroe'=>'Atlantic/Faroe', 'Atlantic/Madeira'=>'Atlantic/Madeira', 'Atlantic/Reykjavik'=>'Atlantic/Reykjavik', 'Atlantic/South_Georgia'=>'Atlantic/South_Georgia', 'Atlantic/St_Helena'=>'Atlantic/St_Helena', 'Atlantic/Stanley'=>'Atlantic/Stanley', 'Australia/Adelaide'=>'Australia/Adelaide', 'Australia/Brisbane'=>'Australia/Brisbane', 'Australia/Broken_Hill'=>'Australia/Broken_Hill', 'Australia/Currie'=>'Australia/Currie', 'Australia/Darwin'=>'Australia/Darwin', 'Australia/Eucla'=>'Australia/Eucla', 'Australia/Hobart'=>'Australia/Hobart', 'Australia/Lindeman'=>'Australia/Lindeman', 'Australia/Lord_Howe'=>'Australia/Lord_Howe', 'Australia/Melbourne'=>'Australia/Melbourne', 'Australia/Perth'=>'Australia/Perth', 'Australia/Sydney'=>'Australia/Sydney', 'Europe/Amsterdam'=>'Europe/Amsterdam', 'Europe/Andorra'=>'Europe/Andorra', 'Europe/Astrakhan'=>'Europe/Astrakhan', 'Europe/Athens'=>'Europe/Athens', 'Europe/Belgrade'=>'Europe/Belgrade', 'Europe/Berlin'=>'Europe/Berlin', 'Europe/Bratislava'=>'Europe/Bratislava', 'Europe/Brussels'=>'Europe/Brussels', 'Europe/Bucharest'=>'Europe/Bucharest', 'Europe/Budapest'=>'Europe/Budapest', 'Europe/Busingen'=>'Europe/Busingen', 'Europe/Chisinau'=>'Europe/Chisinau', 'Europe/Copenhagen'=>'Europe/Copenhagen', 'Europe/Dublin'=>'Europe/Dublin', 'Europe/Gibraltar'=>'Europe/Gibraltar', 'Europe/Guernsey'=>'Europe/Guernsey', 'Europe/Helsinki'=>'Europe/Helsinki', 'Europe/Isle_of_Man'=>'Europe/Isle_of_Man', 'Europe/Istanbul'=>'Europe/Istanbul', 'Europe/Jersey'=>'Europe/Jersey', 'Europe/Kaliningrad'=>'Europe/Kaliningrad', 'Europe/Kiev'=>'Europe/Kiev', 'Europe/Kirov'=>'Europe/Kirov', 'Europe/Lisbon'=>'Europe/Lisbon', 'Europe/Ljubljana'=>'Europe/Ljubljana', 'Europe/London'=>'Europe/London', 'Europe/Luxembourg'=>'Europe/Luxembourg', 'Europe/Madrid'=>'Europe/Madrid', 'Europe/Malta'=>'Europe/Malta', 'Europe/Mariehamn'=>'Europe/Mariehamn', 'Europe/Minsk'=>'Europe/Minsk', 'Europe/Monaco'=>'Europe/Monaco', 'Europe/Moscow'=>'Europe/Moscow', 'Europe/Oslo'=>'Europe/Oslo', 'Europe/Paris'=>'Europe/Paris', 'Europe/Podgorica'=>'Europe/Podgorica', 'Europe/Prague'=>'Europe/Prague', 'Europe/Riga'=>'Europe/Riga', 'Europe/Rome'=>'Europe/Rome', 'Europe/Samara'=>'Europe/Samara', 'Europe/San_Marino'=>'Europe/San_Marino', 'Europe/Sarajevo'=>'Europe/Sarajevo', 'Europe/Simferopol'=>'Europe/Simferopol', 'Europe/Skopje'=>'Europe/Skopje', 'Europe/Sofia'=>'Europe/Sofia', 'Europe/Stockholm'=>'Europe/Stockholm', 'Europe/Tallinn'=>'Europe/Tallinn', 'Europe/Tirane'=>'Europe/Tirane', 'Europe/Ulyanovsk'=>'Europe/Ulyanovsk', 'Europe/Uzhgorod'=>'Europe/Uzhgorod', 'Europe/Vaduz'=>'Europe/Vaduz', 'Europe/Vatican'=>'Europe/Vatican', 'Europe/Vienna'=>'Europe/Vienna', 'Europe/Vilnius'=>'Europe/Vilnius', 'Europe/Volgograd'=>'Europe/Volgograd', 'Europe/Warsaw'=>'Europe/Warsaw', 'Europe/Zagreb'=>'Europe/Zagreb', 'Europe/Zaporozhye'=>'Europe/Zaporozhye', 'Europe/Zurich'=>'Europe/Zurich', 'Indian/Antananarivo'=>'Indian/Antananarivo', 'Indian/Chagos'=>'Indian/Chagos', 'Indian/Christmas'=>'Indian/Christmas', 'Indian/Cocos'=>'Indian/Cocos', 'Indian/Comoro'=>'Indian/Comoro', 'Indian/Kerguelen'=>'Indian/Kerguelen', 'Indian/Mahe'=>'Indian/Mahe', 'Indian/Maldives'=>'Indian/Maldives', 'Indian/Mauritius'=>'Indian/Mauritius', 'Indian/Mayotte'=>'Indian/Mayotte', 'Indian/Reunion'=>'Indian/Reunion', 'Pacific/Apia'=>'Pacific/Apia', 'Pacific/Auckland'=>'Pacific/Auckland', 'Pacific/Bougainville'=>'Pacific/Bougainville', 'Pacific/Chatham'=>'Pacific/Chatham', 'Pacific/Chuuk'=>'Pacific/Chuuk', 'Pacific/Easter'=>'Pacific/Easter', 'Pacific/Efate'=>'Pacific/Efate', 'Pacific/Enderbury'=>'Pacific/Enderbury', 'Pacific/Fakaofo'=>'Pacific/Fakaofo', 'Pacific/Fiji'=>'Pacific/Fiji', 'Pacific/Funafuti'=>'Pacific/Funafuti', 'Pacific/Galapagos'=>'Pacific/Galapagos', 'Pacific/Gambier'=>'Pacific/Gambier', 'Pacific/Guadalcanal'=>'Pacific/Guadalcanal', 'Pacific/Guam'=>'Pacific/Guam', 'Pacific/Honolulu'=>'Pacific/Honolulu', 'Pacific/Johnston'=>'Pacific/Johnston', 'Pacific/Kiritimati'=>'Pacific/Kiritimati', 'Pacific/Kosrae'=>'Pacific/Kosrae', 'Pacific/Kwajalein'=>'Pacific/Kwajalein', 'Pacific/Majuro'=>'Pacific/Majuro', 'Pacific/Marquesas'=>'Pacific/Marquesas', 'Pacific/Midway'=>'Pacific/Midway', 'Pacific/Nauru'=>'Pacific/Nauru', 'Pacific/Niue'=>'Pacific/Niue', 'Pacific/Norfolk'=>'Pacific/Norfolk', 'Pacific/Noumea'=>'Pacific/Noumea', 'Pacific/Pago_Pago'=>'Pacific/Pago_Pago', 'Pacific/Palau'=>'Pacific/Palau', 'Pacific/Pitcairn'=>'Pacific/Pitcairn', 'Pacific/Pohnpei'=>'Pacific/Pohnpei', 'Pacific/Port_Moresby'=>'Pacific/Port_Moresby', 'Pacific/Rarotonga'=>'Pacific/Rarotonga', 'Pacific/Saipan'=>'Pacific/Saipan', 'Pacific/Tahiti'=>'Pacific/Tahiti', 'Pacific/Tarawa'=>'Pacific/Tarawa', 'Pacific/Tongatapu'=>'Pacific/Tongatapu', 'Pacific/Wake'=>'Pacific/Wake', 'Pacific/Wallis'=>'Pacific/Wallis', 'UTC'=>'UTC');
	$daysweek = array(__( 'Pazartesi', 'magaza-kapama' ), __( 'Salı', 'magaza-kapama' ), __( 'Çarşamba', 'magaza-kapama' ), __( 'Perşembe', 'magaza-kapama' ), __( 'Cuma', 'magaza-kapama' ), __( 'Cumartesi', 'magaza-kapama' ), __( 'Pazar', 'magaza-kapama' ),);
	date_default_timezone_set($magazakapama_options[0][2]);
	$timezoneshow =  date('H:i');	
	?>
    <table class='magazakapama_admintable'>
		<tbody>
		<tr>
			<th align='center' valign='middle'></th>
			<th align='center' valign='middle'></th>
			<td colspan='3' align='center' valign='middle' class='tabletitle'><?php echo __('Açılış', 'magaza-kapama' ); ?></td>
			<td align='center' valign='middle'>&nbsp;</td>
			<td colspan='3' align='center' valign='middle' class='tabletitle'><?php echo __('Kapanış', 'magaza-kapama' ); ?></td>
		</tr>
		<?php 
		foreach($magazakapama_options[0][0] as $day_name=>$times){
			if ($magazakapama_options[0][0][$day_name][0]==true) $day_active =  'checked="checked" ';
			else $day_active =''; ?>
        	
			<tr data-day='<?php echo $daysweek[$day_name]; ?>'>
			<th align='right' valign='middle' class='day'><?php echo $daysweek[$day_name]; ?></th>
			<th align='right' valign='middle' class='dayact'><input type='checkbox' name='magazakapama_options[0][0][<?php echo $day_name; ?>][0]' <?php echo $day_active; ?> ></th>
				<td align='right' class='hours'><input type='number' name='magazakapama_options[0][0][<?php echo $day_name; ?>][1]' value='<?php echo $times[1]; ?>' min='1' max='23'></td>
				<td align='center' class='msep'>:</td>
				<td align='left' class='mins'><input type='number' name='magazakapama_options[0][0][<?php echo $day_name; ?>][2]' value='<?php echo $times[2]; ?>' min='0' max='59'></td>
				<td align='center' class='tsep'>&nbsp;</td>
				<td align='right' class='hours'><input type='number' name='magazakapama_options[0][0][<?php echo $day_name; ?>][3]' value='<?php echo $times[3]; ?>' min='1' max='23'></td>
				<td align='center' class='msep'>:</td>
				<td align='left' class='mins'><input type='number' name='magazakapama_options[0][0][<?php echo $day_name; ?>][4]' value='<?php echo $times[4]; ?>' min='0' max='59'></td>
			</tr>
		<?php } ?> 
		</tr>
		<tr align='center' valign='middle' class='tabletitle'>
			<td colspan='9' valign='middle'><strong><?php echo __('Saat Dilimi', 'magaza-kapama' ); ?></strong></td>
		</tr>
		<tr align='center' valign='middle'>
			<td colspan='6' valign='middle'>
            <select style="width:100%;" name='magazakapama_options[0][2]'>
            <?php
            foreach($timezones as $timezone){ 
				if ($magazakapama_options[0][2]==$timezone) $timezone_active =  'selected="selected" ';
				else $timezone_active =''; ?>
            	<option <?php echo $timezone_active; ?> value='<?php echo $timezone; ?>'><?php echo $timezone; ?></option>
      		<?php } ?>
            </select>
            </td>
            <td colspan='3' valign='middle' align='center'>
            	<input type='text' value='<?php echo $timezoneshow; ?>'>
            </td>
		</tr>
		<tr align='center' valign='middle' class='tabletitle'>
			<td colspan='9' valign='middle'><strong><?php echo __('Bildirim Mesajınız', 'magaza-kapama' ); ?></strong></td>
		</tr>
		<tr class='notification'>
			<td colspan='9' valign='middle'><input style='width:100%;' type='text' name='magazakapama_options[0][1]' value='<?php echo $magazakapama_options[0][1]; ?>'><br /><h6>[tstamp] : <?php echo __('Aktif Saatler', 'magaza-kapama' ); ?> ( <?php echo __('Boş', 'magaza-kapama' ); ?> : <?php echo __('Görüntülenmez', 'magaza-kapama' ); ?> )</h6></td>
		</tr>
	</tbody></table>
</form>
<?php submit_button(); ?>
</div>
<div id="col-right">
    <table class='magazakapama_plus'>
		<tbody>
		<tr>
			<th align='Left' valign='middle' class="magazakapama_plusactive"><a href="https://codecanyon.net/item/woocommerce-store-closing/19398781?ref=Ozibal" target="_blank">▢ PLUS VER </a></th>
            <td align='center' valign='middle' class='tabletitle'><?php echo __('Tarih', 'magaza-kapama' ); ?></td>
            <td align='center' valign='middle' class='tabletitle'><?php echo __('Saat', 'magaza-kapama' ); ?></td>
            <td align='center' >&nbsp;</td>
            <td align='center' valign='middle' class='tabletitle'><?php echo __('Dakika', 'magaza-kapama' ); ?></td>
        </tr>
        <tr>   
        	<th align='right' valign='middle'><?php echo __('Kapanış', 'magaza-kapama' ); ?></th>
            <td align='right' valign='middle'><input disabled="disabled" value="<?php echo date('Y-m-d', current_time( 'timestamp', 0 ) ); ?>"  type="date"/></td>
            <td align='right' valign='middle'><input disabled="disabled" value="14" type='number' min='0' max='23'></td>
            <td align='center'>:</td>
            <td align='right' valign='middle'><input disabled="disabled" value="45" type='number' min='0' max='59'></td>
		</tr>
		<tr align='center' valign='middle' class='tabletitle'>
			<td colspan='5' valign='middle'><strong><?php echo __('Kapanış Mesajınız', 'magaza-kapama' ); ?></strong></td>
		</tr>
		<tr>
			<td colspan='5' valign='middle'><input disabled="disabled" style='width:100%;' type='text' value='<?php echo __('Mağazamız [pcstamp] tarihinde siparişe kapanacaktır.', 'magaza-kapama' ); ?>'></td>
		</tr>
        <tr><td colspan="5"><hr /></td></tr>
        <tr>   
        	<th align='right' valign='middle'><?php echo __('Açılış', 'magaza-kapama' ); ?></th>
            <td align='right' valign='middle'><input disabled="disabled" value="<?php echo date('Y-m-d', current_time( 'timestamp', 0 ) ); ?>"  type="date"/></td>
            <td align='right' valign='middle'><input disabled="disabled" value="21" type='number' min='0' max='23'></td>
            <td align='center'>:</td>
            <td align='right' valign='middle'><input disabled="disabled" value="30" type='number' min='0' max='59'></td>
		</tr>
		<tr align='center' valign='middle' class='tabletitle'>
			<td colspan='5' valign='middle'><strong><?php echo __('Açılış Mesajınız', 'magaza-kapama' ); ?></strong></td>
		</tr>
		<tr>
			<td colspan='5' valign='middle'><input disabled="disabled" style='width:100%;' type='text' value='<?php echo __('Mağazamız [postamp] tarihinde siparişe açılacaktır.', 'magaza-kapama' ); ?>'></td>
		</tr>
        <tr><td colspan="5"><h6>[pcstamp] : <?php echo __('Kapanış zamanı', 'magaza-kapama' ); ?> [postamp] : <?php echo __('Açılış zamanı', 'magaza-kapama' ); ?></h6></td></tr>
        <tr><td colspan="5"><hr /></td></tr>
		<tr align='center' valign='middle' class='tabletitle'>
        	<td valign='middle'><?php echo __('Bildirim için', 'magaza-kapama' ); ?></td>
			<td valign='middle'><strong><?php echo __('Zemin rengi', 'magaza-kapama' ); ?></strong></td>
            <td colspan='3' valign='middle'><strong><?php echo __('Yazı rengi', 'magaza-kapama' ); ?></strong></td>
		</tr>
		<tr align='center' valign='middle'>
        	<td valign='middle'><strong><?php echo __('Özel CSS', 'magaza-kapama' ); ?></strong></td>
			<td valign='middle'><input disabled="disabled" style="width:70px;" type='text' value='#F00'></td>
            <td colspan='3' valign='middle'><input disabled="disabled" style="width:70px;" type='text' value='#FFF'></td>
		</tr>
        <tr><td colspan="5"><h6><?php echo __('Boş : Varsayılan', 'magaza-kapama' ); ?></h6></td></tr>
    </tbody></table>  
</div>
</body>
</html>