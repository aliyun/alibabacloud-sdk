// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteMetricRuleTargetsResponse : TeaModel {
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

        [NameInMap("FailIds")]
        [Validation(Required=true)]
        public DeleteMetricRuleTargetsResponseFailIds FailIds { get; set; }
        public class DeleteMetricRuleTargetsResponseFailIds : TeaModel {
            [NameInMap("TargetIds")]
            [Validation(Required=true)]
            public DeleteMetricRuleTargetsResponseFailIdsTargetIds TargetIds { get; set; }
            public class DeleteMetricRuleTargetsResponseFailIdsTargetIds : TeaModel {
                [NameInMap("TargetId")]
                [Validation(Required=true)]
                public List<string> TargetId { get; set; }

            }
        };

    }

}
