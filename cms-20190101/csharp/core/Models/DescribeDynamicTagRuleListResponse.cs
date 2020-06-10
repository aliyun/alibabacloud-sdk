// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeDynamicTagRuleListResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public string PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public string PageSize { get; set; }

        [NameInMap("TagGroupList")]
        [Validation(Required=true)]
        public DescribeDynamicTagRuleListResponseTagGroupList TagGroupList { get; set; }
        public class DescribeDynamicTagRuleListResponseTagGroupList : TeaModel {
            [NameInMap("TagGroup")]
            [Validation(Required=true)]
            public List<DescribeDynamicTagRuleListResponseTagGroupListTagGroup> TagGroup { get; set; }
            public class DescribeDynamicTagRuleListResponseTagGroupListTagGroup : TeaModel {
                    public string DynamicTagRuleId { get; set; }
                    public string TagKey { get; set; }
                    public string RegionId { get; set; }
                    public string MatchExpressFilterRelation { get; set; }
                    public string Status { get; set; }
                    public DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress MatchExpress { get; set; }
                    public class DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress : TeaModel {
                        [NameInMap("MatchExpress")]
                        [Validation(Required=true)]
                        public List<DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress> MatchExpress { get; set; }
                        public class DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress : TeaModel {
                            [NameInMap("TagValueMatchFunction")]
                            [Validation(Required=true)]
                            public string TagValueMatchFunction { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
                    public DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList TemplateIdList { get; set; }
                    public class DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList : TeaModel {
                        [NameInMap("TemplateIdList")]
                        [Validation(Required=true)]
                        public List<string> TemplateIdList { get; set; }

                    }
            }
        };

    }

}
