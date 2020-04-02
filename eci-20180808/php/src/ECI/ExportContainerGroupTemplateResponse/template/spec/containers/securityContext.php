<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\containers;

use AlibabaCloud\Tea\Model;

class securityContext extends Model
{
    /**
     * @description sysctls
     *
     * @var array
     */
    public $sysctls;
    protected $_name = [
        'sysctls' => 'Sysctls',
    ];

    public function validate()
    {
        Model::validateRequired('sysctls', $this->sysctls, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['Sysctls'] = [];
        if (null !== $this->sysctls && \is_array($this->sysctls)) {
            $n = 0;
            foreach ($this->sysctls as $item) {
                $res['Sysctls'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Sysctls'])) {
            if (!empty($map['Sysctls'])) {
                $model->sysctls = [];
                $n              = 0;
                foreach ($map['Sysctls'] as $item) {
                    $model->sysctls[$n++] = null !== $item ? ExportContainerGroupTemplateResponse\template\spec\containers\securityContext\sysctls::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
