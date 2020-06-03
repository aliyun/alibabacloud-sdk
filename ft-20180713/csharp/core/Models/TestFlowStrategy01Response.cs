// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ft20180713.Models
{
    public class TestFlowStrategy01Response : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("List")]
        [Validation(Required=true)]
        public List<string> List { get; set; }

        [NameInMap("Names")]
        [Validation(Required=true)]
        public List<string> Names { get; set; }

    }

}
