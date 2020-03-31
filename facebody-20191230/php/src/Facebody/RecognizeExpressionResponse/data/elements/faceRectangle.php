<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeExpressionResponse\data\elements;

use AlibabaCloud\Tea\Model;

class faceRectangle extends Model
{
    public $height;
    public $left;
    public $top;
    public $width;
    protected $_required = [
        'height' => true,
        'left'   => true,
        'top'    => true,
        'width'  => true,
    ];
    protected $_name = [
        'height' => 'Height',
        'left'   => 'Left',
        'top'    => 'Top',
        'width'  => 'Width',
    ];
    protected $_description = [
        'height' => 'height',
        'left'   => 'left',
        'top'    => 'top',
        'width'  => 'width',
    ];
}
