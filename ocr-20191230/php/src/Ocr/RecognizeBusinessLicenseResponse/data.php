<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBusinessLicenseResponse;

use AlibabaCloud\SDK\Ocr\V20191230\Ocr\data\emblem;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\data\QRCode;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\data\stamp;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\data\title;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description angle
     *
     * @var string
     */
    public $angle;
    /**
     * @description registerNumber
     *
     * @var string
     */
    public $registerNumber;
    /**
     * @description name
     *
     * @var string
     */
    public $name;
    /**
     * @description type
     *
     * @var string
     */
    public $type;
    /**
     * @description legalPerson
     *
     * @var string
     */
    public $legalPerson;
    /**
     * @description establishDate
     *
     * @var string
     */
    public $establishDate;
    /**
     * @description validPeriod
     *
     * @var string
     */
    public $validPeriod;
    /**
     * @description address
     *
     * @var string
     */
    public $address;
    /**
     * @description capital
     *
     * @var string
     */
    public $capital;
    /**
     * @description business
     *
     * @var string
     */
    public $business;
    /**
     * @description emblem
     *
     * @var data.emblem
     */
    public $emblem;
    /**
     * @description title
     *
     * @var data.title
     */
    public $title;
    /**
     * @description stamp
     *
     * @var data.stamp
     */
    public $stamp;
    /**
     * @description qrCode
     *
     * @var data.QRCode
     */
    public $QRCode;
    protected $_name = [
        'angle'          => 'Angle',
        'registerNumber' => 'RegisterNumber',
        'name'           => 'Name',
        'type'           => 'Type',
        'legalPerson'    => 'LegalPerson',
        'establishDate'  => 'EstablishDate',
        'validPeriod'    => 'ValidPeriod',
        'address'        => 'Address',
        'capital'        => 'Capital',
        'business'       => 'Business',
        'emblem'         => 'Emblem',
        'title'          => 'Title',
        'stamp'          => 'Stamp',
        'QRCode'         => 'QRCode',
    ];

    public function validate()
    {
        Model::validateRequired('angle', $this->angle, true);
        Model::validateRequired('registerNumber', $this->registerNumber, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('legalPerson', $this->legalPerson, true);
        Model::validateRequired('establishDate', $this->establishDate, true);
        Model::validateRequired('validPeriod', $this->validPeriod, true);
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('capital', $this->capital, true);
        Model::validateRequired('business', $this->business, true);
        Model::validateRequired('emblem', $this->emblem, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('stamp', $this->stamp, true);
        Model::validateRequired('QRCode', $this->QRCode, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['Angle']          = $this->angle;
        $res['RegisterNumber'] = $this->registerNumber;
        $res['Name']           = $this->name;
        $res['Type']           = $this->type;
        $res['LegalPerson']    = $this->legalPerson;
        $res['EstablishDate']  = $this->establishDate;
        $res['ValidPeriod']    = $this->validPeriod;
        $res['Address']        = $this->address;
        $res['Capital']        = $this->capital;
        $res['Business']       = $this->business;
        $res['Emblem']         = null !== $this->emblem ? $this->emblem->toMap() : null;
        $res['Title']          = null !== $this->title ? $this->title->toMap() : null;
        $res['Stamp']          = null !== $this->stamp ? $this->stamp->toMap() : null;
        $res['QRCode']         = null !== $this->QRCode ? $this->QRCode->toMap() : null;

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
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['LegalPerson'])) {
            $model->legalPerson = $map['LegalPerson'];
        }
        if (isset($map['EstablishDate'])) {
            $model->establishDate = $map['EstablishDate'];
        }
        if (isset($map['ValidPeriod'])) {
            $model->validPeriod = $map['ValidPeriod'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Capital'])) {
            $model->capital = $map['Capital'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['Emblem'])) {
            $model->emblem = data\emblem::fromMap($map['Emblem']);
        }
        if (isset($map['Title'])) {
            $model->title = data\title::fromMap($map['Title']);
        }
        if (isset($map['Stamp'])) {
            $model->stamp = data\stamp::fromMap($map['Stamp']);
        }
        if (isset($map['QRCode'])) {
            $model->QRCode = data\QRCode::fromMap($map['QRCode']);
        }

        return $model;
    }
}
