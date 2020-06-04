<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\configFileVolume\configFileToPath;

class configFileVolume extends Model {
    protected $_name = [
        'configFileToPath' => 'ConfigFileToPath',
        'defaultMode' => 'DefaultMode',
    ];
    public function validate() {
        Model::validateRequired('configFileToPath', $this->configFileToPath, true);
    }
    public function toMap() {
        $res = [];
        $res['ConfigFileToPath'] = [];
        if(null !== $this->configFileToPath && is_array($this->configFileToPath)){
            $n = 0;
            foreach($this->configFileToPath as $item){
                $res['ConfigFileToPath'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['DefaultMode'] = $this->defaultMode;
        return $res;
    }
    /**
     * @param array $map
     * @return configFileVolume
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ConfigFileToPath'])){
            if(!empty($map['ConfigFileToPath'])){
                $model->configFileToPath = [];
                $n = 0;
                foreach($map['ConfigFileToPath'] as $item) {
                    $model->configFileToPath[$n++] = null !== $item ? configFileToPath::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['DefaultMode'])){
            $model->defaultMode = $map['DefaultMode'];
        }
        return $model;
    }
    /**
     * @description configFileVolumeConfigFileToPaths
     * @var array
     */
    public $configFileToPath;

    /**
     * @description configFileVolumeDefaultModel
     * @var integer
     */
    public $defaultMode;

}
