<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponse\ipv6TranslatorEntries\ipv6TranslatorEntry;
use AlibabaCloud\Tea\Model;

class ipv6TranslatorEntries extends Model
{
    /**
     * @var array
     */
    public $ipv6TranslatorEntry;
    protected $_name = [
        'ipv6TranslatorEntry' => 'Ipv6TranslatorEntry',
    ];

    public function validate()
    {
        Model::validateRequired('ipv6TranslatorEntry', $this->ipv6TranslatorEntry, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6TranslatorEntry) {
            $res['Ipv6TranslatorEntry'] = [];
            if (null !== $this->ipv6TranslatorEntry && \is_array($this->ipv6TranslatorEntry)) {
                $n = 0;
                foreach ($this->ipv6TranslatorEntry as $item) {
                    $res['Ipv6TranslatorEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6TranslatorEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6TranslatorEntry'])) {
            if (!empty($map['Ipv6TranslatorEntry'])) {
                $model->ipv6TranslatorEntry = [];
                $n                          = 0;
                foreach ($map['Ipv6TranslatorEntry'] as $item) {
                    $model->ipv6TranslatorEntry[$n++] = null !== $item ? ipv6TranslatorEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
