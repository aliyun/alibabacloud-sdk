<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponse\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $invoiceCode;

    /**
     * @var string
     */
    public $invoiceNo;

    /**
     * @var string
     */
    public $invoiceDate;

    /**
     * @var string
     */
    public $antiFakeCode;

    /**
     * @var string
     */
    public $payerName;

    /**
     * @var string
     */
    public $payerRegisterNo;

    /**
     * @var string
     */
    public $payerAddress;

    /**
     * @var string
     */
    public $payerBankName;

    /**
     * @var string
     */
    public $withoutTaxAmount;

    /**
     * @var string
     */
    public $taxAmount;

    /**
     * @var string
     */
    public $sumAmount;

    /**
     * @var string
     */
    public $invoiceAmount;

    /**
     * @var string
     */
    public $payeeName;

    /**
     * @var string
     */
    public $payeeRegisterNo;

    /**
     * @var string
     */
    public $payeeAddress;

    /**
     * @var string
     */
    public $payeeBankName;

    /**
     * @var string
     */
    public $payee;

    /**
     * @var string
     */
    public $checker;

    /**
     * @var string
     */
    public $clerk;
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

    public function validate()
    {
        Model::validateRequired('invoiceCode', $this->invoiceCode, true);
        Model::validateRequired('invoiceNo', $this->invoiceNo, true);
        Model::validateRequired('invoiceDate', $this->invoiceDate, true);
        Model::validateRequired('antiFakeCode', $this->antiFakeCode, true);
        Model::validateRequired('payerName', $this->payerName, true);
        Model::validateRequired('payerRegisterNo', $this->payerRegisterNo, true);
        Model::validateRequired('payerAddress', $this->payerAddress, true);
        Model::validateRequired('payerBankName', $this->payerBankName, true);
        Model::validateRequired('withoutTaxAmount', $this->withoutTaxAmount, true);
        Model::validateRequired('taxAmount', $this->taxAmount, true);
        Model::validateRequired('sumAmount', $this->sumAmount, true);
        Model::validateRequired('invoiceAmount', $this->invoiceAmount, true);
        Model::validateRequired('payeeName', $this->payeeName, true);
        Model::validateRequired('payeeRegisterNo', $this->payeeRegisterNo, true);
        Model::validateRequired('payeeAddress', $this->payeeAddress, true);
        Model::validateRequired('payeeBankName', $this->payeeBankName, true);
        Model::validateRequired('payee', $this->payee, true);
        Model::validateRequired('checker', $this->checker, true);
        Model::validateRequired('clerk', $this->clerk, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invoiceCode) {
            $res['InvoiceCode'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceNo) {
            $res['InvoiceNo'] = $this->invoiceNo;
        }
        if (null !== $this->invoiceDate) {
            $res['InvoiceDate'] = $this->invoiceDate;
        }
        if (null !== $this->antiFakeCode) {
            $res['AntiFakeCode'] = $this->antiFakeCode;
        }
        if (null !== $this->payerName) {
            $res['PayerName'] = $this->payerName;
        }
        if (null !== $this->payerRegisterNo) {
            $res['PayerRegisterNo'] = $this->payerRegisterNo;
        }
        if (null !== $this->payerAddress) {
            $res['PayerAddress'] = $this->payerAddress;
        }
        if (null !== $this->payerBankName) {
            $res['PayerBankName'] = $this->payerBankName;
        }
        if (null !== $this->withoutTaxAmount) {
            $res['WithoutTaxAmount'] = $this->withoutTaxAmount;
        }
        if (null !== $this->taxAmount) {
            $res['TaxAmount'] = $this->taxAmount;
        }
        if (null !== $this->sumAmount) {
            $res['SumAmount'] = $this->sumAmount;
        }
        if (null !== $this->invoiceAmount) {
            $res['InvoiceAmount'] = $this->invoiceAmount;
        }
        if (null !== $this->payeeName) {
            $res['PayeeName'] = $this->payeeName;
        }
        if (null !== $this->payeeRegisterNo) {
            $res['PayeeRegisterNo'] = $this->payeeRegisterNo;
        }
        if (null !== $this->payeeAddress) {
            $res['PayeeAddress'] = $this->payeeAddress;
        }
        if (null !== $this->payeeBankName) {
            $res['PayeeBankName'] = $this->payeeBankName;
        }
        if (null !== $this->payee) {
            $res['Payee'] = $this->payee;
        }
        if (null !== $this->checker) {
            $res['Checker'] = $this->checker;
        }
        if (null !== $this->clerk) {
            $res['Clerk'] = $this->clerk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvoiceCode'])) {
            $model->invoiceCode = $map['InvoiceCode'];
        }
        if (isset($map['InvoiceNo'])) {
            $model->invoiceNo = $map['InvoiceNo'];
        }
        if (isset($map['InvoiceDate'])) {
            $model->invoiceDate = $map['InvoiceDate'];
        }
        if (isset($map['AntiFakeCode'])) {
            $model->antiFakeCode = $map['AntiFakeCode'];
        }
        if (isset($map['PayerName'])) {
            $model->payerName = $map['PayerName'];
        }
        if (isset($map['PayerRegisterNo'])) {
            $model->payerRegisterNo = $map['PayerRegisterNo'];
        }
        if (isset($map['PayerAddress'])) {
            $model->payerAddress = $map['PayerAddress'];
        }
        if (isset($map['PayerBankName'])) {
            $model->payerBankName = $map['PayerBankName'];
        }
        if (isset($map['WithoutTaxAmount'])) {
            $model->withoutTaxAmount = $map['WithoutTaxAmount'];
        }
        if (isset($map['TaxAmount'])) {
            $model->taxAmount = $map['TaxAmount'];
        }
        if (isset($map['SumAmount'])) {
            $model->sumAmount = $map['SumAmount'];
        }
        if (isset($map['InvoiceAmount'])) {
            $model->invoiceAmount = $map['InvoiceAmount'];
        }
        if (isset($map['PayeeName'])) {
            $model->payeeName = $map['PayeeName'];
        }
        if (isset($map['PayeeRegisterNo'])) {
            $model->payeeRegisterNo = $map['PayeeRegisterNo'];
        }
        if (isset($map['PayeeAddress'])) {
            $model->payeeAddress = $map['PayeeAddress'];
        }
        if (isset($map['PayeeBankName'])) {
            $model->payeeBankName = $map['PayeeBankName'];
        }
        if (isset($map['Payee'])) {
            $model->payee = $map['Payee'];
        }
        if (isset($map['Checker'])) {
            $model->checker = $map['Checker'];
        }
        if (isset($map['Clerk'])) {
            $model->clerk = $map['Clerk'];
        }

        return $model;
    }
}
