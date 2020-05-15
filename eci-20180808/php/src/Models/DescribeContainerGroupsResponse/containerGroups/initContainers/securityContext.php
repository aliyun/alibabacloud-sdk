<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers;

use AlibabaCloud\SDK\ECI\V20180808\Models\securityContext\capability;
use AlibabaCloud\Tea\Model;

class securityContext extends Model
{
    /**
     * @description readOnlyRootFilesystem
     *
     * @var bool
     */
    public $readOnlyRootFilesystem;

    /**
     * @description runAsUser
     *
     * @var int
     */
    public $runAsUser;

    /**
     * @description capability
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
        Model::validateRequired('readOnlyRootFilesystem', $this->readOnlyRootFilesystem, true);
        Model::validateRequired('runAsUser', $this->runAsUser, true);
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
            $model->capability = capability::fromMap($map['Capability']);
        }

        return $model;
    }
}
