// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeHostAvailabilityListResponse : TeaModel {
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
        public int? Total { get; set; }

        [NameInMap("TaskList")]
        [Validation(Required=true)]
        public DescribeHostAvailabilityListResponseTaskList TaskList { get; set; }
        public class DescribeHostAvailabilityListResponseTaskList : TeaModel {
            [NameInMap("NodeTaskConfig")]
            [Validation(Required=true)]
            public List<DescribeHostAvailabilityListResponseTaskListNodeTaskConfig> NodeTaskConfig { get; set; }
            public class DescribeHostAvailabilityListResponseTaskListNodeTaskConfig : TeaModel {
                    public long Id { get; set; }
                    public string TaskName { get; set; }
                    public string TaskType { get; set; }
                    public string TaskScope { get; set; }
                    public bool? Disabled { get; set; }
                    public long GroupId { get; set; }
                    public string GroupName { get; set; }
                    public DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption TaskOption { get; set; }
                    public class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption : TeaModel {
                        [NameInMap("HttpURI")]
                        [Validation(Required=true)]
                        public string HttpURI { get; set; }

                        [NameInMap("TelnetOrPingHost")]
                        [Validation(Required=true)]
                        public string TelnetOrPingHost { get; set; }

                        [NameInMap("HttpResponseCharset")]
                        [Validation(Required=true)]
                        public string HttpResponseCharset { get; set; }

                        [NameInMap("HttpKeyword")]
                        [Validation(Required=true)]
                        public string HttpKeyword { get; set; }

                        [NameInMap("HttpMethod")]
                        [Validation(Required=true)]
                        public string HttpMethod { get; set; }

                        [NameInMap("HttpNegative")]
                        [Validation(Required=true)]
                        public bool? HttpNegative { get; set; }

                    }
                    public DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig AlertConfig { get; set; }
                    public class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig : TeaModel {
                        [NameInMap("NotifyType")]
                        [Validation(Required=true)]
                        public int? NotifyType { get; set; }

                        [NameInMap("StartTime")]
                        [Validation(Required=true)]
                        public int? StartTime { get; set; }

                        [NameInMap("EndTime")]
                        [Validation(Required=true)]
                        public int? EndTime { get; set; }

                        [NameInMap("SilenceTime")]
                        [Validation(Required=true)]
                        public int? SilenceTime { get; set; }

                        [NameInMap("WebHook")]
                        [Validation(Required=true)]
                        public string WebHook { get; set; }

                        [NameInMap("EscalationList")]
                        [Validation(Required=true)]
                        public DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList EscalationList { get; set; }
                        public class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList : TeaModel {
                            [NameInMap("escalationList")]
                            [Validation(Required=true)]
                            public List<DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList> EscalationList { get; set; }
                            public class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList : TeaModel {
                                    public string MetricName { get; set; }
                                    public string Aggregate { get; set; }
                                    public string Operator { get; set; }
                                    public string Value { get; set; }
                                    public string Times { get; set; }
                            }
                        };

                    }
                    public DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances Instances { get; set; }
                    public class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances : TeaModel {
                        [NameInMap("Instance")]
                        [Validation(Required=true)]
                        public List<string> Instance { get; set; }

                    }
            }
        };

    }

}
