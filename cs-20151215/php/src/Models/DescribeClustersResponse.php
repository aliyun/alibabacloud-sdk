<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersResponseBody;

class DescribeClustersResponse extends Model {
    protected $_name = [
        'headers' => 'headers',
        'body' => 'body',
    ];
    public function validate() {
        Model::validateRequired('headers', $this->headers, true);
        Model::validateRequired('body', $this->body, true);
    }
    public function toMap() {
        $res = [];
        $res['headers'] = $this->headers;
        $res['body'] = [];
        if(null !== $this->body && is_array($this->body)){
            $n = 0;
            foreach($this->body as $item){
                $res['body'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeClustersResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['headers'])){
            $model->headers = $map['headers'];
        }
        if(isset($map['body'])){
            if(!empty($map['body'])){
                $model->body = [];
                $n = 0;
                foreach($map['body'] as $item) {
                    $model->body[$n++] = null !== $item ? DescribeClustersResponseBody::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description headers
     * @var array
     */
    public $headers;

    /**
     * @description body
     * @var array
     */
    public $body;

}
