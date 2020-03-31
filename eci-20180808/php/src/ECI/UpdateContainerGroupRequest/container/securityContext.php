<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class securityContext extends Model
{
    public $readOnlyRootFilesystem;
    public $runAsUser;
    public $capability;
    protected $_name = [
        'readOnlyRootFilesystem' => 'ReadOnlyRootFilesystem',
        'runAsUser'              => 'RunAsUser',
        'capability'             => 'Capability',
    ];
    protected $_description = [
        'readOnlyRootFilesystem' => 'securityContextReadOnlyRootFilesystem',
        'runAsUser'              => 'securityContextRunAsUser',
        'capability'             => 'Capability',
    ];
    protected $_required = [
        'capability' => true,
    ];
}
