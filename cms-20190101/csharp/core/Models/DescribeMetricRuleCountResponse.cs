// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMetricRuleCountResponse : TeaModel {
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

        [NameInMap("MetricRuleCount")]
        [Validation(Required=true)]
        public DescribeMetricRuleCountResponseMetricRuleCount MetricRuleCount { get; set; }
        public class DescribeMetricRuleCountResponseMetricRuleCount : TeaModel {
            [NameInMap("Alarm")]
            [Validation(Required=true)]
            public int? Alarm { get; set; }
            [NameInMap("Disable")]
            [Validation(Required=true)]
            public int? Disable { get; set; }
            [NameInMap("Nodata")]
            [Validation(Required=true)]
            public int? Nodata { get; set; }
            [NameInMap("Ok")]
            [Validation(Required=true)]
            public int? Ok { get; set; }
            [NameInMap("Total")]
            [Validation(Required=true)]
            public int? Total { get; set; }
        };

    }

}
