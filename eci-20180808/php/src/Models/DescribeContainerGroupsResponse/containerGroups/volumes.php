<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\volumes\configFileVolumeConfigFileToPaths;
use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description nfsVolumePath
     *
     * @var string
     */
    public $NFSVolumePath;

    /**
     * @description nfsVolumeServer
     *
     * @var string
     */
    public $NFSVolumeServer;

    /**
     * @description nfsVolumeReadOnly
     *
     * @var bool
     */
    public $NFSVolumeReadOnly;

    /**
     * @description diskVolumeDiskId
     *
     * @var string
     */
    public $diskVolumeDiskId;

    /**
     * @description diskVolumeFsType
     *
     * @var string
     */
    public $diskVolumeFsType;

    /**
     * @description flexVolumeDriver
     *
     * @var string
     */
    public $flexVolumeDriver;

    /**
     * @description flexVolumeFsType
     *
     * @var string
     */
    public $flexVolumeFsType;

    /**
     * @description flexVolumeOptions
     *
     * @var string
     */
    public $flexVolumeOptions;

    /**
     * @description configFileVolumeConfigFileToPaths
     *
     * @var array
     */
    public $configFileVolumeConfigFileToPaths;
    protected $_name = [
        'type'                              => 'Type',
        'name'                              => 'Name',
        'NFSVolumePath'                     => 'NFSVolumePath',
        'NFSVolumeServer'                   => 'NFSVolumeServer',
        'NFSVolumeReadOnly'                 => 'NFSVolumeReadOnly',
        'diskVolumeDiskId'                  => 'DiskVolumeDiskId',
        'diskVolumeFsType'                  => 'DiskVolumeFsType',
        'flexVolumeDriver'                  => 'FlexVolumeDriver',
        'flexVolumeFsType'                  => 'FlexVolumeFsType',
        'flexVolumeOptions'                 => 'FlexVolumeOptions',
        'configFileVolumeConfigFileToPaths' => 'ConfigFileVolumeConfigFileToPaths',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->NFSVolumePath) {
            $res['NFSVolumePath'] = $this->NFSVolumePath;
        }
        if (null !== $this->NFSVolumeServer) {
            $res['NFSVolumeServer'] = $this->NFSVolumeServer;
        }
        if (null !== $this->NFSVolumeReadOnly) {
            $res['NFSVolumeReadOnly'] = $this->NFSVolumeReadOnly;
        }
        if (null !== $this->diskVolumeDiskId) {
            $res['DiskVolumeDiskId'] = $this->diskVolumeDiskId;
        }
        if (null !== $this->diskVolumeFsType) {
            $res['DiskVolumeFsType'] = $this->diskVolumeFsType;
        }
        if (null !== $this->flexVolumeDriver) {
            $res['FlexVolumeDriver'] = $this->flexVolumeDriver;
        }
        if (null !== $this->flexVolumeFsType) {
            $res['FlexVolumeFsType'] = $this->flexVolumeFsType;
        }
        if (null !== $this->flexVolumeOptions) {
            $res['FlexVolumeOptions'] = $this->flexVolumeOptions;
        }
        if (null !== $this->configFileVolumeConfigFileToPaths) {
            $res['ConfigFileVolumeConfigFileToPaths'] = [];
            if (null !== $this->configFileVolumeConfigFileToPaths && \is_array($this->configFileVolumeConfigFileToPaths)) {
                $n = 0;
                foreach ($this->configFileVolumeConfigFileToPaths as $item) {
                    $res['ConfigFileVolumeConfigFileToPaths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NFSVolumePath'])) {
            $model->NFSVolumePath = $map['NFSVolumePath'];
        }
        if (isset($map['NFSVolumeServer'])) {
            $model->NFSVolumeServer = $map['NFSVolumeServer'];
        }
        if (isset($map['NFSVolumeReadOnly'])) {
            $model->NFSVolumeReadOnly = $map['NFSVolumeReadOnly'];
        }
        if (isset($map['DiskVolumeDiskId'])) {
            $model->diskVolumeDiskId = $map['DiskVolumeDiskId'];
        }
        if (isset($map['DiskVolumeFsType'])) {
            $model->diskVolumeFsType = $map['DiskVolumeFsType'];
        }
        if (isset($map['FlexVolumeDriver'])) {
            $model->flexVolumeDriver = $map['FlexVolumeDriver'];
        }
        if (isset($map['FlexVolumeFsType'])) {
            $model->flexVolumeFsType = $map['FlexVolumeFsType'];
        }
        if (isset($map['FlexVolumeOptions'])) {
            $model->flexVolumeOptions = $map['FlexVolumeOptions'];
        }
        if (isset($map['ConfigFileVolumeConfigFileToPaths'])) {
            if (!empty($map['ConfigFileVolumeConfigFileToPaths'])) {
                $model->configFileVolumeConfigFileToPaths = [];
                $n                                        = 0;
                foreach ($map['ConfigFileVolumeConfigFileToPaths'] as $item) {
                    $model->configFileVolumeConfigFileToPaths[$n++] = null !== $item ? configFileVolumeConfigFileToPaths::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
