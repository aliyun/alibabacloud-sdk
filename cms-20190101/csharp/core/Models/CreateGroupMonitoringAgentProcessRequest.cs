// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class CreateGroupMonitoringAgentProcessRequest : TeaModel {
        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public string GroupId { get; set; }

        [NameInMap("ProcessName")]
        [Validation(Required=false)]
        public string ProcessName { get; set; }

        [NameInMap("MatchExpressFilterRelation")]
        [Validation(Required=false)]
        public string MatchExpressFilterRelation { get; set; }

        [NameInMap("MatchExpress")]
        [Validation(Required=false)]
        public List<CreateGroupMonitoringAgentProcessRequestMatchExpress> MatchExpress { get; set; }
        public class CreateGroupMonitoringAgentProcessRequestMatchExpress : TeaModel {
            [NameInMap("Name")]
            [Validation(Required=false)]
            public string Name { get; set; }

            [NameInMap("Function")]
            [Validation(Required=false)]
            public string Function { get; set; }

            [NameInMap("Value")]
            [Validation(Required=false)]
            public string Value { get; set; }

        }

        [NameInMap("AlertConfig")]
        [Validation(Required=true)]
        public List<CreateGroupMonitoringAgentProcessRequestAlertConfig> AlertConfig { get; set; }
        public class CreateGroupMonitoringAgentProcessRequestAlertConfig : TeaModel {
            [NameInMap("EffectiveInterval")]
            [Validation(Required=true)]
            public string EffectiveInterval { get; set; }

            [NameInMap("NoEffectiveInterval")]
            [Validation(Required=true)]
            public string NoEffectiveInterval { get; set; }

            [NameInMap("SilenceTime")]
            [Validation(Required=true)]
            public string SilenceTime { get; set; }

            [NameInMap("Webhook")]
            [Validation(Required=true)]
            public string Webhook { get; set; }

            [NameInMap("EscalationsLevel")]
            [Validation(Required=true)]
            public string EscalationsLevel { get; set; }

            [NameInMap("ComparisonOperator")]
            [Validation(Required=true)]
            public string ComparisonOperator { get; set; }

            [NameInMap("Statistics")]
            [Validation(Required=true)]
            public string Statistics { get; set; }

            [NameInMap("Threshold")]
            [Validation(Required=true)]
            public string Threshold { get; set; }

            [NameInMap("Times")]
            [Validation(Required=true)]
            public string Times { get; set; }

        }

    }

}
