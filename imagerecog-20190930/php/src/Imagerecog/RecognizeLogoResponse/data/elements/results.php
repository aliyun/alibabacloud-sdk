<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\RecognizeLogoResponse\data\elements;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    public $label;
    public $suggestion;
    public $rate;
    public $logosData;
    protected $_required = [
        'label'      => true,
        'suggestion' => true,
        'rate'       => true,
        'logosData'  => true,
    ];
    protected $_name = [
        'label'      => 'Label',
        'suggestion' => 'Suggestion',
        'rate'       => 'Rate',
        'logosData'  => 'LogosData',
    ];
    protected $_description = [
        'label'      => 'label',
        'suggestion' => 'suggestion',
        'rate'       => 'rate',
        'logosData'  => 'LogosData',
    ];
}
