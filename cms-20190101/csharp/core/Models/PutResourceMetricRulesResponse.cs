// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutResourceMetricRulesResponse : TeaModel {
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

        [NameInMap("FailedListResult")]
        [Validation(Required=true)]
        public PutResourceMetricRulesResponseFailedListResult FailedListResult { get; set; }
        public class PutResourceMetricRulesResponseFailedListResult : TeaModel {
            [NameInMap("Target")]
            [Validation(Required=true)]
            public List<PutResourceMetricRulesResponseFailedListResultTarget> Target { get; set; }
            public class PutResourceMetricRulesResponseFailedListResultTarget : TeaModel {
                    public string RuleId { get; set; }
                    public PutResourceMetricRulesResponseFailedListResultTargetResult Result { get; set; }
                    public class PutResourceMetricRulesResponseFailedListResultTargetResult : TeaModel {
                        [NameInMap("Code")]
                        [Validation(Required=true)]
                        public string Code { get; set; }

                        [NameInMap("Message")]
                        [Validation(Required=true)]
                        public string Message { get; set; }

                        [NameInMap("Success")]
                        [Validation(Required=true)]
                        public bool? Success { get; set; }

                    }
            }
        };

    }

}
