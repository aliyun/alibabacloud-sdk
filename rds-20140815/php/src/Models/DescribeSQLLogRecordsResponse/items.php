<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsResponse\items\SQLRecord;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description SQLRecord
     *
     * @var array
     */
    public $SQLRecord;
    protected $_name = [
        'SQLRecord' => 'SQLRecord',
    ];

    public function validate()
    {
        Model::validateRequired('SQLRecord', $this->SQLRecord, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLRecord) {
            $res['SQLRecord'] = [];
            if (null !== $this->SQLRecord && \is_array($this->SQLRecord)) {
                $n = 0;
                foreach ($this->SQLRecord as $item) {
                    $res['SQLRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLRecord'])) {
            if (!empty($map['SQLRecord'])) {
                $model->SQLRecord = [];
                $n                = 0;
                foreach ($map['SQLRecord'] as $item) {
                    $model->SQLRecord[$n++] = null !== $item ? SQLRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
