<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\initContainer;

use AlibabaCloud\SDK\ECI\V20180808\ECI\securityContext\capability;
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
     * @var securityContext.capability
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
        $res                           = [];
        $res['ReadOnlyRootFilesystem'] = $this->readOnlyRootFilesystem;
        $res['RunAsUser']              = $this->runAsUser;
        $res['Capability']             = null !== $this->capability ? $this->capability->toMap() : null;

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
            $model->capability = securityContext\capability::fromMap($map['Capability']);
        }

        return $model;
    }
}
