// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class CreateGroupMetricRulesRequest : TeaModel {
        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public long GroupId { get; set; }

        [NameInMap("GroupMetricRules")]
        [Validation(Required=false)]
        public List<CreateGroupMetricRulesRequestGroupMetricRules> GroupMetricRules { get; set; }
        public class CreateGroupMetricRulesRequestGroupMetricRules : TeaModel {
            [NameInMap("Category")]
            [Validation(Required=true)]
            public string Category { get; set; }

            [NameInMap("RuleName")]
            [Validation(Required=true)]
            public string RuleName { get; set; }

            [NameInMap("RuleId")]
            [Validation(Required=true)]
            public string RuleId { get; set; }

            [NameInMap("Namespace")]
            [Validation(Required=true)]
            public string Namespace { get; set; }

            [NameInMap("MetricName")]
            [Validation(Required=true)]
            public string MetricName { get; set; }

            [NameInMap("Dimensions")]
            [Validation(Required=false)]
            public string Dimensions { get; set; }

            [NameInMap("EffectiveInterval")]
            [Validation(Required=false)]
            public string EffectiveInterval { get; set; }

            [NameInMap("NoEffectiveInterval")]
            [Validation(Required=false)]
            public string NoEffectiveInterval { get; set; }

            [NameInMap("SilenceTime")]
            [Validation(Required=false)]
            public int? SilenceTime { get; set; }

            [NameInMap("Period")]
            [Validation(Required=false)]
            public string Period { get; set; }

            [NameInMap("Interval")]
            [Validation(Required=false)]
            public string Interval { get; set; }

            [NameInMap("Webhook")]
            [Validation(Required=false)]
            public string Webhook { get; set; }

            [NameInMap("EmailSubject")]
            [Validation(Required=false)]
            public string EmailSubject { get; set; }

            [NameInMap("Escalations")]
            [Validation(Required=true)]
            public CreateGroupMetricRulesRequestGroupMetricRulesEscalations Escalations { get; set; }
            public class CreateGroupMetricRulesRequestGroupMetricRulesEscalations : TeaModel {
                [NameInMap("Critical")]
                [Validation(Required=true)]
                public CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical Critical { get; set; }
                public class CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical : TeaModel {
                    [NameInMap("Statistics")]
                    [Validation(Required=false)]
                    public string Statistics { get; set; }

                    [NameInMap("ComparisonOperator")]
                    [Validation(Required=false)]
                    public string ComparisonOperator { get; set; }

                    [NameInMap("Threshold")]
                    [Validation(Required=false)]
                    public string Threshold { get; set; }

                    [NameInMap("Times")]
                    [Validation(Required=false)]
                    public int? Times { get; set; }

                }
                [NameInMap("Warn")]
                [Validation(Required=true)]
                public CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn Warn { get; set; }
                public class CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn : TeaModel {
                    [NameInMap("Statistics")]
                    [Validation(Required=false)]
                    public string Statistics { get; set; }

                    [NameInMap("ComparisonOperator")]
                    [Validation(Required=false)]
                    public string ComparisonOperator { get; set; }

                    [NameInMap("Threshold")]
                    [Validation(Required=false)]
                    public string Threshold { get; set; }

                    [NameInMap("Times")]
                    [Validation(Required=false)]
                    public int? Times { get; set; }

                }
                [NameInMap("Info")]
                [Validation(Required=true)]
                public CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo Info { get; set; }
                public class CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo : TeaModel {
                    [NameInMap("Statistics")]
                    [Validation(Required=false)]
                    public string Statistics { get; set; }

                    [NameInMap("ComparisonOperator")]
                    [Validation(Required=false)]
                    public string ComparisonOperator { get; set; }

                    [NameInMap("Threshold")]
                    [Validation(Required=false)]
                    public string Threshold { get; set; }

                    [NameInMap("Times")]
                    [Validation(Required=false)]
                    public int? Times { get; set; }

                }
            };

        }

    }

}
