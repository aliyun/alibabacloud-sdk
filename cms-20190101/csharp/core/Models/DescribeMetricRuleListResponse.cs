// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMetricRuleListResponse : TeaModel {
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

        [NameInMap("Total")]
        [Validation(Required=true)]
        public string Total { get; set; }

        [NameInMap("Alarms")]
        [Validation(Required=true)]
        public DescribeMetricRuleListResponseAlarms Alarms { get; set; }
        public class DescribeMetricRuleListResponseAlarms : TeaModel {
            [NameInMap("Alarm")]
            [Validation(Required=true)]
            public List<DescribeMetricRuleListResponseAlarmsAlarm> Alarm { get; set; }
            public class DescribeMetricRuleListResponseAlarmsAlarm : TeaModel {
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
                    public string GroupId { get; set; }
                    public string GroupName { get; set; }
                    public string Dimensions { get; set; }
                    public string SourceType { get; set; }
                    public DescribeMetricRuleListResponseAlarmsAlarmEscalations Escalations { get; set; }
                    public class DescribeMetricRuleListResponseAlarmsAlarmEscalations : TeaModel {
                        [NameInMap("Info")]
                        [Validation(Required=true)]
                        public DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo Info { get; set; }
                        public class DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo : TeaModel {
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
                        public DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn Warn { get; set; }
                        public class DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn : TeaModel {
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
                        public DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical Critical { get; set; }
                        public class DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical : TeaModel {
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
