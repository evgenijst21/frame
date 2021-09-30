<?
function xDebug($debug) {
    echo '<pre>';
    var_dump($debug);
    echo '</pre>';
}

function mainDate() {
    
    switch (date('w')) {
        case 1 : 
            $week = 'Понедельник';
        break;
        case 2 : 
            $week = 'Вторник';
        break;
        case 3 : 
            $week = 'Среда';
        break;
        case 4 : 
            $week = 'Четверг';
        break;
        case 5 : 
            $week = 'Пятница';
        break;
        case 6 : 
            $week = 'Суббота';
        break;
        case 0 : 
            $week = 'Воскресенье';
        break;
    }

    switch (date('n')) {
        case 1 : 
            $month = 'Января';
        break;
        case 2 : 
            $month = 'Февраля';
        break;
        case 3 : 
            $month = 'Марта';
        break;
        case 4 : 
            $month = 'Апреля';
        break;
        case 5 : 
            $month = 'Мая';
        break;
        case 6 : 
            $month = 'Июня';
        break;
        case 7 : 
            $month = 'Июля';
        break;
        case 8 : 
            $month = 'Августа';
        break;
        case 9 : 
            $month = 'Сентября';
        break;
        case 10 : 
            $month = 'Октября';
        break;
        case 11 : 
            $month = 'Ноября';
        break;
        case 12 : 
            $month = 'Декабря';
        break;
    
    }
    return $week . ' ' . date('m') . ' ' . $month . ' ' . date('Y');
}