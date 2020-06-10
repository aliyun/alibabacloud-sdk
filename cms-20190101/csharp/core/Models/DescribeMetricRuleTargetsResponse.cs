// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMetricRuleTargetsResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Targets")]
        [Validation(Required=true)]
        public DescribeMetricRuleTargetsResponseTargets Targets { get; set; }
        public class DescribeMetricRuleTargetsResponseTargets : TeaModel {
            [NameInMap("Target")]
            [Validation(Required=true)]
            public List<DescribeMetricRuleTargetsResponseTargetsTarget> Target { get; set; }
            public class DescribeMetricRuleTargetsResponseTargetsTarget : TeaModel {
                    public string Id { get; set; }
                    public string Arn { get; set; }
                    public string Level { get; set; }
            }
        };

    }

}
