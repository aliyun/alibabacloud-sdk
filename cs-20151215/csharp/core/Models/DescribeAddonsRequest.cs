// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeAddonsRequest : TeaModel {
        [NameInMap("query")]
        [Validation(Required=true)]
        public DescribeAddonsQuery Query { get; set; }

        [NameInMap("headers")]
        [Validation(Required=false)]
        public Dictionary<string, string> Headers { get; set; }

    }

}
