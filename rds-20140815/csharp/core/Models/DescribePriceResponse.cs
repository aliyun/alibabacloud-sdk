// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribePriceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Rules")]
        [Validation(Required=true)]
        public DescribePriceResponseRules Rules { get; set; }
        public class DescribePriceResponseRules : TeaModel {
            [NameInMap("Rule")]
            [Validation(Required=true)]
            public List<DescribePriceResponseRulesRule> Rule { get; set; }
            public class DescribePriceResponseRulesRule : TeaModel {
                    public long RuleId { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
            }
        };

        [NameInMap("PriceInfo")]
        [Validation(Required=true)]
        public DescribePriceResponsePriceInfo PriceInfo { get; set; }
        public class DescribePriceResponsePriceInfo : TeaModel {
            [NameInMap("Currency")]
            [Validation(Required=true)]
            public string Currency { get; set; }
            [NameInMap("OriginalPrice")]
            [Validation(Required=true)]
            public float? OriginalPrice { get; set; }
            [NameInMap("TradePrice")]
            [Validation(Required=true)]
            public float? TradePrice { get; set; }
            [NameInMap("DiscountPrice")]
            [Validation(Required=true)]
            public float? DiscountPrice { get; set; }
            [NameInMap("Coupons")]
            [Validation(Required=true)]
            public DescribePriceResponsePriceInfoCoupons Coupons { get; set; }
            public class DescribePriceResponsePriceInfoCoupons : TeaModel {
                [NameInMap("Coupon")]
                [Validation(Required=true)]
                public List<DescribePriceResponsePriceInfoCouponsCoupon> Coupon { get; set; }
                public class DescribePriceResponsePriceInfoCouponsCoupon : TeaModel {
                    [NameInMap("CouponNo")]
                    [Validation(Required=true)]
                    public string CouponNo { get; set; }

                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("Description")]
                    [Validation(Required=true)]
                    public string Description { get; set; }

                    [NameInMap("IsSelected")]
                    [Validation(Required=true)]
                    public string IsSelected { get; set; }

                }

            }
            [NameInMap("ActivityInfo")]
            [Validation(Required=true)]
            public DescribePriceResponsePriceInfoActivityInfo ActivityInfo { get; set; }
            public class DescribePriceResponsePriceInfoActivityInfo : TeaModel {
                [NameInMap("CheckErrMsg")]
                [Validation(Required=true)]
                public string CheckErrMsg { get; set; }

                [NameInMap("ErrorCode")]
                [Validation(Required=true)]
                public string ErrorCode { get; set; }

                [NameInMap("Success")]
                [Validation(Required=true)]
                public string Success { get; set; }

            }
            [NameInMap("RuleIds")]
            [Validation(Required=true)]
            public DescribePriceResponsePriceInfoRuleIds RuleIds { get; set; }
            public class DescribePriceResponsePriceInfoRuleIds : TeaModel {
                [NameInMap("RuleId")]
                [Validation(Required=true)]
                public List<string> RuleId { get; set; }

            }
        };

    }

}
