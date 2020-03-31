<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeAccountPageResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $angle;
    public $name;
    public $gender;
    public $relation;
    public $birthPlace;
    public $nationality;
    public $nativePlace;
    public $birthDate;
    public $IDNumber;
    public $invalidStampAreas;
    public $undertakeStampAreas;
    public $registerStampAreas;
    public $otherStampAreas;
    public $titleArea;
    protected $_required = [
        'angle'               => true,
        'name'                => true,
        'gender'              => true,
        'relation'            => true,
        'birthPlace'          => true,
        'nationality'         => true,
        'nativePlace'         => true,
        'birthDate'           => true,
        'IDNumber'            => true,
        'invalidStampAreas'   => true,
        'undertakeStampAreas' => true,
        'registerStampAreas'  => true,
        'otherStampAreas'     => true,
        'titleArea'           => true,
    ];
    protected $_name = [
        'angle'               => 'Angle',
        'name'                => 'Name',
        'gender'              => 'Gender',
        'relation'            => 'Relation',
        'birthPlace'          => 'BirthPlace',
        'nationality'         => 'Nationality',
        'nativePlace'         => 'NativePlace',
        'birthDate'           => 'BirthDate',
        'IDNumber'            => 'IDNumber',
        'invalidStampAreas'   => 'InvalidStampAreas',
        'undertakeStampAreas' => 'UndertakeStampAreas',
        'registerStampAreas'  => 'RegisterStampAreas',
        'otherStampAreas'     => 'OtherStampAreas',
        'titleArea'           => 'TitleArea',
    ];
    protected $_description = [
        'angle'               => 'angle',
        'name'                => 'name',
        'gender'              => 'gender',
        'relation'            => 'relation',
        'birthPlace'          => 'birthPlace',
        'nationality'         => 'nationality',
        'nativePlace'         => 'nativePlace',
        'birthDate'           => 'birthDate',
        'IDNumber'            => 'idNumber',
        'invalidStampAreas'   => 'invalidStampAreas',
        'undertakeStampAreas' => 'undertakeStampAreas',
        'registerStampAreas'  => 'registerStampAreas',
        'otherStampAreas'     => 'otherStampAreas',
        'titleArea'           => 'titleArea',
    ];
}
