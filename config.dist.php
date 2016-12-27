<?php

/**
 * Aplikacja stworzona przez Adams @ Eterprime na
 * potrzeby konkursu organizowanego przez MPCForum.
 *
 * @author Adams <lukasz.adamski@eterprime.eu>
 * @version 1.0
 * @license GNU GPL v3
 */
 
return [
    
    'serverquery' => [
        // Host i port po³¹czenia do ServerQuery
        'hostname' => '127.0.0.1',
        
        // Port query potrzebny do po³¹czenia
        'queryport' => 10011,
        
        // Login u¿ytkownika ServerQuery
        'username' => 'serveradmin',
        
        // Has³o u¿ytkownika ServerQuery
        'password' => '',
        
        // Numer instancji virtualservera (domyœlnie: 1)
        'instance' => 1,
        
        // Nazwa po³¹czenia do query
        'nickname' => 'ETP ChannelCharts'
    ],
    
    // Co jaki czas ma byæ zbierana statystyka (w sekundach)
    'scan_interval' => 2 * 60,
    
    // Maksymalna iloœæ wpisów na wykresie
    'max_scans' => 30,
    
    // Format serii danych gromadzonych przez bota zgodny
    // z dokumentacj¹: http://php.net/manual/en/function.date.php
    // domyœlnie H:i gwarantuje wyœwietlanie iloœci u¿ytkowników
    // co jedn¹ minutê na wykresie, (chyba ¿e scan_interval jest d³u¿szy)
    'series_format' => 'H:i',
    
    // Id kana³ów sekcji które podlegaj¹ skanowaniu
    'sections' => []
    
];