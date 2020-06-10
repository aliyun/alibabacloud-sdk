// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class ApplyMetricRuleTemplateResponse : TeaModel {
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

        [NameInMap("Resource")]
        [Validation(Required=true)]
        public ApplyMetricRuleTemplateResponseResource Resource { get; set; }
        public class ApplyMetricRuleTemplateResponseResource : TeaModel {
            [NameInMap("GroupId")]
            [Validation(Required=true)]
            public long GroupId { get; set; }
            [NameInMap("AlertResults")]
            [Validation(Required=true)]
            public List<ApplyMetricRuleTemplateResponseResourceAlertResults> AlertResults { get; set; }
            public class ApplyMetricRuleTemplateResponseResourceAlertResults : TeaModel {
                    public long GroupId { get; set; }
                    public string RuleId { get; set; }
                    public string Message { get; set; }
                    public string RuleName { get; set; }
                    public string Code { get; set; }
                    public bool? Success { get; set; }
            }
        };

    }

}
