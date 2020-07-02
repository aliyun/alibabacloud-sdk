// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class SearchMetaTablesResponse : TeaModel {
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
        public SearchMetaTablesResponseData Data { get; set; }
        public class SearchMetaTablesResponseData : TeaModel {
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
            public List<SearchMetaTablesResponseDataDataEntityList> DataEntityList { get; set; }
            public class SearchMetaTablesResponseDataDataEntityList : TeaModel {
                    public string TableName { get; set; }
                    public string TableGuid { get; set; }
                    public string OwnerId { get; set; }
                    public long TenantId { get; set; }
                    public int? EnvType { get; set; }
                    public int? EntityType { get; set; }
                    public long ProjectId { get; set; }
                    public string ProjectName { get; set; }
            }
        };

    }

}
