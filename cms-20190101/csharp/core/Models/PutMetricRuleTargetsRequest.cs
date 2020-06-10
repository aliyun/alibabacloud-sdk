// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutMetricRuleTargetsRequest : TeaModel {
        [NameInMap("RuleId")]
        [Validation(Required=true)]
        public string RuleId { get; set; }

        [NameInMap("Targets")]
        [Validation(Required=true)]
        public List<PutMetricRuleTargetsRequestTargets> Targets { get; set; }
        public class PutMetricRuleTargetsRequestTargets : TeaModel {
            [NameInMap("Id")]
            [Validation(Required=true)]
            public string Id { get; set; }

            [NameInMap("Arn")]
            [Validation(Required=true)]
            public string Arn { get; set; }

            [NameInMap("Level")]
            [Validation(Required=false)]
            public string Level { get; set; }

        }

    }

}
