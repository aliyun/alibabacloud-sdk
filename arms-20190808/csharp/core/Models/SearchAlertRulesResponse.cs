// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchAlertRulesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageBean")]
        [Validation(Required=true)]
        public SearchAlertRulesResponsePageBean PageBean { get; set; }
        public class SearchAlertRulesResponsePageBean : TeaModel {
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("AlertRules")]
            [Validation(Required=true)]
            public List<SearchAlertRulesResponsePageBeanAlertRules> AlertRules { get; set; }
            public class SearchAlertRulesResponsePageBeanAlertRules : TeaModel {
                    public string AlertTitle { get; set; }
                    public string AlertLevel { get; set; }
                    public int? AlertType { get; set; }
                    public int? AlertVersion { get; set; }
                    public string Config { get; set; }
                    public string ContactGroupIdList { get; set; }
                    public long CreateTime { get; set; }
                    public long Id { get; set; }
                    public string RegionId { get; set; }
                    public string Status { get; set; }
                    public long TaskId { get; set; }
                    public string TaskStatus { get; set; }
                    public long UpdateTime { get; set; }
                    public string UserId { get; set; }
                    public SearchAlertRulesResponsePageBeanAlertRulesAlarmContext AlarmContext { get; set; }
                    public class SearchAlertRulesResponsePageBeanAlertRulesAlarmContext : TeaModel {
                        [NameInMap("AlarmContentTemplate")]
                        [Validation(Required=true)]
                        public string AlarmContentTemplate { get; set; }

                        [NameInMap("AlarmContentSubTitle")]
                        [Validation(Required=true)]
                        public string AlarmContentSubTitle { get; set; }

                    }
                    public SearchAlertRulesResponsePageBeanAlertRulesAlertRule AlertRule { get; set; }
                    public class SearchAlertRulesResponsePageBeanAlertRulesAlertRule : TeaModel {
                        [NameInMap("Operator")]
                        [Validation(Required=true)]
                        public string Operator { get; set; }

                        [NameInMap("Rules")]
                        [Validation(Required=true)]
                        public List<SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules> Rules { get; set; }
                        public class SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules : TeaModel {
                            [NameInMap("Aggregates")]
                            [Validation(Required=true)]
                            public string Aggregates { get; set; }

                            [NameInMap("Alias")]
                            [Validation(Required=true)]
                            public string Alias { get; set; }

                            [NameInMap("Measure")]
                            [Validation(Required=true)]
                            public string Measure { get; set; }

                            [NameInMap("NValue")]
                            [Validation(Required=true)]
                            public int? NValue { get; set; }

                            [NameInMap("Operator")]
                            [Validation(Required=true)]
                            public string Operator { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public float? Value { get; set; }

                        }

                    }
                    public SearchAlertRulesResponsePageBeanAlertRulesMetricParam MetricParam { get; set; }
                    public class SearchAlertRulesResponsePageBeanAlertRulesMetricParam : TeaModel {
                        [NameInMap("AppGroupId")]
                        [Validation(Required=true)]
                        public string AppGroupId { get; set; }

                        [NameInMap("AppId")]
                        [Validation(Required=true)]
                        public string AppId { get; set; }

                        [NameInMap("Pid")]
                        [Validation(Required=true)]
                        public string Pid { get; set; }

                        [NameInMap("Type")]
                        [Validation(Required=true)]
                        public string Type { get; set; }

                        [NameInMap("Dimensions")]
                        [Validation(Required=true)]
                        public List<SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions> Dimensions { get; set; }
                        public class SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions : TeaModel {
                            [NameInMap("Key")]
                            [Validation(Required=true)]
                            public string Key { get; set; }

                            [NameInMap("Type")]
                            [Validation(Required=true)]
                            public string Type { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
                    public SearchAlertRulesResponsePageBeanAlertRulesNotice Notice { get; set; }
                    public class SearchAlertRulesResponsePageBeanAlertRulesNotice : TeaModel {
                        [NameInMap("EndTime")]
                        [Validation(Required=true)]
                        public long EndTime { get; set; }

                        [NameInMap("NoticeEndTime")]
                        [Validation(Required=true)]
                        public long NoticeEndTime { get; set; }

                        [NameInMap("NoticeStartTime")]
                        [Validation(Required=true)]
                        public long NoticeStartTime { get; set; }

                        [NameInMap("StartTime")]
                        [Validation(Required=true)]
                        public long StartTime { get; set; }

                    }
                    public List<string> AlertWays { get; set; }
            }
        };

    }

}
