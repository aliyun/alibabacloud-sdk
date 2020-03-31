<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class configFileVolume extends Model
{
    public $configFileToPath;
    public $defaultModel;
    protected $_required = [
        'configFileToPath' => true,
    ];
    protected $_name = [
        'configFileToPath' => 'ConfigFileToPath',
        'defaultModel'     => 'DefaultModel',
    ];
    protected $_description = [
        'configFileToPath' => 'configFileVolumeConfigFileToPaths',
        'defaultModel'     => 'configFileVolumeDefaultModel',
    ];
}
