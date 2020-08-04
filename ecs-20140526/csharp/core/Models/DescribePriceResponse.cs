// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribePriceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PriceInfo")]
        [Validation(Required=true)]
        public DescribePriceResponsePriceInfo PriceInfo { get; set; }
        public class DescribePriceResponsePriceInfo : TeaModel {
            [NameInMap("Rules")]
            [Validation(Required=true)]
            public DescribePriceResponsePriceInfoRules Rules { get; set; }
            public class DescribePriceResponsePriceInfoRules : TeaModel {
                [NameInMap("Rule")]
                [Validation(Required=true)]
                public List<DescribePriceResponsePriceInfoRulesRule> Rule { get; set; }
                public class DescribePriceResponsePriceInfoRulesRule : TeaModel {
                    [NameInMap("RuleId")]
                    [Validation(Required=true)]
                    public long RuleId { get; set; }

                    [NameInMap("Description")]
                    [Validation(Required=true)]
                    public string Description { get; set; }

                }

            }
            [NameInMap("Price")]
            [Validation(Required=true)]
            public DescribePriceResponsePriceInfoPrice Price { get; set; }
            public class DescribePriceResponsePriceInfoPrice : TeaModel {
                [NameInMap("OriginalPrice")]
                [Validation(Required=true)]
                public float? OriginalPrice { get; set; }

                [NameInMap("DiscountPrice")]
                [Validation(Required=true)]
                public float? DiscountPrice { get; set; }

                [NameInMap("TradePrice")]
                [Validation(Required=true)]
                public float? TradePrice { get; set; }

                [NameInMap("ReservedInstanceHourPrice")]
                [Validation(Required=true)]
                public float? ReservedInstanceHourPrice { get; set; }

                [NameInMap("Currency")]
                [Validation(Required=true)]
                public string Currency { get; set; }

                [NameInMap("DetailInfos")]
                [Validation(Required=true)]
                public DescribePriceResponsePriceInfoPriceDetailInfos DetailInfos { get; set; }
                public class DescribePriceResponsePriceInfoPriceDetailInfos : TeaModel {
                    [NameInMap("ResourcePriceModel")]
                    [Validation(Required=true)]
                    public List<DescribePriceResponsePriceInfoPriceDetailInfosResourcePriceModel> ResourcePriceModel { get; set; }
                    public class DescribePriceResponsePriceInfoPriceDetailInfosResourcePriceModel : TeaModel {
                            public string Resource { get; set; }
                            public float? OriginalPrice { get; set; }
                            public float? DiscountPrice { get; set; }
                            public float? TradePrice { get; set; }
                            public DescribePriceResponsePriceInfoPriceDetailInfosResourcePriceModelSubRules SubRules { get; set; }
                            public class DescribePriceResponsePriceInfoPriceDetailInfosResourcePriceModelSubRules : TeaModel {
                                [NameInMap("Rule")]
                                [Validation(Required=true)]
                                public List<DescribePriceResponsePriceInfoPriceDetailInfosResourcePriceModelSubRulesRule> Rule { get; set; }
                                public class DescribePriceResponsePriceInfoPriceDetailInfosResourcePriceModelSubRulesRule : TeaModel {
                                    [NameInMap("RuleId")]
                                    [Validation(Required=true)]
                                    public long RuleId { get; set; }

                                    [NameInMap("Description")]
                                    [Validation(Required=true)]
                                    public string Description { get; set; }

                                }

                            }
                    }
                };

            }
        };

    }

}
