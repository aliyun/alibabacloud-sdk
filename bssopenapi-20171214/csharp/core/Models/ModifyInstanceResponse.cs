// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class ModifyInstanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ModifyInstanceResponseData Data { get; set; }
        public class ModifyInstanceResponseData : TeaModel {
            [NameInMap("HostId")]
            [Validation(Required=true)]
            public string HostId { get; set; }
            [NameInMap("OrderId")]
            [Validation(Required=true)]
            public string OrderId { get; set; }
        };

    }

}
