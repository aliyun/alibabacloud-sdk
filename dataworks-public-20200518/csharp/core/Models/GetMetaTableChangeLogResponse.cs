// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetMetaTableChangeLogResponse : TeaModel {
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
        public GetMetaTableChangeLogResponseData Data { get; set; }
        public class GetMetaTableChangeLogResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public long TotalCount { get; set; }
            [NameInMap("DataEntityList")]
            [Validation(Required=true)]
            public List<GetMetaTableChangeLogResponseDataDataEntityList> DataEntityList { get; set; }
            public class GetMetaTableChangeLogResponseDataDataEntityList : TeaModel {
                    public long CreateTime { get; set; }
                    public long ModifiedTime { get; set; }
                    public string ChangeType { get; set; }
                    public string Operator { get; set; }
                    public string ObjectType { get; set; }
                    public string ChangeContent { get; set; }
            }
        };

    }

}
