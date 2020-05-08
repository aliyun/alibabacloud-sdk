<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponse\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponse\data\tables\tableRows;
use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @description head
     *
     * @var string
     */
    public $head;

    /**
     * @description tail
     *
     * @var string
     */
    public $tail;

    /**
     * @description tableRows
     *
     * @var array
     */
    public $tableRows;
    protected $_name = [
        'head'      => 'Head',
        'tail'      => 'Tail',
        'tableRows' => 'TableRows',
    ];

    public function validate()
    {
        Model::validateRequired('head', $this->head, true);
        Model::validateRequired('tail', $this->tail, true);
        Model::validateRequired('tableRows', $this->tableRows, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['Head']      = $this->head;
        $res['Tail']      = $this->tail;
        $res['TableRows'] = [];
        if (null !== $this->tableRows && \is_array($this->tableRows)) {
            $n = 0;
            foreach ($this->tableRows as $item) {
                $res['TableRows'][$n++] = null !== $item ? $item->toMap() : $item;
            }
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
        if (isset($map['Head'])) {
            $model->head = $map['Head'];
        }
        if (isset($map['Tail'])) {
            $model->tail = $map['Tail'];
        }
        if (isset($map['TableRows'])) {
            if (!empty($map['TableRows'])) {
                $model->tableRows = [];
                $n                = 0;
                foreach ($map['TableRows'] as $item) {
                    $model->tableRows[$n++] = null !== $item ? tableRows::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
