// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeAlertHistoryListResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public string Total { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AlarmHistoryList")]
        [Validation(Required=true)]
        public DescribeAlertHistoryListResponseAlarmHistoryList AlarmHistoryList { get; set; }
        public class DescribeAlertHistoryListResponseAlarmHistoryList : TeaModel {
            [NameInMap("AlarmHistory")]
            [Validation(Required=true)]
            public List<DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory> AlarmHistory { get; set; }
            public class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory : TeaModel {
                    public string RuleId { get; set; }
                    public string GroupId { get; set; }
                    public string Namespace { get; set; }
                    public string MetricName { get; set; }
                    public string Dimensions { get; set; }
                    public string Expression { get; set; }
                    public int? EvaluationCount { get; set; }
                    public string Value { get; set; }
                    public long AlertTime { get; set; }
                    public long LastTime { get; set; }
                    public string Level { get; set; }
                    public string PreLevel { get; set; }
                    public string RuleName { get; set; }
                    public string State { get; set; }
                    public int? Status { get; set; }
                    public string Webhooks { get; set; }
                    public string InstanceName { get; set; }
                    public DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups ContactGroups { get; set; }
                    public class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups : TeaModel {
                        [NameInMap("ContactGroup")]
                        [Validation(Required=true)]
                        public List<string> ContactGroup { get; set; }

                    }
                    public DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts Contacts { get; set; }
                    public class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts : TeaModel {
                        [NameInMap("Contact")]
                        [Validation(Required=true)]
                        public List<string> Contact { get; set; }

                    }
                    public DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs ContactALIIMs { get; set; }
                    public class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs : TeaModel {
                        [NameInMap("ContactALIIM")]
                        [Validation(Required=true)]
                        public List<string> ContactALIIM { get; set; }

                    }
                    public DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses ContactSmses { get; set; }
                    public class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses : TeaModel {
                        [NameInMap("ContactSms")]
                        [Validation(Required=true)]
                        public List<string> ContactSms { get; set; }

                    }
                    public DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails ContactMails { get; set; }
                    public class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails : TeaModel {
                        [NameInMap("ContactMail")]
                        [Validation(Required=true)]
                        public List<string> ContactMail { get; set; }

                    }
            }
        };

    }

}
