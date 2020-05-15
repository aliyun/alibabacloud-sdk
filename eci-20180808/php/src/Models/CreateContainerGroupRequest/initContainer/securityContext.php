<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\CreateContainerGroupRequest\initContainer;

use AlibabaCloud\SDK\ECI\V20180808\Models\securityContext\capability;
use AlibabaCloud\Tea\Model;

class securityContext extends Model
{
    /**
     * @description Capability
     *
     * @var capability
     */
    public $capability;

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
    protected $_name = [
        'capability'             => 'Capability',
        'readOnlyRootFilesystem' => 'ReadOnlyRootFilesystem',
        'runAsUser'              => 'RunAsUser',
    ];

    public function validate()
    {
        Model::validateRequired('capability', $this->capability, true);
    }

    public function toMap()
    {
        $res                           = [];
        $res['Capability']             = null !== $this->capability ? $this->capability->toMap() : null;
        $res['ReadOnlyRootFilesystem'] = $this->readOnlyRootFilesystem;
        $res['RunAsUser']              = $this->runAsUser;

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
        if (isset($map['Capability'])) {
            $model->capability = capability::fromMap($map['Capability']);
        }
        if (isset($map['ReadOnlyRootFilesystem'])) {
            $model->readOnlyRootFilesystem = $map['ReadOnlyRootFilesystem'];
        }
        if (isset($map['RunAsUser'])) {
            $model->runAsUser = $map['RunAsUser'];
        }

        return $model;
    }
}
