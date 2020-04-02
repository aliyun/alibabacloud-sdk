<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTrainTicketResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description date
     *
     * @var string
     */
    public $date;
    /**
     * @description destination
     *
     * @var string
     */
    public $destination;
    /**
     * @description level
     *
     * @var string
     */
    public $level;
    /**
     * @description number
     *
     * @var string
     */
    public $number;
    /**
     * @description name
     *
     * @var string
     */
    public $name;
    /**
     * @description departureStation
     *
     * @var string
     */
    public $departureStation;
    /**
     * @description seat
     *
     * @var string
     */
    public $seat;
    /**
     * @description price
     *
     * @var float
     */
    public $price;
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

    public function validate()
    {
        Model::validateRequired('date', $this->date, true);
        Model::validateRequired('destination', $this->destination, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('number', $this->number, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('departureStation', $this->departureStation, true);
        Model::validateRequired('seat', $this->seat, true);
        Model::validateRequired('price', $this->price, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['Date']             = $this->date;
        $res['Destination']      = $this->destination;
        $res['Level']            = $this->level;
        $res['Number']           = $this->number;
        $res['Name']             = $this->name;
        $res['DepartureStation'] = $this->departureStation;
        $res['Seat']             = $this->seat;
        $res['Price']            = $this->price;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DepartureStation'])) {
            $model->departureStation = $map['DepartureStation'];
        }
        if (isset($map['Seat'])) {
            $model->seat = $map['Seat'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        return $model;
    }
}
