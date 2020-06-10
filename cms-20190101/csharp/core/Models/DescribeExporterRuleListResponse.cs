// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeExporterRuleListResponse : TeaModel {
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
        public int? PageNumber { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Datapoints")]
        [Validation(Required=true)]
        public DescribeExporterRuleListResponseDatapoints Datapoints { get; set; }
        public class DescribeExporterRuleListResponseDatapoints : TeaModel {
            [NameInMap("Datapoint")]
            [Validation(Required=true)]
            public List<DescribeExporterRuleListResponseDatapointsDatapoint> Datapoint { get; set; }
            public class DescribeExporterRuleListResponseDatapointsDatapoint : TeaModel {
                    public string RuleName { get; set; }
                    public string Namespace { get; set; }
                    public string MetricName { get; set; }
                    public bool? Enabled { get; set; }
                    public string TargetWindows { get; set; }
                    public string Describe { get; set; }
                    public string Dimension { get; set; }
                    public long CreateTime { get; set; }
                    public DescribeExporterRuleListResponseDatapointsDatapointDstName DstName { get; set; }
                    public class DescribeExporterRuleListResponseDatapointsDatapointDstName : TeaModel {
                        [NameInMap("DstName")]
                        [Validation(Required=true)]
                        public List<string> DstName { get; set; }

                    }
            }
        };

    }

}
