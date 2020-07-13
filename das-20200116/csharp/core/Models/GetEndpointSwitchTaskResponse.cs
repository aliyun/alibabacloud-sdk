// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.DAS20200116.Models
{
    public class GetEndpointSwitchTaskResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("Synchro")]
        [Validation(Required=true)]
        public string Synchro { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetEndpointSwitchTaskResponseData Data { get; set; }
        public class GetEndpointSwitchTaskResponseData : TeaModel {
            [NameInMap("AccountId")]
            [Validation(Required=true)]
            public string AccountId { get; set; }
            [NameInMap("DbLinkId")]
            [Validation(Required=true)]
            public long DbLinkId { get; set; }
            [NameInMap("TaskId")]
            [Validation(Required=true)]
            public string TaskId { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("OriUuid")]
            [Validation(Required=true)]
            public string OriUuid { get; set; }
            [NameInMap("Uuid")]
            [Validation(Required=true)]
            public string Uuid { get; set; }
            [NameInMap("ErrMsg")]
            [Validation(Required=true)]
            public string ErrMsg { get; set; }
        };

    }

}
