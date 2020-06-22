// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class AllocateCostUnitResourceResponse : TeaModel {
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
        public AllocateCostUnitResourceResponseData Data { get; set; }
        public class AllocateCostUnitResourceResponseData : TeaModel {
            [NameInMap("ToUnitUserId")]
            [Validation(Required=true)]
            public long ToUnitUserId { get; set; }
            [NameInMap("ToUnitId")]
            [Validation(Required=true)]
            public long ToUnitId { get; set; }
            [NameInMap("IsSuccess")]
            [Validation(Required=true)]
            public bool? IsSuccess { get; set; }
        };

    }

}
