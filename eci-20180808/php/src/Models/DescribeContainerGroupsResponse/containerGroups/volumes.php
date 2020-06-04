<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\volumes\configFileVolumeConfigFileToPaths;

class volumes extends Model {
    protected $_name = [
        'type' => 'Type',
        'name' => 'Name',
        'NFSVolumePath' => 'NFSVolumePath',
        'NFSVolumeServer' => 'NFSVolumeServer',
        'NFSVolumeReadOnly' => 'NFSVolumeReadOnly',
        'diskVolumeDiskId' => 'DiskVolumeDiskId',
        'diskVolumeFsType' => 'DiskVolumeFsType',
        'flexVolumeDriver' => 'FlexVolumeDriver',
        'flexVolumeFsType' => 'FlexVolumeFsType',
        'flexVolumeOptions' => 'FlexVolumeOptions',
        'configFileVolumeConfigFileToPaths' => 'ConfigFileVolumeConfigFileToPaths',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('NFSVolumePath', $this->NFSVolumePath, true);
        Model::validateRequired('NFSVolumeServer', $this->NFSVolumeServer, true);
        Model::validateRequired('NFSVolumeReadOnly', $this->NFSVolumeReadOnly, true);
        Model::validateRequired('diskVolumeDiskId', $this->diskVolumeDiskId, true);
        Model::validateRequired('diskVolumeFsType', $this->diskVolumeFsType, true);
        Model::validateRequired('flexVolumeDriver', $this->flexVolumeDriver, true);
        Model::validateRequired('flexVolumeFsType', $this->flexVolumeFsType, true);
        Model::validateRequired('flexVolumeOptions', $this->flexVolumeOptions, true);
        Model::validateRequired('configFileVolumeConfigFileToPaths', $this->configFileVolumeConfigFileToPaths, true);
    }
    public function toMap() {
        $res = [];
        $res['Type'] = $this->type;
        $res['Name'] = $this->name;
        $res['NFSVolumePath'] = $this->NFSVolumePath;
        $res['NFSVolumeServer'] = $this->NFSVolumeServer;
        $res['NFSVolumeReadOnly'] = $this->NFSVolumeReadOnly;
        $res['DiskVolumeDiskId'] = $this->diskVolumeDiskId;
        $res['DiskVolumeFsType'] = $this->diskVolumeFsType;
        $res['FlexVolumeDriver'] = $this->flexVolumeDriver;
        $res['FlexVolumeFsType'] = $this->flexVolumeFsType;
        $res['FlexVolumeOptions'] = $this->flexVolumeOptions;
        $res['ConfigFileVolumeConfigFileToPaths'] = [];
        if(null !== $this->configFileVolumeConfigFileToPaths && is_array($this->configFileVolumeConfigFileToPaths)){
            $n = 0;
            foreach($this->configFileVolumeConfigFileToPaths as $item){
                $res['ConfigFileVolumeConfigFileToPaths'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return volumes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['NFSVolumePath'])){
            $model->NFSVolumePath = $map['NFSVolumePath'];
        }
        if(isset($map['NFSVolumeServer'])){
            $model->NFSVolumeServer = $map['NFSVolumeServer'];
        }
        if(isset($map['NFSVolumeReadOnly'])){
            $model->NFSVolumeReadOnly = $map['NFSVolumeReadOnly'];
        }
        if(isset($map['DiskVolumeDiskId'])){
            $model->diskVolumeDiskId = $map['DiskVolumeDiskId'];
        }
        if(isset($map['DiskVolumeFsType'])){
            $model->diskVolumeFsType = $map['DiskVolumeFsType'];
        }
        if(isset($map['FlexVolumeDriver'])){
            $model->flexVolumeDriver = $map['FlexVolumeDriver'];
        }
        if(isset($map['FlexVolumeFsType'])){
            $model->flexVolumeFsType = $map['FlexVolumeFsType'];
        }
        if(isset($map['FlexVolumeOptions'])){
            $model->flexVolumeOptions = $map['FlexVolumeOptions'];
        }
        if(isset($map['ConfigFileVolumeConfigFileToPaths'])){
            if(!empty($map['ConfigFileVolumeConfigFileToPaths'])){
                $model->configFileVolumeConfigFileToPaths = [];
                $n = 0;
                foreach($map['ConfigFileVolumeConfigFileToPaths'] as $item) {
                    $model->configFileVolumeConfigFileToPaths[$n++] = null !== $item ? configFileVolumeConfigFileToPaths::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description nfsVolumePath
     * @var string
     */
    public $NFSVolumePath;

    /**
     * @description nfsVolumeServer
     * @var string
     */
    public $NFSVolumeServer;

    /**
     * @description nfsVolumeReadOnly
     * @var bool
     */
    public $NFSVolumeReadOnly;

    /**
     * @description diskVolumeDiskId
     * @var string
     */
    public $diskVolumeDiskId;

    /**
     * @description diskVolumeFsType
     * @var string
     */
    public $diskVolumeFsType;

    /**
     * @description flexVolumeDriver
     * @var string
     */
    public $flexVolumeDriver;

    /**
     * @description flexVolumeFsType
     * @var string
     */
    public $flexVolumeFsType;

    /**
     * @description flexVolumeOptions
     * @var string
     */
    public $flexVolumeOptions;

    /**
     * @description configFileVolumeConfigFileToPaths
     * @var array
     */
    public $configFileVolumeConfigFileToPaths;

}
