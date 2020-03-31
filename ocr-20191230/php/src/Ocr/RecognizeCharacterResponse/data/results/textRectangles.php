<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeCharacterResponse\data\results;

use AlibabaCloud\Tea\Model;

class textRectangles extends Model
{
    public $angle;
    public $left;
    public $top;
    public $width;
    public $height;
    protected $_required = [
        'angle'  => true,
        'left'   => true,
        'top'    => true,
        'width'  => true,
        'height' => true,
    ];
    protected $_name = [
        'angle'  => 'Angle',
        'left'   => 'Left',
        'top'    => 'Top',
        'width'  => 'Width',
        'height' => 'Height',
    ];
    protected $_description = [
        'angle'  => 'angle',
        'left'   => 'left',
        'top'    => 'top',
        'width'  => 'width',
        'height' => 'height',
    ];
}
