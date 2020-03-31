<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\volumes;

use AlibabaCloud\Tea\Model;

class configFileVolumeConfigFileToPaths extends Model
{
    public $content;
    public $path;
    protected $_required = [
        'content' => true,
        'path'    => true,
    ];
    protected $_name = [
        'content' => 'Content',
        'path'    => 'Path',
    ];
    protected $_description = [
        'content' => 'content',
        'path'    => 'path',
    ];
}
