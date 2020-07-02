// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetMetaTableBasicInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetMetaTableBasicInfoResponseData Data { get; set; }
        public class GetMetaTableBasicInfoResponseData : TeaModel {
            [NameInMap("TableName")]
            [Validation(Required=true)]
            public string TableName { get; set; }
            [NameInMap("TableGuid")]
            [Validation(Required=true)]
            public string TableGuid { get; set; }
            [NameInMap("OwnerId")]
            [Validation(Required=true)]
            public string OwnerId { get; set; }
            [NameInMap("TenantId")]
            [Validation(Required=true)]
            public long TenantId { get; set; }
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public long ProjectId { get; set; }
            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public long CreateTime { get; set; }
            [NameInMap("LastModifyTime")]
            [Validation(Required=true)]
            public long LastModifyTime { get; set; }
            [NameInMap("LifeCycle")]
            [Validation(Required=true)]
            public int? LifeCycle { get; set; }
            [NameInMap("IsVisible")]
            [Validation(Required=true)]
            public int? IsVisible { get; set; }
            [NameInMap("LastDdlTime")]
            [Validation(Required=true)]
            public long LastDdlTime { get; set; }
            [NameInMap("LastAccessTime")]
            [Validation(Required=true)]
            public long LastAccessTime { get; set; }
            [NameInMap("EnvType")]
            [Validation(Required=true)]
            public int? EnvType { get; set; }
            [NameInMap("DataSize")]
            [Validation(Required=true)]
            public long DataSize { get; set; }
            [NameInMap("Comment")]
            [Validation(Required=true)]
            public string Comment { get; set; }
            [NameInMap("ProjectName")]
            [Validation(Required=true)]
            public string ProjectName { get; set; }
        };

    }

}
