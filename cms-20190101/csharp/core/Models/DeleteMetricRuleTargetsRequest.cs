// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteMetricRuleTargetsRequest : TeaModel {
        [NameInMap("RuleId")]
        [Validation(Required=true)]
        public string RuleId { get; set; }

        [NameInMap("TargetIds")]
        [Validation(Required=false)]
        public List<string> TargetIds { get; set; }

    }

}
