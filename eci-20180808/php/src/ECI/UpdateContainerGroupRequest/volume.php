<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class volume extends Model
{
    public $name;

    public $type;

    public $NFSVolume;

    public $configFileVolume;

    public $emptyDirVolume;
    protected $_name = [
        'name'             => 'Name',
        'type'             => 'Type',
        'NFSVolume'        => 'NFSVolume',
        'configFileVolume' => 'ConfigFileVolume',
        'emptyDirVolume'   => 'EmptyDirVolume',
    ];
}
