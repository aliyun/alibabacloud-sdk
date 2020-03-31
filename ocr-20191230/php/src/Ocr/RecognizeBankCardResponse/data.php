<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBankCardResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $bankName;
    public $cardNumber;
    public $validDate;
    protected $_required = [
        'bankName'   => true,
        'cardNumber' => true,
        'validDate'  => true,
    ];
    protected $_name = [
        'bankName'   => 'BankName',
        'cardNumber' => 'CardNumber',
        'validDate'  => 'ValidDate',
    ];
    protected $_description = [
        'bankName'   => 'bankName',
        'cardNumber' => 'cardNumber',
        'validDate'  => 'validDate',
    ];
}
