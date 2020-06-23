// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class GetStackResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("StackInfo")]
        [Validation(Required=true)]
        public List<GetStackResponseStackInfo> StackInfo { get; set; }
        public class GetStackResponseStackInfo : TeaModel {
            [NameInMap("StartTime")]
            [Validation(Required=true)]
            public long StartTime { get; set; }

            [NameInMap("Duration")]
            [Validation(Required=true)]
            public long Duration { get; set; }

            [NameInMap("RpcId")]
            [Validation(Required=true)]
            public string RpcId { get; set; }

            [NameInMap("ServiceName")]
            [Validation(Required=true)]
            public string ServiceName { get; set; }

            [NameInMap("Api")]
            [Validation(Required=true)]
            public string Api { get; set; }

            [NameInMap("Exception")]
            [Validation(Required=true)]
            public string Exception { get; set; }

            [NameInMap("Line")]
            [Validation(Required=true)]
            public string Line { get; set; }

            [NameInMap("ExtInfo")]
            [Validation(Required=true)]
            public List<GetStackResponseStackInfoExtInfo> ExtInfo { get; set; }
            public class GetStackResponseStackInfoExtInfo : TeaModel {
                [NameInMap("Type")]
                [Validation(Required=true)]
                public string Type { get; set; }

                [NameInMap("Info")]
                [Validation(Required=true)]
                public string Info { get; set; }

            }

        }

    }

}
