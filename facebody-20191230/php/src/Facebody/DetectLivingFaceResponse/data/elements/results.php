<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectLivingFaceResponse\data\elements;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    public $label;
    public $suggestion;
    public $rate;
    public $frames;
    protected $_required = [
        'label'      => true,
        'suggestion' => true,
        'rate'       => true,
        'frames'     => true,
    ];
    protected $_name = [
        'label'      => 'Label',
        'suggestion' => 'Suggestion',
        'rate'       => 'Rate',
        'frames'     => 'Frames',
    ];
    protected $_description = [
        'label'      => 'label',
        'suggestion' => 'suggestion',
        'rate'       => 'rate',
        'frames'     => 'frames',
    ];
}
