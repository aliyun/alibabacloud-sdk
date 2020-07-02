// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetMetaDBInfoResponse : TeaModel {
        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetMetaDBInfoResponseData Data { get; set; }
        public class GetMetaDBInfoResponseData : TeaModel {
            [NameInMap("AppGuid")]
            [Validation(Required=true)]
            public string AppGuid { get; set; }
            [NameInMap("TenantId")]
            [Validation(Required=true)]
            public long TenantId { get; set; }
            [NameInMap("Endpoint")]
            [Validation(Required=true)]
            public string Endpoint { get; set; }
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public long ProjectId { get; set; }
            [NameInMap("EnvType")]
            [Validation(Required=true)]
            public int? EnvType { get; set; }
            [NameInMap("ProjectName")]
            [Validation(Required=true)]
            public string ProjectName { get; set; }
            [NameInMap("ProjectNameCn")]
            [Validation(Required=true)]
            public string ProjectNameCn { get; set; }
            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public long CreateTime { get; set; }
            [NameInMap("ModifyTime")]
            [Validation(Required=true)]
            public long ModifyTime { get; set; }
            [NameInMap("OwnerId")]
            [Validation(Required=true)]
            public string OwnerId { get; set; }
            [NameInMap("OwnerName")]
            [Validation(Required=true)]
            public string OwnerName { get; set; }
        };

    }

}
