<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListAttributesResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListAttributesResponse\aclEntries\aclEntry;
use AlibabaCloud\Tea\Model;

class aclEntries extends Model
{
    /**
     * @var array
     */
    public $aclEntry;
    protected $_name = [
        'aclEntry' => 'AclEntry',
    ];

    public function validate()
    {
        Model::validateRequired('aclEntry', $this->aclEntry, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntry) {
            $res['AclEntry'] = [];
            if (null !== $this->aclEntry && \is_array($this->aclEntry)) {
                $n = 0;
                foreach ($this->aclEntry as $item) {
                    $res['AclEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntry'])) {
            if (!empty($map['AclEntry'])) {
                $model->aclEntry = [];
                $n               = 0;
                foreach ($map['AclEntry'] as $item) {
                    $model->aclEntry[$n++] = null !== $item ? aclEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
