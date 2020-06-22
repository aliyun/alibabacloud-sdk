// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryMonthlyInstanceConsumptionResponse : TeaModel {
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
        public QueryMonthlyInstanceConsumptionResponseData Data { get; set; }
        public class QueryMonthlyInstanceConsumptionResponseData : TeaModel {
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
            public QueryMonthlyInstanceConsumptionResponseDataItems Items { get; set; }
            public class QueryMonthlyInstanceConsumptionResponseDataItems : TeaModel {
                [NameInMap("Item")]
                [Validation(Required=true)]
                public List<QueryMonthlyInstanceConsumptionResponseDataItemsItem> Item { get; set; }
                public class QueryMonthlyInstanceConsumptionResponseDataItemsItem : TeaModel {
                    [NameInMap("InstanceID")]
                    [Validation(Required=true)]
                    public string InstanceID { get; set; }

                    [NameInMap("ProductCode")]
                    [Validation(Required=true)]
                    public string ProductCode { get; set; }

                    [NameInMap("ProductType")]
                    [Validation(Required=true)]
                    public string ProductType { get; set; }

                    [NameInMap("SubscriptionType")]
                    [Validation(Required=true)]
                    public string SubscriptionType { get; set; }

                    [NameInMap("Tag")]
                    [Validation(Required=true)]
                    public string Tag { get; set; }

                    [NameInMap("ResourceGroup")]
                    [Validation(Required=true)]
                    public string ResourceGroup { get; set; }

                    [NameInMap("PayerAccount")]
                    [Validation(Required=true)]
                    public string PayerAccount { get; set; }

                    [NameInMap("OwnerID")]
                    [Validation(Required=true)]
                    public string OwnerID { get; set; }

                    [NameInMap("Region")]
                    [Validation(Required=true)]
                    public string Region { get; set; }

                    [NameInMap("PretaxGrossAmount")]
                    [Validation(Required=true)]
                    public float? PretaxGrossAmount { get; set; }

                    [NameInMap("DiscountAmount")]
                    [Validation(Required=true)]
                    public float? DiscountAmount { get; set; }

                    [NameInMap("PretaxAmount")]
                    [Validation(Required=true)]
                    public float? PretaxAmount { get; set; }

                    [NameInMap("Currency")]
                    [Validation(Required=true)]
                    public string Currency { get; set; }

                    [NameInMap("PretaxAmountLocal")]
                    [Validation(Required=true)]
                    public float? PretaxAmountLocal { get; set; }

                    [NameInMap("Tax")]
                    [Validation(Required=true)]
                    public float? Tax { get; set; }

                    [NameInMap("AfterTaxAmount")]
                    [Validation(Required=true)]
                    public float? AfterTaxAmount { get; set; }

                    [NameInMap("PaymentCurrency")]
                    [Validation(Required=true)]
                    public string PaymentCurrency { get; set; }

                }

            }
        };

    }

}
