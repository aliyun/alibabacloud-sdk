// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListFileVersionsResponse : TeaModel {
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
        public ListFileVersionsResponseData Data { get; set; }
        public class ListFileVersionsResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("FileVersions")]
            [Validation(Required=true)]
            public List<ListFileVersionsResponseDataFileVersions> FileVersions { get; set; }
            public class ListFileVersionsResponseDataFileVersions : TeaModel {
                    public int? FileVersion { get; set; }
                    public string FileContent { get; set; }
                    public long CommitTime { get; set; }
                    public string CommitUser { get; set; }
                    public string FileName { get; set; }
                    public string Status { get; set; }
                    public string ChangeType { get; set; }
                    public bool? IsCurrentProd { get; set; }
                    public long NodeId { get; set; }
                    public string Comment { get; set; }
                    public string NodeContent { get; set; }
                    public string FilePropertyContent { get; set; }
                    public string UseType { get; set; }
            }
        };

    }

}
