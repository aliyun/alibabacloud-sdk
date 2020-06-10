// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DisableEventRulesRequest : TeaModel {
        [NameInMap("RuleNames")]
        [Validation(Required=true)]
        public List<string> RuleNames { get; set; }

    }

}
