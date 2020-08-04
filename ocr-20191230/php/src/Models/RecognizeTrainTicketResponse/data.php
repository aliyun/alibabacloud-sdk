<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTrainTicketResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $departureStation;

    /**
     * @var string
     */
    public $seat;

    /**
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
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->departureStation) {
            $res['DepartureStation'] = $this->departureStation;
        }
        if (null !== $this->seat) {
            $res['Seat'] = $this->seat;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

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
