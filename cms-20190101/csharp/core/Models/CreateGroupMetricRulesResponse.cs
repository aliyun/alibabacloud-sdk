// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class CreateGroupMetricRulesResponse : TeaModel {
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

        [NameInMap("Resources")]
        [Validation(Required=true)]
        public CreateGroupMetricRulesResponseResources Resources { get; set; }
        public class CreateGroupMetricRulesResponseResources : TeaModel {
            [NameInMap("AlertResult")]
            [Validation(Required=true)]
            public List<CreateGroupMetricRulesResponseResourcesAlertResult> AlertResult { get; set; }
            public class CreateGroupMetricRulesResponseResourcesAlertResult : TeaModel {
                    public string RuleId { get; set; }
                    public string RuleName { get; set; }
                    public string Message { get; set; }
                    public int? Code { get; set; }
                    public bool? Success { get; set; }
            }
        };

    }

}
