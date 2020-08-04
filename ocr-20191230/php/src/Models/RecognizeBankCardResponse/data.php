<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBankCardResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bankName;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $validDate;
    protected $_name = [
        'bankName'   => 'BankName',
        'cardNumber' => 'CardNumber',
        'validDate'  => 'ValidDate',
    ];

    public function validate()
    {
        Model::validateRequired('bankName', $this->bankName, true);
        Model::validateRequired('cardNumber', $this->cardNumber, true);
        Model::validateRequired('validDate', $this->validDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bankName) {
            $res['BankName'] = $this->bankName;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
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
        if (isset($map['BankName'])) {
            $model->bankName = $map['BankName'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }

        return $model;
    }
}
