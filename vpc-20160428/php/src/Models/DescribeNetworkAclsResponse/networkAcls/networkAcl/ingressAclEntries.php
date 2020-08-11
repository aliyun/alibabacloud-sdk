<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponse\networkAcls\networkAcl;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponse\networkAcls\networkAcl\ingressAclEntries\ingressAclEntry;
use AlibabaCloud\Tea\Model;

class ingressAclEntries extends Model
{
    /**
     * @var array
     */
    public $ingressAclEntry;
    protected $_name = [
        'ingressAclEntry' => 'IngressAclEntry',
    ];

    public function validate()
    {
        Model::validateRequired('ingressAclEntry', $this->ingressAclEntry, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ingressAclEntry) {
            $res['IngressAclEntry'] = [];
            if (null !== $this->ingressAclEntry && \is_array($this->ingressAclEntry)) {
                $n = 0;
                foreach ($this->ingressAclEntry as $item) {
                    $res['IngressAclEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressAclEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IngressAclEntry'])) {
            if (!empty($map['IngressAclEntry'])) {
                $model->ingressAclEntry = [];
                $n                      = 0;
                foreach ($map['IngressAclEntry'] as $item) {
                    $model->ingressAclEntry[$n++] = null !== $item ? ingressAclEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
