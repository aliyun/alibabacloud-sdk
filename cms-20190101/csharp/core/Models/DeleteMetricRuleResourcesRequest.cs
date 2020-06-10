// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteMetricRuleResourcesRequest : TeaModel {
        [NameInMap("RuleId")]
        [Validation(Required=false)]
        public string RuleId { get; set; }

        [NameInMap("Resources")]
        [Validation(Required=true)]
        public string Resources { get; set; }

    }

}
