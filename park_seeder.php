<?php
require_once 'parks_logins';

require 'db_connect.php';

$truncate_all = 'TRUNCATE national_parks';

$dbc->exec($truncate_all);

$nationalParks = [
    ['name' => 'Acadia',           'location' => '44.35°N 68.21°W',  'date_established' => '1919-02-26', 'area_in_acres' => 47389.67  ],
    ['name' => 'American Samoa',   'location' => '14.25°S 170.68°W', 'date_established' => '1988-10-31', 'area_in_acres' => 9000.00   ],
    ['name' => 'Arches',           'location' => '38.68°N 109.57°W', 'date_established' => '1929-04-12', 'area_in_acres' => 76518.98  ],
    ['name' => 'Badlands',         'location' => '43.75°N 102.50°W', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94 ],
    ['name' => 'Big Bend',         'location' => '29.25°N 103.25°W', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21 ],
    ['name' => 'Biscayne',         'location' => '25.65°N 80.08°W',  'date_established' => '1980-06-28', 'area_in_acres' => 172924.07 ],
    ['name' => 'Bryce Canyon',     'location' => '37.57°N 112.18°W', 'date_established' => '1928-02-25', 'area_in_acres' => 35835.08  ],
    ['name' => 'Canyonlands',      'location' => '38.2°N 109.93°W',  'date_established' => '1964-09-12', 'area_in_acres' => 337597.83 ],
    ['name' => 'Capitol Reef', 	   'location' => '38.20°N 111.17°W', 'date_established' => '1971-12-18', 'area_in_acres' => 241904.26 ],
    ['name' => 'Carlsbad Caverns', 'location' => '32.17°N 104.44°W', 'date_established' => '1930-05-14', 'area_in_acres' => 46766.45  ]
];

foreach ($nationalParks as $park) {
    $create_table = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

    $dbc->exec($create_table);
}
