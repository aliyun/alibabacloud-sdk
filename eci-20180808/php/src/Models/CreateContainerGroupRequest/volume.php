<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\configFileVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\diskVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\emptyDirVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\flexVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\hostPathVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\NFSVolume;
use AlibabaCloud\Tea\Model;

class volume extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description NFSVolume
     *
     * @var NFSVolume
     */
    public $NFSVolume;

    /**
     * @description ConfigFileVolume
     *
     * @var configFileVolume
     */
    public $configFileVolume;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description EmptyDirVolume
     *
     * @var emptyDirVolume
     */
    public $emptyDirVolume;

    /**
     * @description DiskVolume
     *
     * @var diskVolume
     */
    public $diskVolume;

    /**
     * @description FlexVolume
     *
     * @var flexVolume
     */
    public $flexVolume;

    /**
     * @description HostPathVolume
     *
     * @var hostPathVolume
     */
    public $hostPathVolume;
    protected $_name = [
        'name'             => 'Name',
        'NFSVolume'        => 'NFSVolume',
        'configFileVolume' => 'ConfigFileVolume',
        'type'             => 'Type',
        'emptyDirVolume'   => 'EmptyDirVolume',
        'diskVolume'       => 'DiskVolume',
        'flexVolume'       => 'FlexVolume',
        'hostPathVolume'   => 'HostPathVolume',
    ];

    public function validate()
    {
        Model::validateRequired('NFSVolume', $this->NFSVolume, true);
        Model::validateRequired('configFileVolume', $this->configFileVolume, true);
        Model::validateRequired('emptyDirVolume', $this->emptyDirVolume, true);
        Model::validateRequired('diskVolume', $this->diskVolume, true);
        Model::validateRequired('flexVolume', $this->flexVolume, true);
        Model::validateRequired('hostPathVolume', $this->hostPathVolume, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->NFSVolume) {
            $res['NFSVolume'] = null !== $this->NFSVolume ? $this->NFSVolume->toMap() : null;
        }
        if (null !== $this->configFileVolume) {
            $res['ConfigFileVolume'] = null !== $this->configFileVolume ? $this->configFileVolume->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->emptyDirVolume) {
            $res['EmptyDirVolume'] = null !== $this->emptyDirVolume ? $this->emptyDirVolume->toMap() : null;
        }
        if (null !== $this->diskVolume) {
            $res['DiskVolume'] = null !== $this->diskVolume ? $this->diskVolume->toMap() : null;
        }
        if (null !== $this->flexVolume) {
            $res['FlexVolume'] = null !== $this->flexVolume ? $this->flexVolume->toMap() : null;
        }
        if (null !== $this->hostPathVolume) {
            $res['HostPathVolume'] = null !== $this->hostPathVolume ? $this->hostPathVolume->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NFSVolume'])) {
            $model->NFSVolume = NFSVolume::fromMap($map['NFSVolume']);
        }
        if (isset($map['ConfigFileVolume'])) {
            $model->configFileVolume = configFileVolume::fromMap($map['ConfigFileVolume']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['EmptyDirVolume'])) {
            $model->emptyDirVolume = emptyDirVolume::fromMap($map['EmptyDirVolume']);
        }
        if (isset($map['DiskVolume'])) {
            $model->diskVolume = diskVolume::fromMap($map['DiskVolume']);
        }
        if (isset($map['FlexVolume'])) {
            $model->flexVolume = flexVolume::fromMap($map['FlexVolume']);
        }
        if (isset($map['HostPathVolume'])) {
            $model->hostPathVolume = hostPathVolume::fromMap($map['HostPathVolume']);
        }

        return $model;
    }
}
