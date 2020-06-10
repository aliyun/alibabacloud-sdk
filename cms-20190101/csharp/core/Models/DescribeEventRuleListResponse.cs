// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeEventRuleListResponse : TeaModel {
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

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("EventRules")]
        [Validation(Required=true)]
        public DescribeEventRuleListResponseEventRules EventRules { get; set; }
        public class DescribeEventRuleListResponseEventRules : TeaModel {
            [NameInMap("EventRule")]
            [Validation(Required=true)]
            public List<DescribeEventRuleListResponseEventRulesEventRule> EventRule { get; set; }
            public class DescribeEventRuleListResponseEventRulesEventRule : TeaModel {
                    public string Name { get; set; }
                    public string GroupId { get; set; }
                    public string EventType { get; set; }
                    public string State { get; set; }
                    public string Description { get; set; }
                    public DescribeEventRuleListResponseEventRulesEventRuleEventPattern EventPattern { get; set; }
                    public class DescribeEventRuleListResponseEventRulesEventRuleEventPattern : TeaModel {
                        [NameInMap("EventPattern")]
                        [Validation(Required=true)]
                        public List<DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern> EventPattern { get; set; }
                        public class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern : TeaModel {
                            [NameInMap("Product")]
                            [Validation(Required=true)]
                            public string Product { get; set; }

                            [NameInMap("NameList")]
                            [Validation(Required=true)]
                            public DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList NameList { get; set; }
                            public class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList : TeaModel {
                                [NameInMap("NameList")]
                                [Validation(Required=true)]
                                public List<string> NameList { get; set; }
                            };

                            [NameInMap("LevelList")]
                            [Validation(Required=true)]
                            public DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList LevelList { get; set; }
                            public class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList : TeaModel {
                                [NameInMap("LevelList")]
                                [Validation(Required=true)]
                                public List<string> LevelList { get; set; }
                            };

                            [NameInMap("EventTypeList")]
                            [Validation(Required=true)]
                            public DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList EventTypeList { get; set; }
                            public class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList : TeaModel {
                                [NameInMap("EventTypeList")]
                                [Validation(Required=true)]
                                public List<string> EventTypeList { get; set; }
                            };

                        }

                    }
            }
        };

    }

}
