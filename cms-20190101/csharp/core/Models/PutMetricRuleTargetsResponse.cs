// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutMetricRuleTargetsResponse : TeaModel {
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

        [NameInMap("FailData")]
        [Validation(Required=true)]
        public PutMetricRuleTargetsResponseFailData FailData { get; set; }
        public class PutMetricRuleTargetsResponseFailData : TeaModel {
            [NameInMap("Targets")]
            [Validation(Required=true)]
            public PutMetricRuleTargetsResponseFailDataTargets Targets { get; set; }
            public class PutMetricRuleTargetsResponseFailDataTargets : TeaModel {
                [NameInMap("Target")]
                [Validation(Required=true)]
                public List<PutMetricRuleTargetsResponseFailDataTargetsTarget> Target { get; set; }
                public class PutMetricRuleTargetsResponseFailDataTargetsTarget : TeaModel {
                    [NameInMap("Id")]
                    [Validation(Required=true)]
                    public string Id { get; set; }

                    [NameInMap("Arn")]
                    [Validation(Required=true)]
                    public string Arn { get; set; }

                    [NameInMap("Level")]
                    [Validation(Required=true)]
                    public string Level { get; set; }

                }

            }
        };

    }

}
