// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListFilesResponse : TeaModel {
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
        public ListFilesResponseData Data { get; set; }
        public class ListFilesResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("Files")]
            [Validation(Required=true)]
            public List<ListFilesResponseDataFiles> Files { get; set; }
            public class ListFilesResponseDataFiles : TeaModel {
                    public string ConnectionName { get; set; }
                    public long ParentId { get; set; }
                    public bool? IsMaxCompute { get; set; }
                    public long CreateTime { get; set; }
                    public string CreateUser { get; set; }
                    public long BizId { get; set; }
                    public string FileFolderId { get; set; }
                    public string FileName { get; set; }
                    public int? FileType { get; set; }
                    public int? UseType { get; set; }
                    public string FileDescription { get; set; }
                    public string Content { get; set; }
                    public long NodeId { get; set; }
                    public int? CurrentVersion { get; set; }
                    public string Owner { get; set; }
                    public string LastEditUser { get; set; }
                    public long LastEditTime { get; set; }
                    public int? CommitStatus { get; set; }
            }
        };

    }

}
