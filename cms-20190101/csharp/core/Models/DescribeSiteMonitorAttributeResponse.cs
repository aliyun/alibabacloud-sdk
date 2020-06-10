// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeSiteMonitorAttributeResponse : TeaModel {
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

        [NameInMap("MetricRules")]
        [Validation(Required=true)]
        public DescribeSiteMonitorAttributeResponseMetricRules MetricRules { get; set; }
        public class DescribeSiteMonitorAttributeResponseMetricRules : TeaModel {
            [NameInMap("MetricRule")]
            [Validation(Required=true)]
            public List<DescribeSiteMonitorAttributeResponseMetricRulesMetricRule> MetricRule { get; set; }
            public class DescribeSiteMonitorAttributeResponseMetricRulesMetricRule : TeaModel {
                    public string RuleId { get; set; }
                    public string RuleName { get; set; }
                    public string Namespace { get; set; }
                    public string MetricName { get; set; }
                    public string OkActions { get; set; }
                    public string AlarmActions { get; set; }
                    public string Statistics { get; set; }
                    public string ActionEnable { get; set; }
                    public string Period { get; set; }
                    public string ComparisonOperator { get; set; }
                    public string Threshold { get; set; }
                    public string EvaluationCount { get; set; }
                    public string Level { get; set; }
                    public string Expression { get; set; }
                    public string StateValue { get; set; }
                    public string Dimensions { get; set; }
            }
        };

        [NameInMap("SiteMonitors")]
        [Validation(Required=true)]
        public DescribeSiteMonitorAttributeResponseSiteMonitors SiteMonitors { get; set; }
        public class DescribeSiteMonitorAttributeResponseSiteMonitors : TeaModel {
            [NameInMap("TaskType")]
            [Validation(Required=true)]
            public string TaskType { get; set; }
            [NameInMap("Address")]
            [Validation(Required=true)]
            public string Address { get; set; }
            [NameInMap("TaskState")]
            [Validation(Required=true)]
            public string TaskState { get; set; }
            [NameInMap("TaskName")]
            [Validation(Required=true)]
            public string TaskName { get; set; }
            [NameInMap("Interval")]
            [Validation(Required=true)]
            public string Interval { get; set; }
            [NameInMap("TaskId")]
            [Validation(Required=true)]
            public string TaskId { get; set; }
            [NameInMap("IspCities")]
            [Validation(Required=true)]
            public DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities IspCities { get; set; }
            public class DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities : TeaModel {
                [NameInMap("IspCity")]
                [Validation(Required=true)]
                public List<DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity> IspCity { get; set; }
                public class DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity : TeaModel {
                    [NameInMap("CityName")]
                    [Validation(Required=true)]
                    public string CityName { get; set; }

                    [NameInMap("IspName")]
                    [Validation(Required=true)]
                    public string IspName { get; set; }

                    [NameInMap("City")]
                    [Validation(Required=true)]
                    public string City { get; set; }

                    [NameInMap("Isp")]
                    [Validation(Required=true)]
                    public string Isp { get; set; }

                }

            }
            [NameInMap("OptionJson")]
            [Validation(Required=true)]
            public DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson OptionJson { get; set; }
            public class DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson : TeaModel {
                [NameInMap("dns_type")]
                [Validation(Required=true)]
                public string DnsType { get; set; }

                [NameInMap("dns_server")]
                [Validation(Required=true)]
                public string DnsServer { get; set; }

                [NameInMap("expect_value")]
                [Validation(Required=true)]
                public string ExpectValue { get; set; }

                [NameInMap("http_method")]
                [Validation(Required=true)]
                public string HttpMethod { get; set; }

                [NameInMap("response_content")]
                [Validation(Required=true)]
                public string ResponseContent { get; set; }

                [NameInMap("match_rule")]
                [Validation(Required=true)]
                public int? MatchRule { get; set; }

                [NameInMap("request_content")]
                [Validation(Required=true)]
                public string RequestContent { get; set; }

                [NameInMap("cookie")]
                [Validation(Required=true)]
                public string Cookie { get; set; }

                [NameInMap("header")]
                [Validation(Required=true)]
                public string Header { get; set; }

                [NameInMap("username")]
                [Validation(Required=true)]
                public string Username { get; set; }

                [NameInMap("password")]
                [Validation(Required=true)]
                public string Password { get; set; }

                [NameInMap("time_out")]
                [Validation(Required=true)]
                public long TimeOut { get; set; }

                [NameInMap("ping_num")]
                [Validation(Required=true)]
                public int? PingNum { get; set; }

                [NameInMap("failure_rate")]
                [Validation(Required=true)]
                public float? FailureRate { get; set; }

                [NameInMap("request_format")]
                [Validation(Required=true)]
                public string RequestFormat { get; set; }

                [NameInMap("response_format")]
                [Validation(Required=true)]
                public string ResponseFormat { get; set; }

                [NameInMap("port")]
                [Validation(Required=true)]
                public int? Port { get; set; }

                [NameInMap("authentication")]
                [Validation(Required=true)]
                public int? Authentication { get; set; }

                [NameInMap("traceroute")]
                [Validation(Required=true)]
                public long Traceroute { get; set; }

            }
        };

    }

}
