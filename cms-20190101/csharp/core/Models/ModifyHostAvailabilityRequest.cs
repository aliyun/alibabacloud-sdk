// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class ModifyHostAvailabilityRequest : TeaModel {
        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public long GroupId { get; set; }

        [NameInMap("Id")]
        [Validation(Required=true)]
        public long Id { get; set; }

        [NameInMap("TaskName")]
        [Validation(Required=true)]
        public string TaskName { get; set; }

        [NameInMap("TaskScope")]
        [Validation(Required=false)]
        public string TaskScope { get; set; }

        [NameInMap("TaskOption")]
        [Validation(Required=true)]
        public ModifyHostAvailabilityRequestTaskOption TaskOption { get; set; }
        public class ModifyHostAvailabilityRequestTaskOption : TeaModel {
            [NameInMap("HttpURI")]
            [Validation(Required=false)]
            public string HttpURI { get; set; }
            [NameInMap("TelnetOrPingHost")]
            [Validation(Required=false)]
            public string TelnetOrPingHost { get; set; }
            [NameInMap("HttpResponseCharset")]
            [Validation(Required=false)]
            public string HttpResponseCharset { get; set; }
            [NameInMap("HttpResponseMatchContent")]
            [Validation(Required=false)]
            public string HttpResponseMatchContent { get; set; }
            [NameInMap("HttpMethod")]
            [Validation(Required=false)]
            public string HttpMethod { get; set; }
            [NameInMap("HttpNegative")]
            [Validation(Required=false)]
            public bool? HttpNegative { get; set; }
        };

        [NameInMap("AlertConfig")]
        [Validation(Required=true)]
        public ModifyHostAvailabilityRequestAlertConfig AlertConfig { get; set; }
        public class ModifyHostAvailabilityRequestAlertConfig : TeaModel {
            [NameInMap("NotifyType")]
            [Validation(Required=true)]
            public int? NotifyType { get; set; }
            [NameInMap("StartTime")]
            [Validation(Required=false)]
            public int? StartTime { get; set; }
            [NameInMap("EndTime")]
            [Validation(Required=false)]
            public int? EndTime { get; set; }
            [NameInMap("SilenceTime")]
            [Validation(Required=false)]
            public int? SilenceTime { get; set; }
            [NameInMap("WebHook")]
            [Validation(Required=false)]
            public string WebHook { get; set; }
        };

        [NameInMap("AlertConfigEscalationList")]
        [Validation(Required=true)]
        public List<ModifyHostAvailabilityRequestAlertConfigEscalationList> AlertConfigEscalationList { get; set; }
        public class ModifyHostAvailabilityRequestAlertConfigEscalationList : TeaModel {
            [NameInMap("MetricName")]
            [Validation(Required=true)]
            public string MetricName { get; set; }

            [NameInMap("Aggregate")]
            [Validation(Required=true)]
            public string Aggregate { get; set; }

            [NameInMap("Times")]
            [Validation(Required=true)]
            public int? Times { get; set; }

            [NameInMap("Operator")]
            [Validation(Required=true)]
            public string Operator { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("InstanceList")]
        [Validation(Required=false)]
        public List<string> InstanceList { get; set; }

    }

}
