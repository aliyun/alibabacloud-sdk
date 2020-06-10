// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class ModifyMetricRuleTemplateRequest : TeaModel {
        [NameInMap("TemplateId")]
        [Validation(Required=true)]
        public long TemplateId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("RestVersion")]
        [Validation(Required=true)]
        public long RestVersion { get; set; }

        [NameInMap("AlertTemplates")]
        [Validation(Required=false)]
        public List<ModifyMetricRuleTemplateRequestAlertTemplates> AlertTemplates { get; set; }
        public class ModifyMetricRuleTemplateRequestAlertTemplates : TeaModel {
            [NameInMap("MetricName")]
            [Validation(Required=true)]
            public string MetricName { get; set; }

            [NameInMap("RuleName")]
            [Validation(Required=true)]
            public string RuleName { get; set; }

            [NameInMap("Category")]
            [Validation(Required=true)]
            public string Category { get; set; }

            [NameInMap("Namespace")]
            [Validation(Required=true)]
            public string Namespace { get; set; }

            [NameInMap("Period")]
            [Validation(Required=true)]
            public int? Period { get; set; }

            [NameInMap("Selector")]
            [Validation(Required=true)]
            public string Selector { get; set; }

            [NameInMap("Webhook")]
            [Validation(Required=true)]
            public string Webhook { get; set; }

            [NameInMap("Escalations")]
            [Validation(Required=true)]
            public ModifyMetricRuleTemplateRequestAlertTemplatesEscalations Escalations { get; set; }
            public class ModifyMetricRuleTemplateRequestAlertTemplatesEscalations : TeaModel {
                [NameInMap("Critical")]
                [Validation(Required=true)]
                public ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical Critical { get; set; }
                public class ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical : TeaModel {
                    [NameInMap("Statistics")]
                    [Validation(Required=true)]
                    public string Statistics { get; set; }

                    [NameInMap("ComparisonOperator")]
                    [Validation(Required=true)]
                    public string ComparisonOperator { get; set; }

                    [NameInMap("Threshold")]
                    [Validation(Required=true)]
                    public string Threshold { get; set; }

                    [NameInMap("Times")]
                    [Validation(Required=true)]
                    public int? Times { get; set; }

                }
                [NameInMap("Warn")]
                [Validation(Required=true)]
                public ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn Warn { get; set; }
                public class ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn : TeaModel {
                    [NameInMap("Statistics")]
                    [Validation(Required=true)]
                    public string Statistics { get; set; }

                    [NameInMap("ComparisonOperator")]
                    [Validation(Required=true)]
                    public string ComparisonOperator { get; set; }

                    [NameInMap("Threshold")]
                    [Validation(Required=true)]
                    public string Threshold { get; set; }

                    [NameInMap("Times")]
                    [Validation(Required=true)]
                    public int? Times { get; set; }

                }
                [NameInMap("Info")]
                [Validation(Required=true)]
                public ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo Info { get; set; }
                public class ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo : TeaModel {
                    [NameInMap("Statistics")]
                    [Validation(Required=true)]
                    public string Statistics { get; set; }

                    [NameInMap("ComparisonOperator")]
                    [Validation(Required=true)]
                    public string ComparisonOperator { get; set; }

                    [NameInMap("Threshold")]
                    [Validation(Required=true)]
                    public string Threshold { get; set; }

                    [NameInMap("Times")]
                    [Validation(Required=true)]
                    public int? Times { get; set; }

                }
            };

        }

    }

}
