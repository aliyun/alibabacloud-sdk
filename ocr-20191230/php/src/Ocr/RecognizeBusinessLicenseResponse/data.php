<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBusinessLicenseResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $angle;
    public $registerNumber;
    public $name;
    public $type;
    public $legalPerson;
    public $establishDate;
    public $validPeriod;
    public $address;
    public $capital;
    public $business;
    public $emblem;
    public $title;
    public $stamp;
    public $QRCode;
    protected $_required = [
        'angle'          => true,
        'registerNumber' => true,
        'name'           => true,
        'type'           => true,
        'legalPerson'    => true,
        'establishDate'  => true,
        'validPeriod'    => true,
        'address'        => true,
        'capital'        => true,
        'business'       => true,
        'emblem'         => true,
        'title'          => true,
        'stamp'          => true,
        'QRCode'         => true,
    ];
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
    protected $_description = [
        'angle'          => 'angle',
        'registerNumber' => 'registerNumber',
        'name'           => 'name',
        'type'           => 'type',
        'legalPerson'    => 'legalPerson',
        'establishDate'  => 'establishDate',
        'validPeriod'    => 'validPeriod',
        'address'        => 'address',
        'capital'        => 'capital',
        'business'       => 'business',
        'emblem'         => 'emblem',
        'title'          => 'title',
        'stamp'          => 'stamp',
        'QRCode'         => 'qrCode',
    ];
}
