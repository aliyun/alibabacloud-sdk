<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\RecognizeImageColorResponse\data;

use AlibabaCloud\Tea\Model;

class colorTemplateList extends Model
{
    public $color;
    public $label;
    public $percentage;
    protected $_required = [
        'color'      => true,
        'label'      => true,
        'percentage' => true,
    ];
    protected $_name = [
        'color'      => 'Color',
        'label'      => 'Label',
        'percentage' => 'Percentage',
    ];
    protected $_description = [
        'color'      => 'color',
        'label'      => 'label',
        'percentage' => 'percentage',
    ];
}
