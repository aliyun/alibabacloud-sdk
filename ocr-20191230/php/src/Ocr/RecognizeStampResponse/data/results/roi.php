<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeStampResponse\data\results;

use AlibabaCloud\Tea\Model;

class roi extends Model
{
    public $left;
    public $top;
    public $width;
    public $height;
    protected $_required = [
        'left'   => true,
        'top'    => true,
        'width'  => true,
        'height' => true,
    ];
    protected $_name = [
        'left'   => 'Left',
        'top'    => 'Top',
        'width'  => 'Width',
        'height' => 'Height',
    ];
    protected $_description = [
        'left'   => 'left',
        'top'    => 'top',
        'width'  => 'width',
        'height' => 'height',
    ];
}
