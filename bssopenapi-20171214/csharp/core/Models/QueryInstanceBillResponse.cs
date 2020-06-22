// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryInstanceBillResponse : TeaModel {
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
        public QueryInstanceBillResponseData Data { get; set; }
        public class QueryInstanceBillResponseData : TeaModel {
            [NameInMap("BillingCycle")]
            [Validation(Required=true)]
            public string BillingCycle { get; set; }
            [NameInMap("AccountID")]
            [Validation(Required=true)]
            public string AccountID { get; set; }
            [NameInMap("AccountName")]
            [Validation(Required=true)]
            public string AccountName { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("Items")]
            [Validation(Required=true)]
            public QueryInstanceBillResponseDataItems Items { get; set; }
            public class QueryInstanceBillResponseDataItems : TeaModel {
                [NameInMap("Item")]
                [Validation(Required=true)]
                public List<QueryInstanceBillResponseDataItemsItem> Item { get; set; }
                public class QueryInstanceBillResponseDataItemsItem : TeaModel {
                    [NameInMap("InstanceID")]
                    [Validation(Required=true)]
                    public string InstanceID { get; set; }

                    [NameInMap("BillingType")]
                    [Validation(Required=true)]
                    public string BillingType { get; set; }

                    [NameInMap("CostUnit")]
                    [Validation(Required=true)]
                    public string CostUnit { get; set; }

                    [NameInMap("ProductCode")]
                    [Validation(Required=true)]
                    public string ProductCode { get; set; }

                    [NameInMap("ProductType")]
                    [Validation(Required=true)]
                    public string ProductType { get; set; }

                    [NameInMap("SubscriptionType")]
                    [Validation(Required=true)]
                    public string SubscriptionType { get; set; }

                    [NameInMap("ProductName")]
                    [Validation(Required=true)]
                    public string ProductName { get; set; }

                    [NameInMap("ProductDetail")]
                    [Validation(Required=true)]
                    public string ProductDetail { get; set; }

                    [NameInMap("OwnerID")]
                    [Validation(Required=true)]
                    public string OwnerID { get; set; }

                    [NameInMap("BillingItem")]
                    [Validation(Required=true)]
                    public string BillingItem { get; set; }

                    [NameInMap("ListPrice")]
                    [Validation(Required=true)]
                    public string ListPrice { get; set; }

                    [NameInMap("ListPriceUnit")]
                    [Validation(Required=true)]
                    public string ListPriceUnit { get; set; }

                    [NameInMap("Usage")]
                    [Validation(Required=true)]
                    public string Usage { get; set; }

                    [NameInMap("UsageUnit")]
                    [Validation(Required=true)]
                    public string UsageUnit { get; set; }

                    [NameInMap("DeductedByResourcePackage")]
                    [Validation(Required=true)]
                    public string DeductedByResourcePackage { get; set; }

                    [NameInMap("PretaxGrossAmount")]
                    [Validation(Required=true)]
                    public float? PretaxGrossAmount { get; set; }

                    [NameInMap("InvoiceDiscount")]
                    [Validation(Required=true)]
                    public float? InvoiceDiscount { get; set; }

                    [NameInMap("DeductedByCoupons")]
                    [Validation(Required=true)]
                    public float? DeductedByCoupons { get; set; }

                    [NameInMap("PretaxAmount")]
                    [Validation(Required=true)]
                    public float? PretaxAmount { get; set; }

                    [NameInMap("DeductedByCashCoupons")]
                    [Validation(Required=true)]
                    public float? DeductedByCashCoupons { get; set; }

                    [NameInMap("DeductedByPrepaidCard")]
                    [Validation(Required=true)]
                    public float? DeductedByPrepaidCard { get; set; }

                    [NameInMap("PaymentAmount")]
                    [Validation(Required=true)]
                    public float? PaymentAmount { get; set; }

                    [NameInMap("OutstandingAmount")]
                    [Validation(Required=true)]
                    public float? OutstandingAmount { get; set; }

                    [NameInMap("Currency")]
                    [Validation(Required=true)]
                    public string Currency { get; set; }

                    [NameInMap("NickName")]
                    [Validation(Required=true)]
                    public string NickName { get; set; }

                    [NameInMap("ResourceGroup")]
                    [Validation(Required=true)]
                    public string ResourceGroup { get; set; }

                    [NameInMap("Tag")]
                    [Validation(Required=true)]
                    public string Tag { get; set; }

                    [NameInMap("InstanceConfig")]
                    [Validation(Required=true)]
                    public string InstanceConfig { get; set; }

                    [NameInMap("InstanceSpec")]
                    [Validation(Required=true)]
                    public string InstanceSpec { get; set; }

                    [NameInMap("InternetIP")]
                    [Validation(Required=true)]
                    public string InternetIP { get; set; }

                    [NameInMap("IntranetIP")]
                    [Validation(Required=true)]
                    public string IntranetIP { get; set; }

                    [NameInMap("Region")]
                    [Validation(Required=true)]
                    public string Region { get; set; }

                    [NameInMap("Zone")]
                    [Validation(Required=true)]
                    public string Zone { get; set; }

                    [NameInMap("Item")]
                    [Validation(Required=true)]
                    public string Item { get; set; }

                    [NameInMap("ServicePeriod")]
                    [Validation(Required=true)]
                    public string ServicePeriod { get; set; }

                    [NameInMap("BillingDate")]
                    [Validation(Required=true)]
                    public string BillingDate { get; set; }

                    [NameInMap("ServicePeriodUnit")]
                    [Validation(Required=true)]
                    public string ServicePeriodUnit { get; set; }

                }

            }
        };

    }

}
