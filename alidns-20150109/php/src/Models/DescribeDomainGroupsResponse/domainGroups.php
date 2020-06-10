<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsResponse\domainGroups\domainGroup;
use AlibabaCloud\Tea\Model;

class domainGroups extends Model
{
    /**
     * @description DomainGroup
     *
     * @var array
     */
    public $domainGroup;
    protected $_name = [
        'domainGroup' => 'DomainGroup',
    ];

    public function validate()
    {
        Model::validateRequired('domainGroup', $this->domainGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainGroup) {
            $res['DomainGroup'] = [];
            if (null !== $this->domainGroup && \is_array($this->domainGroup)) {
                $n = 0;
                foreach ($this->domainGroup as $item) {
                    $res['DomainGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainGroup'])) {
            if (!empty($map['DomainGroup'])) {
                $model->domainGroup = [];
                $n                  = 0;
                foreach ($map['DomainGroup'] as $item) {
                    $model->domainGroup[$n++] = null !== $item ? domainGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
