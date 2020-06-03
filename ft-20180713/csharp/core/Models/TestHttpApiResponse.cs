// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ft20180713.Models
{
    public class TestHttpApiResponse : TeaModel {
        [NameInMap("Params")]
        [Validation(Required=true)]
        public string Params { get; set; }

        [NameInMap("ServiceRpcSign")]
        [Validation(Required=true)]
        public string ServiceRpcSign { get; set; }

    }

}
