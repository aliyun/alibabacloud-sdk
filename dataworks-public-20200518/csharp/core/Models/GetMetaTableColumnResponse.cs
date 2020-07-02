// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetMetaTableColumnResponse : TeaModel {
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
        public GetMetaTableColumnResponseData Data { get; set; }
        public class GetMetaTableColumnResponseData : TeaModel {
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public long TotalCount { get; set; }
            [NameInMap("PageNum")]
            [Validation(Required=true)]
            public int? PageNum { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("ColumnList")]
            [Validation(Required=true)]
            public List<GetMetaTableColumnResponseDataColumnList> ColumnList { get; set; }
            public class GetMetaTableColumnResponseDataColumnList : TeaModel {
                    public string ColumnName { get; set; }
                    public string ColumnGuid { get; set; }
                    public string Comment { get; set; }
                    public bool? IsPrimaryKey { get; set; }
                    public string ColumnType { get; set; }
                    public bool? IsPartitionColumn { get; set; }
                    public bool? IsForeignKey { get; set; }
                    public string Caption { get; set; }
            }
        };

    }

}
