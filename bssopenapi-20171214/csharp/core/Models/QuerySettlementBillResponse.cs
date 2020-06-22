// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QuerySettlementBillResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public QuerySettlementBillResponseData Data { get; set; }
        public class QuerySettlementBillResponseData : TeaModel {
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("BillingCycle")]
            [Validation(Required=true)]
            public string BillingCycle { get; set; }
            [NameInMap("Items")]
            [Validation(Required=true)]
            public QuerySettlementBillResponseDataItems Items { get; set; }
            public class QuerySettlementBillResponseDataItems : TeaModel {
                [NameInMap("Item")]
                [Validation(Required=true)]
                public List<QuerySettlementBillResponseDataItemsItem> Item { get; set; }
                public class QuerySettlementBillResponseDataItemsItem : TeaModel {
                    [NameInMap("RecordID")]
                    [Validation(Required=true)]
                    public string RecordID { get; set; }

                    [NameInMap("Item")]
                    [Validation(Required=true)]
                    public string Item { get; set; }

                    [NameInMap("PayerAccount")]
                    [Validation(Required=true)]
                    public string PayerAccount { get; set; }

                    [NameInMap("OwnerID")]
                    [Validation(Required=true)]
                    public string OwnerID { get; set; }

                    [NameInMap("CreateTime")]
                    [Validation(Required=true)]
                    public string CreateTime { get; set; }

                    [NameInMap("UsageStartTime")]
                    [Validation(Required=true)]
                    public string UsageStartTime { get; set; }

                    [NameInMap("UsageEndTime")]
                    [Validation(Required=true)]
                    public string UsageEndTime { get; set; }

                    [NameInMap("SuborderID")]
                    [Validation(Required=true)]
                    public string SuborderID { get; set; }

                    [NameInMap("OrderID")]
                    [Validation(Required=true)]
                    public string OrderID { get; set; }

                    [NameInMap("OrderType")]
                    [Validation(Required=true)]
                    public string OrderType { get; set; }

                    [NameInMap("LinkedCustomerOrderID")]
                    [Validation(Required=true)]
                    public string LinkedCustomerOrderID { get; set; }

                    [NameInMap("OriginalOrderID")]
                    [Validation(Required=true)]
                    public string OriginalOrderID { get; set; }

                    [NameInMap("PaymentTime")]
                    [Validation(Required=true)]
                    public string PaymentTime { get; set; }

                    [NameInMap("SolutionID")]
                    [Validation(Required=true)]
                    public string SolutionID { get; set; }

                    [NameInMap("SolutionName")]
                    [Validation(Required=true)]
                    public string SolutionName { get; set; }

                    [NameInMap("BillID")]
                    [Validation(Required=true)]
                    public string BillID { get; set; }

                    [NameInMap("ProductCode")]
                    [Validation(Required=true)]
                    public string ProductCode { get; set; }

                    [NameInMap("ProductType")]
                    [Validation(Required=true)]
                    public string ProductType { get; set; }

                    [NameInMap("SubscriptionType")]
                    [Validation(Required=true)]
                    public string SubscriptionType { get; set; }

                    [NameInMap("Region")]
                    [Validation(Required=true)]
                    public string Region { get; set; }

                    [NameInMap("Config")]
                    [Validation(Required=true)]
                    public string Config { get; set; }

                    [NameInMap("Quantity")]
                    [Validation(Required=true)]
                    public string Quantity { get; set; }

                    [NameInMap("PretaxGrossAmount")]
                    [Validation(Required=true)]
                    public float? PretaxGrossAmount { get; set; }

                    [NameInMap("ChargeDiscount")]
                    [Validation(Required=true)]
                    public float? ChargeDiscount { get; set; }

                    [NameInMap("DeductedByCoupons")]
                    [Validation(Required=true)]
                    public float? DeductedByCoupons { get; set; }

                    [NameInMap("AccountDiscount")]
                    [Validation(Required=true)]
                    public float? AccountDiscount { get; set; }

                    [NameInMap("Promotion")]
                    [Validation(Required=true)]
                    public string Promotion { get; set; }

                    [NameInMap("PretaxAmount")]
                    [Validation(Required=true)]
                    public float? PretaxAmount { get; set; }

                    [NameInMap("Currency")]
                    [Validation(Required=true)]
                    public string Currency { get; set; }

                    [NameInMap("PretaxAmountLocal")]
                    [Validation(Required=true)]
                    public float? PretaxAmountLocal { get; set; }

                    [NameInMap("PreviousBillingCycleBalance")]
                    [Validation(Required=true)]
                    public float? PreviousBillingCycleBalance { get; set; }

                    [NameInMap("Tax")]
                    [Validation(Required=true)]
                    public float? Tax { get; set; }

                    [NameInMap("AfterTaxAmount")]
                    [Validation(Required=true)]
                    public float? AfterTaxAmount { get; set; }

                    [NameInMap("Status")]
                    [Validation(Required=true)]
                    public string Status { get; set; }

                    [NameInMap("ClearedTime")]
                    [Validation(Required=true)]
                    public string ClearedTime { get; set; }

                    [NameInMap("OutstandingAmount")]
                    [Validation(Required=true)]
                    public float? OutstandingAmount { get; set; }

                    [NameInMap("DeductedByCashCoupons")]
                    [Validation(Required=true)]
                    public float? DeductedByCashCoupons { get; set; }

                    [NameInMap("DeductedByPrepaidCard")]
                    [Validation(Required=true)]
                    public float? DeductedByPrepaidCard { get; set; }

                    [NameInMap("MybankPaymentAmount")]
                    [Validation(Required=true)]
                    public float? MybankPaymentAmount { get; set; }

                    [NameInMap("PaymentAmount")]
                    [Validation(Required=true)]
                    public float? PaymentAmount { get; set; }

                    [NameInMap("PaymentCurrency")]
                    [Validation(Required=true)]
                    public string PaymentCurrency { get; set; }

                    [NameInMap("Seller")]
                    [Validation(Required=true)]
                    public string Seller { get; set; }

                    [NameInMap("InvoiceNo")]
                    [Validation(Required=true)]
                    public string InvoiceNo { get; set; }

                }

            }
        };

    }

}
