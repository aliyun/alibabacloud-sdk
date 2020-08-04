<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponse\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponse\data\tables\tableRows;
use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @var array
     */
    public $tableRows;

    /**
     * @var array
     */
    public $head;

    /**
     * @var array
     */
    public $tail;
    protected $_name = [
        'tableRows' => 'TableRows',
        'head'      => 'Head',
        'tail'      => 'Tail',
    ];

    public function validate()
    {
        Model::validateRequired('tableRows', $this->tableRows, true);
        Model::validateRequired('head', $this->head, true);
        Model::validateRequired('tail', $this->tail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableRows) {
            $res['TableRows'] = [];
            if (null !== $this->tableRows && \is_array($this->tableRows)) {
                $n = 0;
                foreach ($this->tableRows as $item) {
                    $res['TableRows'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->head) {
            $res['Head'] = $this->head;
        }
        if (null !== $this->tail) {
            $res['Tail'] = $this->tail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableRows'])) {
            if (!empty($map['TableRows'])) {
                $model->tableRows = [];
                $n                = 0;
                foreach ($map['TableRows'] as $item) {
                    $model->tableRows[$n++] = null !== $item ? tableRows::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Head'])) {
            if (!empty($map['Head'])) {
                $model->head = $map['Head'];
            }
        }
        if (isset($map['Tail'])) {
            if (!empty($map['Tail'])) {
                $model->tail = $map['Tail'];
            }
        }

        return $model;
    }
}
