<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsSummaryResponse\statistics;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description count
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'subDomain' => 'SubDomain',
        'count'     => 'Count',
    ];

    public function validate()
    {
        Model::validateRequired('subDomain', $this->subDomain, true);
        Model::validateRequired('count', $this->count, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
