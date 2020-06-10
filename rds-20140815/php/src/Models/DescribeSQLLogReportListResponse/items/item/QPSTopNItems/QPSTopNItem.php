<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponse\items\item\QPSTopNItems;

use AlibabaCloud\Tea\Model;

class QPSTopNItem extends Model
{
    /**
     * @description sqlText
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description sqlExecuteTimes
     *
     * @var int
     */
    public $SQLExecuteTimes;
    protected $_name = [
        'SQLText'         => 'SQLText',
        'SQLExecuteTimes' => 'SQLExecuteTimes',
    ];

    public function validate()
    {
        Model::validateRequired('SQLText', $this->SQLText, true);
        Model::validateRequired('SQLExecuteTimes', $this->SQLExecuteTimes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->SQLExecuteTimes) {
            $res['SQLExecuteTimes'] = $this->SQLExecuteTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QPSTopNItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['SQLExecuteTimes'])) {
            $model->SQLExecuteTimes = $map['SQLExecuteTimes'];
        }

        return $model;
    }
}
