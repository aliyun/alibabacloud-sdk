<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizePublicFaceResponse\data\elements;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    public $label;
    public $suggestion;
    public $rate;
    public $subResults;
    protected $_required = [
        'label'      => true,
        'suggestion' => true,
        'rate'       => true,
        'subResults' => true,
    ];
    protected $_name = [
        'label'      => 'Label',
        'suggestion' => 'Suggestion',
        'rate'       => 'Rate',
        'subResults' => 'SubResults',
    ];
    protected $_description = [
        'label'      => 'label',
        'suggestion' => 'suggestion',
        'rate'       => 'rate',
        'subResults' => 'subResults',
    ];
}
