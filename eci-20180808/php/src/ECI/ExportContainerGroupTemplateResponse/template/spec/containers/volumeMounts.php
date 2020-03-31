<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\containers;

use AlibabaCloud\Tea\Model;

class volumeMounts extends Model
{
    public $name;
    public $subPath;
    public $mountPath;
    public $readOnly;
    protected $_required = [
        'name'      => true,
        'subPath'   => true,
        'mountPath' => true,
        'readOnly'  => true,
    ];
    protected $_name = [
        'name'      => 'Name',
        'subPath'   => 'SubPath',
        'mountPath' => 'MountPath',
        'readOnly'  => 'ReadOnly',
    ];
    protected $_description = [
        'name'      => 'name',
        'subPath'   => 'subPath',
        'mountPath' => 'mountPath',
        'readOnly'  => 'readOnly',
    ];
}
