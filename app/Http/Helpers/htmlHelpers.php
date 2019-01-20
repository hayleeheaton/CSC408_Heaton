<?php

Html::macro('yesNo', function ($value) {

    return $value ? 'Yes' : 'No';
});


Html::macro('genreList', function ($genres) {

    $list = [];
    foreach ( $genres as $genre ) {
        $id = $genre[ 'id' ];
        $name = $genre[ 'name' ];
        $list[ $id ] = $name;
    }

    return $list;
});

Html::macro('photoLink', function ($id) {

    return '/images/movie_' . $id . '.jpg';
});

Html::macro('kioskList', function ($kiosks) {

    $list = [];
    foreach ( $kiosks as $kiosk ) {
        $id = $kiosk[ 'id' ];
        $name = $kiosk[ 'location' ];
        $list[ $id ] = $name;
    }

    return $list;
});

Html::macro('rentalKioskList', function ($kiosks) {

    $list = [];
    foreach ( $kiosks as $kiosk ) {
        $id = $kiosk[ 'kiosk_id' ];
        $name = $kiosk['kiosks'][ 'location' ] . ': Qty. ' . $kiosk['quantity'] . ' Available';

        $list[ $id ] = $name;
    }

    return $list;
});


Html::macro('movieList', function ($movies) {

    $list = [];
    foreach ( $movies as $movie ) {
        $id = $movie[ 'id' ];
        $name = $movie[ 'title' ];
        $list[ $id ] = $name;
    }

    return $list;
});

Html::macro('customerList', function ($customers) {

    $list[0] = '';
    foreach ( $customers as $customer ) {
        $id = $customer[ 'id' ];
        $name = $customer[ 'lastname' ] . ', ' . $customer[ 'firstname' ];
        $list[ $id ] = $name;
    }

    return $list;
});


/**
 * Return the list of US states
 */
Html::macro('stateList', function () {
    $states = [
        '00' => '-- Choose State --', 'AL' => 'Alabama', 'AK' => 'Alaska', 'AZ' => 'Arizona', 'AR' => 'Arkansas', 'CA' => 'California', 'CO' => 'Colorado',
        'CT' => 'Connecticut', 'DE' => 'Delaware', 'DC' => 'District Of Columbia', 'FL' => 'Florida', 'GA' => 'Georgia',
        'HI' => 'Hawaii', 'ID' => 'Idaho', 'IL' => 'Illinois', 'IN' => 'Indiana', 'IA' => 'Iowa', 'KS' => 'Kansas',
        'KY' => 'Kentucky', 'LA' => 'Louisiana', 'ME' => 'Maine', 'MD' => 'Maryland', 'MA' => 'Massachusetts', 'MI' => 'Michigan',
        'MN' => 'Minnesota', 'MS' => 'Mississippi', 'MO' => 'Missouri', 'MT' => 'Montana', 'NE' => 'Nebraska', 'NV' => 'Nevada',
        'NH' => 'New Hampshire', 'NJ' => 'New Jersey', 'NM' => 'New Mexico', 'NY' => 'New York', 'NC' => 'North Carolina',
        'ND' => 'North Dakota', 'OH' => 'Ohio', 'OK' => 'Oklahoma', 'OR' => 'Oregon', 'PA' => 'Pennsylvania', 'RI' => 'Rhode Island',
        'SC' => 'South Carolina', 'SD' => 'South Dakota', 'TN' => 'Tennessee', 'TX' => 'Texas', 'UT' => 'Utah', 'VT' => 'Vermont',
        'VA' => 'Virginia', 'WA' => 'Washington', 'WV' => 'West Virginia', 'WI' => 'Wisconsin', 'WY' => 'Wyoming'];

    return $states;
});