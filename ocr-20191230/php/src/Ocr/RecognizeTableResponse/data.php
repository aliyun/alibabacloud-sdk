<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTableResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description fileContent
     *
     * @var string
     */
    public $fileContent;

    /**
     * @description tables
     *
     * @var array
     */
    public $tables;
    protected $_name = [
        'fileContent' => 'FileContent',
        'tables'      => 'Tables',
    ];

    public function validate()
    {
        Model::validateRequired('fileContent', $this->fileContent, true);
        Model::validateRequired('tables', $this->tables, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['FileContent'] = $this->fileContent;
        $res['Tables']      = [];
        if (null !== $this->tables && \is_array($this->tables)) {
            $n = 0;
            foreach ($this->tables as $item) {
                $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['FileContent'])) {
            $model->fileContent = $map['FileContent'];
        }
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? RecognizeTableResponse\data\tables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
