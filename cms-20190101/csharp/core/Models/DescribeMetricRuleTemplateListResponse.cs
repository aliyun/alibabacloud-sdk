// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMetricRuleTemplateListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public int? Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public long Total { get; set; }

        [NameInMap("Templates")]
        [Validation(Required=true)]
        public DescribeMetricRuleTemplateListResponseTemplates Templates { get; set; }
        public class DescribeMetricRuleTemplateListResponseTemplates : TeaModel {
            [NameInMap("Template")]
            [Validation(Required=true)]
            public List<DescribeMetricRuleTemplateListResponseTemplatesTemplate> Template { get; set; }
            public class DescribeMetricRuleTemplateListResponseTemplatesTemplate : TeaModel {
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public long RestVersion { get; set; }
                    public long TemplateId { get; set; }
                    public long GmtCreate { get; set; }
                    public long GmtModified { get; set; }
                    public DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories ApplyHistories { get; set; }
                    public class DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories : TeaModel {
                        [NameInMap("ApplyHistory")]
                        [Validation(Required=true)]
                        public List<DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory> ApplyHistory { get; set; }
                        public class DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory : TeaModel {
                            [NameInMap("GroupId")]
                            [Validation(Required=true)]
                            public long GroupId { get; set; }

                            [NameInMap("GroupName")]
                            [Validation(Required=true)]
                            public string GroupName { get; set; }

                            [NameInMap("ApplyTime")]
                            [Validation(Required=true)]
                            public long ApplyTime { get; set; }

                        }

                    }
            }
        };

    }

}
