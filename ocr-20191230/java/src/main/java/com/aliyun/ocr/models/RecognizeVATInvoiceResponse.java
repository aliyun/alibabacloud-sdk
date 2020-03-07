// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeVATInvoiceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizeVATInvoiceResponseData data;

    public static RecognizeVATInvoiceResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizeVATInvoiceResponse self = new RecognizeVATInvoiceResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizeVATInvoiceResponseDataContent extends TeaModel {
        @NameInMap("InvoiceCode")
        @Validation(required = true)
        public String invoiceCode;

        @NameInMap("InvoiceNo")
        @Validation(required = true)
        public String invoiceNo;

        @NameInMap("InvoiceDate")
        @Validation(required = true)
        public String invoiceDate;

        @NameInMap("AntiFakeCode")
        @Validation(required = true)
        public String antiFakeCode;

        @NameInMap("PayerName")
        @Validation(required = true)
        public String payerName;

        @NameInMap("PayerRegisterNo")
        @Validation(required = true)
        public String payerRegisterNo;

        @NameInMap("PayerAddress")
        @Validation(required = true)
        public String payerAddress;

        @NameInMap("PayerBankName")
        @Validation(required = true)
        public String payerBankName;

        @NameInMap("WithoutTaxAmount")
        @Validation(required = true)
        public String withoutTaxAmount;

        @NameInMap("TaxAmount")
        @Validation(required = true)
        public String taxAmount;

        @NameInMap("SumAmount")
        @Validation(required = true)
        public String sumAmount;

        @NameInMap("InvoiceAmount")
        @Validation(required = true)
        public String invoiceAmount;

        @NameInMap("PayeeName")
        @Validation(required = true)
        public String payeeName;

        @NameInMap("PayeeRegisterNo")
        @Validation(required = true)
        public String payeeRegisterNo;

        @NameInMap("PayeeAddress")
        @Validation(required = true)
        public String payeeAddress;

        @NameInMap("PayeeBankName")
        @Validation(required = true)
        public String payeeBankName;

        @NameInMap("Payee")
        @Validation(required = true)
        public String payee;

        @NameInMap("Checker")
        @Validation(required = true)
        public String checker;

        @NameInMap("Clerk")
        @Validation(required = true)
        public String clerk;

        public static RecognizeVATInvoiceResponseDataContent build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataContent self = new RecognizeVATInvoiceResponseDataContent();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxInvoiceCodes extends TeaModel {
        @NameInMap("InvoiceCode")
        @Validation(required = true)
        public Double invoiceCode;

        public static RecognizeVATInvoiceResponseDataBoxInvoiceCodes build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxInvoiceCodes self = new RecognizeVATInvoiceResponseDataBoxInvoiceCodes();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxInvoiceNoes extends TeaModel {
        @NameInMap("InvoiceNo")
        @Validation(required = true)
        public Double invoiceNo;

        public static RecognizeVATInvoiceResponseDataBoxInvoiceNoes build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxInvoiceNoes self = new RecognizeVATInvoiceResponseDataBoxInvoiceNoes();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxInvoiceDates extends TeaModel {
        @NameInMap("InvoiceDate")
        @Validation(required = true)
        public Double invoiceDate;

        public static RecognizeVATInvoiceResponseDataBoxInvoiceDates build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxInvoiceDates self = new RecognizeVATInvoiceResponseDataBoxInvoiceDates();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxInvoiceFakeCodes extends TeaModel {
        @NameInMap("InvoiceFakeCode")
        @Validation(required = true)
        public Double invoiceFakeCode;

        public static RecognizeVATInvoiceResponseDataBoxInvoiceFakeCodes build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxInvoiceFakeCodes self = new RecognizeVATInvoiceResponseDataBoxInvoiceFakeCodes();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxPayerNames extends TeaModel {
        @NameInMap("PayerName")
        @Validation(required = true)
        public Double payerName;

        public static RecognizeVATInvoiceResponseDataBoxPayerNames build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxPayerNames self = new RecognizeVATInvoiceResponseDataBoxPayerNames();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxPayerRegisterNoes extends TeaModel {
        @NameInMap("PayerRegisterNo")
        @Validation(required = true)
        public Double payerRegisterNo;

        public static RecognizeVATInvoiceResponseDataBoxPayerRegisterNoes build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxPayerRegisterNoes self = new RecognizeVATInvoiceResponseDataBoxPayerRegisterNoes();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxPayerAddresses extends TeaModel {
        @NameInMap("PayerAddress")
        @Validation(required = true)
        public Double payerAddress;

        public static RecognizeVATInvoiceResponseDataBoxPayerAddresses build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxPayerAddresses self = new RecognizeVATInvoiceResponseDataBoxPayerAddresses();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxPayerBankNames extends TeaModel {
        @NameInMap("PayerBankNames")
        @Validation(required = true)
        public Double payerBankNames;

        public static RecognizeVATInvoiceResponseDataBoxPayerBankNames build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxPayerBankNames self = new RecognizeVATInvoiceResponseDataBoxPayerBankNames();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxWithoutTaxAmounts extends TeaModel {
        @NameInMap("WithoutTaxAmount")
        @Validation(required = true)
        public Double withoutTaxAmount;

        public static RecognizeVATInvoiceResponseDataBoxWithoutTaxAmounts build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxWithoutTaxAmounts self = new RecognizeVATInvoiceResponseDataBoxWithoutTaxAmounts();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxTaxAmounts extends TeaModel {
        @NameInMap("TaxAmount")
        @Validation(required = true)
        public Double taxAmount;

        public static RecognizeVATInvoiceResponseDataBoxTaxAmounts build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxTaxAmounts self = new RecognizeVATInvoiceResponseDataBoxTaxAmounts();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxSumAmounts extends TeaModel {
        @NameInMap("SumAmount")
        @Validation(required = true)
        public Double sumAmount;

        public static RecognizeVATInvoiceResponseDataBoxSumAmounts build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxSumAmounts self = new RecognizeVATInvoiceResponseDataBoxSumAmounts();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxInvoiceAmounts extends TeaModel {
        @NameInMap("InvoiceAmount")
        @Validation(required = true)
        public Double invoiceAmount;

        public static RecognizeVATInvoiceResponseDataBoxInvoiceAmounts build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxInvoiceAmounts self = new RecognizeVATInvoiceResponseDataBoxInvoiceAmounts();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxPayeeNames extends TeaModel {
        @NameInMap("PayeeName")
        @Validation(required = true)
        public Double payeeName;

        public static RecognizeVATInvoiceResponseDataBoxPayeeNames build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxPayeeNames self = new RecognizeVATInvoiceResponseDataBoxPayeeNames();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxPayeeRegisterNoes extends TeaModel {
        @NameInMap("PayeeRegisterNo")
        @Validation(required = true)
        public Double payeeRegisterNo;

        public static RecognizeVATInvoiceResponseDataBoxPayeeRegisterNoes build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxPayeeRegisterNoes self = new RecognizeVATInvoiceResponseDataBoxPayeeRegisterNoes();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxPayeeAddresses extends TeaModel {
        @NameInMap("PayeeAddress")
        @Validation(required = true)
        public Double payeeAddress;

        public static RecognizeVATInvoiceResponseDataBoxPayeeAddresses build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxPayeeAddresses self = new RecognizeVATInvoiceResponseDataBoxPayeeAddresses();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxPayeeBankNames extends TeaModel {
        @NameInMap("PayeeBankName")
        @Validation(required = true)
        public Double payeeBankName;

        public static RecognizeVATInvoiceResponseDataBoxPayeeBankNames build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxPayeeBankNames self = new RecognizeVATInvoiceResponseDataBoxPayeeBankNames();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxPayees extends TeaModel {
        @NameInMap("Payee")
        @Validation(required = true)
        public Double payee;

        public static RecognizeVATInvoiceResponseDataBoxPayees build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxPayees self = new RecognizeVATInvoiceResponseDataBoxPayees();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxCheckers extends TeaModel {
        @NameInMap("Checker")
        @Validation(required = true)
        public Double checker;

        public static RecognizeVATInvoiceResponseDataBoxCheckers build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxCheckers self = new RecognizeVATInvoiceResponseDataBoxCheckers();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBoxClerks extends TeaModel {
        @NameInMap("Clerk")
        @Validation(required = true)
        public Double clerk;

        public static RecognizeVATInvoiceResponseDataBoxClerks build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBoxClerks self = new RecognizeVATInvoiceResponseDataBoxClerks();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseDataBox extends TeaModel {
        @NameInMap("InvoiceCodes")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxInvoiceCodes> invoiceCodes;

        @NameInMap("InvoiceNoes")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxInvoiceNoes> invoiceNoes;

        @NameInMap("InvoiceDates")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxInvoiceDates> invoiceDates;

        @NameInMap("InvoiceFakeCodes")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxInvoiceFakeCodes> invoiceFakeCodes;

        @NameInMap("PayerNames")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxPayerNames> payerNames;

        @NameInMap("PayerRegisterNoes")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxPayerRegisterNoes> payerRegisterNoes;

        @NameInMap("PayerAddresses")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxPayerAddresses> payerAddresses;

        @NameInMap("PayerBankNames")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxPayerBankNames> payerBankNames;

        @NameInMap("WithoutTaxAmounts")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxWithoutTaxAmounts> withoutTaxAmounts;

        @NameInMap("TaxAmounts")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxTaxAmounts> taxAmounts;

        @NameInMap("SumAmounts")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxSumAmounts> sumAmounts;

        @NameInMap("InvoiceAmounts")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxInvoiceAmounts> invoiceAmounts;

        @NameInMap("PayeeNames")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxPayeeNames> payeeNames;

        @NameInMap("PayeeRegisterNoes")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxPayeeRegisterNoes> payeeRegisterNoes;

        @NameInMap("PayeeAddresses")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxPayeeAddresses> payeeAddresses;

        @NameInMap("PayeeBankNames")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxPayeeBankNames> payeeBankNames;

        @NameInMap("Payees")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxPayees> payees;

        @NameInMap("Checkers")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxCheckers> checkers;

        @NameInMap("Clerks")
        @Validation(required = true)
        public java.util.List<RecognizeVATInvoiceResponseDataBoxClerks> clerks;

        public static RecognizeVATInvoiceResponseDataBox build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseDataBox self = new RecognizeVATInvoiceResponseDataBox();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVATInvoiceResponseData extends TeaModel {
        @NameInMap("Content")
        @Validation(required = true)
        public RecognizeVATInvoiceResponseDataContent content;

        @NameInMap("Box")
        @Validation(required = true)
        public RecognizeVATInvoiceResponseDataBox box;

        public static RecognizeVATInvoiceResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVATInvoiceResponseData self = new RecognizeVATInvoiceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
