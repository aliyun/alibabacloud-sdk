<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardResponse\data;

use AlibabaCloud\Tea\Model;

class frontResult extends Model
{
    public $address;
    public $name;
    public $nationality;
    public $IDNumber;
    public $gender;
    public $birthDate;
    public $cardAreas;
    public $faceRectVertices;
    public $faceRectangle;
    protected $_required = [
        'address'          => true,
        'name'             => true,
        'nationality'      => true,
        'IDNumber'         => true,
        'gender'           => true,
        'birthDate'        => true,
        'cardAreas'        => true,
        'faceRectVertices' => true,
        'faceRectangle'    => true,
    ];
    protected $_name = [
        'address'          => 'Address',
        'name'             => 'Name',
        'nationality'      => 'Nationality',
        'IDNumber'         => 'IDNumber',
        'gender'           => 'Gender',
        'birthDate'        => 'BirthDate',
        'cardAreas'        => 'CardAreas',
        'faceRectVertices' => 'FaceRectVertices',
        'faceRectangle'    => 'FaceRectangle',
    ];
    protected $_description = [
        'address'          => 'address',
        'name'             => 'name',
        'nationality'      => 'nationality',
        'IDNumber'         => 'idNumber',
        'gender'           => 'gender',
        'birthDate'        => 'birthDate',
        'cardAreas'        => 'cardAreas',
        'faceRectVertices' => 'faceRectVertices',
        'faceRectangle'    => 'faceRectangle',
    ];
}
