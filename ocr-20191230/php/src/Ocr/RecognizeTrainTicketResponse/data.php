<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTrainTicketResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $date;
    public $destination;
    public $level;
    public $number;
    public $name;
    public $departureStation;
    public $seat;
    public $price;
    protected $_required = [
        'date'             => true,
        'destination'      => true,
        'level'            => true,
        'number'           => true,
        'name'             => true,
        'departureStation' => true,
        'seat'             => true,
        'price'            => true,
    ];
    protected $_name = [
        'date'             => 'Date',
        'destination'      => 'Destination',
        'level'            => 'Level',
        'number'           => 'Number',
        'name'             => 'Name',
        'departureStation' => 'DepartureStation',
        'seat'             => 'Seat',
        'price'            => 'Price',
    ];
    protected $_description = [
        'date'             => 'date',
        'destination'      => 'destination',
        'level'            => 'level',
        'number'           => 'number',
        'name'             => 'name',
        'departureStation' => 'departureStation',
        'seat'             => 'seat',
        'price'            => 'price',
    ];
}
