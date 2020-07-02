// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetFileVersionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetFileVersionResponseData Data { get; set; }
        public class GetFileVersionResponseData : TeaModel {
            [NameInMap("FileVersion")]
            [Validation(Required=true)]
            public int? FileVersion { get; set; }
            [NameInMap("FileContent")]
            [Validation(Required=true)]
            public string FileContent { get; set; }
            [NameInMap("FilePropertyContent")]
            [Validation(Required=true)]
            public string FilePropertyContent { get; set; }
            [NameInMap("NodeContent")]
            [Validation(Required=true)]
            public string NodeContent { get; set; }
            [NameInMap("Comment")]
            [Validation(Required=true)]
            public string Comment { get; set; }
            [NameInMap("NodeId")]
            [Validation(Required=true)]
            public long NodeId { get; set; }
            [NameInMap("IsCurrentProd")]
            [Validation(Required=true)]
            public bool? IsCurrentProd { get; set; }
            [NameInMap("ChangeType")]
            [Validation(Required=true)]
            public string ChangeType { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("FileName")]
            [Validation(Required=true)]
            public string FileName { get; set; }
            [NameInMap("CommitUser")]
            [Validation(Required=true)]
            public string CommitUser { get; set; }
            [NameInMap("CommitTime")]
            [Validation(Required=true)]
            public long CommitTime { get; set; }
            [NameInMap("UseType")]
            [Validation(Required=true)]
            public string UseType { get; set; }
        };

    }

}
