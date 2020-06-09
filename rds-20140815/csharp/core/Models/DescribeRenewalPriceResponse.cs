// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeRenewalPriceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Rules")]
        [Validation(Required=true)]
        public DescribeRenewalPriceResponseRules Rules { get; set; }
        public class DescribeRenewalPriceResponseRules : TeaModel {
            [NameInMap("Rule")]
            [Validation(Required=true)]
            public List<DescribeRenewalPriceResponseRulesRule> Rule { get; set; }
            public class DescribeRenewalPriceResponseRulesRule : TeaModel {
                    public long RuleId { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
            }
        };

        [NameInMap("PriceInfo")]
        [Validation(Required=true)]
        public DescribeRenewalPriceResponsePriceInfo PriceInfo { get; set; }
        public class DescribeRenewalPriceResponsePriceInfo : TeaModel {
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
            public DescribeRenewalPriceResponsePriceInfoCoupons Coupons { get; set; }
            public class DescribeRenewalPriceResponsePriceInfoCoupons : TeaModel {
                [NameInMap("Coupon")]
                [Validation(Required=true)]
                public List<DescribeRenewalPriceResponsePriceInfoCouponsCoupon> Coupon { get; set; }
                public class DescribeRenewalPriceResponsePriceInfoCouponsCoupon : TeaModel {
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
            public DescribeRenewalPriceResponsePriceInfoActivityInfo ActivityInfo { get; set; }
            public class DescribeRenewalPriceResponsePriceInfoActivityInfo : TeaModel {
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
            public DescribeRenewalPriceResponsePriceInfoRuleIds RuleIds { get; set; }
            public class DescribeRenewalPriceResponsePriceInfoRuleIds : TeaModel {
                [NameInMap("RuleId")]
                [Validation(Required=true)]
                public List<string> RuleId { get; set; }

            }
        };

    }

}
