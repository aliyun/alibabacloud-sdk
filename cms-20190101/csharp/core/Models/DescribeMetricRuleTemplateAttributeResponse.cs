// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMetricRuleTemplateAttributeResponse : TeaModel {
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
        public DescribeMetricRuleTemplateAttributeResponseResource Resource { get; set; }
        public class DescribeMetricRuleTemplateAttributeResponseResource : TeaModel {
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("TemplateId")]
            [Validation(Required=true)]
            public string TemplateId { get; set; }
            [NameInMap("RestVersion")]
            [Validation(Required=true)]
            public string RestVersion { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("AlertTemplates")]
            [Validation(Required=true)]
            public DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates AlertTemplates { get; set; }
            public class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates : TeaModel {
                [NameInMap("AlertTemplate")]
                [Validation(Required=true)]
                public List<DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate> AlertTemplate { get; set; }
                public class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate : TeaModel {
                    [NameInMap("RuleName")]
                    [Validation(Required=true)]
                    public string RuleName { get; set; }

                    [NameInMap("Category")]
                    [Validation(Required=true)]
                    public string Category { get; set; }

                    [NameInMap("Namespace")]
                    [Validation(Required=true)]
                    public string Namespace { get; set; }

                    [NameInMap("MetricName")]
                    [Validation(Required=true)]
                    public string MetricName { get; set; }

                    [NameInMap("Selector")]
                    [Validation(Required=true)]
                    public string Selector { get; set; }

                    [NameInMap("Webhook")]
                    [Validation(Required=true)]
                    public string Webhook { get; set; }

                    [NameInMap("Escalations")]
                    [Validation(Required=true)]
                    public DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations Escalations { get; set; }
                    public class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations : TeaModel {
                        [NameInMap("Info")]
                        [Validation(Required=true)]
                        public DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo Info { get; set; }
                        public class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo : TeaModel {
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
                        public DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn Warn { get; set; }
                        public class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn : TeaModel {
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
                        [NameInMap("Critical")]
                        [Validation(Required=true)]
                        public DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical Critical { get; set; }
                        public class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical : TeaModel {
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
        };

    }

}
