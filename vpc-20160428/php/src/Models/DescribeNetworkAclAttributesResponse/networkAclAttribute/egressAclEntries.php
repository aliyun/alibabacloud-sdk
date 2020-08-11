<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponse\networkAclAttribute;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponse\networkAclAttribute\egressAclEntries\egressAclEntry;
use AlibabaCloud\Tea\Model;

class egressAclEntries extends Model
{
    /**
     * @var array
     */
    public $egressAclEntry;
    protected $_name = [
        'egressAclEntry' => 'EgressAclEntry',
    ];

    public function validate()
    {
        Model::validateRequired('egressAclEntry', $this->egressAclEntry, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->egressAclEntry) {
            $res['EgressAclEntry'] = [];
            if (null !== $this->egressAclEntry && \is_array($this->egressAclEntry)) {
                $n = 0;
                foreach ($this->egressAclEntry as $item) {
                    $res['EgressAclEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return egressAclEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EgressAclEntry'])) {
            if (!empty($map['EgressAclEntry'])) {
                $model->egressAclEntry = [];
                $n                     = 0;
                foreach ($map['EgressAclEntry'] as $item) {
                    $model->egressAclEntry[$n++] = null !== $item ? egressAclEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
