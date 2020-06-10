// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeSiteMonitorListResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("SiteMonitors")]
        [Validation(Required=true)]
        public DescribeSiteMonitorListResponseSiteMonitors SiteMonitors { get; set; }
        public class DescribeSiteMonitorListResponseSiteMonitors : TeaModel {
            [NameInMap("SiteMonitor")]
            [Validation(Required=true)]
            public List<DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor> SiteMonitor { get; set; }
            public class DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor : TeaModel {
                    public string TaskId { get; set; }
                    public string TaskType { get; set; }
                    public string Address { get; set; }
                    public string TaskState { get; set; }
                    public string CreateTime { get; set; }
                    public string TaskName { get; set; }
                    public string Interval { get; set; }
                    public string UpdateTime { get; set; }
                    public DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson OptionsJson { get; set; }
                    public class DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson : TeaModel {
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
            }
        };

    }

}
