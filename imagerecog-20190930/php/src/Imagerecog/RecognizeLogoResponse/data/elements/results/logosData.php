<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\RecognizeLogoResponse\data\elements\results;

use AlibabaCloud\Tea\Model;

class logosData extends Model
{
    public $name;
    public $type;
    public $x;
    public $y;
    public $h;
    public $w;
    protected $_required = [
        'name' => true,
        'type' => true,
        'x'    => true,
        'y'    => true,
        'h'    => true,
        'w'    => true,
    ];
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
        'x'    => 'X',
        'y'    => 'Y',
        'h'    => 'H',
        'w'    => 'W',
    ];
    protected $_description = [
        'name' => 'name',
        'type' => 'type',
        'x'    => 'x',
        'y'    => 'y',
        'h'    => 'h',
        'w'    => 'w',
    ];
}
