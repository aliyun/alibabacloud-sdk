// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class DeleteCostUnitResponse : TeaModel {
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
        public DeleteCostUnitResponseData Data { get; set; }
        public class DeleteCostUnitResponseData : TeaModel {
            [NameInMap("OwnerUid")]
            [Validation(Required=true)]
            public long OwnerUid { get; set; }
            [NameInMap("UnitId")]
            [Validation(Required=true)]
            public long UnitId { get; set; }
            [NameInMap("IsSuccess")]
            [Validation(Required=true)]
            public bool? IsSuccess { get; set; }
        };

    }

}
