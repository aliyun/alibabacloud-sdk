<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\SDK\ECI\V20180808\ECI\volume\configFileVolume;
use AlibabaCloud\SDK\ECI\V20180808\ECI\volume\diskVolume;
use AlibabaCloud\SDK\ECI\V20180808\ECI\volume\emptyDirVolume;
use AlibabaCloud\SDK\ECI\V20180808\ECI\volume\flexVolume;
use AlibabaCloud\SDK\ECI\V20180808\ECI\volume\hostPathVolume;
use AlibabaCloud\SDK\ECI\V20180808\ECI\volume\NFSVolume;
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
     * @var volume.NFSVolume
     */
    public $NFSVolume;
    /**
     * @description ConfigFileVolume
     *
     * @var volume.configFileVolume
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
     * @var volume.emptyDirVolume
     */
    public $emptyDirVolume;
    /**
     * @description DiskVolume
     *
     * @var volume.diskVolume
     */
    public $diskVolume;
    /**
     * @description FlexVolume
     *
     * @var volume.flexVolume
     */
    public $flexVolume;
    /**
     * @description HostPathVolume
     *
     * @var volume.hostPathVolume
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
        $res                     = [];
        $res['Name']             = $this->name;
        $res['NFSVolume']        = null !== $this->NFSVolume ? $this->NFSVolume->toMap() : null;
        $res['ConfigFileVolume'] = null !== $this->configFileVolume ? $this->configFileVolume->toMap() : null;
        $res['Type']             = $this->type;
        $res['EmptyDirVolume']   = null !== $this->emptyDirVolume ? $this->emptyDirVolume->toMap() : null;
        $res['DiskVolume']       = null !== $this->diskVolume ? $this->diskVolume->toMap() : null;
        $res['FlexVolume']       = null !== $this->flexVolume ? $this->flexVolume->toMap() : null;
        $res['HostPathVolume']   = null !== $this->hostPathVolume ? $this->hostPathVolume->toMap() : null;

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
            $model->NFSVolume = volume\NFSVolume::fromMap($map['NFSVolume']);
        }
        if (isset($map['ConfigFileVolume'])) {
            $model->configFileVolume = volume\configFileVolume::fromMap($map['ConfigFileVolume']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['EmptyDirVolume'])) {
            $model->emptyDirVolume = volume\emptyDirVolume::fromMap($map['EmptyDirVolume']);
        }
        if (isset($map['DiskVolume'])) {
            $model->diskVolume = volume\diskVolume::fromMap($map['DiskVolume']);
        }
        if (isset($map['FlexVolume'])) {
            $model->flexVolume = volume\flexVolume::fromMap($map['FlexVolume']);
        }
        if (isset($map['HostPathVolume'])) {
            $model->hostPathVolume = volume\hostPathVolume::fromMap($map['HostPathVolume']);
        }

        return $model;
    }
}
