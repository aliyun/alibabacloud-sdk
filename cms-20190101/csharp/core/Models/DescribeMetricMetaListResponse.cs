// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMetricMetaListResponse : TeaModel {
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

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public string TotalCount { get; set; }

        [NameInMap("Resources")]
        [Validation(Required=true)]
        public DescribeMetricMetaListResponseResources Resources { get; set; }
        public class DescribeMetricMetaListResponseResources : TeaModel {
            [NameInMap("Resource")]
            [Validation(Required=true)]
            public List<DescribeMetricMetaListResponseResourcesResource> Resource { get; set; }
            public class DescribeMetricMetaListResponseResourcesResource : TeaModel {
                    public string Namespace { get; set; }
                    public string MetricName { get; set; }
                    public string Statistics { get; set; }
                    public string Unit { get; set; }
                    public string Description { get; set; }
                    public string Dimensions { get; set; }
                    public string Periods { get; set; }
                    public string Labels { get; set; }
            }
        };

    }

}
