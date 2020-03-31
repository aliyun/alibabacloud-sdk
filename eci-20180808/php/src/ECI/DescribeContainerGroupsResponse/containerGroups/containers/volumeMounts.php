<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers;

use AlibabaCloud\Tea\Model;

class volumeMounts extends Model
{
    public $name;
    public $mountPath;
    public $readOnly;
    protected $_required = [
        'name'      => true,
        'mountPath' => true,
        'readOnly'  => true,
    ];
    protected $_name = [
        'name'      => 'Name',
        'mountPath' => 'MountPath',
        'readOnly'  => 'ReadOnly',
    ];
    protected $_description = [
        'name'      => 'name',
        'mountPath' => 'mountPath',
        'readOnly'  => 'readOnly',
    ];
}
