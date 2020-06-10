// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeEventRuleAttributeResponse : TeaModel {
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

        [NameInMap("Result")]
        [Validation(Required=true)]
        public DescribeEventRuleAttributeResponseResult Result { get; set; }
        public class DescribeEventRuleAttributeResponseResult : TeaModel {
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("EventType")]
            [Validation(Required=true)]
            public string EventType { get; set; }
            [NameInMap("GroupId")]
            [Validation(Required=true)]
            public string GroupId { get; set; }
            [NameInMap("State")]
            [Validation(Required=true)]
            public string State { get; set; }
            [NameInMap("EventPattern")]
            [Validation(Required=true)]
            public DescribeEventRuleAttributeResponseResultEventPattern EventPattern { get; set; }
            public class DescribeEventRuleAttributeResponseResultEventPattern : TeaModel {
                [NameInMap("Product")]
                [Validation(Required=true)]
                public string Product { get; set; }

                [NameInMap("NameList")]
                [Validation(Required=true)]
                public DescribeEventRuleAttributeResponseResultEventPatternNameList NameList { get; set; }
                public class DescribeEventRuleAttributeResponseResultEventPatternNameList : TeaModel {
                    [NameInMap("NameList")]
                    [Validation(Required=true)]
                    public List<string> NameList { get; set; }
                };

                [NameInMap("StatusList")]
                [Validation(Required=true)]
                public DescribeEventRuleAttributeResponseResultEventPatternStatusList StatusList { get; set; }
                public class DescribeEventRuleAttributeResponseResultEventPatternStatusList : TeaModel {
                    [NameInMap("StatusList")]
                    [Validation(Required=true)]
                    public List<string> StatusList { get; set; }
                };

                [NameInMap("LevelList")]
                [Validation(Required=true)]
                public DescribeEventRuleAttributeResponseResultEventPatternLevelList LevelList { get; set; }
                public class DescribeEventRuleAttributeResponseResultEventPatternLevelList : TeaModel {
                    [NameInMap("LevelList")]
                    [Validation(Required=true)]
                    public List<string> LevelList { get; set; }
                };

            }
        };

    }

}
