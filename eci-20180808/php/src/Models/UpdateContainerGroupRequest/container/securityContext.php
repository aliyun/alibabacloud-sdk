<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container;

use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\container\securityContext\capability;
use AlibabaCloud\Tea\Model;

class securityContext extends Model
{
    /**
     * @description securityContextReadOnlyRootFilesystem
     *
     * @var bool
     */
    public $readOnlyRootFilesystem;

    /**
     * @description securityContextRunAsUser
     *
     * @var int
     */
    public $runAsUser;

    /**
     * @description Capability
     *
     * @var capability
     */
    public $capability;
    protected $_name = [
        'readOnlyRootFilesystem' => 'ReadOnlyRootFilesystem',
        'runAsUser'              => 'RunAsUser',
        'capability'             => 'Capability',
    ];

    public function validate()
    {
        Model::validateRequired('capability', $this->capability, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readOnlyRootFilesystem) {
            $res['ReadOnlyRootFilesystem'] = $this->readOnlyRootFilesystem;
        }
        if (null !== $this->runAsUser) {
            $res['RunAsUser'] = $this->runAsUser;
        }
        if (null !== $this->capability) {
            $res['Capability'] = null !== $this->capability ? $this->capability->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadOnlyRootFilesystem'])) {
            $model->readOnlyRootFilesystem = $map['ReadOnlyRootFilesystem'];
        }
        if (isset($map['RunAsUser'])) {
            $model->runAsUser = $map['RunAsUser'];
        }
        if (isset($map['Capability'])) {
            $model->capability = capability::fromMap($map['Capability']);
        }

        return $model;
    }
}
