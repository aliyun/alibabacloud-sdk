// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteEventRuleTargetsRequest : TeaModel {
        [NameInMap("RuleName")]
        [Validation(Required=true)]
        public string RuleName { get; set; }

        [NameInMap("Ids")]
        [Validation(Required=true)]
        public List<string> Ids { get; set; }

    }

}
