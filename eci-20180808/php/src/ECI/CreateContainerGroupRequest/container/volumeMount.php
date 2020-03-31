<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class volumeMount extends Model
{
    public $mountPath;
    public $readOnly;
    public $name;
    public $subPath;
    protected $_required = [
        'mountPath' => true,
        'readOnly'  => true,
    ];
    protected $_name = [
        'mountPath' => 'MountPath',
        'readOnly'  => 'ReadOnly',
        'name'      => 'Name',
        'subPath'   => 'SubPath',
    ];
    protected $_description = [
        'mountPath' => 'mountPath',
        'readOnly'  => 'readOnly',
        'name'      => 'name',
        'subPath'   => 'subPath',
    ];
}
