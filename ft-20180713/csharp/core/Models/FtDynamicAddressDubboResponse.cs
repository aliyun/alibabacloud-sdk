// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ft20180713.Models
{
    public class FtDynamicAddressDubboResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("StringValue")]
        [Validation(Required=true)]
        public string StringValue { get; set; }

        [NameInMap("IntValue")]
        [Validation(Required=true)]
        public int? IntValue { get; set; }

    }

}
