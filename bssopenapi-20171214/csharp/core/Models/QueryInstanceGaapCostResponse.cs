// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryInstanceGaapCostResponse : TeaModel {
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
        public QueryInstanceGaapCostResponseData Data { get; set; }
        public class QueryInstanceGaapCostResponseData : TeaModel {
            [NameInMap("HostId")]
            [Validation(Required=true)]
            public string HostId { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("Modules")]
            [Validation(Required=true)]
            public QueryInstanceGaapCostResponseDataModules Modules { get; set; }
            public class QueryInstanceGaapCostResponseDataModules : TeaModel {
                [NameInMap("Module")]
                [Validation(Required=true)]
                public List<QueryInstanceGaapCostResponseDataModulesModule> Module { get; set; }
                public class QueryInstanceGaapCostResponseDataModulesModule : TeaModel {
                    [NameInMap("BillingCycle")]
                    [Validation(Required=true)]
                    public string BillingCycle { get; set; }

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

                    [NameInMap("AccountingUnit")]
                    [Validation(Required=true)]
                    public string AccountingUnit { get; set; }

                    [NameInMap("PayerAccount")]
                    [Validation(Required=true)]
                    public string PayerAccount { get; set; }

                    [NameInMap("OwnerID")]
                    [Validation(Required=true)]
                    public string OwnerID { get; set; }

                    [NameInMap("Region")]
                    [Validation(Required=true)]
                    public string Region { get; set; }

                    [NameInMap("Currency")]
                    [Validation(Required=true)]
                    public string Currency { get; set; }

                    [NameInMap("PaymentCurrency")]
                    [Validation(Required=true)]
                    public string PaymentCurrency { get; set; }

                    [NameInMap("OrderType")]
                    [Validation(Required=true)]
                    public string OrderType { get; set; }

                    [NameInMap("PayTime")]
                    [Validation(Required=true)]
                    public string PayTime { get; set; }

                    [NameInMap("PretaxGrossAmount")]
                    [Validation(Required=true)]
                    public string PretaxGrossAmount { get; set; }

                    [NameInMap("PricingDiscount")]
                    [Validation(Required=true)]
                    public string PricingDiscount { get; set; }

                    [NameInMap("DeductedByCoupons")]
                    [Validation(Required=true)]
                    public string DeductedByCoupons { get; set; }

                    [NameInMap("PretaxAmount")]
                    [Validation(Required=true)]
                    public string PretaxAmount { get; set; }

                    [NameInMap("PretaxAmountLocal")]
                    [Validation(Required=true)]
                    public string PretaxAmountLocal { get; set; }

                    [NameInMap("DeductedByCashCoupons")]
                    [Validation(Required=true)]
                    public string DeductedByCashCoupons { get; set; }

                    [NameInMap("DeductedByPrepaidCard")]
                    [Validation(Required=true)]
                    public string DeductedByPrepaidCard { get; set; }

                    [NameInMap("PaymentAmount")]
                    [Validation(Required=true)]
                    public string PaymentAmount { get; set; }

                    [NameInMap("GaapPretaxGrossAmount")]
                    [Validation(Required=true)]
                    public string GaapPretaxGrossAmount { get; set; }

                    [NameInMap("GaapPricingDiscount")]
                    [Validation(Required=true)]
                    public string GaapPricingDiscount { get; set; }

                    [NameInMap("GaapDeductedByCoupons")]
                    [Validation(Required=true)]
                    public string GaapDeductedByCoupons { get; set; }

                    [NameInMap("GaapPretaxAmount")]
                    [Validation(Required=true)]
                    public string GaapPretaxAmount { get; set; }

                    [NameInMap("GaapPretaxAmountLocal")]
                    [Validation(Required=true)]
                    public string GaapPretaxAmountLocal { get; set; }

                    [NameInMap("GaapDeductedByCashCoupons")]
                    [Validation(Required=true)]
                    public string GaapDeductedByCashCoupons { get; set; }

                    [NameInMap("GaapDeductedByPrepaidCard")]
                    [Validation(Required=true)]
                    public string GaapDeductedByPrepaidCard { get; set; }

                    [NameInMap("GaapPaymentAmount")]
                    [Validation(Required=true)]
                    public string GaapPaymentAmount { get; set; }

                    [NameInMap("MonthGaapPretaxGrossAmount")]
                    [Validation(Required=true)]
                    public string MonthGaapPretaxGrossAmount { get; set; }

                    [NameInMap("MonthGaapPricingDiscount")]
                    [Validation(Required=true)]
                    public string MonthGaapPricingDiscount { get; set; }

                    [NameInMap("MonthGaapDeductedByCoupons")]
                    [Validation(Required=true)]
                    public string MonthGaapDeductedByCoupons { get; set; }

                    [NameInMap("MonthGaapPretaxAmount")]
                    [Validation(Required=true)]
                    public string MonthGaapPretaxAmount { get; set; }

                    [NameInMap("MonthGaapPretaxAmountLocal")]
                    [Validation(Required=true)]
                    public string MonthGaapPretaxAmountLocal { get; set; }

                    [NameInMap("MonthGaapDeductedByCashCoupons")]
                    [Validation(Required=true)]
                    public string MonthGaapDeductedByCashCoupons { get; set; }

                    [NameInMap("MonthGaapDeductedByPrepaidCard")]
                    [Validation(Required=true)]
                    public string MonthGaapDeductedByPrepaidCard { get; set; }

                    [NameInMap("MonthGaapPaymentAmount")]
                    [Validation(Required=true)]
                    public string MonthGaapPaymentAmount { get; set; }

                    [NameInMap("UnallocatedPaymentAmount")]
                    [Validation(Required=true)]
                    public string UnallocatedPaymentAmount { get; set; }

                    [NameInMap("UsageStartDate")]
                    [Validation(Required=true)]
                    public string UsageStartDate { get; set; }

                    [NameInMap("UsageEndDate")]
                    [Validation(Required=true)]
                    public string UsageEndDate { get; set; }

                    [NameInMap("BillType")]
                    [Validation(Required=true)]
                    public string BillType { get; set; }

                    [NameInMap("OrderId")]
                    [Validation(Required=true)]
                    public string OrderId { get; set; }

                    [NameInMap("SubOrderId")]
                    [Validation(Required=true)]
                    public string SubOrderId { get; set; }

                    [NameInMap("UnallocatedPretaxGrossAmount")]
                    [Validation(Required=true)]
                    public string UnallocatedPretaxGrossAmount { get; set; }

                    [NameInMap("UnallocatedPricingDiscount")]
                    [Validation(Required=true)]
                    public string UnallocatedPricingDiscount { get; set; }

                    [NameInMap("UnallocatedDeductedByCoupons")]
                    [Validation(Required=true)]
                    public string UnallocatedDeductedByCoupons { get; set; }

                    [NameInMap("UnallocatedPretaxAmount")]
                    [Validation(Required=true)]
                    public string UnallocatedPretaxAmount { get; set; }

                    [NameInMap("UnallocatedPretaxAmountLocal")]
                    [Validation(Required=true)]
                    public string UnallocatedPretaxAmountLocal { get; set; }

                    [NameInMap("UnallocatedDeductedByCashCoupons")]
                    [Validation(Required=true)]
                    public string UnallocatedDeductedByCashCoupons { get; set; }

                    [NameInMap("UnallocatedDeductedByPrepaidCard")]
                    [Validation(Required=true)]
                    public string UnallocatedDeductedByPrepaidCard { get; set; }

                }

            }
        };

    }

}
