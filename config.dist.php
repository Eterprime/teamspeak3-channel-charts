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
        // Host i port po��czenia do ServerQuery
        'hostname' => '127.0.0.1',
        
        // Port query potrzebny do po��czenia
        'queryport' => 10011,
        
        // Login u�ytkownika ServerQuery
        'username' => 'serveradmin',
        
        // Has�o u�ytkownika ServerQuery
        'password' => '',
        
        // Numer instancji virtualservera (domy�lnie: 1)
        'instance' => 1,
        
        // Nazwa po��czenia do query
        'nickname' => 'ETP ChannelCharts'
    ],
    
    // Co jaki czas ma by� zbierana statystyka (w sekundach)
    'scan_interval' => 2 * 60,
    
    // Maksymalna ilo�� wpis�w na wykresie
    'max_scans' => 30,
    
    // Format serii danych gromadzonych przez bota zgodny
    // z dokumentacj�: http://php.net/manual/en/function.date.php
    // domy�lnie H:i gwarantuje wy�wietlanie ilo�ci u�ytkownik�w
    // co jedn� minut� na wykresie, (chyba �e scan_interval jest d�u�szy)
    'series_format' => 'H:i',
    
    // Id kana��w sekcji kt�re podlegaj� skanowaniu
    'sections' => []
    
];