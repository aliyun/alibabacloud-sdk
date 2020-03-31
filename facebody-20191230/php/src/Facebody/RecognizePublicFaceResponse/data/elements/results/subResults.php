<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizePublicFaceResponse\data\elements\results;

use AlibabaCloud\Tea\Model;

class subResults extends Model
{
    public $h;
    public $w;
    public $x;
    public $y;
    public $faces;
    protected $_required = [
        'h'     => true,
        'w'     => true,
        'x'     => true,
        'y'     => true,
        'faces' => true,
    ];
    protected $_name = [
        'h'     => 'H',
        'w'     => 'W',
        'x'     => 'X',
        'y'     => 'Y',
        'faces' => 'Faces',
    ];
    protected $_description = [
        'h'     => 'h',
        'w'     => 'w',
        'x'     => 'x',
        'y'     => 'h',
        'faces' => 'faces',
    ];
}
