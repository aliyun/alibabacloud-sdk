// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutMonitorGroupDynamicRuleRequest : TeaModel {
        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public long GroupId { get; set; }

        [NameInMap("GroupRules")]
        [Validation(Required=true)]
        public List<PutMonitorGroupDynamicRuleRequestGroupRules> GroupRules { get; set; }
        public class PutMonitorGroupDynamicRuleRequestGroupRules : TeaModel {
            [NameInMap("Category")]
            [Validation(Required=true)]
            public string Category { get; set; }

            [NameInMap("FilterRelation")]
            [Validation(Required=true)]
            public string FilterRelation { get; set; }

            [NameInMap("Filters")]
            [Validation(Required=true)]
            public List<PutMonitorGroupDynamicRuleRequestGroupRulesFilters> Filters { get; set; }
            public class PutMonitorGroupDynamicRuleRequestGroupRulesFilters : TeaModel {
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

    }

}
