// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutEventRuleRequest : TeaModel {
        [NameInMap("RuleName")]
        [Validation(Required=true)]
        public string RuleName { get; set; }

        [NameInMap("GroupId")]
        [Validation(Required=false)]
        public string GroupId { get; set; }

        [NameInMap("EventType")]
        [Validation(Required=false)]
        public string EventType { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("State")]
        [Validation(Required=false)]
        public string State { get; set; }

        [NameInMap("EventPattern")]
        [Validation(Required=true)]
        public List<PutEventRuleRequestEventPattern> EventPattern { get; set; }
        public class PutEventRuleRequestEventPattern : TeaModel {
            [NameInMap("Product")]
            [Validation(Required=false)]
            public string Product { get; set; }

            [NameInMap("NameList")]
            [Validation(Required=true)]
            public List<string> NameList { get; set; }

            [NameInMap("StatusList")]
            [Validation(Required=true)]
            public List<string> StatusList { get; set; }

            [NameInMap("LevelList")]
            [Validation(Required=true)]
            public List<string> LevelList { get; set; }

            [NameInMap("EventTypeList")]
            [Validation(Required=true)]
            public List<string> EventTypeList { get; set; }

        }

    }

}
