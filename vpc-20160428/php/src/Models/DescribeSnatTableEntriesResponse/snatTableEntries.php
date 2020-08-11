<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponse\snatTableEntries\snatTableEntry;
use AlibabaCloud\Tea\Model;

class snatTableEntries extends Model
{
    /**
     * @var array
     */
    public $snatTableEntry;
    protected $_name = [
        'snatTableEntry' => 'SnatTableEntry',
    ];

    public function validate()
    {
        Model::validateRequired('snatTableEntry', $this->snatTableEntry, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snatTableEntry) {
            $res['SnatTableEntry'] = [];
            if (null !== $this->snatTableEntry && \is_array($this->snatTableEntry)) {
                $n = 0;
                foreach ($this->snatTableEntry as $item) {
                    $res['SnatTableEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snatTableEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnatTableEntry'])) {
            if (!empty($map['SnatTableEntry'])) {
                $model->snatTableEntry = [];
                $n                     = 0;
                foreach ($map['SnatTableEntry'] as $item) {
                    $model->snatTableEntry[$n++] = null !== $item ? snatTableEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
