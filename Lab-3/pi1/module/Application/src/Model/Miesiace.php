<?php
namespace Application\Model;
class Miesiace
{
    public function pobierzWszystkie()
    {
        return array(
            'red'=>'Styczeń',
            'green'=>'Luty',
            'blue'=>'Marzec',
            'yellow'=>'Kwiecień',
            'pink'=>'Maj',
            'white'=>'Czerwiec',
            'black'=>'Lipiec',
            'grey'=>'Sierień',
            'orange'=>'Wrzesień',
            'indigo'=>'Pażdziernik',
            'peru'=>'Listopad',
            'teal'=>'Grudzień',
        );
    }
}