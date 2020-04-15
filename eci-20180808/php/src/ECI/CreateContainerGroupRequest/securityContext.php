<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class securityContext extends Model
{
    /**
     * @description PodSecurityContextSysctls
     *
     * @var array
     */
    public $sysctl;
    protected $_name = [
        'sysctl' => 'Sysctl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res           = [];
        $res['Sysctl'] = [];
        if (null !== $this->sysctl && \is_array($this->sysctl)) {
            $n = 0;
            foreach ($this->sysctl as $item) {
                $res['Sysctl'][$n++] = null !== $item ? $item->toMap() : $item;
            }
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
        if (isset($map['Sysctl'])) {
            if (!empty($map['Sysctl'])) {
                $model->sysctl = [];
                $n             = 0;
                foreach ($map['Sysctl'] as $item) {
                    $model->sysctl[$n++] = null !== $item ? CreateContainerGroupRequest\securityContext\sysctl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
