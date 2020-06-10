<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponse;

use AlibabaCloud\Tea\Model;

class words extends Model
{
    /**
     * @description word
     *
     * @var array
     */
    public $word;
    protected $_name = [
        'word' => 'word',
    ];

    public function validate()
    {
        Model::validateRequired('word', $this->word, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->word) {
            $res['word'] = [];
            if (null !== $this->word) {
                $res['word'] = $this->word;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return words
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['word'])) {
            if (!empty($map['word'])) {
                $model->word = [];
                $model->word = $map['word'];
            }
        }

        return $model;
    }
}
