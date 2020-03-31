<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\initContainer;

use AlibabaCloud\Tea\Model;

class environmentVar extends Model
{
    public $key;
    public $value;
    public $fieldRef;
    protected $_name = [
        'key'      => 'Key',
        'value'    => 'Value',
        'fieldRef' => 'FieldRef',
    ];
    protected $_description = [
        'key'      => 'key',
        'value'    => 'value',
        'fieldRef' => 'FieldRef',
    ];
    protected $_required = [
        'fieldRef' => true,
    ];
}
