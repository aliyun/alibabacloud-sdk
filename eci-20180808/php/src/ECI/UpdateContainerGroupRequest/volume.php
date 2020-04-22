<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest;

use AlibabaCloud\SDK\ECI\V20180808\ECI\volume\configFileVolume;
use AlibabaCloud\SDK\ECI\V20180808\ECI\volume\emptyDirVolume;
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
     * @description type
     *
     * @var string
     */
    public $type;

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
     * @description EmptyDirVolume
     *
     * @var volume.emptyDirVolume
     */
    public $emptyDirVolume;
    protected $_name = [
        'name'             => 'Name',
        'type'             => 'Type',
        'NFSVolume'        => 'NFSVolume',
        'configFileVolume' => 'ConfigFileVolume',
        'emptyDirVolume'   => 'EmptyDirVolume',
    ];

    public function validate()
    {
        Model::validateRequired('NFSVolume', $this->NFSVolume, true);
        Model::validateRequired('configFileVolume', $this->configFileVolume, true);
        Model::validateRequired('emptyDirVolume', $this->emptyDirVolume, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['Name']             = $this->name;
        $res['Type']             = $this->type;
        $res['NFSVolume']        = null !== $this->NFSVolume ? $this->NFSVolume->toMap() : null;
        $res['ConfigFileVolume'] = null !== $this->configFileVolume ? $this->configFileVolume->toMap() : null;
        $res['EmptyDirVolume']   = null !== $this->emptyDirVolume ? $this->emptyDirVolume->toMap() : null;

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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['NFSVolume'])) {
            $model->NFSVolume = volume\NFSVolume::fromMap($map['NFSVolume']);
        }
        if (isset($map['ConfigFileVolume'])) {
            $model->configFileVolume = volume\configFileVolume::fromMap($map['ConfigFileVolume']);
        }
        if (isset($map['EmptyDirVolume'])) {
            $model->emptyDirVolume = volume\emptyDirVolume::fromMap($map['EmptyDirVolume']);
        }

        return $model;
    }
}
