<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\volume;

use AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\volume\configFileVolume\configFileToPath;
use AlibabaCloud\Tea\Model;

class configFileVolume extends Model
{
    /**
     * @description configFileVolumeConfigFileToPaths
     *
     * @var array
     */
    public $configFileToPath;

    /**
     * @description configFileVolumeDefaultModel
     *
     * @var int
     */
    public $defaultMode;
    protected $_name = [
        'configFileToPath' => 'ConfigFileToPath',
        'defaultMode'      => 'DefaultMode',
    ];

    public function validate()
    {
        Model::validateRequired('configFileToPath', $this->configFileToPath, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['ConfigFileToPath'] = [];
        if (null !== $this->configFileToPath && \is_array($this->configFileToPath)) {
            $n = 0;
            foreach ($this->configFileToPath as $item) {
                $res['ConfigFileToPath'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['DefaultMode'] = $this->defaultMode;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configFileVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigFileToPath'])) {
            if (!empty($map['ConfigFileToPath'])) {
                $model->configFileToPath = [];
                $n                       = 0;
                foreach ($map['ConfigFileToPath'] as $item) {
                    $model->configFileToPath[$n++] = null !== $item ? configFileToPath::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultMode'])) {
            $model->defaultMode = $map['DefaultMode'];
        }

        return $model;
    }
}
