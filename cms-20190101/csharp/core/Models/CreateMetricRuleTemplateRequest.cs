// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class CreateMetricRuleTemplateRequest : TeaModel {
        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("AlertTemplates")]
        [Validation(Required=false)]
        public List<CreateMetricRuleTemplateRequestAlertTemplates> AlertTemplates { get; set; }
        public class CreateMetricRuleTemplateRequestAlertTemplates : TeaModel {
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
            public CreateMetricRuleTemplateRequestAlertTemplatesEscalations Escalations { get; set; }
            public class CreateMetricRuleTemplateRequestAlertTemplatesEscalations : TeaModel {
                [NameInMap("Critical")]
                [Validation(Required=true)]
                public CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical Critical { get; set; }
                public class CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical : TeaModel {
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
                public CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn Warn { get; set; }
                public class CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn : TeaModel {
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
                public CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo Info { get; set; }
                public class CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo : TeaModel {
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
