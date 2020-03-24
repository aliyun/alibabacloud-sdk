<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class volumeMount extends Model
{
    public $name;

    public $mountPath;

    public $subPath;

    public $readOnly;
    protected $_name = [
        'name'      => 'Name',
        'mountPath' => 'MountPath',
        'subPath'   => 'SubPath',
        'readOnly'  => 'ReadOnly',
    ];
}
