<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVATInvoiceResponse\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    public $invoiceCode;
    public $invoiceNo;
    public $invoiceDate;
    public $antiFakeCode;
    public $payerName;
    public $payerRegisterNo;
    public $payerAddress;
    public $payerBankName;
    public $withoutTaxAmount;
    public $taxAmount;
    public $sumAmount;
    public $invoiceAmount;
    public $payeeName;
    public $payeeRegisterNo;
    public $payeeAddress;
    public $payeeBankName;
    public $payee;
    public $checker;
    public $clerk;
    protected $_required = [
        'invoiceCode'      => true,
        'invoiceNo'        => true,
        'invoiceDate'      => true,
        'antiFakeCode'     => true,
        'payerName'        => true,
        'payerRegisterNo'  => true,
        'payerAddress'     => true,
        'payerBankName'    => true,
        'withoutTaxAmount' => true,
        'taxAmount'        => true,
        'sumAmount'        => true,
        'invoiceAmount'    => true,
        'payeeName'        => true,
        'payeeRegisterNo'  => true,
        'payeeAddress'     => true,
        'payeeBankName'    => true,
        'payee'            => true,
        'checker'          => true,
        'clerk'            => true,
    ];
    protected $_name = [
        'invoiceCode'      => 'InvoiceCode',
        'invoiceNo'        => 'InvoiceNo',
        'invoiceDate'      => 'InvoiceDate',
        'antiFakeCode'     => 'AntiFakeCode',
        'payerName'        => 'PayerName',
        'payerRegisterNo'  => 'PayerRegisterNo',
        'payerAddress'     => 'PayerAddress',
        'payerBankName'    => 'PayerBankName',
        'withoutTaxAmount' => 'WithoutTaxAmount',
        'taxAmount'        => 'TaxAmount',
        'sumAmount'        => 'SumAmount',
        'invoiceAmount'    => 'InvoiceAmount',
        'payeeName'        => 'PayeeName',
        'payeeRegisterNo'  => 'PayeeRegisterNo',
        'payeeAddress'     => 'PayeeAddress',
        'payeeBankName'    => 'PayeeBankName',
        'payee'            => 'Payee',
        'checker'          => 'Checker',
        'clerk'            => 'Clerk',
    ];
    protected $_description = [
        'invoiceCode'      => 'invoiceCode',
        'invoiceNo'        => 'invoiceNo',
        'invoiceDate'      => 'invoiceDate',
        'antiFakeCode'     => 'antiFakeCode',
        'payerName'        => 'payerName',
        'payerRegisterNo'  => 'payerRegisterNo',
        'payerAddress'     => 'payerAddress',
        'payerBankName'    => 'payerBankName',
        'withoutTaxAmount' => 'withoutTaxAmount',
        'taxAmount'        => 'taxAmount',
        'sumAmount'        => 'sumAmount',
        'invoiceAmount'    => 'invoiceAmount',
        'payeeName'        => 'payeeName',
        'payeeRegisterNo'  => 'payeeRegisterNo',
        'payeeAddress'     => 'payeeAddress',
        'payeeBankName'    => 'payeeBankName',
        'payee'            => 'payee',
        'checker'          => 'checker',
        'clerk'            => 'clerk',
    ];
}
