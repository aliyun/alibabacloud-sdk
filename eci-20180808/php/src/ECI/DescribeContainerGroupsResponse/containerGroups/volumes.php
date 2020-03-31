<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    public $type;
    public $name;
    public $NFSVolumePath;
    public $NFSVolumeServer;
    public $NFSVolumeReadOnly;
    public $diskVolumeDiskId;
    public $diskVolumeFsType;
    public $flexVolumeDriver;
    public $flexVolumeFsType;
    public $flexVolumeOptions;
    public $configFileVolumeConfigFileToPaths;
    protected $_required = [
        'type'                              => true,
        'name'                              => true,
        'NFSVolumePath'                     => true,
        'NFSVolumeServer'                   => true,
        'NFSVolumeReadOnly'                 => true,
        'diskVolumeDiskId'                  => true,
        'diskVolumeFsType'                  => true,
        'flexVolumeDriver'                  => true,
        'flexVolumeFsType'                  => true,
        'flexVolumeOptions'                 => true,
        'configFileVolumeConfigFileToPaths' => true,
    ];
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
    protected $_description = [
        'type'                              => 'type',
        'name'                              => 'name',
        'NFSVolumePath'                     => 'nfsVolumePath',
        'NFSVolumeServer'                   => 'nfsVolumeServer',
        'NFSVolumeReadOnly'                 => 'nfsVolumeReadOnly',
        'diskVolumeDiskId'                  => 'diskVolumeDiskId',
        'diskVolumeFsType'                  => 'diskVolumeFsType',
        'flexVolumeDriver'                  => 'flexVolumeDriver',
        'flexVolumeFsType'                  => 'flexVolumeFsType',
        'flexVolumeOptions'                 => 'flexVolumeOptions',
        'configFileVolumeConfigFileToPaths' => 'configFileVolumeConfigFileToPaths',
    ];
}
