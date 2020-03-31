<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\initContainer;

use AlibabaCloud\Tea\Model;

class securityContext extends Model
{
    public $capability;
    public $readOnlyRootFilesystem;
    public $runAsUser;
    protected $_required = [
        'capability' => true,
    ];
    protected $_name = [
        'capability'             => 'Capability',
        'readOnlyRootFilesystem' => 'ReadOnlyRootFilesystem',
        'runAsUser'              => 'RunAsUser',
    ];
    protected $_description = [
        'capability'             => 'Capability',
        'readOnlyRootFilesystem' => 'securityContextReadOnlyRootFilesystem',
        'runAsUser'              => 'securityContextRunAsUser',
    ];
}
