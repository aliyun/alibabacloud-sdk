// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeActiveMetricRuleListResponse : TeaModel {
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

        [NameInMap("Datapoints")]
        [Validation(Required=true)]
        public DescribeActiveMetricRuleListResponseDatapoints Datapoints { get; set; }
        public class DescribeActiveMetricRuleListResponseDatapoints : TeaModel {
            [NameInMap("Alarm")]
            [Validation(Required=true)]
            public List<DescribeActiveMetricRuleListResponseDatapointsAlarm> Alarm { get; set; }
            public class DescribeActiveMetricRuleListResponseDatapointsAlarm : TeaModel {
                    public string RuleId { get; set; }
                    public string Namespace { get; set; }
                    public string MetricName { get; set; }
                    public string Period { get; set; }
                    public string Statistics { get; set; }
                    public string ComparisonOperator { get; set; }
                    public string Threshold { get; set; }
                    public string EvaluationCount { get; set; }
                    public string StartTime { get; set; }
                    public string EndTime { get; set; }
                    public string SilenceTime { get; set; }
                    public string Enable { get; set; }
                    public string State { get; set; }
                    public string ContactGroups { get; set; }
                    public string Webhook { get; set; }
                    public string RuleName { get; set; }
            }
        };

        [NameInMap("AlertList")]
        [Validation(Required=true)]
        public DescribeActiveMetricRuleListResponseAlertList AlertList { get; set; }
        public class DescribeActiveMetricRuleListResponseAlertList : TeaModel {
            [NameInMap("Alert")]
            [Validation(Required=true)]
            public List<DescribeActiveMetricRuleListResponseAlertListAlert> Alert { get; set; }
            public class DescribeActiveMetricRuleListResponseAlertListAlert : TeaModel {
                    public string RuleId { get; set; }
                    public string Namespace { get; set; }
                    public string MetricName { get; set; }
                    public string Period { get; set; }
                    public string EffectiveInterval { get; set; }
                    public string NoEffectiveInterval { get; set; }
                    public string SilenceTime { get; set; }
                    public bool? EnableState { get; set; }
                    public string AlertState { get; set; }
                    public string ContactGroups { get; set; }
                    public string Webhook { get; set; }
                    public string MailSubject { get; set; }
                    public string RuleName { get; set; }
                    public string Resources { get; set; }
                    public string Dimensions { get; set; }
                    public DescribeActiveMetricRuleListResponseAlertListAlertEscalations Escalations { get; set; }
                    public class DescribeActiveMetricRuleListResponseAlertListAlertEscalations : TeaModel {
                        [NameInMap("Info")]
                        [Validation(Required=true)]
                        public DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo Info { get; set; }
                        public class DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo : TeaModel {
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
                        };

                        [NameInMap("Warn")]
                        [Validation(Required=true)]
                        public DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn Warn { get; set; }
                        public class DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn : TeaModel {
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
                        };

                        [NameInMap("Critical")]
                        [Validation(Required=true)]
                        public DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical Critical { get; set; }
                        public class DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical : TeaModel {
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
                        };

                    }
            }
        };

    }

}
