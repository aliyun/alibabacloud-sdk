<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers;

use AlibabaCloud\Tea\Model;

class securityContext extends Model
{
    public $readOnlyRootFilesystem;
    public $runAsUser;
    public $capability;
    protected $_required = [
        'readOnlyRootFilesystem' => true,
        'runAsUser'              => true,
        'capability'             => true,
    ];
    protected $_name = [
        'readOnlyRootFilesystem' => 'ReadOnlyRootFilesystem',
        'runAsUser'              => 'RunAsUser',
        'capability'             => 'Capability',
    ];
    protected $_description = [
        'readOnlyRootFilesystem' => 'readOnlyRootFilesystem',
        'runAsUser'              => 'runAsUser',
        'capability'             => 'capability',
    ];
}
