<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponse;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetMonitorResultResponse\data\records;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description maxId
     *
     * @var string
     */
    public $maxId;

    /**
     * @description vcsRealMatchResultDOS
     *
     * @var array
     */
    public $records;
    protected $_name = [
        'maxId'   => 'MaxId',
        'records' => 'Records',
    ];

    public function validate()
    {
        Model::validateRequired('maxId', $this->maxId, true);
        Model::validateRequired('records', $this->records, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxId) {
            $res['MaxId'] = $this->maxId;
        }
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxId'])) {
            $model->maxId = $map['MaxId'];
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
