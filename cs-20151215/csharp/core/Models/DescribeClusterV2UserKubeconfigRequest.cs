// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeClusterV2UserKubeconfigRequest : TeaModel {
        [NameInMap("query")]
        [Validation(Required=true)]
        public DescribeClusterV2UserKubeconfigQuery Query { get; set; }

        [NameInMap("headers")]
        [Validation(Required=false)]
        public Dictionary<string, string> Headers { get; set; }

    }

}
