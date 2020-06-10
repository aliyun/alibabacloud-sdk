<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\volume\configFileVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\volume\emptyDirVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\volume\NFSVolume;
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
     * @description EmptyDirVolume
     *
     * @var emptyDirVolume
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
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->NFSVolume) {
            $res['NFSVolume'] = null !== $this->NFSVolume ? $this->NFSVolume->toMap() : null;
        }
        if (null !== $this->configFileVolume) {
            $res['ConfigFileVolume'] = null !== $this->configFileVolume ? $this->configFileVolume->toMap() : null;
        }
        if (null !== $this->emptyDirVolume) {
            $res['EmptyDirVolume'] = null !== $this->emptyDirVolume ? $this->emptyDirVolume->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['NFSVolume'])) {
            $model->NFSVolume = NFSVolume::fromMap($map['NFSVolume']);
        }
        if (isset($map['ConfigFileVolume'])) {
            $model->configFileVolume = configFileVolume::fromMap($map['ConfigFileVolume']);
        }
        if (isset($map['EmptyDirVolume'])) {
            $model->emptyDirVolume = emptyDirVolume::fromMap($map['EmptyDirVolume']);
        }

        return $model;
    }
}
