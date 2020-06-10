// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeAlertingMetricRuleResourcesResponse : TeaModel {
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
        public int? Total { get; set; }

        [NameInMap("Resources")]
        [Validation(Required=true)]
        public DescribeAlertingMetricRuleResourcesResponseResources Resources { get; set; }
        public class DescribeAlertingMetricRuleResourcesResponseResources : TeaModel {
            [NameInMap("Resource")]
            [Validation(Required=true)]
            public List<DescribeAlertingMetricRuleResourcesResponseResourcesResource> Resource { get; set; }
            public class DescribeAlertingMetricRuleResourcesResponseResourcesResource : TeaModel {
                    public string RuleId { get; set; }
                    public string RuleName { get; set; }
                    public string GroupId { get; set; }
                    public string Resource { get; set; }
                    public string Enable { get; set; }
                    public string LastAlertTime { get; set; }
                    public string LastModifyTime { get; set; }
                    public string StartTime { get; set; }
                    public string MetricValues { get; set; }
                    public string RetryTimes { get; set; }
                    public string Threshold { get; set; }
            }
        };

    }

}
