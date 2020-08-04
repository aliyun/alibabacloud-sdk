// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class AttachKeyPairResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public string TotalCount { get; set; }

        [NameInMap("FailCount")]
        [Validation(Required=true)]
        public string FailCount { get; set; }

        [NameInMap("KeyPairName")]
        [Validation(Required=true)]
        public string KeyPairName { get; set; }

        [NameInMap("Results")]
        [Validation(Required=true)]
        public AttachKeyPairResponseResults Results { get; set; }
        public class AttachKeyPairResponseResults : TeaModel {
            [NameInMap("Result")]
            [Validation(Required=true)]
            public List<AttachKeyPairResponseResultsResult> Result { get; set; }
            public class AttachKeyPairResponseResultsResult : TeaModel {
                    public string InstanceId { get; set; }
                    public string Success { get; set; }
                    public string Code { get; set; }
                    public string Message { get; set; }
            }
        };

    }

}
