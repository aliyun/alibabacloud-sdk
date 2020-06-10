<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponse\recordLines\recordLine;
use AlibabaCloud\Tea\Model;

class recordLines extends Model
{
    /**
     * @description RecordLine
     *
     * @var array
     */
    public $recordLine;
    protected $_name = [
        'recordLine' => 'RecordLine',
    ];

    public function validate()
    {
        Model::validateRequired('recordLine', $this->recordLine, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordLine) {
            $res['RecordLine'] = [];
            if (null !== $this->recordLine && \is_array($this->recordLine)) {
                $n = 0;
                foreach ($this->recordLine as $item) {
                    $res['RecordLine'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordLines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordLine'])) {
            if (!empty($map['RecordLine'])) {
                $model->recordLine = [];
                $n                 = 0;
                foreach ($map['RecordLine'] as $item) {
                    $model->recordLine[$n++] = null !== $item ? recordLine::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
