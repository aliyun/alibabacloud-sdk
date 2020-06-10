// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeGroupMonitoringAgentProcessResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public string Total { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public string PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public string PageNumber { get; set; }

        [NameInMap("Processes")]
        [Validation(Required=true)]
        public DescribeGroupMonitoringAgentProcessResponseProcesses Processes { get; set; }
        public class DescribeGroupMonitoringAgentProcessResponseProcesses : TeaModel {
            [NameInMap("Process")]
            [Validation(Required=true)]
            public List<DescribeGroupMonitoringAgentProcessResponseProcessesProcess> Process { get; set; }
            public class DescribeGroupMonitoringAgentProcessResponseProcessesProcess : TeaModel {
                    public string Id { get; set; }
                    public string GroupId { get; set; }
                    public string ProcessName { get; set; }
                    public string MatchExpressFilterRelation { get; set; }
                    public DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress MatchExpress { get; set; }
                    public class DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress : TeaModel {
                        [NameInMap("MatchExpress")]
                        [Validation(Required=true)]
                        public List<DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress> MatchExpress { get; set; }
                        public class DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress : TeaModel {
                            [NameInMap("Name")]
                            [Validation(Required=true)]
                            public string Name { get; set; }

                            [NameInMap("Function")]
                            [Validation(Required=true)]
                            public string Function { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
                    public DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig AlertConfig { get; set; }
                    public class DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig : TeaModel {
                        [NameInMap("AlertConfig")]
                        [Validation(Required=true)]
                        public List<DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig> AlertConfig { get; set; }
                        public class DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig : TeaModel {
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
        };

    }

}
