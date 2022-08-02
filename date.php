<?php

declare(strict_types=1);

$date = new DateTime('2000-01-01 00:01:23');

//var_dump($date);


/*
1. Išspausdinkite šio momento datą pasinaudodami funkcija 'date'
*/
function exercise1(): void
{
var_dump(date('Y-m-d H:i:s' ));
}
//exercise1();
/*
2. Išspausdinkite datą '2008-12-15 15:15' pasinaudodami new DateTime
*/
function exercise2(): void
{
$data = new DateTime('2008-12-15 15:15');
var_dump($data);
}
//exercise2();

/*
3. Išspausdinkite šio momento datą skirtingais formatais, kurie atitiktų pavyzdžius:
- 1970 Mar 1 15:15:00  'Y M j H:i:s'
- 1970 Mar 01 15:15  'Y M d H:i
- 1970 Mar 1st 11:15:00 PM  'Y M jS H:i:s A'
- 1970/3/1  'Y/n/j'
- savaites numeris (52 savaitės metuose)  'W'
- dienos numeris (365 dienos metuose)    'z'

Naudokite objektą sukurtą kviečiant new DateTime()
*/
function exercise3(string $format): void
{
$date = new DateTime('1970-03-1 15:15:00');

var_dump($date->format($format));
}
//exercise3('z');

/*
4. Sukurkite datos objektą iš šių tekstinių datų:
- 2000-03-02 15:30:00
- 2000/02/15 08:30:00 PM
- 2000 March 2nd 15:30:00
*/
function exercise4(): void
{
$data = date_create_from_format('Y-m-d H:i:s','2000-03-02 15:30:00');
var_dump($data).PHP_EOL;
$data = date_create_from_format('Y/m/d H:i:s A','2000/02/15 08:30:00 PM');
var_dump($data).PHP_EOL;
$data = date_create_from_format('Y F jS H:i:s','2000 March 2nd 15:30:00');
var_dump($data).PHP_EOL;

}
//exercise4();
/*
5. Sukurkite datą iš ' Jan 2021 8:15:01 PM' (data X). Pamodifikuokite ją, kad gautumėte:
- datą po 2 savaičių nuo datos X
- datą po 10 metų nuo datos X
- datą prieš 5 valandas nuo datos X
- paskutinę mėnesio dieną
- pirmą mėnesio dieną
- ateinantį antradienį
- datą prieš 1 dieną 8 valandas 15 minučių nuo datos X
*/

function exercise5($x): void
{
    $date = new DateTime($x);
    var_dump($date);

    echo '- datą po 2 savaičių'.PHP_EOL.PHP_EOL;
    var_dump($date->modify('+2 weeks'));

    echo '- datą po 10 metų'.PHP_EOL.PHP_EOL;

    var_dump($date->modify('+10 years'));

    echo '- datą prieš 5 valandas nuo x datos'.PHP_EOL.PHP_EOL;

    var_dump($date->modify(' 5 hour ago'));

}
exercise5('Jan 2021 8:15:01 PM');

function exercise6(): void
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase_date' => '2021 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase_date' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase_date' => '2019 Dec 02 15:00:12',
        ],
    ];

    /*
    Išspausdinkite produktų paskutinių pirkimų santrauką pasinaudodami $products masyvu.
    Eilutėje turi spausdinti pavadinima (name) ir paskutinio pirkimo datą (last_purchase_date) pavyzdyje nurodytu formatu:
    Wine glass 2021-01-15 18:34:12
    ...
    Blue chair 2019-12-02 15:00:12
    */
}

function exercise7(string $date1, string $date2): string
{
    /*
    Palyginkite datas ir grąžinkite atsakymą, kuri data naujesnė.

    Funkcijos kvietimas: exercise7('2022-01-25 17:13:25', '2020-01-25 17:13:25');
    Rezultatas:
    'First date is newer'

    Funkcijos kvietimas: exercise7('2020-01-25 17:13:25', '2022-01-25 17:13:25');
    Rezultatas:
    'Second date is newer'
    */

    return '';
}

function exercise8(string $date): void
{
    /*
    Išspausdinkite paduotos datos skirtumą nuo dabartinio momento žodžiais.

    Funkcijos kvietimas: exercise8('2020-01-25 17:13:25');
    Rezultatas:
    Supplied date was 773 days ago

    Funkcijos kvietimas: exercise8('2023-01-25 17:13:25');
    Rezultatas:
    Supplied date is 500 days in the future
    */
}

function exercise9($date): void
{
    /*
    Išspausdinkite datų skirtumą žodžiais.

    Funkcijos kvietimas: exercise9('2020-01-25 17:13:25');
    Rezultatas:
    Supplied date was 2 years 1 months 11 days ago

    Funkcijos kvietimas: exercise9('2023-01-25 17:13:25');
    Rezultatas:
    Supplied date is 0 years 5 months 11 days in the future
    */
}